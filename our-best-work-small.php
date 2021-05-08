<section class="our-best-work-section">
		<div id="nav-2" class="our-best-work">
			<h2 class="section__title revealator-slideup">our best work</h2>
				 <?php 
				 $fo=opendir("images/galery");
				 echo "<div class='best-works'>";
				 while($file=readdir($fo))
				 {
				 	$file=strtolower($file);
				 	if(in_array(pathinfo($file,PATHINFO_EXTENSION),array('jpg','jpeg','gif','png')))
				 	{
				 		echo"
				 		<div class='best-works__item '>
				 			<img class='lazy' src='data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==' data-src='images/galery/tiny/$file'>
			 			</div>
				 		";
				 	}
				 }
				 echo "</div>";
				?>
			<div  class="button black__button revealator-slideup"><a href="galery-page.php">go to galery</a></div>
		</div>
</section>