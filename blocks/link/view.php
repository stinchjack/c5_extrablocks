<!--
$c — the page object
$a — the area (or GlobalArea) object
$controller — the controller object
$b — the block object
$bt — the block type object
$form — the form helper object
$view — the BlockView object
-->

    <a href="<?= $linkhref ?>"

      <?php
        if ($openNewTab) {
          print ' target="_blank"';
        }
       ?>

       ?>
      <?= htmlspecialchars($caption)?>
    </a>
