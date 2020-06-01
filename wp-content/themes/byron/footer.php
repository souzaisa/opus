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
                <p>mail@mail.com</p>
                <p>(35)999109931</p>
            </div>
        </div>
        <div class="contato-footer">
            <h5>Redes Sociais</h5>
            <div class="icones-footer">
                <i class="fab fa-facebook-square"></i>
                <i class="fab fa-instagram"></i>
                <i class="fab fa-whatsapp"></i>
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