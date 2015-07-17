<?php get_header(); ?>
        <!--news_lower    -->
        <section id="news_lower">
    	<?php if (have_posts()) : ?>
    		<?php while (have_posts()) : the_post(); ?>
            <div class="news_lower_heading">
            <div class="inner clearfix">
                <div class="section-heading-wrap">
                    <h2 class="section-title white">NEWS</h2>
                    <p class="section-note"><?php the_time('Y.m.d'); ?></p>
                </div>
            </div>
            </div>

            <div class="inner">
                <ul class="news_list clearfix">
                    <li> 
                    <dl>
	                    <dt class="news-date clearfix"><span class="news_tags"><?php the_title(); ?></span></dt>
	                    <dd class="news-title"><?php the_content(); ?></dd>
	                    </dl>
                    </li>
                </ul>
            </div>
            <?php endwhile; ?>
        <?php else : ?>
        	<h3>No News</h3>
        <?php endif; ?>
        </section>
<?php get_footer(); ?>