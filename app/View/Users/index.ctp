<?php
/**
 * @var View $this
 */
$this->Form->create('User', array(
    'role' => 'form'
));

echo $this->Form->input('fullname', array(
    'type' => 'text',
    'label' => false,
    'div' => 'form-group col-sm-9',
    'class' => 'form-control',
    'id' => 'fullname',
    'placeholder' => 'Nama Lengkap'
));

echo $this->Form->input('number', array(
    'type' => 'text',
    'label' => false,
    'div' => 'form-group col-sm-9',
    'class' => 'form-control',
    'id' => 'number',
    'placeholder' => 'NIP'
));

echo $this->Form->input('cardnumber', array(
    'type' => 'text',
    'label' => false,
    'div' => 'form-group col-sm-9',
    'class' => 'form-control',
    'id' => 'cardnumber',
    'placeholder' => 'Nomor Karpeg'
));

echo '<div class="form-group col-sm-9 col-sm-offset-3">';

echo '<div class="form-group col-sm-3">';
echo $this->Form->button('Kembali', array(
    'type' => 'reset',
    'class' => 'btn btn-default btn-sm btn-block'
));
echo '</div>';

$options = array(
    'label' => 'Simpan',
    'div' => array(
        'class' => 'form-group col-sm-3'
    ),
    'class' => 'btn btn-primary btn-sm btn-block'
);
echo $this->Form->end($options);
echo '</div>';