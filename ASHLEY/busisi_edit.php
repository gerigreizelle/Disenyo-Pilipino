<?php
    // NOTE 
    // THIS PHP CODE IS ONLY FOR SHOWING MULTIPLE PRODUCTS
    // DON'T MIND THIS TO CAUSE NO CONFUSION
    include 'database.php';
    $crrnt_prdct = $prdcts[4];

    // echo $crrnt_prdct;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>DISENYO PILIPINO</title>

    <link rel="stylesheet" href="STYLES/busisi_edit_style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

</head>
<body>
    <section>
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
                <p class="page_name">ADMIN SIDE | I-edit ang Produkto</p>
                <div class="icons_cont">
                    <span class="material-symbols-outlined" id="icon_profile">person</span>
                    <span class="material-symbols-outlined" id="icon_heart">favorite</span>
                    <span class="material-symbols-outlined" id="icon_sb" >shopping_bag</span>
                </div>
            </div>
        </div>

    <div class="busisiin_prdct_cont">
        <div class="img_nm_cont">
            <?php
                echo '
                    <img src="'. htmlspecialchars($crrnt_prdct['src']) .'" class="prdct_img" alt="">
                    <p class="prdct_nm">'. htmlspecialchars($crrnt_prdct['prdct_nm']) .'</p>
                '
            ?>
        </div>

        <div class="info_bttn_cont">
            <div>
                <div class="info_cont">
                    <div class="info_cont1">
                        <?php
                            echo '
                                <p class="prdct_id_txt">ID ng Produkto</p>
                                <p class="prdct_stock_txt">STOCK</p>
                                <p class="prdct_prc_txt">PRESYO</p>
                                <p class="prdct_ktgry_txt">KATEGORYA</p>
                            '
                        ?>
                    </div>
                    <div class="info_cont2">
                        <!-- <input type="text" ar> -->
                        <!-- <label class="ktgry_lbl" for="categories">KATEGORYA:</label> -->
                        <?php
                            echo '
                                <p class="show_prdct_id">00'. htmlspecialchars($crrnt_prdct['id']) .'</p>
                                <input class="inp_prdct_stock" value="'. htmlspecialchars($crrnt_prdct['ilan']) .'" aria-valuenow="'. htmlspecialchars($crrnt_prdct['ilan']) .'"></input>
                                <input class="inp_prdct_prc" value="'. htmlspecialchars($crrnt_prdct['prc']) .'" aria-valuenow="'. htmlspecialchars($crrnt_prdct['prc']) .'"></input>
                                <div class="ktgry_cont">
                                    <select class="mga_ktgrya" name="categories" id="categories">
                                        <option value="Kategorya_1">Kategorya 1</option>
                                        <option value="Kategorya_2">Kategorya 2</option>
                                    </select>
                                </div>
                                '
                                ?>
                    </div>
                </div>
                <div class="dskrpsyn_bttn_cont">
                    <p class="dskrpsyn_txt">Deskripsyon</p>
                    <textarea class="dskrpsyn_inpt" name="" id=""></textarea>
                    <!-- <input type="text" class="dskrpsyn_inpt"> -->
                    <div class="bttns">
                        <button class="save_prdct_bttn">I-edit ang produkto</button>
                        <button class="kansel_prdct_bttn">I-edit ang produkto</button> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
</body>
</html>