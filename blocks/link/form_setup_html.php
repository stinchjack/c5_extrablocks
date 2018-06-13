<?php defined('C5_EXECUTE') or die("Access Denied.");





?>


    <div class="form-group">

          <label class="control-label" for="caption" name="linktext">Caption
          </label>
          <?php
          echo $form->text('caption', $caption);
          ?>
          <p>

            <?php
            if (!isset($option) || !$option) {
              $option = "external";
            }

            echo $form->radio('option', 'internal', $option, array('id' => 'option1'));
            ?>
            <label class="control-label" for="option1" name="option">
              Use CMS Page
            </label>
            <br/>

            <?php
            echo $form->radio('option', 'external', $option, array('id' => 'option2'));
            ?>

            <label class="control-label" for="option2" name="option">
              Use external link
            </label>
          </p>
          <label class="control-label" for="internalPage" name="internalPage">
            CMS Page:
          </label>
          <?php
          $formHelp = Loader::helper('form/page_selector');
          echo $formHelp->selectPage('internalPage');
          ?>

          <label class="control-label" for="externalLink" name="externalLink">
            External Link:
          </label>
          <?php echo $form->text('externalLink', $externalLink);
           echo $form->checkbox('openNewTab', 1, $openNewTab); ?>
          <label class="control-label" for="openNewTab" name="openNewTab">
              Open in new tab
          </label>

    </div>
