<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<title><?php syl_title(); ?></title>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.0/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php syl_get_template_url( 'style.css' ); ?>" media="screen" />
	<link href="https://fonts.googleapis.com/css?family=Crimson+Text:400italic" rel="stylesheet" type="text/css">	<script type="text/javascript" src="<?php echo plugins_url();?>/see-you-later/templates/ppm/js/supersized.core.3.2.1.min.js"></script>
        <script type="text/javascript">
            jQuery(function(jQuery){
                jQuery.supersized({
                    slides  :      [ {image : 'http://clients.plusplusminus.co.za/leandrikers/preview/wp-content/uploads/2015/09/bg.jpg'} ]
                });
            });
        </script>

	<?php syl_header(); ?>
</head>
<body>


<table style="width: 100%; height: 100%;">
<div class="background"> </div>
 <tr>
    <td style="text-align: center; vertical-align: middle;">
         <div id="header" class="col-full">
		<div id="logo">
			<?php syl_logo(); ?>
			<br><br><br>
			<h3 class="site-title">
				<?php syl_title(); ?>
			</h3>
		</div><!-- /#logo -->
	</div><!-- /#header -->
    </td>
 </tr>

</table>
<?php syl_footer(); ?>
</body>
</html>