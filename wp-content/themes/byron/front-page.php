<!--
 * Arquivo template da página inicial do site, ele é executado quando altera as configurações de leitura
 * ao selecionar para exibir uma página estática.
 *
-->

<?php get_header(); ?>

<main>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <?php endwhile; else : ?>
    	<h1><?php esc_html_e( 'Página não encontrada.' ); ?></h1>
    <?php endif; ?>
</main>

<?php get_footer(); ?>