<?php
/**
 * @var View $this
 *
 */
//print_r($tree);
foreach($tree as $key=>$value) {
    echo $value['Categorytreecategoryview']['positionname'];
    echo ' | ';
    echo $value['Categorytreecategoryview']['categoryname'];
    echo '<br />';
}