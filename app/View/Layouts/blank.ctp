<?php
/**
 * @var View $this
 *
 */

echo $this->element('header');
?>
<div id="container">
    <div class="row">
        <?php echo $this->Session->flash(); ?>

        <?php echo $this->fetch('content'); ?>
    </div>
</div>
<?php
echo $this->element('footer');