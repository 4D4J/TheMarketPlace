<?php

if (isset($_FILES['fichier'])) {
    $file = $_FILES['fichier'];


    if ($file['error'] === UPLOAD_ERR_OK) {

        $uploadDir = 'uploads/';
        $uploadFile = $uploadDir . basename($file['name']);

        if (move_uploaded_file($file['tmp_name'], $uploadFile)) {
            echo "File successfully downloaded.";
        } else {
            echo "Error downloading file.";
        }
    } else {
        echo "Error downloading file : " . $file['error'];
    }
}
?>