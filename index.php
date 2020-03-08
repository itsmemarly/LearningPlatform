<?php
   include_once('gewoon.php');
?>
    <!DOCTYPE html>
    <html>

    <head>

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-146767844-2"></script>
        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());

            gtag('config', 'UA-146767844-2');
        </script>
    </head>
    <html>
    <title>Study</title>
    <meta charset="UTF-8">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">

    <script src="index.js"></script>
    <link rel="stylesheet" href="index.css">

    <body>
        <script type='text/javascript'>
            _gaq.push(['_setCustomVar', 1, 'IP', '<?=$ip;?>', 1]);
        </script>

        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">Easy Sudying Online</a>
                </div>
                <ul class="nav navbar-nav">
                    <li class="active w3-center"><a href="#">HOME</a></li>
                    <li class="w3-center"><a href="#about">QUICK SETUP GUIDE</a></li>
                    <li class="w3-center"><a href="#menu">PRACTICE METHODS</a></li>
                    <li class="w3-center"><a href="#where">WHAT TO USE</a></li>
                    <li class="w3-center"><a href="#downloads">DOWNLOADS</a></li>
                    <li class="w3-center">
                        <a href="./login.php">LOGIN</a></li>
                </ul>
            </div>
        </nav>


        <!-- Header with image -->
        <header class="bgimg w3-display-container w3-grayscale-min" id="home">

            <h5 class="w3-center w3-padding-64 "><span class="w3-tag w3-wide ">CHECK YOUR KNOWLEDGE!</span></h5>

        </header>

        <!-- Add a background color and large text to the whole page -->
        <div class="w3-sand w3-grayscale w3-large">

            <!-- About Container -->
            <div class="w3-container" id="about">
                <div class="w3-content" style="max-width:700px">
                    <h5 class="w3-center w3-padding-64"><span class="w3-tag w3-wide">QUICK SETUP GUIDE</span></h5>
                    <p> I will help you a little by explaining how it works. So let's get into it!</p>

                    <img src="images/uitlegKaart.png" alt="uitleg" style="width:100%;max-width:1000px" class="w3-margin-top">
                    <p>* Reset, import, export buttons aren't showing in this picture, but they're right under your last cards!</p>
                    <br>
                    <br>
                    <br>
                    <p>When you've made your cards you can use them!</p>
                    <img src="images/voorbeeldKaart.png" alt="voorbeeld" style="width:100%;max-width:1000px" class="w3-margin-top">

                </div>
            </div>

            <!-- Menu Container -->
            <div class="w3-container" id="menu">
                <div class="w3-content" style="max-width:700px">

                    <h5 class="w3-center w3-padding-48"><span class="w3-tag w3-wide">Practice methods</span></h5>

                    <div class="w3-row w3-center w3-card w3-padding">
                        <a href="javascript:void(0)" onclick="openMenu(event, 'Eat');" id="myLink">
                            <div class="w3-col s6 tablink">Flashcards</div>
                        </a>
                        <a href="javascript:void(0)" onclick="openMenu(event, 'Drinks');">
                            <div class="w3-col s6 tablink">Words</div>
                        </a>
                    </div>

                    <div id="Eat" class="w3-container menu w3-padding-48 w3-card">
                        <h5>Flashcard practice</h5>
                        <p class="w3-text-grey">Make flashcards</p>
                        <br>
                        <button onclick="window.location.href='./flashcards.html'"></a>Start</button>
                        <p class="w3-text-grey"> Let's start!

                        </p>

                    </div>

                    <div id="Drinks" class="w3-container menu w3-padding-48 w3-card">
                        <h5>Wordlist practice</h5>
                        <p class="w3-text-grey">Make wordlist</p>

                        <br>
                        <button onclick="window.location.href='./wordlist.html'"></a>Start</button>
                        <p class="w3-text-grey"> Let's start!

                        </p>

                    </div>
                    <img src="images/flashcards.jpeg" style="width:100%;max-width:1000px;margin-top:32px;">
                </div>
            </div>

            <!-- Contact/Area Container -->
            <div class="w3-container" id="where" style="padding-bottom:32px;">
                <div class="w3-content" style="max-width:700px">
                    <h5 class="w3-center w3-padding-48"><span class="w3-tag w3-wide">WHAT TO USE</span></h5>
                    <img src="images/bureau.jpg" style="width:100%;max-width:1000px" class="w3-margin-top">
                    <br>
                    <br>
                    <p>When learning new words I would suggest you use our wordlist. If you already know your words then you can go on and use the flashcard method.</p>

                    <p>We are here to help you learn things more easily and much quicker. So start learning today!</p>


                </div>
            </div>
            <div class="w3-container" id="downloads" style="padding-bottom:32px;">

            </div>


            <!-- End page content -->
        </div>

        <!-- Footer -->
        <footer class="w3-center w3-light-grey w3-padding-48 w3-large">
            <p>Questions? Feel free to email me at:
                <a href="mailto:handyyou@live.nl?Subject=Contact%20Mails">handyyou@live.nl</a>
            </p>


        </footer>

    </body>

    </html>