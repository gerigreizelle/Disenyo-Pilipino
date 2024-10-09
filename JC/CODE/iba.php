<?php
    include 'DATABASE/database.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="STYLES/cat_style.css">
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
                <a href="gamit.php" class="rd">GAMIT</a>
                <a href="pagkain.php" class="rd">PAGKAIN</a>
                <a href="iba.php" class="active">IBA</a>
            </div>
            <div class="ctgrs-prdcts_cnt">
                <div class="ctgrs_cnt">
                    <a href=""><p class="active">PangBabae</p></a>
                    <a href=""><p>PangLalaki</p></a>
                    <a href=""><p>PangBata</p></a>
                </div>
                <div class="prdcts_cont" id="prdcts_cnt">
                    <?php
                        foreach ($prdcts as $prdct){
                            echo '<div class="head">
                                <img class="prdct_img" src="'. htmlspecialchars($prdct['image']) .'">
                                <p class="prdct_name">' . htmlspecialchars($prdct['info']) . '</p>
                                <p class="prdct_prc">presyo: php ' . htmlspecialchars($prdct['price']) .'</p>
                                <p class="prdct_rate">grado: '. htmlspecialchars($prdct['rate']) .'</p>
                            </div>';
                        }
                    ?>
                </div>
            </div>
        </section>
    </body>
</hrml>
