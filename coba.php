<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari formulir
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);

    // Enkripsi kata sandi
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Simpan data ke dalam file teks
    $file = fopen("users.txt", "a");
    fwrite($file, "Nama: $name, Email: $email, Kata Sandi: $hashed_password\n");
    fclose($file);

    echo "Pendaftaran berhasil!";
} else {
    echo "Metode pengiriman tidak valid.";
}
?>
