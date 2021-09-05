<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="style.css">
  <title> Daftar-Produk </title>
</head>

<body> 
    <button class="login-button" onclick="document.getElementById('login-box').style.display='block'"></button>
    <div id="login-box" class="modal">
      <form class="modal-content" action="login.php" method="post">
        <div class="login-form">
          <label for="username">Username</label>
          <input type="text" placeholder="Masukkan username" name="username" required>

          <label for="password">Password</label>
          <input type="password" placeholder="Masukkan password" name="password">

          <button class="submit-button">Submit</button>
        </div>
      </form>
    </div>

    
    <script>
      let loginBox = document.getElementById("login-box");

      window.onclick = function(event) {
        if(event.target == loginBox){
          loginBox.style.display = "none";
        }
      }
    </script>
</body>

</html>