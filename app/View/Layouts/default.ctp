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
<div id="container">
    <div id="header">
        <h1><?php echo $this->Html->link($cakeDescription, 'http://cakephp.org'); ?></h1>
    </div>
    <div id="content">

        <?php echo $this->Session->flash(); ?>

        <?php echo $this->fetch('content'); ?>
    </div>
    <div id="footer">
        <?php echo $this->Html->link(
            $this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
            'http://www.cakephp.org/',
            array('target' => '_blank', 'escape' => false, 'id' => 'cake-powered')
        );
        ?>
        <p>
            <?php echo $cakeVersion; ?>
        </p>
    </div>
</div>
<?php //echo $this->element('sql_dump'); ?>
</body>
</html>
