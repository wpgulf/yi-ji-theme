<?php 
	
	/*
		This is the template for the hedaer
		
		@package yijitheme
	*/
	
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<title><?php bloginfo( 'name' ); wp_title(); ?></title>
		<meta name="description" content="<?php bloginfo( 'description' ); ?>">
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<?php if( is_singular() && pings_open( get_queried_object() ) ): ?>
			<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<?php endif; ?>
		<?php wp_head(); ?>
		
		
		
	</head>
	
<body <?php body_class(); ?>>
 <!-- ======= Header ======= -->
 <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid d-flex align-items-center justify-content-between">

      <a href="http://yi-ji.com/" class="logo d-flex align-items-center  me-auto me-lg-0">
        <i class="bi bi-camera"></i>
        <h1>YiJi</h1>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="http://yi-ji.com/" class="active">Home</a></li>
          <li><a href="https://yi-ji.com/about-me/">About</a></li>
          <li class="dropdown"><a href="#"><span>Gallery</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="https://yi-ji.com/art-work-selling/">Art Work Selling</a></li>
              <li><a href="https://yi-ji.com/artwork-selling-painting/">Artwork selling painting</a></li>
              <li><a href="https://yi-ji.com/artwork-show-calligraphy/">Artwork selling calligraphy</a></li>
              <li><a href="https://yi-ji.com/artwork-selling-china/">Artwork selling china</a></li>
              <li><a href="https://yi-ji.com/chinese-show/">Chinese show</a></li>
              <li><a href="https://yi-ji.com/chinese-calligraphy-show/">Chinese Calligraphy Show</a></li>
              <li><a href="https://yi-ji.com/english-exchange-photos/">English Exchange photos</a></li>
              <li><a href="https://yi-ji.com/chinese-classes/">Chinese Classes</a></li>
              <li><a href="https://yi-ji.com/exchange-studying-moment/">Exchange Studying Moment</a></li>
              </li>
            </ul>
          </li>
          <li><a href="https://yi-ji.com/services/">Services</a></li>
          <li><a href="https://yi-ji.com/contact/">Contact</a></li>
          <li><a href="https://yi-ji.com/%e4%b8%ad%e6%96%87/">中文</a></li>
        </ul>
      </nav><!-- .navbar -->

      <div class="header-social-links">
        <a href="https://twitter.com/cuteyiji?lang=en" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="https://www.facebook.com/profile.php?id=100064263030812" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="https://www.instagram.com/miss_hell999/?fbclid=IwAR3tA3dlywUOLNGZplZA589GrChgLV71_71ce9-Puo2FcT5DV3wu_OUEN8c" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="https://www.youtube.com/@calligraphyyiji2695" class="linkedin"><i class="bi bi-youtube"></i></i></a>
      </div>
      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->



	
	
	
	
	
	
	
	