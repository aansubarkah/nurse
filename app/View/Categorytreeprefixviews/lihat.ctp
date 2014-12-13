<?php
/**
 * @var View $this
 *
 */
//print_r($tree);
foreach($tree as $key=>$value) {
    echo $value['Categorytreeprefixview']['prefixname'];
    echo ' | ';
    echo $value['Categorytreeprefixview']['categoryname'];
    echo '<br />';
}