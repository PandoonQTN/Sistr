<?php

namespace Sistr;

defined('SISTR') or die('Acces interdit');

use F3il\Form;

/**
 * Classe FormHelper
 */
abstract class FormHelper {

    /**
     * Fonctio permettant de créer un champs input
     * @param Form $form
     * @param type $fieldName
     * @param type $type
     */
    public static function input(Form $form, $fieldName, $type) {
        ?>
        <div class="form-group">
            <label for="<?php echo $form->fName($fieldName); ?>" class="col-sm-2 control-label">
        <?php echo $form->fLabel($fieldName); ?> :
            </label>
            <div class="col-sm-10">
                <input type="<?php echo $type ?>" 
                       class="form-control" id="<?php echo $form->fName($fieldName); ?>" 
                       name="<?php echo $form->fName($fieldName); ?>" 
                       value="<?php echo $form->fValue($fieldName); ?>"
                       placeholder="<?php echo $form->fLabel($fieldName); ?>">
            </div>
            <?php
            if ($form->isSubmitted()) {
                echo $form->fMessages($fieldName);
                echo $form->missingFieldMessageRenderer($form->getField($fieldName));
            }
            ?>
        </div>
        <?php
    }

}
