<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Files</title>
</head>
<body>
    <h2>Uploaded Files</h2>
    <table border="1">
        <tr>
            <th>Filename</th>
            <th>Action</th>
        </tr>
        <?php
        // Define the directory to scan
        $uploadDir = 'uploads/';  // Ensure this directory exists

        // Get all files in the upload directory
        $files = scandir($uploadDir);

        // Loop through the files and display them
        foreach ($files as $file) {
            // Skip the special entries '.' and '..'
            if ($file !== '.' && $file !== '..') {
                ?>
                <tr>
                    <td>

            <!--The '?' just signifies the end of the PHP block-->
            <!--htmlspecialchars is to convert special characters into plaintext to prevent scripts in HTML to be executed.
              For example, <script> alert('Hacked') </script>-->

            <!-- The link will redirect straight to the file. PHP will resort to default handling of different files if not specified.
             As such, PHP code will be executed. This is how the webshell will be opened.-->


                        <a href="<?php echo $uploadDir . $file; ?>">
                            <?php echo $file; ?>
                        </a>
                    </td>
                    <td>
                        <a href="<?php echo $uploadDir . htmlspecialchars($file); ?>" download>Download</a>
                    </td>
                </tr>
                <?php
            }
        }
        ?>
    </table>
    <a href="index.php">Go back to Main Page</a>
</body>
</html>
