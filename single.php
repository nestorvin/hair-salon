<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title($sep = ''); ?></title>
    <?php wp_head(); ?>
</head>

<body>
    <header style="background-image: url(<?php header_image(); ?>);">
    </header>


    <?php get_footer(); ?>