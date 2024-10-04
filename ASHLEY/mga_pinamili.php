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

    <link rel="stylesheet" href="STYLES/mga_pinamili_style.css">
    <link rel="stylesheet" href="STYLES/babayaran_style.css">
    <link rel="stylesheet" href="STYLES/ipapadala_style.css">
    <link rel="stylesheet" href="STYLES/parating_style.css">
    <link rel="stylesheet" href="STYLES/ibinalik_style.css">
    <link rel="stylesheet" href="STYLES/nakuha_style.css">
    <link rel="stylesheet" href="STYLES/ikinansela_style.css">

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
                <p class="page_name">MGA PINAMILI</p>
                <div class="icons_cont">
                    <span class="material-symbols-outlined" id="icon_profile">person</span>
                    <span class="material-symbols-outlined" id="icon_heart">favorite</span>
                    <span class="material-symbols-outlined" id="icon_sb" >shopping_bag</span>
            </div>
        </div>

    <ul class="ctgries">
        <li class="ctgry <?php echo ($activeCategory == 'babayaran') ? 'active' : ''; ?>">
                    <a href="?category=babayaran">Babayaran</a>
                </li>
                <li class="ctgry <?php echo ($activeCategory == 'ipapadala') ? 'active' : ''; ?>">
                    <a href="?category=ipapadala">Ipapadala pa lamang</a>
                </li>
                <li class="ctgry <?php echo ($activeCategory == 'parating') ? 'active' : ''; ?>">
                    <a href="?category=parating">Parating</a>
                </li>
                <li class="ctgry <?php echo ($activeCategory == 'ibinalik') ? 'active' : ''; ?>">
                    <a href="?category=ibinalik">Ibinalik</a>
                </li>
                <li class="ctgry <?php echo ($activeCategory == 'nakuha') ? 'active' : ''; ?>">
                    <a href="?category=nakuha">Mga Nakuha na</a>
                </li>
                <li class="ctgry <?php echo ($activeCategory == 'ikinansela') ? 'active' : ''; ?>">
                    <a href="?category=ikinansela">Mga Ikinansela</a>
                </li>
            </ul>
    </ul>

    <div>
        <?php
        switch ($activeCategory) {
            case 'babayaran':
                echo '<div class="column_heading_cont">
                        <div class="column_heading_babayaran">
                            <p class="ch1_bbyrn">
                                PRODUKTO
                            </p>
                            <p class="ch2_bbyrn">
                                PRESYO
                            </p>
                            <p class="ch3_bbyrn">
                                BILANG
                            </p>
                        </div>
                    </div>';
                foreach ($prdcts as $index => $prdct) {
                    $checkboxId = 'customCheckbox_' . $prdct['id'];  // Unique ID for each product
                    if ($prdct['in_cart'] == true){
                        echo '<div class="prdct_cont">
                                <input type="checkbox" id="' . $checkboxId . '">
                                <label class="cb-label" for="' . $checkboxId . '"></label>
                                <img class="prdct_img" src="'. htmlspecialchars($prdct['src']) .'">
                                <p class="prdct_name">' . htmlspecialchars($prdct['prdct_nm']) . '</p>
                                <p class="prdct_prc">' . htmlspecialchars($prdct['prc']) .'</p>
                                <div class="inp_bttn_cont">
                                    <button class="minus">-</button>
                                    <input type="text" aria-valuenow="1" value="1" class="inp_val">
                                    <button class="plus">+</button>
                                </div>
                                <button class="ikansela_bttn">Ikansela</button>
                            </div>';}
                            };
                break;
            case 'ipapadala':
                echo '<div class="column_heading_cont">
                        <div class="column_heading_ipapadala">
                            <p class="ch1_ippdl">
                                PRODUKTO
                            </p>
                            <p class="ch2_ippdl">
                                PRESYO
                            </p>
                            <p class="ch3_ippdl">
                                ILAN
                            </p>
                            <p class="ch4_ippdl">
                                TOTAL
                            </p>
                        </div>
                    </div>';
                foreach ($prdcts as $index => $prdct) {
                    $checkboxId = 'customCheckbox_' . $prdct['id'];  // Unique ID for each product
                    if ($prdct['ipapadala'] == true){
                        echo '<div class="prdct_cont_ippdl">
                                <img class="prdct_img_ippdl" src="'. htmlspecialchars($prdct['src']) .'">
                                <p class="prdct_name_ippdl">' . htmlspecialchars($prdct['prdct_nm']) . '</p>
                                <p class="prdct_prc_ippdl">' . htmlspecialchars($prdct['prc']) .'</p>
                                <p class="ilan_ippdl">'. htmlspecialchars($prdct['id']) .'</p>
                                <p class="ttl_ippdl">'. htmlspecialchars($prdct['id'] * $prdct['prc']) .'</p>
                                </div>';}
                            };
                break;
            case 'parating':
                echo '<div class="column_heading_cont">
                        <div class="column_heading_parating">
                        <p class="ch1_prtng">
                                PRODUKTO
                            </p>
                            <p class="ch2_prtng">
                                BILANG
                            </p>
                            <p class="ch3_prtng">
                            PRESYO
                            </p>
                            <p class="ch4_prtng">
                                TOTAL
                            </p>
                        </div>
                    </div>';
                foreach ($prdcts as $index => $prdct) {
                    $checkboxId = 'customCheckbox_' . $prdct['id'];  // Unique ID for each product
                    if ($prdct['parating'] == true){
                        echo '<div class="prdct_cont">
                                <img class="prdct_img_prtng" src="'. htmlspecialchars($prdct['src']) .'">
                                <p class="prdct_name_prtng">' . htmlspecialchars($prdct['prdct_nm']) . '</p>
                                <p class="ilan_prtng">'. htmlspecialchars($prdct['id']) .'</p>
                                <p class="prdct_prc_prtng">' . htmlspecialchars($prdct['prc']) .'</p>
                                <p class="ttl_prtng">'. htmlspecialchars($prdct['id'] * $prdct['prc']) .'</p>
                                <button class="trckng_bttn">TRACKING</button>
                            </div>';}
                            };
                break;
            case 'ibinalik':
                echo '<div class="column_heading_cont">
                        <div class="column_heading_ibinalik">
                            <p class="ch1_ibnlk">
                                PRODUKTO
                            </p>
                            <p class="ch2_ibnlk">
                                PRESYO
                            </p>
                            <p class="ch3_ibnlk">
                                ILAN
                            </p>
                            <p class="ch4_ibnlk">
                                TOTAL
                            </p>
                        </div>
                    </div>';
                foreach ($prdcts as $index => $prdct) {
                    $checkboxId = 'customCheckbox_' . $prdct['id'];  // Unique ID for each product
                    if ($prdct['ibinalik'] == true){
                        echo '<div class="prdct_cont_ibnlk">
                                <img class="prdct_img_ibnlk" src="'. htmlspecialchars($prdct['src']) .'">
                                <p class="prdct_name_ibnlk">' . htmlspecialchars($prdct['prdct_nm']) . '</p>
                                <p class="prdct_prc_ibnlk">' . htmlspecialchars($prdct['prc']) .'</p>
                                <p class="ilan_ibnlk">'. htmlspecialchars($prdct['id']) .'</p>
                                <p class="ttl_ibnlk">'. htmlspecialchars($prdct['id'] * $prdct['prc']) .'</p>
                                </div>';}
                            };
                break;
            case 'nakuha':
                echo '<div class="column_heading_cont">
                        <div class="column_heading_nakuha">
                        <p class="ch1_nkh">
                                PRODUKTO
                            </p>
                            <p class="ch2_nkh">
                                BILANG
                            </p>
                            <p class="ch3_nkh">
                            PRESYO
                            </p>
                            <p class="ch4_nkh">
                                TOTAL
                            </p>
                        </div>
                    </div>';
                foreach ($prdcts as $index => $prdct) {
                    $checkboxId = 'customCheckbox_' . $prdct['id'];  // Unique ID for each product
                    if ($prdct['nakuha'] == true){
                        echo '<div class="prdct_cont">
                                <img class="prdct_img_nkh" src="'. htmlspecialchars($prdct['src']) .'">
                                <p class="prdct_name_nkh">' . htmlspecialchars($prdct['prdct_nm']) . '</p>
                                <p class="ilan_nkh">'. htmlspecialchars($prdct['id']) .'</p>
                                <p class="prdct_prc_nkh">' . htmlspecialchars($prdct['prc']) .'</p>
                                <p class="ttl_nkh">'. htmlspecialchars($prdct['id'] * $prdct['prc']) .'</p>
                                <button class="impormasyon_bttn">Impormasyon</button>
                            </div>';}
                            };
                break;
                break;
            case 'ikinansela':
                echo '<div class="column_heading_cont">
                        <div class="column_heading_kansel">
                            <p class="ch1_iknnsl">
                                PRODUKTO
                            </p>
                            <p class="ch2_iknnsl">
                                PRESYO
                            </p>
                            <p class="ch3_iknnsl">
                                ILAN
                            </p>
                            <p class="ch4_iknnsl">
                                TOTAL
                            </p>
                        </div>
                    </div>';
                foreach ($prdcts as $index => $prdct) {
                    $checkboxId = 'customCheckbox_' . $prdct['id'];  // Unique ID for each product
                    if ($prdct['ikinansela'] == true){
                        echo '<div class="prdct_cont_iknnsl">
                                <img class="prdct_img_iknnsl" src="'. htmlspecialchars($prdct['src']) .'">
                                <p class="prdct_name_iknnsl">' . htmlspecialchars($prdct['prdct_nm']) . '</p>
                                <p class="prdct_prc_iknnsl">' . htmlspecialchars($prdct['prc']) .'</p>
                                <p class="ilan_iknnsl">'. htmlspecialchars($prdct['id']) .'</p>
                                <p class="ttl_iknnsl">'. htmlspecialchars($prdct['id'] * $prdct['prc']) .'</p>
                                </div>';}
                            };
                break;
                break;
            default:
                echo '<div class="column_heading_cont">
                            <div class="column_heading_babayaran">
                                <p class="ch1_bbyrn">
                                    PRODUKTO
                                </p>
                                <p class="ch2_bbyrn">
                                    PRESYO
                                </p>
                                <p class="ch3_bbyrn">
                                    BILANG
                                </p>
                            </div>
                        </div>';
                foreach ($prdcts as $index => $prdct) {
                    $checkboxId = 'customCheckbox_' . $prdct['id'];  // Unique ID for each product
                    if ($prdct['in_cart'] == true){
                        echo '<div class="prdct_cont">
                                <input type="checkbox" id="' . $checkboxId . '">
                                <label class="cb-label" for="' . $checkboxId . '"></label>
                                <img class="prdct_img" src="'. htmlspecialchars($prdct['src']) .'">
                                <p class="prdct_name">' . htmlspecialchars($prdct['prdct_nm']) . '</p>
                                <p class="prdct_prc">' . htmlspecialchars($prdct['prc']) .'</p>
                                <div class="inp_bttn_cont">
                                    <button class="minus">-</button>
                                    <input type="text" aria-valuenow="1" value="1" class="inp_val">
                                    <button class="plus">+</button>
                                </div>
                                <button class="ikansela_bttn">Ikansela</button>
                            </div>';}
                            };
                    }
        ?>
    </div>

    <!-- <div class="prdct_cont">
        <input type="checkbox" id="customCheckbox">
        <label id="cb" for="customCheckbox"></label>
        <img class="prdct_img" src="'. htmlspecialchars($prdct['src']) .'">
        <p class="prdct_name">' . htmlspecialchars($prdct['prdct_nm']) . '</p>
        <p class="prdct_prc">php ' . htmlspecialchars($prdct['prc']) .'</p>
        <div class="inp_bttn_cont">
        <button class="minus">
            -
        </button>
        <input type="text" aria-valuenow= 1, value= 1 class="inp_val">
        <button class="plus">
            +
        </button>
        </div>
            <button class="tanggalin_bttn">Ikansela</button>
        </div>
    </div> -->
    </section>
</body>
</html>