<?php /*
$c — the page object
$a — the area (or GlobalArea) object
$controller — the controller object
$b — the block object
$bt — the block type object
$form — the form helper object
$view — the BlockView object

*/?>

<?php
echo $LDJson;
 ?>

<ul>
  <h4>
    <?php
      echo $honorific . ' ' . $firstName . ' ' . $lastName;
    ?>
  </h4>
  <?php
    foreach($loopFields as $field => $label) {
      if ($$field != '') {
        echo '<li>' . $label . ': ' . $$field . '</li>';
      }
    }
  ?>
</ul>
