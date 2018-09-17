<?php
    $gambar = $_FILES['gambar']['name'];
    $tmp = $_FILES['gambar']['tmp_name'];
    $dir = "images/";
    $target_file = $dir.$gambar;

    if (move_uploaded_file($tmp, $target_file)) {
        echo "<img src='$target_file' width='500px'>";
    } else {
        echo "Gagal Upload..!!";
    }
?>
