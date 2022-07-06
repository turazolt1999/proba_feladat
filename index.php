<?php
require 'includes/PHPMailer.php';
require 'includes/SMTP.php';
require 'includes/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if (isset($_POST['email'])) {
    $name = $_POST['name'];
    $clientEmail = $_POST['majka'];
    $radio1 = $_POST['radio1'];


    $mail = new PHPMailer();
    $mail->isSMTP();
    $mail->Host = "mail.nethely.hu";
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = "ssl";
    $mail->Port = "465";
    $mail->Username = "hsaproba@probaphp.fejlessz.hu";
    $mail->Password = "Zoli3576";


    $mail->Subject = "Sikeres email";
    $mail->setFrom('hsaproba@probaphp.fejlessz.hu');
    $mail->isHTML(true);
    $mail->addAttachment($_FILES['file']['tmp_name'], $_FILES['file']['name']);
    $mail->Body = "<p>Email: $clientEmail</p><p>Név: $name</p><p>Választás: $radio1</p>";
    $mail->addAddress('sarkany.roland@outclass.hu');
    if ( $mail->send() ) {
        $message = "Sikeresen elküldted!";
        echo "<script type='text/javascript'>alert('$message');</script>";
    }else{
        echo "Error...";
    }
    $mail->smtpClose();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Próba</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/x-icon" href="img/icon.ico.png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
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
            <li><a href="#wrapperpoint">Eredményeink</a></li>
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
            <img id="phone" src="img/proba-phone.jpg" alt>
        </div>
    </div>
    <div class="counter" id="wrapperpoint">
        <div class="caption5">
            <div class="wrapper">
                <i class="fas fa-user"></i>
                <span class="num" data-val="320">000</span>
                <p class="text">Alkalmazott</p>
            </div>
            <div class="wrapper">
                <i class="fas fa-project-diagram"></i>
                <span class="num" data-val="120+">000</span>
                <p class="text">Partnercég</p>
            </div>
            <div class="wrapper">
                <i class="fas fa-building"></i>
                <span class="num" data-val="32">000</span>
                <p class="text">Iroda Világszerte</p>
            </div>
            <div class="wrapper">
                <i class="fas fa-server"></i>
                <span class="num" data-val="150">000</span>
                <p class="text">Kiépített Adatbázis</p>
            </div>
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
                <img src="img/hsa-logo-white.svg" alt>
            </div>
            <div class="column">
                <img src="img/hsa-logo-white.svg" alt>
            </div>
            <div class="column">
                <img src="img/hsa-logo-white.svg" alt>
            </div>
        </div>
    </div>
    <div class="white_background" id="simcardpoint">
        <div class="caption3">
            <div id="simcard">
                <h1>SIM-kártya adatok</h1>
                <p>Számunkra fontos a segítséged.</p>
                <form method="POST" enctype="multipart/form-data">
                    <div class="data">
                        <input type="text" name="name" placeholder="Név" required><br>
                        <input type="email" name="majka" placeholder="Email cím" required><br>
                    </div>
                    <div class="radio">
                        <input type="radio"name="radio1" value="Standard" class="checkmark" checked="checked">
                        <label for="standard">Standard</label><br>
                        <input type="radio"name="radio1" value="Micro" class="checkmark">
                        <label for="micro">Micro</label><br>
                        <input type="radio"name="radio1" value="Nano" class="checkmark">
                        <label for="nano">Nano</label>
                    </div>
                    <div class="file">
                        <label for="image"><b>Lepj meg minket egy tetszőleges képpel!</b></label><br>
                        <input type="file" accept="image/png, image/jpeg" name="file">
                    </div>
                    <p>A "Küldés" gombra kattintva elfogadod az <a href="adat.php"><u>adatkezelési tájékoztatóban</u></a> foglaltakat.</p>
                    <button type="submit" name="email">Küldés   ❯</button>
                </form>
            </div>
        </div>
    </div>
<footer>
    <div class="blue_background" >
        <div id="logo2">
            <img src="img/hsa-logo-white.svg" alt>
        </div>
        <div id="ready">
            <table>
                <tr>
                    <td>
                        <h4><a href="adat.php" style="text-decoration: none; color: white">Adatkezelési tájékoztató</a></h4>
                        <p>Copyright ©2022 Minden jog fenntartva</p>
                    </td>
                    <td>
                        <a href="#"><button>Újra látni akarom.</button></a>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</footer>
</div>
<script src="script.js"></script>
<script>
    document.getElementById("parallaxid").style.backgroundImage = "url('uploads/header.jpeg')";
</script>
<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
</body>
</html>