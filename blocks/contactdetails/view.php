<?php /*
$c — the page object
$a — the area (or GlobalArea) object
$controller — the controller object
$b — the block object
$bt — the block type object
$form — the form helper object
$view — the BlockView object

*/?>

<ul>
  <h4>
    <?php
      echo $honorific . ' ' . $firstname . ' ' . $lastname;
    ?>
  </h4>
  <?php
    foreach($loopFields as $field => $label) {
      if ($$field != '') {
        echo '<li>' . $label . ':' . $$field . '</li>';
      }
    }
  ?>
</ul>
