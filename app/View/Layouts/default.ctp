<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'Medical M.');
?>
<?php echo $this->Html->docType('html5'); ?>
<html>
	<head>
		<?php echo $this->Html->charset(); ?>

		<title>
			<?php echo $cakeDescription ?>:
			<?php echo $title_for_layout; ?>
		</title>
		<?php
			echo $this->Html->meta('icon');
			echo $this->Html->meta(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no']);
			echo $this->fetch('meta');

			echo $this->Html->css('bootstrap.min.css');
			echo $this->Html->css('//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css');
			echo $this->Html->css('ionicons.min.css');
<<<<<<< HEAD
			echo $this->Html->css('jscal2.css');
=======
			echo $this->Html->css(array('jscal2.css'));
>>>>>>> diseño
			echo $this->Html->css('//fonts.googleapis.com/css?family=Droid+Serif:400,700,700italic,400italic');
			echo $this->Html->css('CakeAdminLTE');

			echo $this->Html->script(array('validaciones.js'));
			echo $this->Html->script(array('jscal2.js'));
			echo $this->Html->script(array('es.js'));


		?>
	</head>

	<body class="skin-blue fixed">

		<?php echo $this->element('top_menu'); ?>
		<div class="wrapper row-offcanvas row-offcanvas-left">
			<?php echo $this->element('left_sidebar'); ?>

			<!-- Right side column. Contains the navbar and content of the page -->
		    <aside class="right-side">
		    	<section class="content-header">
				    <h1>
				        <!-- <?php echo $title_for_layout; ?> -->
				        Control Panel
				    </h1>
				    <ol class="breadcrumb">
				        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
				        <li class="active"><?php echo $title_for_layout; ?></li>
				    </ol>
				</section>
				<section class="content">
				<?php echo $this->Session->flash(); ?>
				<?php echo $this->fetch('content'); ?>
				</section>
			</aside><!-- /.right-side -->


		</div><!-- ./wrapper -->



		<?php
			echo $this->Html->script('jquery.min');
			echo $this->Html->script('bootstrap.min');
			echo $this->Html->script('CakeAdminLTE/app');
			echo $this->fetch('script');
		?>

	</body>

</html>
