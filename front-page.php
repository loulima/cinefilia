<?php get_header(); ?>

<main class="container mx-auto px-4 py-8 bg-slate-200">
    <h1 class="text-[24px]  font-semibold  font-maitree mb-6 ">Últimos Posts</h1>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <?php
        $query = new WP_Query([
            'post_type'      => 'post', 
            'posts_per_page' => 9,   
        ]);

        if ($query->have_posts()) :
            while ($query->have_posts()) : $query->the_post();
        ?>
<article class="post-card">
    <a href="<?php the_permalink(); ?>">
        <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium'); ?>" alt="<?php the_title(); ?>" class="post-image">
    </a>
    <div class="p-4">
        <h2 class="post-title">
            <a href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
            </a>
        </h2>
    </div>
</article>

        <?php
            endwhile;
            wp_reset_postdata();
        else :
            echo '<p class="text-gray-600">Nenhum post encontrado.</p>';
        endif;
        ?>
    </div>
</main>

<?php get_footer(); ?>
