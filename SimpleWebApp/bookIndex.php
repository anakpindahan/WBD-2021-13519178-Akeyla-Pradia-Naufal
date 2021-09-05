<?php
  session_start();
  if(!isset($_SESSION['username'])){
    header('"Location: bookLogin.php');
  }
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="style.css">
  <title> Daftar-Produk </title>
</head>

<body> 
    <nav class="navbar">

    </nav>

    <header> 
        <h1> Daftar Produk</h1>
    </header>
    
    <div class="product-container" id="product-container">
    </div>

    <button class="login-button" onclick="openShoppingCart();"></button>
    <div class="shopping-cart" id="shopping-cart">
      <div class="modal-content">
        <table id="pembelian">

        </table>
      </div>
    </div>

    <script src="script.js"></script>
    
    <button class="logout-button" onclick="document.getElementById('logout-box').style.display='block'"></button>
    <div class="logout-box" id="logout-box">
      <div class="modal-content">
        <h3>Apakah Anda yakin ingin keluar?</h3>
        <a href="logout.php">Ya, saya ingin keluar</a>
        <a href="bookIndex.php">Tidak</a>
      </div>
    </div>
    <script>
      let logoutBox = document.getElementById("logout-box");
      let shoppingCart = document.getElementById("shopping-cart");

      window.onclick = function(event) {
        if(event.target == logoutBox || event.target == shoppingCart){
          event.target.style.display = "none";
        }
      }
    </script>

    <script>
      function openShoppingCart(){
        document.getElementById('shopping-cart').style.display='block';
        let table = document.getElementById("pembelian");
        table.innerHTML = '';
        let row = table.insertRow(-1);
        let cell1 = row.insertCell(0);
        let cell2 = row.insertCell(1);
        cell1.innerText = "Judul Buku";
        cell2.innerText = "Banyak Buku";
        for(let i = 0; i < 7; i++){
          let qty = document.getElementById("quantity-"+(i));
          let title = document.getElementById("title-"+(i));
          let bookQuantity = qty.value;
          let bookTitle = title.innerText;
          if(bookQuantity > 0){
            let row = table.insertRow(-1);
            let cell1 = row.insertCell(0);
            let cell2 = row.insertCell(1);
            cell1.innerText = bookTitle;
            cell2.innerText = bookQuantity;
          }
        }
      }
    </script>
</body>

</html>




