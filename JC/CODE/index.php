<?php
    include 'DATABASE/database_index.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="STYLES/index_style.css">
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
                <a href="index.php" class="active">TAHANAN</a>
                <a href="damit.php" class="rd">DAMIT</a>
                <a href="gamit.php" class="rd">GAMIT</a>
                <a href="pagkain.php" class="rd">PAGKAIN</a>
                <a href="iba.php" class="rd">IBA</a>
            </div>
            <div class="welcome-section">
                <div class="mabuhay-text">
                    <svg viewBox="55 0 450 250">
                        <path id="curve" fill="transparent" d="M 50 150 Q 250 -10 450 150" />
                        <text fill="#FDD943" font-size="100" font-weight="bold">
                            <textPath href="#curve" startOffset="10%">
                                Mabuhay!
                            </textPath>
                        </text>
                    </svg>
                </div>
                <div class="welcome-text">
                    Ito ay ang Tatak Pinoy, halika at kilalanin ang kultura ng bansang Pilipinas sa pamamagitan ng pagbili ng mga gamit na sumisimbolo sa isang Pilipino.
                </div>
            </div>
            <div class="crsl_cnt">
                <?php foreach ($prdcts as $prdct) : ?>
                    <div class="carousel">
                        <div class="arrow">&#9664;</div>
                        <img src="<?= htmlspecialchars($prdct['image']) ?>" alt="<?= htmlspecialchars($prdct['name']) ?>">
                        <div class="arrow">&#9654;</div>
                    </div>
                    <div class="info-section">
                        <?= htmlspecialchars($prdct['fun_fact']) ?><br>
                        <?= htmlspecialchars($prdct['info']) ?><br>
                        <?= htmlspecialchars($prdct['details']) ?><br>
                        <?= htmlspecialchars($prdct['background']) ?>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>
        
    </body>
</html>