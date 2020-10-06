<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(); ?></title>
    <?php
        wp_head();
    ?>
</head>
<body>
    <header class="website-top">
        <a href="/">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo_negativo.png" alt="UNBOX" title="UNBOX">
        </a>
    </header>
    <div class="container">