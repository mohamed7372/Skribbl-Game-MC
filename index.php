<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header class="menu container">
        <img src="images/logo.svg" alt="logo">
        <img src="images/settings-ic.svg" alt="settings" id="setting">
    </header>

    <div class="step-game container" id="step-game">
        <nav>
            <div class="step active"></div>
            <div class="step"></div>
            <div class="step"></div>
        </nav>
    </div>

    <!-- start setting  -->
    <div class="set" id="set">
        <header class="menu container">
            <img src="images/logo.svg" alt="logo">
        </header>
        <main class="menu container">
            <div class="cube-menu">
                <div class="cube-inside">
                    <img src="images/audio-ic.svg" alt="audio">
                </div>
            </div>
            <div class="cube-menu">
                <div class="cube-inside">
                    <img src="images/flag-us-ic.svg" alt="flag us">
                </div>
            </div>
            <div class="cube-menu">
                <div class="cube-inside">
                    <img src="images/bell-off-ic.svg" alt="belt off">
                </div>
            </div>
            <div class="cube-menu">
                <div class="cube-inside">
                    <img src="images/facebook-ic.svg" alt="facebook">
                </div>
            </div>
            <div class="cube-menu">
                <div class="cube-inside">
                    <img src="images/instagram-ic.svg" alt="instagram">
                </div>
            </div>
            <div class="cube-menu">
                <div class="cube-inside">
                    <img src="images/share-ic.svg" alt="share">
                </div>
            </div>
        </main>
        <footer class="container set-retour">
            <img src="images/back-ic.svg" alt="back button" id="set-retour">
        </footer>
    </div>
    <!-- end setting  -->

    <!-- start landing page  -->
    <main class="landing container">
        <img src="images/logo.svg" alt="logo">
        <div class="loading"></div>
    </main>
    <!-- end landing page  -->

    <!-- start home page  -->
    <main class="landing container" id="home-page">
        <img src="images/logo.svg" alt="logo">
        <div class="cube-menu">
            <div class="cube-inside">
                <!-- <form action=""> -->
                    <input type="text" name="player-name" placeholder="Nicknane" id="name-ply" maxlength="10" autocomplete="off">
                <!-- </form> -->
            </div>
        </div>
    </main>
    <!-- end home page  -->

    <!-- start choose character  -->
    <main class="choose container" id="choose-character">
        <div class="player">
            <img src="images/players-1.svg" alt="choose player">
        </div>
        <h1 id="title-name-ply">mohamed</h1>
        <div class="button">
            <div>
                <div class="cube" id="room-code">
                    <div class="cube-inside">
                        <p>room code</p>
                    </div>
                </div>
            </div>
            <div>
                <div class="cube" id="create-room">
                    <div class="cube-inside">
                        <p>create room</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="round">
            <div>
                <div class="cube" id="minus-round">
                    <div class="cube-inside">
                        <p>-</p>
                    </div>
                </div>
            </div>
            <div>
                <div class="cube">
                    <div class="cube-inside">
                        <p>rounds</p>
                        <p id="nbr-round">2</p>
                    </div>
                </div>
            </div>
            <div>
                <div class="cube" id="add-round">
                    <div class="cube-inside">
                        <p>+</p>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- end choose character  -->

    <!-- start room code  -->
    <main class="room-code container" id="room-bloc">
        <h1 class="title" id="title-room">Title</h1>
        <div class="cube">
            <div class="cube-inside">
                <input type="text" name="player-name" placeholder="room name" autocomplete="off" maxlength="15" id="room-input">
            </div>
        </div>
        <div class="next-btn">
            <div>
                <div class="cube-btn" id="btn-valid-room">
                    <p>Next</p>
                </div>
            </div>
        </div>
    </main>
    <!-- end room code  -->

    <!-- start play game  -->
    <main class="choose play-game container" id="play-game">
        <div class="player">
            <img src="images/player1.svg" alt="choose player">
        </div>
        <h1>mohamed</h1>
        <div class="next-btn">
            <div class="cube-btn" id="play-btn">
                <p>Next</p>
            </div>
        </div>
    </main>
    <!-- end play game  -->

    <footer class="container">
        <img src="images/back-ic.svg" alt="back button" id="btn-back">
        <img src="images/next-ic.svg" alt="next button" id="btn-next">
    </footer>

    <!-- start screen game -->
    <div class="screen-game" id="screen-game">
        <header class="cube-grey">
            <div class="info">
                <p class="name-ply">Mohamed</p>
                <p>:</p>
                <p class="score">1893</p>
            </div>
            <div class="details">
                <div class="round">
                    <p>round : </p>
                    <p>01</p>
                </div>
                <div class="time">
                    <p>timer : </p>
                    <p>80 s</p>
                </div>
                <div class="icon">
                    <img src="images/home-ic.svg" alt="home page">
                </div>
            </div>
        </header>
        <div class="bloc-md">
            <aside class="cube-grey">
                <div class="players">
                    <div class="player">
                        <img src="images/player1.svg" alt="image player">
                        <div class="info">
                            <p>mohamed</p>
                            <p>1909</p>
                        </div>
                    </div>
                    <div class="player">
                        <img src="images/player1.svg" alt="image player">
                        <div class="info">
                            <p>mohamed</p>
                            <p>1909</p>
                        </div>
                    </div>
                    <div class="player">
                        <img src="images/player1.svg" alt="image player">
                        <div class="info">
                            <p>mohamed</p>
                            <p>1909</p>
                        </div>
                    </div>
                    <div class="player">
                        <img src="images/player1.svg" alt="image player">
                        <div class="info">
                            <p>mohamed</p>
                            <p>1909</p>
                        </div>
                    </div>
                </div>
                <div class="name-room">
                    <p>falling star</p>
                </div>
            </aside>
            <div class="side-right">
                <div class="main cube-grey">
                    <!-- screen game  -->
                    <p>...................</p>
                </div>
                <div class="footer cube-grey">
                    <div class="icons">
                        <img src="images/delete-ic.svg" alt="">
                        <img src="images/arrow-ic.svg" alt="">
                        <img src="images/pen-ic.svg" alt="">
                        <img src="images/paint-ic.svg" alt="">
                        <img src="images/plus-ic.svg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end screen game  -->

    <script src="js/script.js"></script>

</body>

</html>