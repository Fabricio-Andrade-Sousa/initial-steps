<?php

/**
 * @package     Joomla.Site
 * @subpackage  com_contact
 *
 * @copyright   (C) 2006 Open Source Matters, Inc. <https://www.joomla.org>
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

use Joomla\CMS\HTML\HTMLHelper;
use Joomla\CMS\Language\Text;
use Joomla\CMS\Router\Route;

/** @var Joomla\CMS\WebAsset\WebAssetManager $wa */
$wa = $this->document->getWebAssetManager();
$wa->useScript('keepalive')
    ->useScript('form.validate');

?>
<div class="com-contact__form contact-form">
    <form id="contact-form" action="<?php echo Route::_('index.php'); ?>" method="post" class="form-validate form-horizontal well">
        <div class="jl-grid-small" jl-grid>
			<div class="jl-width-1-2@s contact-name">
                <?php echo $this->form->getLabel('contact_name'); ?>
                <?php echo $this->form->getInput('contact_name'); ?>
			</div>
			<div class="jl-width-1-2@s contact-email">
                <?php echo $this->form->getLabel('contact_email'); ?>
                <?php echo $this->form->getInput('contact_email'); ?>
			</div>

			<div class="jl-width-1-1@s contact_subject">
                <?php echo $this->form->getLabel('contact_subject'); ?>
                <?php echo $this->form->getInput('contact_subject'); ?>
			</div>

			<div class="jl-width-1-1@s contact_message jl-margin">
                <?php echo $this->form->getLabel('contact_message'); ?>
                <?php echo $this->form->getInput('contact_message'); ?>
			</div>

		</div>

        <?php foreach ($this->form->getFieldsets() as $fieldset) : ?>
            <?php if ($fieldset->name != 'contact'):?>
            <?php if ($fieldset->name === 'captcha' && $this->captchaEnabled) : ?>
                <?php continue; ?>
            <?php endif; ?>
            <?php $fields = $this->form->getFieldset($fieldset->name); ?>
            <?php if (count($fields)) : ?>
                <fieldset class="m-0">
                    <?php if (isset($fieldset->label) && ($legend = trim(Text::_($fieldset->label))) !== '') : ?>
                        <legend><?php echo $legend; ?></legend>
                    <?php endif; ?>
                    <?php foreach ($fields as $field) : ?>
                        <?php echo $field->renderField(); ?>
                    <?php endforeach; ?>
                </fieldset>
            <?php endif; ?>
            <?php endif; ?>
        <?php endforeach; ?>
        <?php if ($this->captchaEnabled) : ?>
            <?php echo $this->form->renderFieldset('captcha'); ?>
        <?php endif; ?>
        <div class="control-group">
            <div class="controls">
                <button class="btn btn-primary validate" type="submit"><?php echo Text::_('COM_CONTACT_CONTACT_SEND'); ?></button>
                <input type="hidden" name="option" value="com_contact">
                <input type="hidden" name="task" value="contact.submit">
                <input type="hidden" name="return" value="<?php echo $this->return_page; ?>">
                <input type="hidden" name="id" value="<?php echo $this->item->slug; ?>">
                <?php echo HTMLHelper::_('form.token'); ?>
            </div>
        </div>
    </form>
</div>
