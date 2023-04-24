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
<main>
      <!-- ======= End Page Header ======= -->
      <div class="page-header d-flex align-items-center">
      <div class="container position-relative">
        <div class="row d-flex justify-content-center">
          <div class="col-lg-6 text-center">
            <h2>服务项目</h2>
          </div>
    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container">

        <div class="section-header">
          <h2 id= pricecode >价目表</h2>
          <p>检查我可爱的定价</p>
        </div>

        <div class="row gy-4 gx-lg-5">

          <div class="col-lg-12">
            <div class="pricing-item d-flex justify-content-between">
              <h3>中文课程听说读写包括书法</h3>
              <h4>一对一线上授课200元/1.5小时</h4>
            </div>
          </div><!-- End Pricing Item -->

          <div class="col-lg-12">
            <div class="pricing-item d-flex justify-content-between">
              <h3>中文课程听说读写包括书法</h3>
              <h4>一对多群集体授课100/1.5小时</h4>
            </div>
          </div><!-- End Pricing Item -->

          <div class="col-lg-12">
            <div class="pricing-item d-flex justify-content-between">
              <h3>英语课 </h3>
              <h4>一对一线上授课200元/1.5小时</h4>
            </div>
          </div><!-- End Pricing Item -->

          <div class="col-lg-12">
            <div class="pricing-item d-flex justify-content-between">
              <h3>英语课</h3>
              <h4>一对多集体线上授课100元/1.5小时</h4>
            </div>
          </div><!-- End Pricing Item -->

          <div class="col-lg-12">
            <div class="pricing-item d-flex justify-content-between">
              <h3>书画作品销售 32*32cm 之内1000元（国内含运费，国外运费不含）</h3>
            </div>
          </div><!-- End Pricing Item -->

          <div class="col-lg-6">
            <div class="pricing-item d-flex justify-content-between">
              <h3>瓷器售卖</h3>
            </div>
          </div><!-- End Pricing Item -->
          <div class="col-lg-6">
            <div class="pricing-item d-flex justify-content-between">
              <h4>价格不一。不含运费</h4>
            </div>
          </div><!-- End Pricing Item -->

        </div>
    </section><!-- End Pricing Section -->
    </main><!-- End #main -->
<?php get_footer(); ?>