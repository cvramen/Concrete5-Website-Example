<!DOCTYPE html>
<html>
  <head>
  	<?php 
  	    Loader::element('header_required'); 
  	?>
  	<link rel="stylesheet" href="<?php echo $this->getThemePath()?>/css/fho.css" type="text/css">
  	<script src="<?php echo $this->getThemePath()?>/js/fho.js"></script>
  </head>  
	<body id="home">
		<?php 
			$a = new GlobalArea('Main Header FHO');
			$a->display();
		?>		

		<center class="titleH2 fhota">

			<!-- <h2 class="titleH2"> -->
			
				<?php 
				$a = new GlobalArea('Announcements Tool');
				$a->display();
				?>
			
			<!-- </h2> -->
		</center>
		
		<div class="row">
		
			<?php 
				$a = new Area('anmt_compilation');
				$a->display($c);
			?>
			
			&nbsp;
		
		</div>
		<div class="footer adjustFooter">
			<?php 
				$a = new GlobalArea('Bottom Info FHO');
				$a->display();
			?>
		</div>
	<?php 
	    Loader::element('footer_required'); 
	?>
	</body>
</html>