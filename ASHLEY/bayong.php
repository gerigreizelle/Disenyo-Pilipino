<!DOCTYPE html>
<html lang="en">
<head>
    <title>DISENYO PILIPINO</title>

    <link rel="stylesheet" href="STYLES/bayong_style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    
    <?php
        include 'database.php'
    ?>
</head>
<body>
    <section class="cont">
        <div class="top_cont">
            <div class="language_cont">
                <label for="languages">LINGWAHE:</label>
                <select class="lang_dd" name="languages" id="languages">
                    <option value="tagalog">TAGALOG</option>
                    <option value="english">ENGLISH</option>
                </select>
            </div>

            <div class="logo-page_name-icons">
                <div class="logo_cont">
                    <img class="logo" src="https://res.cloudinary.com/damtc4g0q/image/upload/v1726674128/DISENYO_PILIPINO2_atlzui.png" alt="disenyo pilipino logo">
                </div>
                <p class="page_name">BAYONG</p>
                <div class="icons_cont">
                    <span class="material-symbols-outlined" id="icon_profile">person</span>
                    <span class="material-symbols-outlined" id="icon_heart">favorite</span>
                    <span class="material-symbols-outlined" id="icon_sb">shopping_bag</span>
                </div>
            </div>

            <div class="added_to_cart_prdcts">
                <div class="column_heading">
                    <p class="ch1">PRODUKTO</p>
                    <p class="ch2">PRESYO</p>
                    <p class="ch3">BILANG</p>
                </div>
            </div>

            <?php

                // Display products with unique checkbox IDs
                foreach ($prdcts as $prdct) {
                    $checkboxId = 'customCheckbox_' . $prdct['id'];  // Unique ID for each product
                    echo '
                        <div class="prdct_cont">
                            <input type="checkbox" id="' . $checkboxId . '">
                            <label class="cb-label" for="' . $checkboxId . '"></label>
                            <img class="prdct_img" src="'. htmlspecialchars($prdct['src']) .'">
                            <p class="prdct_name">' . htmlspecialchars($prdct['prdct_nm']) . '</p>
                            <p class="prdct_prc">php ' . htmlspecialchars($prdct['prc']) .'</p>
                            <div class="inp_bttn_cont">
                                <button class="minus">-</button>
                                <input type="text" aria-valuenow="1" value="1" class="inp_val">
                                <button class="plus">+</button>
                            </div>
                            <button class="tanggalin_bttn">Tanggalin</button>
                        </div>';
                }
            ?>
        <div class="filler_cont">
            &nbsp;
        </div>
    </section>
    
    <div class="lower_cont">
        <div class="total_cont">
            <p class="ttl_txt">TOTAL</p>
            <p class="php_txt">php</p>
            <p class="ttl">100</p>
        </div>
        <button class="checkout_bttn">i-checkout</button>
    </div>
</body>
</html>
