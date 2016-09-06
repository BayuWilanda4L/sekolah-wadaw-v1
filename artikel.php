<html>
    <head>
        <title>SMAN 1 Wadaw</title>
        <link href="css/style.css" rel="stylesheet" type="text/css" />
        <link href="css/hover.css" rel="stylesheet" type="text/css" />
        </head>
    <body>
        <div id='container'>
            <div id='header'><h1><center><br><a href='#'>SMAN 1 WADAW</a></center></h1></div>
            <div id='navigasi'>
                <h3>
                    <a href='#' class="hvr-bounce-to-bottom"> VISI & MISI</a> | 
                    <a href='#' class='hvr-bounce-to-bottom'>SEJARAH</a>
                </h3>
            </div>
            <div id='kiri'><center><h3>
                 <?php
                include "koneksi.php";
                $id = $_GET['id'];
                $query=mysql_query("SELECT * FROM pengumuman WHERE id='$id' ");
                while($var=mysql_fetch_array($query)){
                echo "$var[judul]";
                echo "</h3></center><hr>";
                echo "$var[isi]";
                }
                ?>
            </div>
            <div id='kanan'><center><h3>SIDEBAR</h3></center><hr>
                <ul><center>
                    <li><a href='#' class='hvr-wobble-horizontal'>Artikel</a></li>
                    <li><a href='#' class='hvr-wobble-horizontal'>Pengumuman</a></li>
                    <li><a href='#' class='hvr-wobble-horizontal'>Galeri</a></li>
                </center></ul>
            </div>
            
            <div id='footer'><center><br><br><br><br><br><br>Designed By : Muhamad Bayu Wilanda</a><p>2016</center></div>
        </div>
    </body>
</html>