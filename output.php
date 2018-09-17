<?php
    $target_dir = "images/";
    $target_file = $target_dir . basename($_FILES["gambar"]["name"]);

    if (move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file)) {
        $files = basename($_FILES["gambar"]["name"]);
        echo "<img src='images/$files' width='500px'>";
    } else {
        echo "Gagal";
    }
?>