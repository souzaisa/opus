<!-- 
    Arquivo para o código do footer da página,
    footer = rodapé da página
-->

<footer class="page-footer">
    <div class="conteudo-footer">
        <img class="logo-footer" src="<?php echo get_template_directory_uri(); ?>/assets/img/opuscare_cor.png" alt="Logo da byron.solutions" title="Logo da byron.solutions">
        <div class="contato-footer">
            <h5>Contato</h5>
            <div class="info-footer">
                <p><?php the_field('e-mail', 24); ?></p>
                <p><?php the_field('telefone', 24); ?></p>
            </div>
        </div>
        <div class="contato-footer">
            <h5>Redes Sociais</h5>
            <div class="icones-footer">
                <a href="<?php the_field('facebook', 24); ?>" target="_blank"><i class="fab fa-facebook-square"></i></a>
                <a href="<?php the_field('instagram', 24); ?>" target="_blank"><i class="fab fa-instagram"></i></a>
                <a href="<?php the_field('whatsapp', 24); ?>" target="_blank"><i class="fab fa-whatsapp"></i></a>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container center">
            <p> Desenvolvido por </p>
            <a href="http://byronsolutions.com" target="_blank" title="Site da byron.solutions">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo_branco.png" alt="Logo da byron.solutions" title="Logo da byron.solutions">
            </a>
        </div>
    </div>
</footer>

<?php wp_footer() ?>
</body>
</html>