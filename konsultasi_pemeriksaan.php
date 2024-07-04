
<?php
$file = fopen("form-save.txt", "r");
if ($file) {
    while (($line = fgets($file)) !== false) {
        echo nl2br($line);
    }
    fclose($file);
} else {
    echo "Gagal membuka file form-save.txt";
}
?>
