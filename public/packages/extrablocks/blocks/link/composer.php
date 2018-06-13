<!-- see https://documentation.concrete5.org/developers/working-with-blocks/creating-a-new-block-type/enabling-composer-editing-for-block-type
-->

<div class="control-group">
    <label class="control-label"><?=$label?></label>
    <? if($description): ?>
    <i class="fa fa-question-circle launch-tooltip" title="" data-original-title="<?=$description?>"></i>
    <? endif; ?>
    <div class="controls">
        <?

        print $form->text($view->field('linktext'), $linktext,array('class' => $class));
        print $form->text($view->field('linkhref'), $linkhref,array('class' => $class));

        ?>
    </div>
</div>
