<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="STYLES/view_style.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        <title>Document</title>
    </head>
    <body>
        <section class="cntnr">
            <div class="header_cnt">
                <div class="lngg_cnt">
                    <label for="languages">LINGWAHE:</label>
                    <select class="lngg_slct" name="languages" id="languages">
                        <option value="tagalog">TAGALOG</option>
                        <option value="english">ENGLISH</option>
                    </select>
                </div>
                <div class="logo-srch-nav">
                    <div class="logo_cnt">
                        <div class="lg">
                            <a class="logo_bckgrnd" href="index.php">
                                <p class="dsgn">*</p>
                                <p class="D">DISENYO </p>
                                <p class="P"> PILIPINO</p>
                            </a>
                        </div>
                    </div>
                    <div class="srch">
                        <input class="srch_bx" type="text" placeholder="Ilagay ang pangalan ng produkto">
                        <button><span class="material-symbols-outlined">search</span></button>
                    </div>
                    <div class="nav_cnt">
                        <span class="material-symbols-outlined" id="icon_profile">person</span>
                        <span class="material-symbols-outlined" id="icon_heart">favorite</span>
                        <span class="material-symbols-outlined" id="icon_sb" >shopping_bag</span>
                    </div>
                </div>
            </div>
            <div class="navbar">
                <a href="index.php" class="bl">TAHANAN</a>
                <a href="damit.php" class="rd">DAMIT</a>
                <a href="gamit.php" class="active">GAMIT</a>
                <a href="pagkain.php" class="rd">PAGKAIN</a>
                <a href="iba.php" class="rd">IBA</a>
            </div>
            <div class="container">
                <div class="main-image">
                    <img src="https://via.placeholder.com/300x300" alt="Main Product">
                </div>
                <div class="tumb_cont">
                    <div class="thumbnails">
                        <img src="https://via.placeholder.com/80x80" alt="Thumbnail 1">
                        <img src="https://via.placeholder.com/80x80" alt="Thumbnail 2">
                        <img src="https://via.placeholder.com/80x80" alt="Thumbnail 3">
                        <img src="https://via.placeholder.com/80x80" alt="Thumbnail 4">
                    </div>
                    <div class="details">
                        <p>Info</p>
                        <p>Price</p>
                        <p>Rate</p>
                    </div>
                    <div class="actions">
                        <button>Ilagay sa bayong</button>
                        <button>Bilhin agad</button>
                        <span class="material-symbols-outlined" id="icon_heart">favorite</span>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>
