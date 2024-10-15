<?php
if (isset($_FILES['files'])) {
    $errors = array();
    $extensions = array("jpg", "jpeg", "png", "gif");

    $totalFiles = count($_FILES['files']['name']);

    for ($i = 0; $i < $totalFiles; $i++) {
        $file_name = $_FILES['files']['name'][$i];
        $file_size = $_FILES['files']['size'][$i];
        $file_tmp = $_FILES['files']['tmp_name'][$i];
        $file_type = $_FILES['files']['type'][$i];

        // Assign the result of explode to a variable
        $file_name_parts = explode('.', $file_name);
        $file_ext = strtolower(end($file_name_parts)); // Now pass the variable to end()

        if (in_array($file_ext, $extensions) === false) {
            $errors[] = "Ekstensi file yang diizinkan adalah JPG, JPEG, PNG, atau GIF untuk file: $file_name.";
        }

        if ($file_size > 5097152) { // 2 MB
            $errors[] = "Ukuran file tidak boleh lebih dari 2 MB untuk file: $file_name.";
        }

        if (empty($errors)) {
            move_uploaded_file($file_tmp, "documents/" . $file_name);
            echo "File $file_name berhasil diunggah.<br>";
        } else {
            echo implode("<br>", $errors);
        }
    }

    if (!empty($errors)) {
        echo implode("<br>", $errors);
    }
}
?>
