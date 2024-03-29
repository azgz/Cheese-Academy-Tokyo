<!DOCTYPE html>
<html>
<head>
    <title><?php bloginfo('name'); ?></title>
    <meta charset="UTF-8">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery-2.1.0.min.js"></script>
    <script>
    $(function(){
        $(window).on("ready resize",function(){
        $(".slides").css({"width":1440,
                         "position":"relative",
                          left:-(1440-$(window).width())/2
                         });
        });
    });
    </script>
</head>
<body>

<div class="wrapper">
    <!-- header  -->
    <header id="header">
       <div class="inner clearfix">
        <h1 class="logo"><img src="<?php echo get_template_directory_uri(); ?>/image/logo-top.png" alt="Cheese Academy Tokyo" /></h1>
        <ul class="note_wrap">
            <li>CHEESE DEVELOPMENT</li>
            <li>GROWTH CHEESE</li>
            <li>CHEESE PERSPECTIVE</li>
            <li>CHEESE GENERATOR</li>
        </ul>
        </div>
    </header>

    <!--　main_visual   -->
<?php if(is_home() || is_front_page()): ?>
    <section id="main_visual" class="slidesWrap">
        <div class="inner">
            <h2 class="catch">授業後払いのチーズ職人養成学校<br />『チーズアカデミーTOKYO』はじまります。</h2>
        </div>
        <div class="slider">
            <ul class="slides clearfix">
                <li><img src="<?php echo get_template_directory_uri(); ?>/image/photo-mini.png" alt="" /></li>
                <li><img src="<?php echo get_template_directory_uri(); ?>/image/photo-mini.png" alt="" /></li>
                <li class="center"><img src="<?php echo get_template_directory_uri(); ?>/image/photo-main.png" alt="" /></li>
                <li><img src="<?php echo get_template_directory_uri(); ?>/image/photo-mini.png" alt="" /></li>
                <li><img src="<?php echo get_template_directory_uri(); ?>/image/photo-mini.png" alt="" /></li>
            </ul>
        </div>

        <div class="inner">
            <nav class="global_Nav">
                <ul class="nav_wrap clearfix">
                    <li class="nav_item"><a href="#">HOME<br />-ホーム-</a></li>
                    <li class="nav_item"><a href="#">NEWS<br />-お知らせ・更新情報-</a></li>
                    <li class="nav_item"><a href="#">FEATURE<br />-特徴-</a></li>
                    <li class="nav_item"><a href="#">COURCE<br />-コース紹介-</a></li>
                    <li class="nav_item"><a href="#">GALLERY<br />-ギャラリー-</a></li>
                    <li class="nav_item"><a href="#">ENTRY<br />-説明会に申し込む-</a></li>
                </ul>
            </nav>
        </div>
        
    </section>
<?php else : ?>
    <section class="nav_lower">
        <div class="inner">
            <nav class="global_Nav">
                <ul class="nav_wrap clearfix">
                    <li class="nav_item"><a href="#">HOME<br />-ホーム-</a></li>
                    <li class="nav_item"><a href="#">NEWS<br />-お知らせ・更新情報-</a></li>
                    <li class="nav_item"><a href="#">FEATURE<br />-特徴-</a></li>
                    <li class="nav_item"><a href="#">COURCE<br />-コース紹介-</a></li>
                    <li class="nav_item none"><a href="#">GALLERY<br />-ギャラリー-</a></li>
                    <li class="nav_item last"><a href="#">ENTRY<br />-説明会に申し込む-</a></li>
                </ul>
            </nav>
        </div>
    </section>
<?php endif; ?>