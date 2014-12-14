<?php
/**
 * @var View $this
 *
 */
echo $this->element('header');
?>
<div id="container">
    <div id="header" class="container-fluid">
        <div class="row">
            <nav class="navbar navbar-default" role="navigation">
                <div class="container">
                    <div class="navbar-header">
                        <?php echo $this->Html->link('Perawat', '/', array('class' => 'navbar-brand')); ?>
                    </div>
                    <?php
                    if (AuthComponent::user('id')) {
                    ?>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <span class="glyphicon glyphicon-user"></span> <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <?php
                                    echo $this->Html->link('Profil', array(
                                        'controller' => 'users',
                                        'action' => 'profile'
                                    ));
                                    ?>
                                </li>
                                <li>
                                    <?php
                                    echo $this->Html->link('Keluar', array(
                                        'controller' => 'users',
                                        'action' => 'logout'
                                    ));
                                    ?>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <?php
                    }
                    ?>
                </div>
            </nav>
        </div>
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
