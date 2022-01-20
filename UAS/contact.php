<?php 
    session_start();
      if(!isset($_SESSION['login_user'])) {
        header("location: login.php");
      }else{
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="contact.css">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">

    <title>Rumah Makan Mekar</title>
  </head>
  <body>
  <!-- Jumbotron -->
    <div class="jumbotron jumbotron-fluid text-center">
        <div class="container">
          <h1 class="display-4"><span class="font-weight-bold">Rumah Makan Mekar</span></h1>
          <hr>
          <p class="lead font-weight-bold">Silahkan Pesan Menu Sesuai Keinginan Anda <br> 
          Enjoy Your Meal</p>
        </div>
      </div>
  <!-- Akhir Jumbotron -->

  <!-- Navbar -->
      <nav class="navbar navbar-expand-lg  bg-dark">
        <div class="container">
        <a class="navbar-brand text-white" href="admin.php"><strong>Seafood</strong> Kota Tegal</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link mr-4" href="index.php">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mr-4" href="daftar_menu.php">DAFTAR MENU</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mr-4" href="pesanan.php">PESANAN</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mr-4" href="contact.php">KONTAK</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mr-4" href="news.php">NEWS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mr-4" href="logout.php">LOGOUT</a>
            </li>
          </ul>
        </div>
       </div> 
      </nav>

        <div class="col-9">
            <div class="article" style="text-align: justify; padding: 10px; border: 2px solid rgb(238, 237, 237); background-color: rgb(255, 255, 255);">
                <div class="box">
                    <p style="color: grey; margin: 8px;">Punya saran, pertanyaan, masukan, kritik, atau menemukan bugs di website ini?</p>
                </div>
                <table>
                    <tr>
                        <td>Email address</td>
                    </tr>
                    <tr>
                        <th><input type="email" name="email" placeholder="Enter email" size="103"></th>
                    </tr>
                        <tr>
                        <td><p style="font-size: 12px; color: rgb(168, 167, 167);">We'll never share your email with anyone else.</p></td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                    </tr>
                    <tr>
                         <th><input type="text" name="nama" placeholder="Nama Anda" size="103"></th>
                    </tr>
                    <tr>
                        <td style="padding-top: 15px; padding-bottom: 3px;"><input type="checkbox" name="berlangganan">Berlangganan Newsletter</td>
                    </tr>
                    <tr>
                        <td>Pesan</td>
                    </tr>
                    <tr>
                        <td><textarea name="pesan" cols="104" rows="6" wrap="hard"></textarea></td>
                    </tr>
                    <tr>
                        <td>
                            <div class="search-container">
                                <button type="submit" style="width: 10%; padding: 9px; border-radius: 5px;">Kirim</button>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
            <div class="col-12">
        <footer class="footer">
                <div class="footer__addr">
                    <h1 class="footer__logo">Isa Mas'ud</h1>
                    <h2>Contact</h2>
                    <address>Tegal, Jawa Tengah, 52111<br>
                    <a class="footer__btn" href="mailto:isamasud26@gmail.com">Email Us</a>
                    </address>
                </div>
            </div>
            
                <div class="legal">
                    <p style="color: wheat;">&copy; Isa Mas'ud 2022</p>
                </div>
        </footer>
    </div>
    </body>
</html>
<?php } ?>