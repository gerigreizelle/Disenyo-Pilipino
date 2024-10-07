<?php
    include 'database.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>DIsenyo Pilipino</title>

    <link rel="stylesheet" href="STYLES/admin_side_style.css">
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
                <p class="page_name">ADMIN SIDE</p>
                <div class="icons_cont">
                    <span class="material-symbols-outlined" id="icon_profile">person</span>
                    <span class="material-symbols-outlined" id="icon_heart">favorite</span>
                    <span class="material-symbols-outlined" id="icon_sb" >shopping_bag</span>
                </div>
            </div>
        </div>

    <div>
        <div class="column_heading_cont">
            <div class="column_heading_as">
                <p class="ch1_as">
                    PRODUKTO
                </p>
                <p class="ch2_as">
                    PRESYO
                </p>
                <p class="ch3_as">
                    BILANG
                </p>
            </div>
        </div>
        <?php
        foreach ($prdcts as $prdct) {
                echo '<div class="prdct_cont">
                        <img class="prdct_img" src="'. htmlspecialchars($prdct['src']) .'">
                        <p class="prdct_name">' . htmlspecialchars($prdct['prdct_nm']) . '</p>
                        <p class="prdct_prc">' . htmlspecialchars($prdct['prc']) .'</p>
                        <input type="text" aria-valuenow="'. htmlspecialchars($prdct['ilan']) .'" value="'. htmlspecialchars($prdct['ilan']) .'" class="inp_val">
                        <button class="busisiin_bttn">Busisiin ang produkto</button>
                    </div>';}
            ?>
    </div>
    </section>
</body>
</html>