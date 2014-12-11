<?php
/**
 * @var View $this
 */
?>
<div class="col-sm-4 col-sm-offset-4">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="pabel-title">Daftar</h4>
        </div>
        <div class="panel-body">
            <?php
            echo $this->Form->create('User', array(
                "role" => "form"
            ));

            echo $this->Form->input('username', array(
                'type' => 'text',
                'label' => false,
                'div' => 'form-group',
                'class' => 'form-control',
                'id' => 'username',
                'placeholder' => 'Username'
            ));

            echo $this->Form->input('password', array(
                'type' => 'password',
                'label' => false,
                'div' => 'form-group',
                'class' => 'form-control',
                'id' => 'password',
                'placeholder' => 'Password'
            ));

            $options = array(
                'label' => 'Daftar',
                'div' => array(
                    'class' => 'form-group'
                ),
                'class' => 'btn btn-primary btn-sm btn-block'
            );
            echo $this->Form->end($options);

            echo 'atau ';
            echo $this->Html->link('Login', array(
                'controller' => 'users',
                'action' => 'login'
            ));
            ?>
        </div>
    </div>
</div>