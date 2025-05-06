<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
</head>
<body>
    <h1>Upload a File</h1>
    <form action="prgm14.php" method="post" enctype="multipart/form-data">
        <input type="file" name="fileToUpload" required>
        <button type="submit" name="submit">Upload</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $targetDir = "forFileHandling/";
        $targetFile = $targetDir . basename($_FILES["fileToUpload"]["name"]);

        if (!is_dir($targetDir)) mkdir($targetDir, 0777, true);

        $fileSize = $_FILES["fileToUpload"]["size"];
        $fileExtension = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
        $allowedExtensions = ['jpg', 'png', 'jpeg', 'gif', 'pdf', 'txt'];

        if (file_exists($targetFile)) {
            echo "File already exists.";
        } elseif ($fileSize > 5000000 || !in_array($fileExtension, $allowedExtensions)) {
            echo $fileSize > 5000000 ? "File is too large." : "Invalid file type.";
        } elseif (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
            echo "File uploaded successfully.";
        } else {
            echo "Error uploading file.";
        }
    }
    ?>
</body>
</html>