
<html>
<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>MSRIT CSE  8th Sem Seminar Video 2015</title>
		<meta name="description" content="MSRIT CSE  8th Sem Seminar Video " />
		<meta name="keywords" content="MSRIT CSE  8th Sem Seminar Video Presentation" />
		<meta name="author" content="Sankha Karfa" />
		<link rel="shortcut icon" href="favicon.png">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
		<link rel="stylesheet" href="css/Simple.css">
	</head>

<body>
<header>
			
			
	</header>
<div class="row">
  <div class="col-sm-12 col-md-12" id="top">
	  <center><img src="Logo%20MSRIT.png" width=20% alt='Msrit Logo'/>

		  <h1><b>MSRIT <br>Computer Science <br>&amp;<br> Engineering</b></h1>
		  <h2>8th Semester Seminar Video Presentation</h2></center>
	  
	  
	</div>
	<div class="col-sm-6 col-md-4">
<!--
    <div class="input-group">
      <input type="text" class="form-control" placeholder="Search for...">
      <span class="input-group-btn">
        <button class="btn btn-default" type="button">Go!</button>
      </span>
    </div> input-group 
  
-->

	<div class="dropdown">
  <button class="btn btn-lg btn-primary dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
    Go To
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
	  <?php 
	  $row = 0;
								if (($handle = fopen("test.csv", "r")) !== FALSE) {
									while ((($data = fgetcsv($handle,1000, ",")) !== FALSE) and ($row<72))  {
										if($row!=0)
										{
																					
											echo '<li role="presentation"><a role="menuitem" tabindex="-1" class="smoothScroll" href="#'.$row.'">'.$row.': '.$data[0].'</a></li>';
										
   
										}
											
										$row++;
										
									}
									fclose($handle);
								}

								?>
  </ul>
</div>
		
	</div>		
  <div class="col-sm-6 col-md-4">
    
		  <?php
								$row = 0;
								if (($handle = fopen("test.csv", "r")) !== FALSE) {
									while ((($data = fgetcsv($handle,1000, ",")) !== FALSE) and ($row<72))  {
										if($row!=0)
										{
											echo '<div class="thumbnail" id='.$row.'> ';
											//echo '<figcaption> <h3 class="ok" data-content="By '.$data[9].'">'.$data[0].'</h3>';
											//echo '<p>'.$data[5].'</p></figcaption>';
											if($data[6]=='Notice')
											{
												echo '<img src="'.$data[8].'" alt="img01"/>';
											}
											else
											{
												
											echo '<img src="http://img.youtube.com/vi/'.$data[6].'/0.jpg" alt="img01"/>';}
//											   
//											if($data[6]=='Notice')
//											{
//												echo '<iframe width="100%" height="315" src="'.$data[7].'"allowfullscreen></iframe>';
//											}
//											else
//											{
//											echo '<iframe width="100%" height="315" src="https://www.youtube.com/embed/'.$data[6].'?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>'; }
											  
											  echo '<div class="caption"><p>';												
											echo '<h3>'.$row.': '.$data[0].'</h3>';
											if($data[1]){echo '<b>Team: <span style="color: red;">'.$data[1].'</span></b><br>';}
											echo '<b>Name:</b> '.$data[9].' <br><b>USN:</b> '.$data[10].'<br><br> '.$data[5].' </p>
											';
		  
       echo '<p> <center><a href="'.$data[4].'" target="_blank" class="btn btn-default btn-lg" style="background: red; color: white;" role="button"><i class="glyphicon glyphicon-play"></i>Video Link</a>&nbsp;<a href="#top"  class="smoothScroll btn btn-default btn-lg" role="button"><i class="glyphicon glyphicon-arrow-up"></i>TOP</a></center></p>
	 
      </div>
    </div>';
										}
											
										$row++;
										
									}
									fclose($handle);
								}
								?>
     
  </div>
</div>
	<footer><center>Made with &#128151; By Sankha Karfa 2015</center><br> &nbsp;</footer>
	<script src="http://code.jquery.com/jquery-2.1.3.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
		<script src="js/smoothscroll.js"></script>

</body>

</html>