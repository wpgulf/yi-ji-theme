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

<main id="main" data-aos="fade" data-aos-delay="1500">

    <!-- ======= End Page Header ======= -->
    <div class="page-header d-flex align-items-center">
      <div class="container position-relative">
        <div class="row d-flex justify-content-center">
          <div class="col-lg-6 text-center">
            <h2>联系我们</h2>
          </div>
        </div>
      </div>
    </div><!-- End Page Header -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="row gy-4 justify-content-center">

          <div class="col-lg-4">
            <div class="info-item d-flex">
              <i class="bi bi-geo-alt flex-shrink-0"></i>
              <div>
                <h4>地址:</h4>
                <p>中国, 北京</p>
              </div>
            </div>
            </div><!-- End Info Item -->

          <div class="col-lg-4">
            <div class="info-item d-flex">
              <i class="bi bi-envelope flex-shrink-0"></i>
              <div>
                <h4>邮箱:</h4>
                <p>18732619044@163.com</p>
              </div>
            </div>
          </div><!-- End Info Item -->
          <div class="col-lg-4">
            <div class="info-item d-flex">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-wechat" viewBox="0 0 16 16">
  <path d="M11.176 14.429c-2.665 0-4.826-1.8-4.826-4.018 0-2.22 2.159-4.02 4.824-4.02S16 8.191 16 10.411c0 1.21-.65 2.301-1.666 3.036a.324.324 0 0 0-.12.366l.218.81a.616.616 0 0 1 .029.117.166.166 0 0 1-.162.162.177.177 0 0 1-.092-.03l-1.057-.61a.519.519 0 0 0-.256-.074.509.509 0 0 0-.142.021 5.668 5.668 0 0 1-1.576.22ZM9.064 9.542a.647.647 0 1 0 .557-1 .645.645 0 0 0-.646.647.615.615 0 0 0 .09.353Zm3.232.001a.646.646 0 1 0 .546-1 .645.645 0 0 0-.644.644.627.627 0 0 0 .098.356Z"/>
  <path d="M0 6.826c0 1.455.781 2.765 2.001 3.656a.385.385 0 0 1 .143.439l-.161.6-.1.373a.499.499 0 0 0-.032.14.192.192 0 0 0 .193.193c.039 0 .077-.01.111-.029l1.268-.733a.622.622 0 0 1 .308-.088c.058 0 .116.009.171.025a6.83 6.83 0 0 0 1.625.26 4.45 4.45 0 0 1-.177-1.251c0-2.936 2.785-5.02 5.824-5.02.05 0 .1 0 .15.002C10.587 3.429 8.392 2 5.796 2 2.596 2 0 4.16 0 6.826Zm4.632-1.555a.77.77 0 1 1-1.54 0 .77.77 0 0 1 1.54 0Zm3.875 0a.77.77 0 1 1-1.54 0 .77.77 0 0 1 1.54 0Z"/>
</svg>
              <div>
                <h4>微信:</h4>
                <div  id= shakehand >
            <img id=wechatqr src="https://yi-ji.com/wp-content/uploads/2023/04/337777805_604202874926328_4413708787765745826_n.png" alt="Image" >
          </div>
              </div>
            </div>
          </div><!-- End Info Item -->
        </div>

        
        <section id="faq" class="faq section-bg">
<div class="container">
    <div class="row content">
      <div class="col-md-4" data-aos="fade-right">
      <img  id=mainphoto src="https://yi-ji.com/wp-content/uploads/2023/04/main.jpg" class="img-fluid" alt="">
      </div>
      <div class="col-md-8 pt-5" data-aos="fade-up">
      <?php echo do_shortcode('[contact-form-7 id="196" title="Contact form 2"]'); ?>

      </div>
    </div>
    </div>
    </section>
        

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->
<?php get_footer(); ?>