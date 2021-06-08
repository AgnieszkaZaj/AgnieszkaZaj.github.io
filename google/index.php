
<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="utf-8">
        <title>Google</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="style2.css">
        <script src="functions.js" defer></script>
        <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
        <link rel="stylesheet" href="autocompleter.css">
        <script src="autocompleter.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-throttle-debounce/1.1/jquery.ba-throttle-debounce.min.js" integrity="sha512-JZSo0h5TONFYmyLMqp8k4oPhuo6yNk9mHM+FY50aBjpypfofqtEWsAgRDQm94ImLCzSaHeqNvYuD9382CEn2zw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    </head>
    <body>
        <div id="app" :class="[ googleSearch.length != 0 && is_Active == 1 ? 'results' : is_Active = 0 ]"> 
            <div class="gora">
                <div class="gora_prawo">
                    <div class="gora_elementy">
                        <a class="element" href="https://mail.google.com">Gmail</a>
                        <a class="element" href="https://www.google.pl/imghp?hl=pl&authuser=0&ogbl">Grafika</a>
                        <div class="menu">
                            <img class="kropki" src="menu.png">
                        </div>
                        <button class="logowanie" type="button" onclick="location.href='https://accounts.google.com'">Zaloguj się</button>
                    </div>
                </div>
            </div>
            <div class="srodek">
                <div class="logo">
                    <img class="google" src="Google.png" alt="Google" width="300">
                </div>

                <div class="wyszukiwarka">
                    <div class="wyszukiwanie">
                            <img class="lupa" src="loop2.png">
                            <v-autocompleter :value="googleSearch" @input="googleSearch = $event" @enter="enter"></v-autocompleter>
                            <img class="klawiatura" src="qwerty.png" title="klawiatura">
                            <span class="kreska"></span>
                            <svg class="x" focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"></path></svg>
                    </div>
                    <div class="przyciski">
                            <button class="przycisk1" type="button" onclick="location.href='https://netflix.com'">Szukaj w Google</button>
                            <button class="przycisk2" type="button" onclick="location.href='https://www.google.com/doodles'">Szczęśliwy traf</button>
                    </div>
                </div>
            </div>

            <div class="dol">
                <div class="pasek1">Polska</div>
                <div class="pasek2">
                    <div class="element1">
                        <a class="napis" href="https://about.google/">O nas</a>
                        <a class="napis" href="https://ads.google.com/intl/pl_pl/home/">Reklamuj się</a>
                        <a class="napis" href="https://www.google.com/services">Dla firm</a>
                        <a class="napis" href="https://www.google.com/search/howsearchworks">Jak działa wyszukiwarka</a>
                    </div>
                    <div class="element2">
                        <div class="neutralosc">
                            <img class="leaf" src="leaf.png">
                            <a class="napis" href="https://sustainability.google/intl/pl/commitments-europe">Neutralność węglowa od 2007 roku</a>                        
                        </div>
                    </div>
                    <div class="element3">
                        <a class="napis" href="https://policies.google.com/privacy">Prywatność</a>
                        <a class="napis" href="https://policies.google.com/terms">Warunki</a>
                        <a class="napis" href="https://www.google.com/preferences">Ustawienia</a>    
                    </div>
                </div>
                <div class="pasek3">
                    <div class="element4">
                        <a class="napis" href="https://policies.google.com/privacy">Pomoc</a>
                        <a class="napis" href="https://policies.google.com/terms">Prześlij opinie</a>
                        <a class="napis" href="https://www.google.com/preferences">Prywatność</a>  
                        <a class="napis" href="https://www.google.com/preferences">Warunki</a>  
                    </div>
                </div>
            </div>
            <div class="opcje">
                <div class="opcja">
                    <svg class="ikonka" xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24'><path fill='rgba(0,0,0,.54)' d='M20.49 19l-5.73-5.73C15.53 12.2 16 10.91 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.41 0 2.7-.47 3.77-1.24L19 20.49 20.49 19zM5 9.5C5 7.01 7.01 5 9.5 5S14 7.01 14 9.5 11.99 14 9.5 14 5 11.99 5 9.5z'/></svg>
                    <a class="ap" href="#">Wszystko</a>
                </div>
                <div class="opcja">
                    <svg focusable="false" width='24' height='24' viewBox="0 0 24 24"><path d="M12 11h6v2h-6v-2zm-6 6h12v-2H6v2zm0-4h4V7H6v6zm16-7.22v12.44c0 1.54-1.34 2.78-3 2.78H5c-1.64 0-3-1.25-3-2.78V5.78C2 4.26 3.36 3 5 3h14c1.64 0 3 1.25 3 2.78zM19.99 12V5.78c0-.42-.46-.78-1-.78H5c-.54 0-1 .36-1 .78v12.44c0 .42.46.78 1 .78h14c.54 0 1-.36 1-.78V12zM12 9h6V7h-6v2"></path></svg>
                    <a class="ap" href="#">Wiadomości</a>
                </div>
                <div class="opcja">
                    <svg focusable="false" width='24' height='24' viewBox="0 0 24 24"><path d="M14 13l4 5H6l4-4 1.79 1.78L14 13zm-6.01-2.99A2 2 0 0 0 8 6a2 2 0 0 0-.01 4.01zM22 5v14a3 3 0 0 1-3 2.99H5c-1.64 0-3-1.36-3-3V5c0-1.64 1.36-3 3-3h14c1.65 0 3 1.36 3 3zm-2.01 0a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1h7v-.01h7a1 1 0 0 0 1-1V5"></path></svg>
                    <a class="ap" href="#">Grafika</a>
                </div>
                <div class="opcja">
                    <svg focusable="false" width='24' height='24' viewBox="0 0 16 16"><path d="M7.503 0c3.09 0 5.502 2.487 5.502 5.427 0 2.337-1.13 3.694-2.26 5.05-.454.528-.906 1.13-1.358 1.734-.452.603-.754 1.508-.98 1.96-.226.452-.377.829-.904.829-.528 0-.678-.377-.905-.83-.226-.451-.527-1.356-.98-1.959-.452-.603-.904-1.206-1.356-1.734C3.132 9.121 2 7.764 2 5.427 2 2.487 4.412 0 7.503 0zm0 1.364c-2.283 0-4.14 1.822-4.14 4.063 0 1.843.86 2.873 1.946 4.177.468.547.942 1.178 1.4 1.79.34.452.596.99.794 1.444.198-.455.453-.992.793-1.445.459-.61.931-1.242 1.413-1.803 1.074-1.29 1.933-2.32 1.933-4.163 0-2.24-1.858-4.063-4.139-4.063zm0 2.734a1.33 1.33 0 11-.001 2.658 1.33 1.33 0 010-2.658"></path></svg>
                    <a class="ap" href="#">Mapy</a>
                </div>
                <div class="opcja">
                    <svg focusable="false" width='24' height='24' viewBox="0 0 24 24"><path d="M10 16.5l6-4.5-6-4.5v9zM5 20h14a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1zm14.5 2H5a3 3 0 0 1-3-3V4.4A2.4 2.4 0 0 1 4.4 2h15.2A2.4 2.4 0 0 1 22 4.4v15.1a2.5 2.5 0 0 1-2.5 2.5"></path></svg>
                    <a class="ap" href="#">Wideo</a>
                </div>
                <div class="opcja">
                    <svg focusable="false" width='24' height='24' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12 8c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"></path></svg>
                    <a class="ap" href="#">Więcej</a>
                </div>
                <div class="opcja">
                    <img src=""/>
                    <a class="ap" href="#">Ustawienia</a>
                </div>
                <div class="opcja">
                    <img src=""/>
                    <a class="ap" href="#">Narzędzia</a>
                </div>
            </div>
            <div class="liczba_wynikow">
                <a>Około 14 700 000 wyników (0,34 s)</a>
            </div>
            <div class="wyniki">
                <div class="wynik">
                    <a class="link">https://support.google.com › websearch › answer</a><br>
                    <a class="tytul">Sprawdzanie wyników wyszukiwania podróży przez Gmaila ...</a><br>
                    <a class="opis">Zobacz wyniki z innego konta Google. Uwaga: aby wykonać te czynności, musisz zalogować się na konto Google. Na telefonie lub tablecie z Androidem otwórz ...</a><br><br><br>
                </div>
                <div class="wynik">
                    <a class="link">https://support.google.com › websearch › answer</a><br>
                    <a class="tytul">Znajdowanie większej liczby wyników wyszukiwania w Google</a><br>
                    <a class="opis">Podczas wyszukiwania w Google możesz znaleźć tysiące, a nawet miliony pasujących stron internetowych. Najtrafniejsze wyniki są wyświetlane jako pierwsze.</a><br><br><br>
                </div>
                <div class="wynik">
                    <a class="link">https://www.pozycjonusz.pl › rodzaje-wynikow-wyszuk... </a><br>
                    <a class="tytul">Rodzaje wyników wyszukiwania Google - ponad 20 ...</a><br>
                    <a class="opis">7) Wewnętrzna wyszukiwarka. Rodzaje wyników wyszukiwania Google wzbogacono jakiś czas temu o funkcję wewnętrznej wyszukiwarki. To rozwiązanie, bez ...</a><br><br><br>
                </div>
                <div class="wynik">
                    <a class="link">https://widoczni.com › blog › jak-wyszukiwac-w-google</a><br>
                    <a class="tytul">14 sposobów wyszukiwania w Google, których 95% z Was nie ...</a><br>
                    <a class="opis">Szukanie frazy – zastosowanie cudzysłowu. Wyniki wyszukiwania w Google konkretnych fraz mogą być bardziej trafne, gdy zastosujemy cudzysłów. Algorytmy ...</a><br><br><br>
                </div>
                <div class="wynik">
                    <a class="link">https://www.empressia.pl › blog › 115-rozne-wyniki-w...</a><br>
                    <a class="tytul">Wyniki wyszukiwań Google – skąd takie rozbieżności?</a><br>
                    <a class="opis">Otóż inaczej będą prezentować się wyniki wyszukiwania po wpisaniu tej samej frazy przez ... Google przechwytuje adres IP i za jego pomocą generuje wyniki, np. po wpisaniu frazy ... Jaki jest koszt pozycjonowania sklepu?</a><br><br><br>
                </div>  
            </div>
        </div>
        <script type="text/javascript">
            var app = new Vue({
              el: "#app",
              data: {
                googleSearch: "",
                cities: window.cities,
                is_Active: 0
              },
              methods: {
                enter(active, search) {
                  console.log("results");
                  this.is_Active = active;
                  this.googleSearch = search;
                }
              }
              findResultsDebounced : Cowboy.debounce(100, function findResultsDebounced() {
                console.log('Fetch: ', this.googleSearch);
				console.log(`http://localhost:8080/search?name=${this.googleSearch}`);
                fetch(`http://localhost:8080/search?name=${this.googleSearch}`)
                    .then(res => res.json())
                    .then(data => {
                        console.log('Data: ', data);
                        this.results = data;
                        app.$refs.bottom.$forceUpdate();
                    });
                 }),
                inputFunc:function(ev){
                this.googleSearch=ev;
                this.findResultsDebounced();
                 }
            }
        });

        </script>  
    </body>
</html>
