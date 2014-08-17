<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
		
		<!-- dns prefetch -->
		<link href="//www.google-analytics.com" rel="dns-prefetch">
		
		<!-- meta -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		
		<!-- icons -->
		<link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
		<link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
			
		<!-- css + javascript -->
		<?php wp_head(); ?>
		<script>
		!function(){
			// configure legacy, retina, touch requirements @ conditionizr.com
			conditionizr()
		}()
		</script>
</head>
<body <?php body_class(); ?>>
	<!--[if lt IE 7]>
        <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a rel="nofollow" href="http://browsehappy.com/">upgrade your browser</a> or <a rel="nofollow" href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
    <![endif]-->
<div id="wrapper">
<header class="clearfix">
	<div class="top-navi clearfix">
		<div class="left-block">
			<a rel="nofollow" href="http://barykada.vn.ua/feed" class="rss-news">Новини та події</a><a href="http://barykada.vn.ua/contacts.htm" class="call-back">Зворотній зв’язок</a>
		</div><!-- left-block -->
		<div class="right-block">
			<ul class="clearfix socialcs">
				<li class="soc-ico-1"><a rel="nofollow" href="#"></a></li>
				<li class="soc-ico-2"><a rel="nofollow" href="#"></a></li>
				<li class="soc-ico-3"><a rel="nofollow" href="#"></a></li>
				<li class="soc-ico-4"><a rel="nofollow" href="#"></a></li>
			</ul><!-- socialcs -->
			<span>Викрийте корупцію, розкажіть про сайт:</span>
		</div><!-- right-block -->
	</div><!-- top-navi -->
		<h2 class="stitle">барикада</h2>
	<a href="/" class="logo"><!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script --><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt=""></a>
    
    <nav class="headernav" role="navigation">
        <?php html5blank_nav(); ?>
    </nav>
    <div class="search-block clearfix">
    	<div class="search-left">
    		<p>використовуйте</p>
    		<span>ПОШУК</span>
    	</div>
    	<div class="search-form">
    		<form method="get" name="searchform" action="<?php bloginfo('url'); ?>/">
    			<input type="text" value="" name="search" placeholder="пошук коррупціонерів">
    			<input src="<?php echo get_template_directory_uri(); ?>/img/search.png" value="submit" type="image">
    		</form>
    	</div><!-- search-form -->
    	<div class="search-right clearfix">
    		<p>на сьогодні <br><span>ВИКРИТО</span> <br>корупційних схем</p>
    		<div class="cont">1098</div><!-- cont -->
    	</div><!-- search-right -->
    </div><!-- search-block -->

</header>
<div class="content-block clearfix">
	<div class="home-header">
		<article class="home-slider">
			<?php if ( function_exists( "easingsliderlite" ) ) { easingsliderlite(); } ?>
		</article><!-- home-slider -->
	    
	  	<article class="home-block2">
			<ul class="clearfix">
				<li>
					<img src="<?php echo get_template_directory_uri(); ?>/img/home-block2-1.jpg" alt="">
					<h4>Призначення та звільнення посадовців</h4>
					<span class="whose">мешканцями Вінниці</span>
					<a href="http://barykada.vn.ua/priznachennya-ta-zvilnennya-posadovciv.htm" class="more">Докладніше</a>
					<span class="result">Проведено: 15 призначень</span>
				</li>
				<li>
					<img src="<?php echo get_template_directory_uri(); ?>/img/home-block2-2.jpg" alt="">
					<h4>Обрання суддів та правоохоронців</h4>
					<span class="whose">місцевою громадою</span>
					<a href="http://barykada.vn.ua/obrannya-suddiv-ta-pravooxoronciv.htm" class="more">Докладніше</a>
					<span class="result">Проведено: 798 обраннь</span>
				</li>
				<li>
					<img src="<?php echo get_template_directory_uri(); ?>/img/home-block2-3.jpg" alt="">
					<h4>Голосування по службовим посадам</h4>
					<span class="whose">в інтернет-мережі</span>
					<a href="http://barykada.vn.ua/golosuvannya-po-sluzhbovim-posadam.htm" class="more">Докладніше</a>
					<span class="result">Проведено: 2000 голосуваннь</span>
				</li>
			</ul>
		</article><!-- home-block2 -->    
	</div><!-- home-header -->