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
            <h2>关于</h2>
            <p>教授硬笔软笔书法12余年</p>

            <a class="cta-btn" href="https://yi-ji.com/%e8%81%94%e7%b3%bb%e6%96%b9%e5%bc%8f/">欢迎与您合作</a>

          </div>
        </div>
      </div>
    </div><!-- End Page Header -->


<!-- ======= About Section ======= -->
<section id="about" class="about">
      <div class="container">

        <div class="row gy-4 justify-content-center">
          <div class="col-lg-4">
            <img src="https://yi-ji.com/wp-content/uploads/2023/04/about-me.png" class="img-fluid" alt="">
          </div>
          <div class="col-lg-5 content">
            <h2>专业学习书法20余年</h2>
            <p class="fst-italic py-3">
            冀一， 艺名了了， 午棣。 三贤之子。
            </p>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>网站:</strong> <span>www.yi-ji.com</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>城市:</strong> <span>中国,北京市</span></li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>电子邮件:</strong> <span>education@yi-ji.com</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>电子邮件:</strong> <span>18732619044@163.com</span></li>
                </ul>
              </div>
            </div>
            <p class="py-3">
            2009-2012毕业于中央美术学院和艺术研究院中国书法院书法专业。

2013年拜曾翔先生为师， 跟随曾老师。

2017年毕业于国际关系学院英文系

2023年获国际中文教师资格证
            </p>
            <p class="m-0">
            中央美院一刀印会会员

河北燕郊书协会员

书法考级老师

中国硬笔书法协会会员

中国楹联书法协会会员

国际青年艺术家联盟会员
 
 现菲律宾 UC university 攻读教育学专业
            </p>
          </div>
        </div>
      </div>
  
    </section><!-- End About Section -->
    </main><!-- End #main -->
<?php get_footer(); ?>