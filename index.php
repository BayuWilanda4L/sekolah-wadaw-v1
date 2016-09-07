<html>
	<head>
		<title>SMAN 1 Wadaw</title>
		<link href="css/style.css" rel="stylesheet" type="text/css" />
        <link href="css/hover.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="css/cssslider.css" />
	</head>
	<body>
		<div id='container'>
			<div id='header'><h1><center><br><a href=''>SMAN 1 WADAW</a></center></h1></div>
                <center>
                    <div class="csslider">
                    <input type="radio" name="slides" id="slides_1" checked />
                    <input type="radio" name="slides" id="slides_2" />
                    <input type="radio" name="slides" id="slides_3" />
                    <input type="radio" name="slides" id="slides_4" />
                    <input type="radio" name="slides" id="slides_N" />
                    <ul>
                        <li>Content of slide 1</li>
                        <li>Content of slide 2</li>
                        <li>Content of slide 3</li>
                        <li>Content of slide 4</li>
                        <li>Content of slide N</li>
                    </ul>
                <div class="arrows">
                    <label for="slides_1"></label>
                    <label for="slides_2"></label>
                    <label for="slides_3"></label>
                    <label for="slides_4"></label>
                    <label for="slides_N"></label>
                    <label for="slides_1" class="goto-first"></label>
                    <label for="slides_N" class="goto-last"></label>
                </div>
                <div class="navigation">
                    <div>
                        <label for="slides_1"></label>
                        <label for="slides_2"></label>
                        <label for="slides_3"></label>
                        <label for="slides_4"></label>
                        <label for="slides_N"></label>
                    </div>
                </div>
            </div>
        </center>


			<div id='navigasi'>
                <h3>
                     <a href='#' class="hvr-bounce-to-bottom">VISI & MISI</a> | 
                    <a href='#' class='hvr-bounce-to-bottom'>SEJARAH</a>
                </h3>
            </div>
			<div id='kiri'><center><h3>INI ISI PENGUMUMAN</h3></center><hr>
                <?php
                include "koneksi.php";
                $query=mysql_query("SELECT * FROM pengumuman");
                while($var=mysql_fetch_array($query)){
                echo "<h2><z><a href='pengumuman.php?id=$var[id]'>$var[judul]</a></z></h2>";
                echo "<hr></center></td>";
                }
                ?>
                
            </div>
			<div id='kanan'><center><h3>SIDEBAR</h3></center><hr>
                <center><ul class="sidebar">
                <li><a href="#" class='hvr-wobble-horizontal'>Menu 1</a></li>
                <li><a href="#" class='hvr-wobble-horizontal'>Menu 2</a></li>
                <li><a href="#" class='hvr-wobble-horizontal'>Menu 3</a></li>
                <li><a href="#" class='hvr-wobble-horizontal'>Menu 4</a></li>
                </ul></center>
            </div>   
            </div>
			<div id='footer'><center><br><br><br><br><br><br>Designed By : Muhamad Bayu Wilanda</a><p>2016</center></div>
        </div>
	</body>
</html>
