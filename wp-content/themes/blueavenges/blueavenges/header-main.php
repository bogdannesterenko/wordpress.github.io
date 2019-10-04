<!doctype html>
<html lang="en">
  <head>
 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <style>
          .preloader{
display: none;
          }
    </style>

    
		<?php wp_head() ?>
  </head>
  <body>
        <div class="preloader">
          <div class="spinner-border text-danger" style="width: 10rem; height: 10rem;" role="status">
           <span class="sr-only">Loading...</span>
            </div>
        </div>

      <button class="scrollToTop"><i class="fas fa-angle-up"></i> </button>
      

 <header class="main-header" <?php echo blueavenges_get_background('header_bg') ?>>
   <nav class="navbar navbar-expand-lg">
  <a class="navbar-brand" href="<?php echo home_url('/') ?>">

		<?php $custom_logo = wp_get_attachment_image_src ( get_theme_mod ('custom_logo') ); if($custom_logo): ?>
		<img src="<?php echo $custom_logo[0] ?>" alt="<?php bloginfo('name') ?>">
	<?php endif; ?>
	<?php bloginfo('name') ?>
		
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <i class="fas fa-bars"></i>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <?php 
    	wp_nav_menu (array(
    		'theme_location' => 'header_menu',
    		'container' => false,
    		'menu_class' => 'navbar-nav ml-auto',

    		))
     ?>

    <!--
    <ul class="navbar-nav ml-auto">
    
      <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
      <li class="nav-item"><a class="nav-link" href="blog.html">Blog</a></li>
      <li class="nav-item"><a class="nav-link" href="#">Features</a></li>
      <li class="nav-item"><a class="nav-link" href="#">Product</a></li>
      <li class="nav-item"><a class="nav-link" href="#">Reviews</a></li>
      <li class="nav-item"><a class="nav-link" href="#">Faq</a></li>
      <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
    </ul>
     -->
  </div>
</nav>
<div class="main-header-text">
  
  <?php if(get_field('header_1')): ?>
  		<h3><?php the_field('header_1') ?></h3>
	<?php endif; ?>
			<?php if(get_field('header_2')): ?>
  		<h4><?php the_field('header_2') ?></h4>
  <?php endif; ?>
  		<?php if(get_field('header_text')): ?>
  <p><?php the_field('header_text') ?></p>
  <?php endif; ?>
<div class="main-header-buttons"> 
<?php if(get_field('header_btn1')) :
$link = get_field('header_btn1');
 ?>
<a href="<?php echo esc_url($link['url']); ?>" class="btn btn-pink rounded-pill"><?php echo esc_html($link['title']); ?></a>
<?php endif; ?>
<?php if(get_field('header_btn2')) :
$link = get_field('header_btn2');
 ?>
<a href="<?php echo esc_url($link['url']); ?>" class="btn btn-violet rounded-pill"><?php echo esc_html($link['title']); ?></a>
<?php endif; ?>
</div>
</div>
 </header>
