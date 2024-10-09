<?php
include 'config.php';

$error = ""; // Inisialisasi pesan error

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = $_POST['email'];
  $password = $_POST['password'];

  $sql = "SELECT id, email, password FROM users WHERE email = '$email'";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if (password_verify($password, $row['password'])) {
      session_start();
      $_SESSION['email'] = $email;
      header("location:Home.html ");
      exit;
    } else {
      $error = "Password salah";
    }
  } else {
    $error = "Pengguna tidak ditemukan";
  }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
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
    <h1>Login</h1>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
      <input type="email" name="email" placeholder="Email" required>
      <input type="password" name="password" placeholder="Password" required>
      <input type="submit" name="submit" value="Login">
      <?php if ($error) { echo "<p class='error'>" . $error . "</p>"; } ?>
    </form>
    <ul>tidak punya akun?<a href="register.php"><b > Register Di sini</b></a></ul>
  </div>
</body>
</html>