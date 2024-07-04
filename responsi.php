<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $tanggal = $_POST['tanggal'];
    $hari = $_POST['hari'];
    $waktu = $_POST['waktu'];

    $file = fopen("form-save.txt", "a");
    if ($file) {
        fwrite($file, "Nama: " . $nama . "\n");
        fwrite($file, "Tanggal: " . $tanggal . "\n");
        fwrite($file, "Hari: " . $hari . "\n");
        fwrite($file, "Waktu: " . $waktu . "\n\n");
        fclose($file);

        header("Location: konsultasi_pemeriksaan.php");
        exit();
    } else {
        echo "File tidak dapat dibuka.";
    }
} else {
    echo "Invalid request method.";
}
?>
