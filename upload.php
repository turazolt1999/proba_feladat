<?php
if (isset($_POST['submit'])) {
    $file = $_FILES['file'];

    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('jpg', 'jpeg', 'png', 'pdf');

    if (in_array($fileActualExt, $allowed)) {
        if ($fileError===0) {
            if ($fileSize < 10000000){
                $fileNameNew = "header"."."."jpeg";
                $fileDestination = 'uploads/'.$fileNameNew;
                move_uploaded_file($fileTmpName, $fileDestination);
                $message = "Sikeresen!";
                echo "<script type='text/javascript'>alert('$message');</script>";
                header("Location: index.php");
            } else {
                echo "Túl nagy a mérete";
            }
        }else {
            echo "Hiba a fáljban";
        }
    } else {
        echo "Nem jó a fálj formátuma!";
    }
}