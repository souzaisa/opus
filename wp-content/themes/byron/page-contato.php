<?php get_header(); ?>
<section class="p-contato container">
    <h5 class="titulo_contato hide-on-med-and-up">Entre em contato conosco!</h5>
    <div class="area-contato">
        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Imagem do Formulário de Contato">
        <div class="forms-contato ">
            <h5 class="titulo_contato hide-on-small-only">Entre em contato conosco!</h5>
			<?php echo do_shortcode( '[wpforms id="5" title="false" description="false"]'); ?>
		</div>
    </div>
</section>
<?php get_footer(); ?>