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
        
        <div id="homePage"></div>

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
                        </div>
                    </form>
                </div>
            </div>

            <div class="content" id="newsletter_display">
                <h1>Galeria</h1>
                <div class="newsletter_display-grid_item">
                    <h3>nick</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iste eaque doloremque veniam quae laudantium nostrum, reiciendis facilis aspernatur.</p>
                </div>
            </div>
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