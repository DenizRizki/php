<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Input</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        h2 {
            color: #333;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Hasil Input</h2>
        <?php 
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $username = htmlspecialchars($_POST['username']); 
            $password = htmlspecialchars($_POST['password']); 
            echo "<p><strong>Nama Anda:</strong> " . $username . "</p>";
            echo "<p><strong>Password Anda:</strong> " . $password . "</p>";
        } else {
            echo "<p>Silakan masukkan data melalui form.</p>";
        }
        ?>
    </div>
</body>
</html>
