<?php get_header(); 
$services = get_posts([
    'post_type' => 'Serviços',
    'posts_per_page' => -1,
    'orderby' => 'date',
    'order' => 'ASC'
]);?>
<section class="p-servicos">
    <h4>Conheça nossos serviços</h4>
    <div class="area-servicos">
    <?php
            foreach ($services as $service) : ?>
                <div class="card hoverable">
                    <div class="card-image">
                        <img src="<?php echo get_the_post_thumbnail_url($service->ID); ?>">
                    </div>
                    <h5><?php echo $service->post_title; ?></h5>
                    <p class="subtitulo"><?php the_field('subtitulo', $service->ID); ?></p>
                    <div class="card-content">
                        <p><?php echo $service->post_content; ?></p>
                    </div>
                    <div class="botao-servicos center-align">
                        <a class="center-align waves-effect waves-light btn">Entre em Contato</a>
                    </div>    
                </div>
    <?php endforeach; ?>
    </div>

</section>
<?php get_footer(); ?>