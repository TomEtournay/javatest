<?php
if(isset($_FILES['file']) && $_FILES['file']['error'] == 0) {
    $name = $_FILES['file']['name'];
    $tmp_name = $_FILES['file']['tmp_name'];
    $target_dir = "upload/";
    $target_file = $target_dir . basename($name);

    if(move_uploaded_file($tmp_name, $target_file)) {
        echo "Le fichier " . basename($name) . " a été téléchargé avec succès.";
    } else {
        echo "Une erreur est survenue lors du téléchargement du fichier.";
    }
}
?>
