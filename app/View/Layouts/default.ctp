<?php
/**
 * @var View $this
 *
 */
echo $this->element('header');
?>
<div id="container">
    <?php echo $this->element('top_menu'); ?>
    <div id="content">
        <div class="row">
            <div class="container">
                <div class="row">
                    <!-- menu di sini -->
                    <div class="col-md-4">
                        <div class="list-group">
                            <a href="#" class="list-group-item disabled">BCP</a>
                            <a href="#" class="list-group-item">Periode</a>
                        </div>
                    </div>
                    <!-- isi di sini -->
                    <div class="col-md-8">
                        <div class="row">
                            <?php echo $this->Session->flash(); ?>
                        </div>
                        <div class="row">
                            <ol class="breadcrumb">
                                <li><a href="#">Profil</a></li>
                                <li class="active">Atasan</li>
                            </ol>
                        </div>
                        <div class="row">
                            <?php echo $this->fetch('content'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="footer">
    </div>
</div>
</body>
</html>
