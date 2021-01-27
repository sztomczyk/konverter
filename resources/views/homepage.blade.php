@extends('layout')

@section('content')
    <div class="top-bar"></div>
    <div class="navbar">
        <div class="container-fluid">
            <div class="logo">
                <img class="logo__img" src="{{ asset('images/logo.svg') }}" alt="Konverter Logo">
            </div>
        </div>
    </div>
    <header>
        <div class="container">
            <img class="bg-pattern bg-pattern--1" src="{{ asset('images/bg-pattern-1.svg') }}" alt="">
            <img class="bg-pattern bg-pattern--2" src="{{ asset('images/bg-pattern-2.svg') }}" alt="">
            <div class="text">
                <h2>Konwertuj nawet we śnie</h2>
                <p>Sprawdź teraz najlepszy konwerter plików graficznych w sieci. Koniec z koszmarami o kolejnym zdjęciu kota, którego nie możesz otworzyć na własnym komputerze. Zamień typ pliku prosto i sprawnie dzięki Konverter, najlepszemu konwerterowi formatów graficznych na świecie.</p>
                <div class="call-to-action">
                    <button>Wgraj swoje pliki</button>
                    <p>maksymalny rozmiar pliku to 5 MB</p>
                </div>
            </div>
            <div class="illustration">
                <img src="{{ asset('images/illustration.svg') }}" alt="">
            </div>
        </div>
    </header>
    <section class="converter">
        <div class="converter__top">
            <div class="heading">
                <h4>Pracujemy nad Twoimi plikami...</h4>
            </div>
            <div class="progress">
                Przekonwertowano <b>2 z 4</b>
            </div>
        </div>
        <div class="converter__box">
            <div class="files">
                <div class="file">
                    <div class="file__summary">
                        <div class="file__preview">
                            <img src="{{ asset('images/pexels-lina-kivaka-1741205.jpg') }}" alt="">
                        </div>
                        <div class="file__details">
                            <div class="file__name">TwojPlik.jpg</div>
                            <div class="file__size">55.74 KB</div>
                            <div class="file__added-at">Dodano o 10:02 07.12.2020</div>
                        </div>
                    </div>
                    <div class="file__action">
                        <div class="file__action--progress">88%</div>
                    </div>
                </div>
                <div class="file">
                    <div class="file__summary">
                        <div class="file__preview file__preview--failed">
                            <img src="{{ asset('images/pexels-lina-kivaka-1741205.jpg') }}" alt="">
                        </div>
                        <div class="file__details">
                            <div class="file__name">TwojPlik.jpg</div>
                            <div class="file__size">55.74 KB</div>
                            <div class="file__added-at">Dodano o 10:02 07.12.2020</div>
                        </div>
                    </div>
                    <div class="file__action" data-tippy-content="Coś poszło nie tak, spróbuj ponownie">
                        <div class="file__action--failed">
                            <span>Niepowodzenie</span>
                            <div class="icon">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.16663 12.5H10.8333V14.1667H9.16663V12.5ZM9.16663 5.83335H10.8333V10.8334H9.16663V5.83335ZM9.99996 1.66669C5.39163 1.66669 1.66663 5.41669 1.66663 10C1.66663 12.2102 2.5446 14.3298 4.1074 15.8926C4.88122 16.6664 5.79988 17.2802 6.81093 17.699C7.82198 18.1178 8.90561 18.3334 9.99996 18.3334C12.2101 18.3334 14.3297 17.4554 15.8925 15.8926C17.4553 14.3298 18.3333 12.2102 18.3333 10C18.3333 8.90567 18.1177 7.82204 17.699 6.81099C17.2802 5.79994 16.6663 4.88129 15.8925 4.10746C15.1187 3.33364 14.2 2.71981 13.189 2.30102C12.1779 1.88224 11.0943 1.66669 9.99996 1.66669ZM9.99996 16.6667C8.23185 16.6667 6.53616 15.9643 5.28591 14.7141C4.03567 13.4638 3.33329 11.7681 3.33329 10C3.33329 8.23191 4.03567 6.53622 5.28591 5.28598C6.53616 4.03573 8.23185 3.33335 9.99996 3.33335C11.7681 3.33335 13.4638 4.03573 14.714 5.28598C15.9642 6.53622 16.6666 8.23191 16.6666 10C16.6666 11.7681 15.9642 13.4638 14.714 14.7141C13.4638 15.9643 11.7681 16.6667 9.99996 16.6667Z" fill="#FF304F"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="file">
                    <div class="file__summary">
                        <div class="file__preview file__preview--success">
                            <img src="{{ asset('images/pexels-lina-kivaka-1741205.jpg') }}" alt="">
                        </div>
                        <div class="file__details">
                            <div class="file__name">TwojPlik.jpg</div>
                            <div class="file__size">55.74 KB</div>
                            <div class="file__added-at">Dodano o 10:02 07.12.2020</div>
                        </div>
                    </div>
                    <div class="file__action" data-tippy-content="Pobierz plik">
                        <div class="file__action--success">
                            <div class="icon">
                                <svg width="10" height="13" viewBox="0 0 10 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0 13H10V11.4706H0V13ZM10 4.58824H7.14286V0H2.85714V4.58824H0L5 9.94118L10 4.58824Z" fill="#17B978"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="converter__actions">
            <button class="cancel-all" data-tippy-content="Anuluj wszystkie operacje">
                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6 1C8.765 1 11 3.235 11 6C11 8.765 8.765 11 6 11C3.235 11 1 8.765 1 6C1 3.235 3.235 1 6 1ZM7.795 3.5L6 5.295L4.205 3.5L3.5 4.205L5.295 6L3.5 7.795L4.205 8.5L6 6.705L7.795 8.5L8.5 7.795L6.705 6L8.5 4.205L7.795 3.5Z" fill="#D2D1D1"/>
                </svg>
                <span>Anuluj wszystkie</span>
            </button>
            <button class="download-all" data-tippy-content="Pobierz wszystkie pliki w formacie .zip">
                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7 8.5H6V7.5H5V6.5H6V7.5H7V8.5ZM7 4.5H6V5.5H7V6.5H6V5.5H5V4.5H6V3.5H5V2.5H6V3.5H7V4.5ZM9.5 1.5H2.5C1.945 1.5 1.5 1.945 1.5 2.5V9.5C1.5 9.76522 1.60536 10.0196 1.79289 10.2071C1.98043 10.3946 2.23478 10.5 2.5 10.5H9.5C9.76522 10.5 10.0196 10.3946 10.2071 10.2071C10.3946 10.0196 10.5 9.76522 10.5 9.5V2.5C10.5 2.23478 10.3946 1.98043 10.2071 1.79289C10.0196 1.60536 9.76522 1.5 9.5 1.5Z" fill="#FFD063"/>
                </svg>
                <span>Pobierz wszystkie</span>
            </button>
        </div>
    </section>
    <footer>
        <span>Wszystkie prawa zastrzeżone przez Konverter &copy; 2021</span>
    </footer>
@endsection
