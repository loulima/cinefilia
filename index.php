<?php get_header(); ?>

<main>
    <h1>Bem-vindo ao Meu Blog!</h1>
    <p>Aqui estão os últimos posts:</p>

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article>
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <p><?php the_excerpt(); ?></p>
        </article>
    <?php endwhile; else : ?>
        <p>Nenhum post encontrado.</p>
    <?php endif; ?>
</main>

<?php get_footer(); ?>
