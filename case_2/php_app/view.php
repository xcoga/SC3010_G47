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

            <!--The '?' is the key for the Web Shell attack. It is used to indicate the beginning of a query string.
            Which is why we can do this 'malicious.php?cmd=ls'-->
                        <a href="<?php echo $uploadDir . htmlspecialchars($file); ?>">
                            <?php echo htmlspecialchars($file); ?>
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
