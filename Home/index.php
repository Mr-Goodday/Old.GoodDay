<!--  __  __        ____   -->
<!-- |  \/  | _ __ |  _ \  -->
<!-- | |\/| || '__|| | | | -->
<!-- | |  | || | _ | |_| | -->
<!-- |_|  |_||_|(_)|____/  -->
<!DOCTYPE html>
<html lang="pl">
    <head>
        <link rel="stylesheet" href="../Css/styles.css" />
        <link rel="stylesheet" href="styles.css">
        <link rel="stylesheet" href="../Css/mediaQuery.css" />
        <link rel="shortcut icon" href="../Img\logo_22x22--noBg.png">
        <meta charset="UTF-8">
        <meta name="author" content="Mr.D" />
        <meta name="description" content="portfolio" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Mr.GoodDay</title>
    </head>
    <body>
        
        <div id="loader">
            <h1>Loading...</h1>
            <div id="infAnimate">
                <div class="wave"></div>
                <div class="wave"></div>
                <div class="wave"></div>
                <div class="wave"></div>
                <div class="wave"></div>
                <div class="wave"></div>
                <div class="wave"></div>
                <div class="wave"></div>
                <div class="wave"></div>
                <div class="wave"></div>
            </div>
        </div>
        <script>document.head.appendChild(document.createElement("style")).innerHTML = ".wave {height: 96px;}";</script>
        
        <iframe src="../Include/nav.php" onload="this.before((this.contentDocument.body||this.contentDocument).children[0]);this.remove()"></iframe>

        <div id="container">
            <div class="content" id="homePage">
                <img src="../Img/dots.png" alt="">
                <img src="../Img/dots.png" alt="">
                <img src="../Img/dots.png" alt="">
                
                <div class="warper">
                    <h2>Koduję Przyszłość Na Ekranie</h2>
                    <span>Jestem młodym programistą specjalizującym się w tworzeniu stron internetowych. Moje umiejętności obejmują front-end, back-end oraz grafikę komputerową.</span>
                    <a href="" class="submit">Zobacz!</a>
                </div>
            </div>

            <div class="content" id="whatIDoing">
                <h2>Czym sie zajmuje?</h2>
                <div>
                    <div class="card">
                        <ion-icon name="code-slash-outline"></ion-icon>
                        <h3>UI/UX Design</h3>
                    </div>
                    <div class="card">
                        <ion-icon name="construct-outline"></ion-icon>
                        <h3>BackEnd</h3>
                    </div>
                    <div class="card">
                        <ion-icon name="color-palette-outline"></ion-icon>
                        <h3>Grafika Komputerowa</h3>
                    </div>
                    <div class="card">
                        <h3></h3>
                    </div>
                </div>
            </div>
            <div class="content" id="aboutMe">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
                <div id="aboutMe_paper">
                    <img src="../Img/logo_2222x2222--Bg.png" alt="">
                    <div id="aboutMe_textArea">
                        <h2>O mnie</h2>
                        <span>Jako młody programista, rozpocząłem swoją pasję w 2021 roku, i od tego czasu intensywnie rozwijam swoje umiejętności w różnych dziedzinach. Moja specjalizacja skupia się na projektowaniu stron internetowych, a moje zdolności obejmują zarówno front-end, jak i back-end. Mam głęboką wiedzę z zakresu HTML, CSS i JavaScript, co pozwala mi tworzyć strony o doskonałym UX/UI. Dodatkowo, zajmuję się grafiką komputerową, co pozwala mi łączyć funkcjonalność witryny z estetycznym designem. W swoim arsenale mam także podstawy programowania w C++ oraz obsługę pakietu Office.</span>
                    </div>
                </div>
            </div>
            <div class="content" id="newsletter">
                <div id="newsletter_form">
                    <form action="" class="form">
                        <h2>Newsletter</h2>
                        <span>Zostaw po sobie ślad!</span>

                        <label for="name" class="label">
                            <p>Imię (nick)</p>
                            <input type="text" class="input" id="name" name="name">
                        </label>

                        <label for="MessageNewsletter" class="label">
                            <p>Wiadomość</p>
                            <textarea name="wiadomość" class="input" id="MessageNewsletter" cols="10" rows="5"></textarea>
                        </label>

                        
                        <div class="buttons">
                            <label for="Wyslij" class="submit">
                                Wyślij
                                <input type="submit" id="Wyslij">
                            </label>
                            <a href="../Newsletter/" class="submit">Zobacz Więcej</a>
                        </div>
                    </form>
                </div>
            </div>
            <div class="content" id="coś"></div>
        </div>

        <iframe src="../Include/fother.php" onload="this.before((this.contentDocument.body||this.contentDocument).children[0]);this.remove()"></iframe>

        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <script src="../Js/index.js"></script>
    </body>
</html>
<!--   ____            _               _           _           _  -->
<!--  / ___| ___      | |_  _   _     | |_  _   _ | |_  __ _  (_) -->
<!-- | |    / _ \     | __|| | | |    | __|| | | || __|/ _` | | | -->
<!-- | |___| (_) |    | |_ | |_| |    | |_ | |_| || |_| (_| | | | -->
<!--  \____|\___/      \__| \__, |     \__| \__,_| \__|\__,_|_/ | -->
<!--              _      _  |___/     ___                   |__/  -->
<!--  _ __  ___  | |__  (_) ___  ____|__ \                        -->
<!-- | '__|/ _ \ | '_ \ | |/ __||_  /  / /                        -->
<!-- | |  | (_) || |_) || |\__ \ / /  |_|                         -->
<!-- |_|   \___/ |_.__/ |_||___//___| (_)                         -->