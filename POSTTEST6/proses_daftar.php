<?php 
session_start();
// if (isset($_SESSION['username'])) {
//     header("Location: berhasil_login.php");
// }
// ?>

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
    <link rel="stylesheet" type="text/css" href="style2.css">
    <link rel="icon" href="gambar/hotel.png">
    <title>Sign Up</title>
</head>
<body>

            <form action="" method="POST" enctype="multipart/form-data">
            <div class="login-box">
                <div class="logo-container">
                <a href="" class="logo" id="warna">
                <span></span>Fhidityaa<span>Hotel</span><span></span>
                </a>
                </div>
                <h1>Sign Up</h1>
                <div class="textbox">
                    <i class='bx bx-user'></i>
                    <input type="text" placeholder="Username" name="username" value="" required>
                </div>

                <div class="textbox">
                    <i class='bx bx-lock-alt'></i>
                    <input type="email" placeholder="Email" name="email" value="" required>
                </div>

                <div class="textbox">
                    <i class='bx bx-user'></i>
                    <input id="phone" type="tel" name="phone" placeholder="08xx xxxx xxxx" pattern="[0-9]{4} [0-9]{4} [0-9]{4}" onKeyPress="if(this.value.length==15) return false;" required>
                </div>

                <div class="textbox">
                    <i class='bx bx-lock-alt'></i>
                    <input type="password" placeholder="Password" name="password" value="" required>
                </div>

                <button name="submit" class="btn">Submit</button>
            
            <?php
                if (isset($_POST['submit'])) {
                    $_SESSION["username"] = $_POST['username'];
                    $_SESSION["priv"] = 'user';
                    header("Location: user.php");
                }
            ?>
        </form>
        <br>Sudah memiliki akun? <a  class="daftar" href="proses_login.php" style="text-decoration:none">Sign In</a>
    </div>



</body>
</html>