<?php

if(isset($_POST['imgsubmit'])) {
    $file = $_FILES['files'];
    
    $fileName = $_FILES['files']['name'];
    $fileTmpName = $_FILES['files']['tmp_name'];
    $fileSize = $_FILES['files']['size'];
    $fileError = $_FILES['files']['error'];
    $fileType = $_FILES['files']['type'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('jpg', 'jpeg', 'png', 'pdf');

    if (in_array($fileActualExt, $allowed)) {
        if ($fileError === 0) {
            if($fileSize < 750000) {
                $fileNameNew = uniqid('', true).".".$fileActualExt;
                $fileDest = './uploads/'.$fileNameNew;
                move_uploaded_file($fileTmpName, $fileDest);
            } else {
                echo "Your file is to large!";
            }
        } else {
            echo "There was an error uploading your file!";
        }
    } else {
        echo "You cannot upload this type of files!";
    }

}