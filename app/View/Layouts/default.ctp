<?php
/**
 * @var View $this
 *
 */
echo $this->element('header');
?>
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