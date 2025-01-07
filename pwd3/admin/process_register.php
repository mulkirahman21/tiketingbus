<?php
// Koneksi ke database
$conn = new mysqli("localhost", "root", "", "db_tiketbus");

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Proses data form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $id_type = $_POST['id_type'];
    $id_number = $_POST['id_number'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash password untuk keamanan

    // Masukkan data ke tabel `members`
    $sql = "INSERT INTO members (first_name, last_name, email, phone, id_type, id_number, password) 
            VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssss", $first_name, $last_name, $email, $phone, $id_type, $id_number, $password);

    if ($stmt->execute()) {
        echo "Pendaftaran berhasil! Silakan <a href='login.php'>login</a>.";
    } else {
        echo "Terjadi kesalahan: " . $stmt->error;
    }

    // Tutup statement
    $stmt->close();
}

// Tutup koneksi database
$conn->close();
?>
