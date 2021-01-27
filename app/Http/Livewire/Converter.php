<?php

namespace App\Http\Livewire;

use Imagick;
use ZipArchive;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class Converter extends Component
{
    use WithFileUploads;

    public $files = [];

    public $targetFiletype = 'png';

    public $showFiletypePicker = false;

    public $filesDir;

    public $filesSaved = false;

    public function updatedFiles()
    {
        $this->validate([
            'files.*' => 'image|max:5120'
        ]);

        $this->showFiletypePicker = true;
    }
    
    public function save()
    {
        $this->filesDir = Str::random(64);
        
        foreach ($this->files as $file) {
            $file->storeAs('public/' . $this->filesDir, $file->getClientOriginalName());
        }

        foreach ($this->files as $file) {
            $file->convertedFilename = pathinfo('public/' . $this->filesDir . '/' . $file->getClientOriginalName(), PATHINFO_FILENAME) . '.' . $this->targetFiletype;
            $image = new Imagick(asset('storage/' . $this->filesDir . '/' . $file->getClientOriginalName()));
            $image->setImageFormat($this->targetFiletype);
            $image->writeImage('storage/' . $this->filesDir . '/' . $file->convertedFilename);
            Storage::delete('public/' . $this->filesDir . '/' . $file->getClientOriginalName());
        }

        $this->filesSaved = true;
    }

    public function download($index)
    {
        $converted = pathinfo('public/' . $this->filesDir . '/' . $this->files[$index]->getClientOriginalName(), PATHINFO_FILENAME) . '.' . $this->targetFiletype;
        return Storage::download('public/' . $this->filesDir . '/' . $converted);
    }

    public function inputChanged()
    {
        $this->filesSaved = false;
    }

    public function downloadZip()
    {
        $zip = new ZipArchive();
        $fileName = $this->filesDir . '.zip';

        if ($zip->open('storage/' . $fileName, ZipArchive::CREATE) == TRUE) {
            foreach ($this->files as $i => $file) {
                $converted = pathinfo('public/' . $this->filesDir . '/' . $file->getClientOriginalName(), PATHINFO_FILENAME) . '.' . $this->targetFiletype;
                $zip->addFile($converted);
            }
            $zip->close();
        }
    }

    public function render()
    {
        return view('livewire.converter');
    }
}
