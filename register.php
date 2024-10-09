<?php
include 'config.php';

if (isset($_POST['submit_register'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_confirm = $_POST['password_confirm'];

    if ($password === $password_confirm) {
        if (registerUser($conn, $email, $password)) {
            // Buat session
            session_start();
            $_SESSION['email'] = $email;
            // Redirect ke halaman yang diinginkan
            header("Location: login.php");
            exit;
        } else {
            // Tampilkan pesan
            $error = "berhasil mendaftar.";
        }
    } else {
        $error = "Konfirmasi password tidak sesuai.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Registrasi</title>
  <link rel="stylesheet" href="style.css">
</head>
<style>
body {
  height: 100vh;
  margin: 0;
  padding: 0;
  display: flex;
  justify-content: center;
  align-items: center;
  background-image: url('assets/img/bagroundlogin.jpg');
  background-size: cover;
  font-family: Arial, sans-serif;
  
}

.container {
  background-color: rgba(255, 255, 255, 0.8);
  border-radius: 19px;
  padding: 20px;
  width: 400px;
  text-align: center;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

input[type="text"],
input[type="email"] {
  width: 100%;
  padding: 10px;
  margin: 10px 0;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  outline: none;
}

input[type="text"],
input[type="password"] {
  width: 100%;
  padding: 10px;
  margin: 10px 0;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  outline: none;
}



input[type="submit"] {
  width: 100%;
  background-color: #3498db;
  color: white;
  padding: 15px;
  margin: 10px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type="submit"]:hover {
  background-color: #2980b9;
}

a {
  color: #3498db;
  text-decoration: none;
}

ul{
    margin:5px 0;
    text-align: left;
    font-family: Arial, sans-serif;
   
    
}

.error {
  background: #f2dede;
  color: #a94442;
  padding: 10px;
  width: 95%;
  border-radius: 5px;
  margin: 20px auto;
}

</style>
<body>
  <div class="container">
    <h1>Registrasi</h1>
    <form action="register.php" method="post">
      <input type="email" name="email" placeholder="Email" required>
      <input type="password" name="password" placeholder="Password" required>
      <input type="password" name="password_confirm" placeholder="Konfirmasi Password" required>
      <input type="hidden" name="id" value="<?php echo $id; ?>">
      <input type="submit" name="submit_register" value="Daftar">
      <?php if (isset($error)) { echo "<p>" . $error . "</p>"; } ?>
    </form>
    <ul>Sudah punya akun?<a href="login.php"><b > Login Di sini</b></a></ul>
  </div>
</body>
</html>