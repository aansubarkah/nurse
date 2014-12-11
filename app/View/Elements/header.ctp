<?php
/**
 * @var View $this
 *
 */
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-COMPATIBLE" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Perawat</title>
    <?php
    echo $this->Html->meta('icon');

    echo $this->Html->css(array('bootstrap.min', 'bootstrap-theme.min'));
    echo $this->Html->script(array('jquery.min', 'bootstrap.min'));

    echo $this->fetch('meta');
    echo $this->fetch('css');
    echo $this->fetch('script');
    ?>
</head>
<body>