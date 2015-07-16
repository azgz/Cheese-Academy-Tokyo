<?php get_header(); ?>
    
    <!--news    -->
    <section id="news" class="contents-box">
        <h2 class="section-title yellow">NEWS</h2>
        <p class="section-note">お知らせ・更新情報</p>
        <div class="inner">
            <dl class="news-list clearfix">
        	<?php if (have_posts()) : ?>
        		<?php while (have_posts()) : the_post(); ?>
                <dt class="news-list--date"><?php the_time('Y.m.d'); ?></dt>
                <dd class="news-list--note"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></dd>
        		<?php endwhile; ?>
        	<?php else : ?>
        		<h3>No News</h3>
        	<?php endif; ?>
            </dl>
            <p class="news-note__more"><a href="news.html">ニュース一覧を見る</a></p>
        </div>
    </section>
    
    <!--#feature-->
    <section id="feature" class="contents-box bg-orange">
        <h2 class="section-title white">FEATURE</h2>
        <p class="section-note">特徴</p>
        <div class="inner">
            <ul class="feature-list clearfix">
                <li class="clearfix">
                    <h3 class="point-heading white">POINT<span class="point-count white">1</span></h3>
                    <p class="white">
                        <span class="point-topics">一流職人によるチーズ作り指導</span>
                        基本習得後は2ヶ月間チーズ職人の指導で自家製チーズ完成を目指します。
                    </p>
                </li>
                <li class="clearfix">
                    <h3 class="point-heading white">POINT<span class="point-count white">2</span></h3>
                    <p class="white">
                        <span class="point-topics">960万円までの<br />
                        創業支援出資</span>
                        創業志望者をチーズアカデミー<br />
                        大学院が支援（審査あり）します。
                    </p>
                </li>
                <li class="last clearfix">
                    <h3 class="point-heading white">POINT<span class="point-count white">3</span></h3>
                    <p class="white">
                        <span class="point-topics">初心者歓迎授業料後払い</span>
                        丸暗記ではなく、創りながら。<br />
                        初心者のための授業料後払い制度です。
                    </p>
                </li>
            </ul>
        </div>
    </section>
    <!--end #feature-->
    
    <!--#concept    -->
    <section id="concept" class="contents-box">
        <h2 class="section-title yellow">CONCEPT</h2>
        <p class="section-note">コンセプト</p>
        <p class="contents-catch">世界を震わすチーズを創ろう。</p>
        <p class="contents-summary">
            今、世界中の人たちが足りないと感じている、栄養素があります。<br />
            その栄養は『カルシウム』と『マグネシウム』<br />
            小さい子供の成長に欠かせないカルシウム<br />
            イライラをなくすには欠かせないカルシウム<br />
            今まで食べたことのないチーズから取れるカルシウム<br />
            そんな悩みを抱えているあなたこそ、<br />
            プロレベルのチーズ作りスキルを持つべきだと思うのです。<br />
        </p>
        <p class="contents-summary">
            できるだけ多くの若い人に本格的なチーズ作りのスキルを学ぶ機会を創りたい。<br />
            そして願わくば、この場所から世界中の多くの人がおいしいと言えるような新感覚のチーズが生まれてほしい。
        </p>
        <p class="contents-summary">
            そんな思いでデジタルハリウッドが<br />
            チーズづくりのためだけの場所「チーズアカデミーTOKYO」をつくりました。
        </p>
        <p class="contents-summary">
            最初は全くの初心者でOK。<br />
            まずは純粋にチーズ作りを楽しんでいただくことから始めて、<br />
            最後には現役で活躍する一流農家のサポートを受けながら<br />
            オリジナルのチーズを開発〜完成させます。
        </p>
        <p class="contents-summary">
            卒業後の「就職」はもちろん「独立」まで、さまざまなサポート企業や<br />
            チーズアクセラレーターがバックアップ。
        </p>
        <p class="contents-summary">さあ、まもなく【CHEESE】への扉がひらかれます。</p>
    </section>
    <!--end #concept-->
    
    <!--#cource    -->
    <section id="gallery" class="contents-box">
        <div class="contents-heading bg-yellow">
            <h2 class="section-title">COURCE</h2>
            <p class="section-note white">コース紹介</p>
        </div>
        <div class="inner">

            <ul class="cource-list">
                <li class="clearfix">
                    <div class="cource-cap">
                        <img src="<?php echo get_template_directory_uri(); ?>/image/cource.png" alt="" />
                    </div>
                    <div class="cource-summary">
                        <h4>LABコース</h4>
                        <p>
                            週末集中型の初心者対象のチーズ職人養成講座です。
                            週末集中型の初心者対象のチーズ職人養成講座です。
                            週末集中型の初心者対象のチーズ職人養成講座です。
                            週末集中型の初心者対象のチーズ職人養成講座です。
                            週末集中型の初心者対象のチーズ職人養成講座です。
                        </p> 
                    </div>
                </li>
                <li class="clearfix">
                    <div class="cource-cap-reverse">
                        <img src="<?php echo get_template_directory_uri(); ?>/image/cource.png" alt="" />
                    </div>
                    <div class="cource-summary-reverse">
                        <h4>LABコース</h4>
                        <p>
                            週末集中型の初心者対象のチーズ職人養成講座です。
                            週末集中型の初心者対象のチーズ職人養成講座です。
                            週末集中型の初心者対象のチーズ職人養成講座です。
                            週末集中型の初心者対象のチーズ職人養成講座です。
                            週末集中型の初心者対象のチーズ職人養成講座です。
                        </p> 
                    </div>
                </li>     
            </ul>
        </div>
    </section>
    <!--end #cource-->

    <!--#gallery    -->
    <section id="gallery" class="contents-box">
        <div class="contents-heading bg-yellow">
            <h2 class="section-title">GALLERY</h2>
            <p class="section-note white">ギャラリー</p>
        </div>
        <div class="inner">
            <ul class="gallery-list clearfix">
                <li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/image/gallery01.jpg" alt="" /></a></li>
                <li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/image/gallery01.jpg" alt="" /></a></li>
                <li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/image/gallery01.jpg" alt="" /></a></li>
                <li class="no-white-space"><a href=""><img src="<?php echo get_template_directory_uri(); ?>/image/gallery01.jpg" alt="" /></a></li>
                <li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/image/gallery01.jpg" alt="" /></a></li>
                <li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/image/gallery01.jpg" alt="" /></a></li>
                <li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/image/gallery01.jpg" alt="" /></a></li>
                <li class="no-white-space"><a href=""><img src="<?php echo get_template_directory_uri(); ?>/image/gallery01.jpg" alt="" /></a></li>
                <li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/image/gallery01.jpg" alt="" /></a></li>
                <li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/image/gallery01.jpg" alt="" /></a></li>
                <li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/image/gallery01.jpg" alt="" /></a></li>
                <li class="no-white-space"><a href=""><img src="<?php echo get_template_directory_uri(); ?>/image/gallery01.jpg" alt="" /></a></li>
            </ul>
        </div>
    </section>
    <!--end #gallery-->
<?php get_footer(); ?>