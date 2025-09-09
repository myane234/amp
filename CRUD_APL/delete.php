<?php
include 'connection.php';

$id = intval($_GET['id']);
mysqli_query($conn, "DELETE FROM orank WHERE id=$id LIMIT 1");

// jangan langsung header, tampilkan pesan dulu
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Hapush</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f5f0ff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .box {
            background: #ffffff;
            padding: 30px 40px;
            border-radius: 15px;
            text-align: center;
            box-shadow: 0 4px 20px rgba(0,0,0,0.15);
            max-width: 400px;
            width: 90%;
        }
        .success {
            color: #6a0dad;
            font-size: 22px;
            font-weight: bold;
            margin-bottom: 10px;
        }
        .info {
            color: #444;
            margin-bottom: 20px;
        }
        a {
            display: inline-block;
            padding: 10px 20px;
            border-radius: 8px;
            background: #6a0dad;
            color: #fff;
            text-decoration: none;
            font-weight: bold;
            transition: 0.3s;
        }
        a:hover {
            background: #dc0808ff;
        }
    </style>
    <!-- redirect otomatis 3 detik -->
    <meta http-equiv="refresh" content="1;url=index.php">
</head>
<body>
    <div class="box">
        <div class="success">😁 Data succesfully deleted!</div>
        <div class="info">Wait A Minute...</div>
        <a href="index.php">Back Now</a>
    </div>
</body>
</html>
