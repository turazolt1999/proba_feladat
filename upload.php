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
                echo "<script>if(confirm('Sikeresen kep csere(elvileg)!')){document.location.href='index.php'};</script>";
            } else {
                echo "<script>if(confirm('Tul nagy a merete!')){document.location.href='admin.php'};</script>";
            }
        }else {
            echo "<script>if(confirm('Hiba a faljban!')){document.location.href='admin.php'};</script>";
        }
    } else {
        echo "<script>if(confirm('Nem jo a falj formatuma!')){document.location.href='admin.php'};</script>";
    }
}