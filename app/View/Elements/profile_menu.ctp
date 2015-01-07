<?php
/**
 * @var View $this
 */

$currentController = $this->request->params['controller'];
$currentAction = $this->request->params['action'];
$arrMenu = array();
$arrMenu[0]['title'] = 'Ringkasan';
$arrMenu[0]['action'] = '/';
$arrMenu[1]['title'] = 'Jabatan';
$arrMenu[1]['action'] = 'positionlevel';
$arrMenu[2]['title'] = 'Pangkat/Golongan';
$arrMenu[2]['action'] = 'level';
$arrMenu[3]['title'] = 'Unit Kerja';
$arrMenu[3]['action'] = 'departement';
$arrMenu[4]['title'] = 'Atasan';
$arrMenu[4]['action'] = 'chief';
$arrMenu[5]['title'] = 'Ubah Password';
$arrMenu[5]['action'] = 'password';

$countArrMenu = count($arrMenu);
?>
<div class="col-md-4">
    <div class="list-group">
        <?php
        for ($i = 0; $i < $countArrMenu; $i++) {
            $menuClass = 'list-group-item';

            if ($i == 0 && $currentController == 'users' && $currentAction == 'index') $menuClass .= ' disabled';
            if ($i == 1 && $currentController == 'users' && $currentAction == 'positionlevel') $menuClass .= ' disabled';
            if ($i == 2 && $currentController == 'users' && $currentAction == 'level') $menuClass .= ' disabled';
            if ($i == 3 && $currentController == 'users' && $currentAction == 'departement') $menuClass .= ' disabled';
            if ($i == 4 && $currentController == 'users' && $currentAction == 'chief') $menuClass .= ' disabled';
            if ($i == 5 && $currentController == 'users' && $currentAction == 'password') $menuClass .= ' disabled';

            echo $this->Html->link($arrMenu[$i]['title'],
                array(
                    'controller' => 'users',
                    'action' => $arrMenu[$i]['action']
                ),
                array(
                    'class' => $menuClass
                )
            );
        }
        ?>
    </div>
</div>