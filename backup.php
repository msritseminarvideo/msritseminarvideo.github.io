<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>MSRIT CSE  8th Sem Seminar Video 2015</title>
		<meta name="description" content="MSRIT CSE  8th Sem Seminar Video " />
		<meta name="keywords" content="google getting started gallery, image gallery, image grid, template, masonry" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="Logo%20MSRIT.png">
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<script src="js/modernizr.custom.js"></script>
	</head>
	<body>
		<div class="container">
			<header class="clearfix">
			<!--	<span>Blueprint <span class="bp-icon bp-icon-about" data-content="The Blueprints are a collection of basic and minimal website concepts, components, plugins and layouts with minimal style for easy adaption and usage, or simply for inspiration."></span></span>
				<h1>Google Grid Gallery</h1>
<nav>
				<!--	<a href="http://tympanus.net/Blueprints/FullWidthTabs/" class="bp-icon bp-icon-prev" data-info="previous Blueprint"><span>Previous Blueprint</span></a>
					<!--a href="" class="bp-icon bp-icon-next" data-info="next Blueprint"><span>Next Blueprint</span></a-->
				<!--	<a href="http://tympanus.net/codrops/?p=18699" class="bp-icon bp-icon-drop" data-info="back to the Codrops article"><span>back to the Codrops article</span></a>
					<a href="http://tympanus.net/codrops/category/blueprints/" class="bp-icon bp-icon-archive" data-info="Blueprints archive"><span>Go to the archive</span></a>
				
				</nav>-->
			
			<span>MSRIT Computer Science and Engineering</span>
                
                <h1>8th Semester Seminar Video Presentation</h1>
				 
                <nav>
                  <center><span>Click on Thumbnail to Open Video <br> Stop The Video Before Closing</span> </center> <a href="http://tympanus.net/codrops/?p=18699" target="_blank" class="bp-icon bp-icon-archive" data-info="Design by CoDrops &nbsp; &nbsp; Edited by Sankha Karfa" data-content="The Blueprints are a collection of basic and minimal website concepts, components, plugins and layouts with minimal style for easy adaption and usage, or simply for inspiration."><span>Design</span></a>
					
                    
                </nav>
			</header>
			<div>
				<?php

//	function youtube_id_from_url($url) {
//    $pattern = 
//        '%^# Match any youtube URL
//        (?:https?://)?  # Optional scheme. Either http or https
//        (?:www\.)?      # Optional www subdomain
//        (?:             # Group host alternatives
//          youtu\.be/    # Either youtu.be,
//        | youtube\.com  # or youtube.com
//          (?:           # Group path alternatives
//            /embed/     # Either /embed/
//          | /v/         # or /v/
//          | /watch\?v=  # or /watch\?v=
//          )             # End path alternatives.
//        )               # End host alternatives.
//        ([\w-]{10,12})  # Allow 10-12 for 11 char youtube id.
//        $%x'
//        ;
//    $result = preg_match($pattern, $url, $matches);
//    if (false !== $result) {
//        return $matches[1];
//    }
//    return false;
//}
//
//$row = 1;
//								if (($handle = fopen("test.csv", "r")) !== FALSE) {
//									while ((($data = fgetcsv($handle,1000, ",")) !== FALSE) and ($row<76))  {
//										//$num = count($data);
//										//echo "<p> $num fields in line $row: <br /></p>\n";
//										if($row!=1)
//										{
//											//echo'<p>';
//											echo youtube_id_from_url($data[4]);
//											echo '<br>';
//										}
//											
//										$row++;
//										
//									}
//									fclose($handle);
//									};
 $not='Notice';
								?>
			
			</div>
			<div id="grid-gallery" class="grid-gallery">
				<section class="grid-wrap">
					<ul class="grid">
						<li class="grid-sizer"></li>
						<!--
						<li class="grid-sizer"></li><!-- for Masonry column width -->
					<!--	<li>
                            <figure>
                                //http://stackoverflow.com/questions/6556559/youtube-api-extract-video-id
								<img src="http://img.youtube.com/vi/M2-nXbi3qmk/default.jpg" alt="img01"/>
								<figcaption><h3><h2>Communication between Arduino, RaspberryPi and Server</h2></h3><p>Name: Sidharth Panicker, Madhu Venkatesh<br>USN: 1MS11CS105, 1MS11CS057</p></figcaption>
							</figure>
						</li> -->
								<?php
								$row = 0;
								if (($handle = fopen("test.csv", "r")) !== FALSE) {
									while ((($data = fgetcsv($handle,1000, ",")) !== FALSE) and ($row<72))  {
										//$num = count($data);
										//echo "<p> $num fields in line $row: <br /></p>\n";
										if($row!=0 )
										{
											echo '<li> <figure>';
											//$y=$row;
											if($data[6]==$not)
											{
												echo '<img src="'.$data[8].'" alt="img01"/><figcaption>';
											}
											else
											{
												
											echo '<img src="http://img.youtube.com/vi/'.$data[6].'/0.jpg" alt="img01"/><figcaption>';}
											echo '<h3>'.$row.': '.$data[0].'</h3>';
											if($data[1]){echo '<b>Team: <span style="color: red;">'.$data[1].'</span></b><br>';}
											echo 'Name: '.$data[2].' <br><br>USN: '.$data[3].'</figcaption></figure></li>
											';
										}
											
										$row++;
										
										
									}
									fclose($handle);
								}
								?>

						
						
						
                    </ul>
                </section>
                <section class="slideshow">
					<ul>
<!--
						<li>
							<figure>
								<figcaption>
									<h3>Arduino</h3>
									<p>Kale chips lomo biodiesel stumptown Godard Tumblr, mustache sriracha tattooed cray aute slow-carb placeat delectus. Letterpress asymmetrical fanny pack art party est pour-over skateboard anim quis, ullamco craft beer.</p>
								</figcaption>
								<iframe width="560" height="315" src="https://www.youtube.com/embed/M2-nXbi3qmk?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
							</figure>
						</li>
-->
						<?php
								$row = 0;
								if (($handle = fopen("test.csv", "r")) !== FALSE) {
									while ((($data = fgetcsv($handle,1000, ",")) !== FALSE) and ($row<72))  {
										//$num = count($data);
										//echo "<p> $num fields in line $row: <br /></p>\n";
										if($row!=0)
										{
											echo '<li> <figure>';
											echo '<figcaption> <h3 class="ok" data-content="By '.$data[9].'">'.$data[0].'</h3>';
											echo '<p>'.$data[5].'</p></figcaption>';
											if($data[6]==$not)
											{
												echo '<iframe width="560" height="315" src="'.$data[7].'"allowfullscreen></iframe>';
											}
											else
											{
											echo '<iframe width="560" height="315" src="https://www.youtube.com/embed/'.$data[6].'?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>'; }
											echo '<center> <span style="color: red;">Stop The Video Before Closing!</span></center></figure></li>
											
											';
											
										}
											
										$row++;
										
									}
									fclose($handle);
								}
								?>
                    </ul>
                <nav>
						<span class="icon nav-prev"></span>
						<span class="icon nav-next"></span>
						<span class="icon nav-close"></span>
					</nav>
					<div class="info-keys icon">Navigate with arrow keys</div>
				</section><!-- // slideshow -->
			</div><!-- // grid-gallery -->
		</div>
		<script src="js/imagesloaded.pkgd.min.js"></script>
		<script src="js/masonry.pkgd.min.js"></script>
		<script src="js/classie.js"></script>
		<script src="js/cbpGridGallery.js"></script>
		<script>
			new CBPGridGallery( document.getElementById( 'grid-gallery' ) );
		</script>
	</body>
</html>
