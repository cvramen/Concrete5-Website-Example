<!DOCTYPE html>
<html>
  <head>
  	<?php 
  	    Loader::element('header_required'); // include the header.php file in the page, this allows the admin to access Concrete5 functionality from any page on the site
  	 ?>
  	<link rel="stylesheet" href="<?php echo $this->getThemePath()?>/css/fho.css" type="text/css">
  	<script src="<?php echo $this->getThemePath()?>/js/fho.js"></script> <!-- instructs the CMS to insert the file path of the Theme files -->
  </head>  
	<body id="home">
		<?php 
			$a = new GlobalArea('Main Header FHO'); //Create area that can be modified in Concrete5's WYSIWYG editor but is accessible to other pages
			$a->display();
		?>
		<div class="container">
			<div id="modal-Patton" class="modalbg"> <!-- Clicking on a "modalbg" element causes a modal dialog to appear on the page by executing JavaScript. The JavaScript code is in fho.js, for reference purposes only -->
			  <div class="dialog">
			    <a href="#" title="Close" class="close">X</a>
			  	<h2>Patton</h2>
			  	<ul class="noStyleList">
					<li><?php $a = new Area('modalPattonLink1'); $a->display($c);?></li> <!-- Insert into the page an area that will be editable by Concrete5 in its WYSIWYG editor. This can be any HTML -->
					<li><?php $a = new Area('modalPattonLink2'); $a->display($c);?></li>
					<li><?php $a = new Area('modalPattonLink3'); $a->display($c);?></li>
				</ul>
				</div>
			</div>
			<div id="modal-Abrams" class="modalbg">
			  <div class="dialog">
			    <a href="#" title="Close" class="close">X</a>
			  	<h2>Abrams</h2>
			  	<ul class="noStyleList">
					<li><?php $a = new Area('modalAbramsLink1'); $a->display($c);?></li>
					<li><?php $a = new Area('modalAbramsLink2'); $a->display($c);?></li>
					<li><?php $a = new Area('modalAbramsLink3'); $a->display($c);?></li>
				</ul>
				</div>
			</div>
			<div id="modal-LionofBabylon" class="modalbg">
			  <div class="dialog">
			    <a href="#" title="Close" class="close">X</a>
			  	<h2>LionofBabylon</h2>
			  	<ul class="noStyleList">
					<li><?php $a = new Area('modalLionofBabylonLink1'); $a->display($c);?></li>
					<li><?php $a = new Area('modalLionofBabylonLink2'); $a->display($c);?></li>
					<li><?php $a = new Area('modalLionofBabylonLink3'); $a->display($c);?></li>
				</ul>
				</div>
			</div>
			<div id="modal-Tifon" class="modalbg">
			  <div class="dialog">
			    <a href="#" title="Close" class="close">X</a>
			  	<h2>Tifon</h2>
			  	<ul class="noStyleList">
					<li><?php $a = new Area('modalTifonLink1'); $a->display($c);?></li>
					<li><?php $a = new Area('modalTifonLink2'); $a->display($c);?></li>
					<li><?php $a = new Area('modalTifonLink3'); $a->display($c);?></li>
				</ul>
				</div>
			</div>
			<center class="titleH2 fhota">
			<!-- <h2 class="titleH2"> -->
				<?php 
				$a = new GlobalArea('Announcements Tool');
				$a->display();
				?>
			<!-- </h2> -->
			</center>
			

			<center>
				<a href="index.php" class="btn-orange-arrow">Back</a>
				<?php 
					$a = new Area('Title');
					$a->display($c);
				?> 
			</center>
			<div class="cards">
				<div class="section group">     
					<span class="card col span_1_of_4 showAnimation">
						<?php 
								$a = new Area('title2'); 
								$a->display($c);
						?>
						<span class="card-summary">
							<?php
								$a = new Area('description2');
								$a->display($c);
							?>
						</span>
						<span class="card-meta">
							<?php 
								$a = new Area('hover2');
								$a->display($c);
							?>
						</span>
					</span>
				</div>
			</div>
			
		</div>
		<div class="footer adjustFooter">
	    	<?php 
				$a = new GlobalArea('Bottom Info FHO');
				$a->display();
			?>
		</div>
	<!-- </div> -->
	<?php 
	    Loader::element('footer_required'); 
	?>
	</body>
</html>
