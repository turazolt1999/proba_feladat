<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Próba</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/x-icon" href="img/icon.ico.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
</head>
<body>
<nav>
    <div class="logo">
        <a href="#"><img src="img/hsa-logo-white.svg" alt></a>
    </div>
    <div class="list">
        <ul>
            <li><a href="#devicespoint">Készülékek</a></li>
            <li><a href="#topbrandspoint">Top márkák</a></li>
            <li><a href="#soundspoint">Ismerősen cseng?</a></li>
            <li><a href="#premiumpoint">Prémium lehetőségek</a></li>
            <li><a href="#simcardpoint">SIM-kártya adatok</a></li>
        </ul>
    </div>
</nav>
<div class="container">
    <div class="parallax" id="parallaxid">
        <div class="caption">
            <div id="hero">
                <h1>Telefonos kisokos</h1>
                <p>A telefonálás az a cselekvés vagy az a pillanat, amikor a telefonon beszélünk valakivel.</p>
                <a href="#simcardpoint"><button>SIM adataim.</button></a>
            </div>
        </div>
    </div>
    <div class="boothside" id="devicespoint">
        <div class="left_side">
            <div class="caption_left">
                <div id="devices">
                    <h1>Készülékek</h1>
                    <table>
                        <tr>
                            <td><img src="img/proba-iphone.png" alt></td>
                            <td>iPhone</td>
                        </tr>
                        <tr>
                            <td><img src="img/proba-oldphone.png" alt></td>
                            <td>oldPhone</td>
                        </tr>
                        <tr>
                            <td><img src="img/proba-nophone.png" alt></td>
                            <td>noPhone</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="right_side" id="topbrandspoint">
            <div class="caption_right">
                <div id="topbrands">
                    <h1>Top márkák</h1>
                    <ul>
                        <li>Apple</li>
                        <li>Samsung</li>
                        <li>Google</li>
                        <li>Huawei</li>
                        <li>OnePlus</li>
                        <br>
                        <li>Xiaomi</li>
                        <li>LG</li>
                        <li>Oppo</li>
                        <li>Vivo</li>
                        <li>Nokia</li>
                    </ul>
                    <a href="#premiumpoint"><button>Prémium lehetőség.</button></a>
                </div>
            </div>
        </div>
    </div>
    <div class="boothside" id="soundspoint">
        <div class="left_side2">
            <div class="caption_left">
                <div id="sounds">
                    <p id="bzzt">Bzzt! Bzzt!</p>
                    <p id="ring">Rrrrrring! Bbbrrrring!</p>
                    <p id="ching">Ching Ching!</p>
                    <h1>Ismerősen Cseng?</h1>
                </div>
            </div>
        </div>
        <div class="right_side2">
            <img id="phone" src="img/proba-phone.jpg">
        </div>
    </div>
    <div class="parallax2" id="premiumpoint">
        <div class="caption2">
            <div id="premium">
                <p>Kelet-magyarországi teljes lefedettség. Hosszú üzemidő.</p>
                <h1>Prémium lehetőség.</h1>
            </div>
        </div>
        <div class="row">
            <div class="column">
                <img src="img/hsa-logo-white.svg">
            </div>
            <div class="column">
                <img src="img/hsa-logo-white.svg">
            </div>
            <div class="column">
                <img src="img/hsa-logo-white.svg">
            </div>
        </div>
    </div>
    <div class="white_background" id="simcardpoint">
        <div class="caption3">
            <div id="simcard">
                <h1>SIM-kártya adatok</h1>
                <p>Számunkra fontos a segítséged.</p>
                <form action="/action_page.php">
                    <div class="name">
                        <input type="text" id="name" name="fname" placeholder="Név"><br>
                        <input type="email" id="email" name="email" placeholder="Email cím"><br>
                    </div>
                    <div class="radio">
                        <input type="radio" id="standard" name="radio1" value="Standard" class="checkmark" checked="checked">
                        <label for="standard">Standard</label><br>
                        <input type="radio" id="micro" name="radio1" value="Micro" class="checkmark">
                        <label for="micro">Micro</label><br>
                        <input type="radio" id="nano" name="radio1" value="Nano" class="checkmark">
                        <label for="nano">Nano</label>
                    </div>
                    <div class="file">
                        <label for="image"><b>Lepj meg minket egy tetszőleges képpel!</b></label><br>
                        <input type="file" id="image" accept="image/png, image/jpeg" name="image">
                    </div>
                    <p>A "Küldés" gombra kattintva elfogadod az <a href="adat.html"><u>adatkezelési tájékoztatóban</u></a> foglaltakat.</p>
                    <button>Küldés   ❯</button>
                </form>
            </div>
        </div>
    </div>

    <div class="blue_background" >
        <div id="logo2">
            <img src="img/hsa-logo-white.svg" alt>
        </div>
        <div id="ready">
            <table>
                <tr>
                    <td>
                        <h4>Adatkezelési tájékoztató</h4>
                        <p>Copyright ©2022 Minden jog fenntartva</p>
                    </td>
                    <td>
                        <a href="#"><button>Újra látni akarom.</button></a>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>
<script>
    document.getElementById("parallaxid").style.backgroundImage = "url('uploads/header.jpeg')";
</script>
</body>
</html>