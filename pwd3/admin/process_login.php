<?php
// Koneksi ke database
$host = "localhost";
$username = "root";
$password = "";
$database = "db_tiketbus";

// Membuat koneksi
$conn = mysqli_connect($host, $username, $password, $database);

// Cek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email_phone = $_POST['email_phone'];
    $password = $_POST['password'];

    // Query untuk mencari pengguna berdasarkan email atau nomor telepon
    $sql = "SELECT * FROM members WHERE email = '$email_phone' OR phone = '$email_phone'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);

        // Verifikasi password
        if ($password === $user['password']) { // Pastikan password hashing untuk produksi
            echo "Login berhasil! Selamat datang, " . $user['first_name'];
        } else {
            echo "Password salah!";
        }
    } else {
        echo "Email atau nomor telepon tidak ditemukan!";
    }
}

mysqli_close($conn);
?>
