<html>
	<head>
		<title>SMAN 1 Wadaw</title>
		<link href="css/style.css" rel="stylesheet" type="text/css" />
        <link href="css/hover.css" rel="stylesheet" type="text/css" />
		<link href="css/jquery.ennui.contentslider.css" rel="stylesheet" type="text/css" media="screen,projection" />
	</head>
	<body>
		<div id='container'>
			<div id='header'><h1><center><br><a href=''>SMAN 1 WADAW</a></center></h1></div>
			<!--MULAI DARI SINI-->
			<div id="slider">            
                <div id="one" class="contentslider">
                    <div class="cs_wrapper">
                        <div class="cs_slider">                        
                            <div class="cs_article">                            	
                                <div class="left">
                                    <?php
                                        include "koneksi.php";
                                        $query=mysql_query("SELECT * FROM artikel WHERE id='7'");
                                        while($var=mysql_fetch_array($query)){
                                        echo "<h2>$var[judul]</h2>";
                                        echo "<p>$var[deskripsi]</p>";
                                        echo "<div class='button'>
                                        <a href='artikel.php?id=$var[id]'>[Read More]</a>
                                        </div>";

                                        }
                                    ?>
                                    
                                    
                               		</div>
                                	<div class="right">
                               		<a href="#" target="_blank"><img src="images/slider/templatemo_slide02.jpg" alt="Template 1" /></a>
									</div>
                                                                
                            </div><!-- End cs_article -->
                            
                            <div class="cs_article">
                                <div class="left">
                                    <h2>Judul Ke2</h2>
                                    <p>blup blup blupp blupp </p>
                                    
                                    <div class="button"><a href="#" target="_blank">[Read more]</a></div>
                               	</div>
                                <div class="right">
                                <a href="#" target="_parent"><img src="images/slider/templatemo_slide01.jpg" alt="Template 2" /></a>
                                </div>
                            </div><!-- End cs_article -->
                            
                            <div class="cs_article">
                                <div class="left">
                                    <h2>Judul Artikel Ke-2</h2>
                                    <p>blup blup blup </p>                                   
                                    <div class="button"><a href="#" target="_blank">Read more</a></div>
                               	</div>
                                <div class="right">
                                <a href="#" target="_blank"><img src="images/slider/templatemo_slide04.jpg" alt="Template 4" /></a>
                                </div>
                            </div><!-- End cs_article -->
                      
                        </div><!-- End cs_slider -->
                    </div><!-- End cs_wrapper -->
                </div><!-- End contentslider -->
                
                <!-- Site JavaScript -->
                <script type="text/javascript" src="js/jquery-1.3.1.min.js"></script>
                <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
                <script type="text/javascript" src="js/jquery.ennui.contentslider.js"></script>
                <script type="text/javascript">
                    $(function() {
                    $('#one').ContentSlider({
                    width : '920px',
                    height : '200px',
                    speed : 800,
                    easing : 'easeInOutBack'
                    });
                    });
                </script>
                <script src="js/jquery.chili-2.2.js" type="text/javascript"></script>
                <script src="js/chili/recipes.js" type="text/javascript"></script>
                <div class="cleaner"></div>
   </div>
</div>
       <!-- SAMPE SINI -->



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
                <ul class="slider">
                <li><a href="#"><img src="slider/images/01.jpg" alt="Slide 1"></a></li>
                <li><a href="#"><img src="slider/images/02.jpg" alt="Slide 2"></a></li>
                <li><a href="#"><img src="slider/images/03.jpg" alt="Slide 3"></a></li>
                <li><a href="#"><img src="slider/images/04.jpg" alt="Slide 4"></a></li>
                </ul>
            </div>   
            </div>
			<div id='footer'><center><br><br><br><br><br><br>Designed By : Muhamad Bayu Wilanda</a><p>2016</center></div>
        </div>
	</body>
</html>