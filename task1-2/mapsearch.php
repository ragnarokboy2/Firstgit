		<?php
		require('includes/top.php');
		?>
		<div id="mid-slideshow">
		<div class="container">
			<!-- Top Navigation https://www.google.com/search -->
			<div id="boxgallery" class="boxgallery" data-effect="effect-1">
				<div class="panel"><img src="img/shadowfiend.jpg" alt="Image 1"/></div>
				<div class="panel"><img src="img/mirana.jpg" alt="Image 2"/></div>
				<div class="panel"><img src="img/ursa.jpg" alt="Image 3"/></div>
				<div class="panel"><img src="img/juggernaut.jpg" alt="Image 4"/></div>
			</div>
			<header class="codrops-header">
				<h1> Err0r404 <span>Map Search Engine</span></h1>
				<nav class="codrops-demos">
					<div id="googlesearch">
					<form id="searchengine" method="get" action="search.php" target="_blank" >
					<!-- PHP part to get the datalist -->
					<input list="q" name='q'>
					<datalist id="q" name='q'>
					<?php				
					$sql1="select * from mapsearchdetails ORDER BY searchcount DESC";
					$result=mysqli_query($conn,$sql1);
					while($row=mysqli_fetch_array($result))
					$rows[]=$row;
					foreach($rows as $row){
					echo "<option value='". $row['keyword']."' id='q'>
					";
					}
					
	?>
					</datalist>
					
					<!-- PHP part to get the datalist -->
						<input type="submit" value="Map Search" name="searchtype">
					</div>
				</nav>
			</header>
		</div><!-- /container -->
		</div>
		<?php
		require('includes/bottom.php');
		?>