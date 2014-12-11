<?php
/**
 * @var View $this
 *
 */

echo $this->element('header');
?>
    <div id="container">
        <div class="container">
            <?php echo $this->Session->flash(); ?>

            <?php echo $this->fetch('content'); ?>
        </div>
    </div>
    <style type="text/css">
        body {
            padding-top: 40px;
            padding-bottom: 40px;
        }
    </style>
<?php
echo $this->element('footer');