<?php get_header(); ?>
<div class="flex-boxes">
    <?php if(have_posts()): while(have_posts()): the_post(); ?>
            <a href=<?php the_permalink(); ?> class="flex-box">
                <img src="https://raw.githubusercontent.com/thoughtbot/refills/master/source/images/placeholder_logo_2_dark.png" alt="loggo">
                    <h1 class="flex-title"><?php the_title(); ?></h1>
                <p><?php the_excerpt(); ?></p>
            </a>
        <?php endwhile; ?>
    <?php else: ?>
        <h2>Innehåll saknas här</h2>
    <?php endif; ?>
</div>
<?php get_footer(); ?>