<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Modern - Aplikasi CRUD</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
    
    <link rel="stylesheet" href="style-login.css">
</head>
<body>
    <div class="login-container">
        <div class="login-form">
            <form action="proses_login.php" method="post">
                <div class="title">Selamat Datang</div>
                <div class="title">Dimas Sanjaya-221011401269</div>
                <div class="subtitle">Silakan login untuk melanjutkan</div>

                <div class="input-box">
                    <i class="fas fa-user"></i>
                    <input type="text" name="username" placeholder="Masukkan username Anda" required>
                </div>

                <div class="input-box">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="password" placeholder="Masukkan password Anda" required>
                </div>
                
                <div class="button">
                    <input type="submit" value="LOGIN">
                </div>

                <?php if(isset($_GET['pesan']) && $_GET['pesan'] == "gagal"){
                    echo "<p class='pesan-error'>Login gagal! Username atau password salah.</p>";
                } ?>
            </form>
        </div>
    </div>
</body>
</html>