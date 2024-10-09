<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="STYLES/profile_style.css">
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
                    <div class="nav_cnt">
                        <span class="material-symbols-outlined" id="icon_profile">person</span>
                        <span class="material-symbols-outlined" id="icon_heart">favorite</span>
                        <span class="material-symbols-outlined" id="icon_sb" >shopping_bag</span>
                    </div>
                </div>
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
                    <div class="mensahe">
                        <p>Kamusta ka?</p>
                        <p>nawa'y masaya ka</p>
                    </div>
                </div>
            </div>
            <div class="info_cnt">
                <div class="profile">
                    <img src="#" alt="profile">
                    <div class="palit">
                        <p>Bagong larawan</p>
                    </div>
                </div>
                <div class="info">
                    <div class="f">
                        <p>Pangalan...</p>
                        <p>Email</p>
                    </div>
                    <div class="f">
                        <p>Address</p>
                        <p>Numero</p>
                    </div>
                    <div class="f">
                        <p>Password</p>
                        <p> </p>
                    </div>
                    <div class="ed_ed_cnt">
                        <div class="ed_edit">
                            <p>I-save</p>
                        </div>
                        <div class="ed_edit">
                            <a href="profile.php"><p>Ikansela</p></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>