<?php
if (isset($_POST['fichier'])) {
    $filename = $_POST['fichier'];

    $filepath = 'uploads/' . $filename;

    if (file_exists($filepath)) {
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="' . $filename . '"');
        readfile($filepath);
    } else {
        echo "The selected file does not exist.";
    }
} else {
    echo "No files selected.";
}
?>
