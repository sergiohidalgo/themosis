<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:image" content="{url imagen}">
    <meta property="og:title" content="{titulo}">
    <meta property="og:url" content="{url de la pagina}">
    <meta property="og:description" content="{description de la pagina}">
    <meta name="twitter:card" content="{url imagen}}">
    <meta name="twitter:site" content="@loremipsum">
    <meta name="twitter:creator" content="@loremipsum">
    <meta name="twitter:title" content="{titulo}">
    <meta name="twitter:description" content="{descripcion}">
    <meta name="twitter:image:src" content="{url imagen}">
    <meta name="format-detection" content="telephone=no">
    <?php wp_head() ?>
    <title>Title</title>
    <link href="{{themosis_assets()}}/styles.css" rel="stylesheet">
</head>
<body>

    @yield('content')

<?php wp_footer(); ?>
</body>
</html>
