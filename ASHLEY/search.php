<?php
    // NOTE 
    // THIS PHP CODE IS ONLY FOR SHOWING MULTIPLE PRODUCTS
    // DON'T MIND THIS TO CAUSE NO CONFUSION
    include 'database.php';
    $activeCategory = isset($_GET['category']) ? $_GET['category'] : 1;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>DISENYO PILIPINO</title>

    <link rel="stylesheet" href="STYLES/search_style.css">

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
                <input type="text" class="search_bar" placeholder="Ilagay ang ngalan ng produkto...">
                <div class="icons_cont">
                    <span class="material-symbols-outlined" id="icon_profile">person</span>
                    <span class="material-symbols-outlined" id="icon_heart">favorite</span>
                    <span class="material-symbols-outlined" id="icon_sb" >shopping_bag</span>
            </div>
        </div>

        <div class="sort_cont">
            <p class="sort_txt">I-sort</p>
            <p class="mga_ktgry">Mga kategorya</p>
            <p class="presyo">Presyo</p>
            <p class="grado">Grado</p>
        </div>

        <div class="sorted_prdcts_cont">
            <?php
                foreach ($prdcts as $prdct) {
                    echo '<div class="prdct_cont">
                            <img class="prdct_img" src="'. htmlspecialchars($prdct['src']) .'">
                            <p class="prdct_name">' . htmlspecialchars($prdct['prdct_nm']) . '</p>
                            <p class="prdct_prc">presyo: php ' . htmlspecialchars($prdct['prc']) .'</p>
                            <p class="prdct_rate">grado: '. htmlspecialchars($prdct['rate']) .'</p>
                        </div>';
                }
            ?>
        </div>

    </section>
</body>
</html>