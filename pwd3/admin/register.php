<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar</title>
    <style>
        /* Reset CSS */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #181818;
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .register-container {
            background-color: #242424;
            border-radius: 8px;
            width: 90%;
            max-width: 400px;
            padding: 20px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.5);
        }

        .register-container h2 {
            text-align: center;
            color: #fff;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            font-size: 14px;
            margin-bottom: 5px;
        }

        .form-group input, .form-group select {
            width: 100%;
            padding: 10px;
            border: 1px solid #555;
            border-radius: 5px;
            background-color: #333;
            color: #fff;
            font-size: 14px;
        }

        .form-group input:focus, .form-group select:focus {
            outline: none;
            border-color: red;
        }

        .form-group button {
            width: 100%;
            padding: 10px;
            background-color: red;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }

        .form-group button:hover {
            background-color: darkred;
        }
    </style>
</head>
<body>
    <div class="register-container">
        <h2>Daftar</h2>
        <form action="process_register.php" method="POST">
            <div class="form-group">
                <label for="first_name">Nama Depan</label>
                <input type="text" id="first_name" name="first_name" placeholder="Masukkan nama depan" required>
            </div>

            <div class="form-group">
                <label for="last_name">Nama Belakang</label>
                <input type="text" id="last_name" name="last_name" placeholder="Masukkan nama belakang" required>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Masukkan email" required>
            </div>

            <div class="form-group">
                <label for="phone">Telephone</label>
                <input type="text" id="phone" name="phone" placeholder="Masukkan nomor telepon" required>
            </div>

            <div class="form-group">
                <label for="id_type">Identitas</label>
                <select id="id_type" name="id_type" required>
                    <option value="KTP">KTP</option>
                    <option value="SIM">SIM</option>
                    <option value="Passport">Passport</option>
                </select>
            </div>

            <div class="form-group">
                <label for="id_number">Nomor Identitas</label>
                <input type="text" id="id_number" name="id_number" placeholder="Masukkan nomor identitas" required>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Masukkan password" required>
            </div>

            <div class="form-group">
                <button type="submit">Submit</button>
            </div>
        </form>
    </div>
</body>
</html>
