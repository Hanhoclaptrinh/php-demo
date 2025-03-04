<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File upload</title>
</head>
<body>
    <form action="file_upload.php" method="post" enctype="multipart/form-data">
        <h1>Upload File</h1>
        <input type="file" name="filetest" id=""><br>
        <input type="submit" value="Upload" name="submit"><br>
    </form>
</body>
</html>

<?php
if (isset($_POST["submit"])) {
    $target_dir = "image/"; // Thư mục lưu ảnh
    if (!is_dir($target_dir)) {
        echo "This directory does not exist"; // Thư mục không tồn tại
    }

    $file = basename($_FILES["filetest"]["name"]); // Đường dẫn fake (tránh bị tấn công)
    $target_file = $target_dir . $file;
    $uploadOk = 1; // Trạng thái upload
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    $check = getimagesize($_FILES["filetest"]["tmp_name"]);

    if ($check !== false) {
        echo "File is an image - " . $check["mime"] . ".<br>";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }

    // Giới hạn loại file
    $allowed_extensions = ["jpg", "jpeg", "png", "gif"];
    if (!in_array($imageFileType, $allowed_extensions)) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    // // Giới hạn kích thước file (5MB)
    // if ($_FILES["filetest"]["size"] > 5 * 1024 * 1024) {
    //     echo "Sorry, your file is too large.";
    //     $uploadOk = 0;
    // }

    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    } else {
        if (move_uploaded_file($_FILES["filetest"]["tmp_name"], $target_file)) {
            echo "The file " . $file . " has been uploaded.<br>";
            echo '<img src="' . $target_file . '" alt="Uploaded Image" width="500">';
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}
?>
