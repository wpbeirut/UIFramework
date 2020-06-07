<?php
require_once('header.php');

require_once('functions.php');

$args= 
[
[
    'header' => 'First Header',
    'body' => '<p>Hello world this is working fine</p>'
],

[
    'header' => 'First Header 2',
    'body' => '<p>Hello world this is working fine 2</p>'
],

[
    'header' => 'First Header 3',
    'body' => '<p>Hello world this is working fine 3</p>'
],

];
?>
<div class="row">
    <div class="col-md-6">
    <?php
    echo  set_accordian('accordion',$args);
    ?>
    </div>
    <div class="col-md-6"></div>
</div>

<?php

require_once('footer.php');
