<?php
/**
 * @var View $this
 *
 */
//print_r($tree);
foreach($tree as $key=>$value) {
    echo $value['Categorytreevalueview']['categoryname'];
    echo ' | ';
    echo $value['Categorytreevalueview']['sizename'];
    echo ' | ';
    echo $value['Categorytreevalueview']['valuename'];
    echo ' | ';
    echo $value['Categorytreevalueview']['positionlevelname'];
    echo '<br />';
}