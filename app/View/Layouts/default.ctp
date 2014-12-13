<?php
/**
 * @var View $this
 *
 */
echo $this->element('header');
?>
<div id="container">
    <div id="header">
        <h1></h1>
    </div>
    <div id="content">

        <?php echo $this->Session->flash(); ?>

        <?php echo $this->fetch('content'); ?>
    </div>
    <div id="footer">
    </div>
</div>
</body>
</html>
