<?php 
session_start();
?>
<script>
    if ( window.history.replaceState ) {
    window.history.replaceState( null, null, window.location.href );
}
</script>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style2.css">
    <link rel="icon" href="gambar/hotel.png">
    <title>Sign In</title>
</head>
<body>

            <form action="" method="POST" class="login-email">
            <div class="login-box">
                <div class="logo-container">
                <a href="" class="logo" id="warna">
                <span></span>Fhidityaa<span>Hotel</span><span></span>
                </a>
                </div>
                <h1>Login</h1>
                <div class="textbox">
                    <i class='bx bx-user'></i>
                    <input type="text" placeholder="Username" name="username" value="" required>
                </div>

                <div class="textbox">
                    <i class='bx bx-lock-alt'></i>
                    <input type="password" placeholder="Password" name="password" value="" required>
                </div>

                <button name="login" class="btn">Sign In</button>

            <?php
            $username = array('user', 'admin');
            $password = array('user123', 'admin123');



            if (isset($_POST['login'])) {
                if ($_POST['username'] == $username[0] && $_POST['password'] == $password[0]){
                    $_SESSION["username"] = $username[0];
                    $_SESSION["priv"] = 'user'; 
                    header("Location: user.php");
                }
                elseif ($_POST['username'] == $username[1] && $_POST['password'] == $password[1]){
                    $_SESSION["username"] = $username[1]; 
                    $_SESSION["priv"] = 'admin';
                    header("Location: admin.php");
                }
                else {
                    echo("<p class='login-register-text'>Username atau password anda salah!.</p>");
                }
            }
            elseif (isset($_SESSION['username'])){
                header("Location: .");
            }
        ?> 
        </form>
        <br>Belum mempunyai akun? <a class="daftar" href="proses_daftar.php" style="text-decoration:none">Sign Up</a>
    </div>
</body>
</html>