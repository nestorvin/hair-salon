<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</head>

<body>
    <?php get_header(); ?>

    <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
        <div class="card-header">Header</div>
        <div class="card-body">
            <h5 class="card-title">Primary card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
    </div>

    <div class="container">
        <div class="row text-center">

            <div class="col-xl-6">Full size</div>
            <div class="col-6">Half size</div>
            <div class="col-6">Half size</div>
            <div class="col-4">Third size</div>
            <div class="col-4">Third size</div>
            <div class="col-4">Third size</div>

        </div>

        <div class="vh-100 d-flex align-items-center">

            <div class="progress w-100">
                <div class="progress-bar progress-bar-striped bg-success progress-bar-animated" role="progressbar"  aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
            </div>

        </div>
    </div>
    <script>


    </script>
<?php wp_footer(); ?>