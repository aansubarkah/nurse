<?php
/**
 * @var View $this
 *
 */
?>
<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel"
     aria-hidden="true" id="alertModal">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span
                        class="sr-only">Close</span></button>
                <h4 class="modal-title" id="alertModalLabel">Profil Anda Belum Lengkap</h4>
            </div>
            <div class="modal-body">
                <?php
                $countErrorMessage = count($isProfileCompleteYet);
                for ($i = 0; $i < $countErrorMessage; $i++) {
                    echo $isProfileCompleteYet[$i];
                    if ($i < ($countErrorMessage - 1)) echo ', ';
                }
                echo '<br>';
                echo $this->Html->link('Lengkapi', array(
                    'controller' => 'users',
                    'action' => 'index'
                ));
                ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    <?php
    if(!empty($isProfileCompleteYet)) {
    ?>
    $('#alertModal').modal();
    <?php
    }
    ?>
</script>