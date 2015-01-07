<?php
/**
 * @var View $this
 */
$this->Form->create('User', array(
    'role' => 'form'
));

$this->Form->inputDefaults(array(
    'label' => false,
    'div' => 'form-group col-sm-9',
    'class' => 'form-control',
));

echo $this->Form->input('fullname', array(
    'type' => 'text',
    'id' => 'fullname',
    'placeholder' => 'Nama Lengkap'
));

echo $this->Form->input('number', array(
    'type' => 'text',
    'id' => 'number',
    'placeholder' => 'NIP'
));

echo $this->Form->input('cardnumber', array(
    'type' => 'text',
    'id' => 'cardnumber',
    'placeholder' => 'Nomor Karpeg'
));

echo $this->Form->input('birthplace', array(
    'type' => 'text',
    'id' => 'birthplace',
    'placeholder' => 'Tempat Lahir'
));

echo $this->Form->input('birthdate', array(
    'type' => 'text',
    'id' => 'birthdate',
    'placeholder' => 'Tanggal Lahir'
));

$sexOptions = array(0 => 'Wanita', 1 => 'Pria');
echo $this->Form->input('sex', array(
    'type' => 'select',
    'id' => 'sex',
    'placeholder' => 'Jenis Kelamin',
    'options' => $sexOptions,
    'default' => AuthComponent::user('sex')
));

echo $this->Form->input('education_id', array(
    'type' => 'hidden',
    'label' => false,
    'div' => 'form-group',
    'class' => 'form-control',
    'id' => 'education_id',
    'value' => 0
));

echo $this->Form->input('education', array(
    'type' => 'text',
    'id' => 'education',
    'placeholder' => 'Pendidikan Terakhir'
));

echo $this->Form->input('level_id', array(
    'type' => 'hidden',
    'label' => false,
    'div' => 'form-group',
    'class' => 'form-control',
    'id' => 'level_id',
    'value' => 0
));

echo $this->Form->input('level', array(
    'type' => 'text',
    'id' => 'level',
    'placeholder' => 'Pangkat/Golongan'
));

echo $this->Form->input('positionlevel_id', array(
    'type' => 'hidden',
    'label' => false,
    'div' => 'form-group',
    'class' => 'form-control',
    'id' => 'positionlevel_id',
    'value' => 0
));

echo $this->Form->input('positionlevel', array(
    'type' => 'text',
    'id' => 'positionlevel',
    'placeholder' => 'Jabatan Perawat'
));

echo $this->Form->input('departement_id', array(
    'type' => 'hidden',
    'label' => false,
    'div' => 'form-group',
    'class' => 'form-control',
    'id' => 'departement_id',
    'value' => 0
));

echo $this->Form->input('departement', array(
    'type' => 'text',
    'id' => 'departement',
    'placeholder' => 'Unit Kerja'
));

echo $this->Form->input('chief_id', array(
    'type' => 'hidden',
    'label' => false,
    'div' => 'form-group',
    'class' => 'form-control',
    'id' => 'chief_id',
    'value' => 0
));

echo $this->Form->input('chief', array(
    'type' => 'text',
    'id' => 'chief',
    'placeholder' => 'Atasan'
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
echo $this->element('typeahead_style');
echo $this->Html->css(array('datepicker3'));
echo $this->Html->script(array('bootstrap-datepicker', 'typeahead.bundle.min'));

echo $this->fetch('css');
echo $this->fetch('script');
?>
<script type="text/javascript">
    $(function () {
        $('#birthdate').datepicker({
            autoclose: true,
            format: 'yyyy-mm-dd'
        });

        var tags = new Bloodhound({
            datumTokenizer: function (d) {
                return Bloodhound.tokenizers.whitespace(d.name);//name is json token
            },
            queryTokenizer: Bloodhound.tokenizers.whitespace,
            limit: 10,
            remote: {
                url: '<?php echo Router::url('/educations/fullnamesuggest.json?q=%QUERY', true); ?>',
                filter: function (list) {
                    return $.map(list, function (tag) {
                        return {
                            name: tag.name,
                            key: tag.id
                        };
                    });
                }
            }
        });

        tags.initialize();

        $('#education').typeahead(null, {
            name: 'tags',
            displayKey: 'name',
            displayValue: 'key',
            source: tags.ttAdapter()
        }).on('typeahead:selected typeahead:autocompleted', function (event, datum) {
            $('#education_id').val(datum.key);
        });
    });
</script>