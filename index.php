<?php $s1=1; //about
	$s2=1; //news
	$s3=1; //featured
	$s4=0; //services
	$s5=0; //contact
     ?>
<!DOCTYPE html>
<html lang="en">
<?php $page='home'; ?>
	<?php include('partials/head.php'); ?>
	<?php include('partials/styles.php'); ?>


<body>

    <header>
		
		<?php include('partials/header.php'); ?>		
		<?php include('partials/slider.php'); ?>

	</header>

	<!-- Main container-->
	<div class="container">
		<?php if ($s1!=0) { include('partials/about.php'); } ?>
		<?php if ($s2!=0) { include('partials/news.php'); } ?>
		<?php if ($s3!=0) { include('partials/featured.php'); } ?>
		<?php if ($s4!=0) { include('partials/services.php'); } ?>
		<?php if ($s5!=0) { include('partials/contact.php'); } ?>

		
	</div>
    <!--/ Main container-->

	<?php include('partials/footer.php'); ?>		
	<?php include('partials/js.php'); ?>

</body>
</html>