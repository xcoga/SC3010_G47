<?php
// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Handle the uploaded file
    $filename = $_FILES['file']['name'];
    $fileTmpPath = $_FILES['file']['tmp_name'];

    // Define the target directory for uploads
    $uploadDir = 'uploads/';  // Ensure this directory exists and is writable
    $destinationPath = $uploadDir . basename($filename);

    // Move the file to the designated directory
    if (move_uploaded_file($fileTmpPath, $destinationPath)) {
        echo "File uploaded successfully to $destinationPath!";
    } else {
        echo "Error moving uploaded file.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload File</title>
</head>

<body>
    <h2>Upload a File</h2>
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="file" name="file" required>
        <button type="submit">Upload</button>
    </form>
</body>

</html>
