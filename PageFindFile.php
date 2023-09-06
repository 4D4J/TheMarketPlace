<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Download files</title>
</head>
<body>
    <h1>Download files</h1>

    <form action="download.php" method="POST">
        <label for="fichier">Choose a file to download :</label>
        <select name="fichier" id="fichier" required>
            <option value="" selected>Choisissez un fichier</option>
            <?php
            $uploadDir = 'uploads/';

            // Lister tous les fichiers dans le répertoire "uploads"
            $files = scandir($uploadDir);

            // Parcourir la liste des fichiers
            foreach ($files as $file) {
                if ($file != '.' && $file != '..') {
                    echo '<option value="' .$file. '">' .$file. '</option>';
                }
            }
            ?>
        </select>
        <br>
        <button type="submit">Download</button>
        <button type="button" class="change"><a href="./upload.html">Upload page</a>

        
    </form>
</body>
</html>