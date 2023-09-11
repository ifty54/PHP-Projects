<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if a file was uploaded
    if (isset($_FILES["imageUpload"]) && $_FILES["imageUpload"]["error"] == 0) {
        // Define the upload directory and filename
        $uploadDir = "uploads/"; // Create this directory in your project
        $uploadFile = $uploadDir . basename($_FILES["imageUpload"]["name"]);

        // Check the file type (e.g., only allow image files)
        $imageFileType = strtolower(pathinfo($uploadFile, PATHINFO_EXTENSION));
        $allowedExtensions = ["jpg", "jpeg", "png", "gif"];
        if (in_array($imageFileType, $allowedExtensions)) {
            // Move the uploaded file to the specified directory
            if (move_uploaded_file($_FILES["imageUpload"]["tmp_name"], $uploadFile)) {
                // File uploaded successfully
                // Display the uploaded image
                echo "File uploaded successfully!<br>";
                echo "Uploaded Image:<br>";
                echo '<img src="' . $uploadFile . '" alt="Uploaded Image" width="300">';
            } else {
                echo "Error uploading file.";
            }
        } else {
            echo "Invalid file type. Only JPG, JPEG, PNG, and GIF files are allowed.";
        }
    } else {
        echo "No file was uploaded.";
    }
}
?>

