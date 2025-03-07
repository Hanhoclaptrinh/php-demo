<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File upload</title>
    <!-- <link rel="stylesheet" href="file_upload.css"> -->
</head>
<body>
    <div class="container">
        <form action="file_upload.php" method="post" enctype="multipart/form-data">
            <h1>Upload File</h1>
            <input type="file" name="filetest" id=""><br>
            <input type="submit" value="Upload" name="submit"><br>
        </form>
    </div>

<?php
if (isset($_POST["submit"])) {
    $target_dir = "image/"; // Thư mục lưu ảnh
    if (!is_dir($target_dir)) {
        echo "<div class='message'>This directory does not exist.</div>"; // Thư mục không tồn tại
    }

    $file = basename($_FILES["filetest"]["name"]); // Đường dẫn fake (tránh bị tấn công)
    $target_file = $target_dir . $file;
    $uploadOk = 1; // Trạng thái upload
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    $check = getimagesize($_FILES["filetest"]["tmp_name"]);

    if ($check !== false) {
        echo "<div class='message'>File is an image - " . $check["mime"] . ".</div><br>";
        $uploadOk = 1;
    } else {
        echo "<div class='message'>File is not an image.</div>";
        $uploadOk = 0;
    }

    // Giới hạn loại file
    $allowed_extensions = ["jpg", "jpeg", "png", "gif"];
    if (!in_array($imageFileType, $allowed_extensions)) {
        echo "<div class='message'>Sorry, only JPG, JPEG, PNG & GIF files are allowed.</div>";
        $uploadOk = 0;
    }

    // // Giới hạn kích thước file (5MB)
    // if ($_FILES["filetest"]["size"] > 5 * 1024 * 1024) {
    //     echo "<div class='message'>Sorry, your file is too large.</div>";
    //     $uploadOk = 0;
    // }

    if ($uploadOk == 0) {
        echo "<div class='message'>Sorry, your file was not uploaded.</div>";
    } else {
        if (move_uploaded_file($_FILES["filetest"]["tmp_name"], $target_file)) {
            echo "<div class='message'>The file " . $file . " has been uploaded.</div><br>";
            echo '<img src="' . $target_file . '" alt="Uploaded Image" class="uploaded-image">';
        } else {
            echo "<div class='message'>Sorry, there was an error uploading your file.</div>";
        }
    }
}
?>
</body>
</html>
