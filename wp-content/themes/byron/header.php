<!--
    Arquivo para o código do header da página,
    header = cabeçalho do site
-->

<?php
// Inserir: caso tenha alterado o nome da variavel do redux, alterar o nome aqui tbm
if (class_exists('Redux')) {
    global $redux_fields;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> <?php get_bloginfo('name');?> </title>
    <meta name="description" content="<?php get_bloginfo('description');?>">
    <link rel="icon" type="image/png" href="">

    <!-- Apple Web App Meta -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">

    <?php wp_head();?>

</head>
<body>
    <header>
        <!-- Inserir: Insira o conteúdo do Header da página -->
        <div class="navbar-fixed">
            <nav>
                <div class="nav-wrapper container">
                    <a href="#" class="brand-logo">Logo</a>
                    <a href="#" data-target="mobile-demo" class="sidenav-trigger left"><i class="material-icons">menu</i></a>
                    <?php
                        $args = array(
                            "theme_location"    => "primary",
                            "container"         => "ul",
                            "menu_class"        => "right hide-on-med-and-down"
                        );
                        wp_nav_menu( $args );
                    ?>
                </div>
            </nav>
        </div>
        <?php
            $args = array(
                "theme_location"    => "primary",
                "container"         => "ul",
                "menu_id"           => "mobile-demo",
                "menu_class"        => "sidenav"
            );
            wp_nav_menu( $args );
        ?>
    </header>