<?php
if (isset($_POST['submit'])) {
    $uploadDir = 'uploads/'; // Directory where the files will be uploaded
    $uploadFile = $uploadDir . basename($_FILES['file']['name']);
    echo $uploadFile;
    // Check if the file is uploaded without errors
    if ($_FILES['file']['error'] === UPLOAD_ERR_OK) {
        // Validate file size (optional)
        if ($_FILES['file']['size'] > 5000000) { // Limit size to 5MB
            echo "File is too large.";
        } else {
            // Move the file to the specified directory
            if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadFile)) {
                echo "The file " . htmlspecialchars(basename($_FILES['file']['name'])) . " has been uploaded successfully.";
            } else {
                echo "File upload failed.";
            }
        }
    } else {
        echo "Error uploading file.";
    }
} else {
    echo "No file uploaded.";
}
?>
