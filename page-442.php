<?php /*
	
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
          <li><a href="https://yi-ji.com/%e4%b8%ad%e6%96%87/" class="active">首页</a></li>
          <li><a href="https://yi-ji.com/关于/">关于</a></li>
          <li class="dropdown"><a href="#"><span>图片</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="https://yi-ji.com/%e8%89%ba%e6%9c%af%e4%bd%9c%e5%93%81%e5%94%ae%e5%8d%96/">艺术作品售卖</a></li>
              <li><a href="https://yi-ji.com/%e8%89%ba%e6%9c%af%e4%bd%9c%e5%93%81%e5%94%ae%e5%8d%96%e4%b9%8b%e7%bb%98%e7%94%bb/">艺术作品售卖之绘画</a></li>
              <li><a href="https://yi-ji.com/%e8%89%ba%e6%9c%af%e4%bd%9c%e5%93%81%e5%94%ae%e5%8d%96%e4%b9%8b%e4%b9%a6%e6%b3%95/">艺术作品售卖之书法</a></li>
              <li><a href="https://yi-ji.com/%e8%89%ba%e6%9c%af%e4%bd%9c%e5%93%81%e5%94%ae%e5%8d%96%e4%b9%8b%e7%93%b7%e5%99%a8/">艺术作品售卖之瓷器</a></li>
              <li><a href="https://yi-ji.com/%e4%b8%ad%e5%9b%bd%e6%96%87%e5%ad%97%e5%b1%95%e7%a4%ba/">中国文字展示</a></li>
              <li><a href="https://yi-ji.com/中国书法/">中国书法</a></li>
              <li><a href="https://yi-ji.com/%e8%8b%b1%e8%af%ad%e6%b8%b8%e5%ad%a6%e7%85%a7%e7%89%87/">英语游学照片</a></li>
              <li><a href="https://yi-ji.com/中文课程/">中文课程</a></li>
              <li><a href="https://yi-ji.com/游学展示/">游学展示</a></li>
              </li>
            </ul>
          </li>
          <li><a href="https://yi-ji.com/服务项目/">服务项目</a></li>
          <li><a href="https://yi-ji.com/%e8%81%94%e7%b3%bb%e6%96%b9%e5%bc%8f/">联系方式</a></li>
          <li><a href="https://yi-ji.com/">English</a></li>
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


  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex flex-column justify-content-center align-items-center" data-aos="fade" data-aos-delay="1500">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6 text-center">
          <h2>艺术作品售卖</h2>
          <a href="https://yi-ji.com/contact/" class="btn-get-started">欢迎与您合作</a>
        </div>
      </div>
    </div>
  </section><!-- End Hero Section -->

  <main id="main" data-aos="fade" data-aos-delay="1500">

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">
      <div class="container-fluid">

        <div class="row gy-4 justify-content-center">
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src="https://yi-ji.com/wp-content/uploads/2023/04/project-small.png" class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="https://yi-ji.com/wp-content/uploads/2023/04/1big.png" title="Gallery 1" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
              </div>
            </div>
          </div><!-- End Gallery Item -->
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src="https://yi-ji.com/wp-content/uploads/2023/04/6s.png" class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="https://yi-ji.com/wp-content/uploads/2023/04/6b.png" title="Gallery 2" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
              </div>
            </div>
          </div><!-- End Gallery Item -->
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src="https://yi-ji.com/wp-content/uploads/2023/04/4s.png" class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="https://yi-ji.com/wp-content/uploads/2023/04/4b.png" title="Gallery 3" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
              </div>
            </div>
          </div><!-- End Gallery Item -->
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src="https://yi-ji.com/wp-content/uploads/2023/04/3s.png" class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="https://yi-ji.com/wp-content/uploads/2023/04/3b.png" title="Gallery 4" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
              </div>
            </div>
          </div><!-- End Gallery Item -->
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src="https://yi-ji.com/wp-content/uploads/2023/04/2s.png" class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="https://yi-ji.com/wp-content/uploads/2023/04/2b.png" title="Gallery 5" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
              </div>
            </div>
          </div><!-- End Gallery Item -->
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src="https://yi-ji.com/wp-content/uploads/2023/04/1s.png" class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="https://yi-ji.com/wp-content/uploads/2023/04/1b.png" title="Gallery 6" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
              </div>
            </div>
          </div><!-- End Gallery Item -->
        </div>

      </div>
    </section><!-- End Gallery Section -->

  </main><!-- End #main -->
	
<?php get_footer(); ?>