<?php

/**
 * @package     Joomla.Site
 * @subpackage  mod_languages
 *
 * @copyright   (C) 2010 Open Source Matters, Inc. <https://www.joomla.org>
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

use Joomla\CMS\HTML\HTMLHelper;
use Joomla\CMS\Language\Text;
use Joomla\CMS\Uri\Uri;

/** @var Joomla\CMS\WebAsset\WebAssetManager $wa */
$wa = $app->getDocument()->getWebAssetManager();
$wa->registerAndUseStyle('mod_languages', 'mod_languages/template.css');
?>
<div class="mod-languages">
    <p class="visually-hidden" id="language_picker_des_<?php echo $module->id; ?>"><?php echo Text::_('MOD_LANGUAGES_DESC'); ?></p>

<?php if ($headerText) : ?>
    <div class="mod-languages__pretext pretext"><p><?php echo $headerText; ?></p></div>
<?php endif; ?>

<?php if ($params->get('dropdown', 0)) : ?>
    <div class="jl-inline">
        <?php foreach ($list as $language) : ?>
            <?php if ($language->active) : ?>
                <button id="language_btn_<?php echo $module->id; ?>" type="button" data-bs-toggle="dropdown" class="btn btn-secondary dropdown-toggle" aria-haspopup="listbox" aria-labelledby="language_picker_des_<?php echo $module->id; ?> language_btn_<?php echo $module->id; ?>" aria-expanded="false">
                    <?php if ($params->get('dropdownimage', 1) && ($language->image)) : ?>
                        <?php echo HTMLHelper::_('image', 'mod_languages/' . $language->image . '.gif', $params->get('full_name') ? '' : $language->title_native, null, true); ?>
                    <?php endif; ?>
                    <?php echo $params->get('full_name', 1) ? $language->title_native : strtoupper($language->sef); ?>
                </button>
            <?php endif; ?>
        <?php endforeach; ?>
        <div jl-dropdown="mode: click">
            <ul aria-labelledby="language_picker_des_<?php echo $module->id; ?>" class="jl-nav jl-dropdown-nav">

            <?php foreach ($list as $language) : ?>
                <?php
                    $lbl = '';
                if ($params->get('full_name') === 0) {
                    $lbl = 'aria-label="' . $language->title_native . '"';
                }
                ?>
                <?php if (!$language->active) : ?>
                    <li>
                        <a <?php echo $lbl; ?> href="<?php echo htmlspecialchars_decode(htmlspecialchars($language->link, ENT_QUOTES, 'UTF-8'), ENT_NOQUOTES); ?>">
                            <?php if ($params->get('dropdownimage', 1) && ($language->image)) : ?>
                                <?php echo HTMLHelper::_('image', 'mod_languages/' . $language->image . '.gif', $params->get('full_name') ? '' : $language->title_native, null, true); ?>
                            <?php endif; ?>
                            <?php echo $params->get('full_name', 1) ? $language->title_native : strtoupper($language->sef); ?>
                        </a>
                    </li>
                <?php elseif ($params->get('show_active', 1)) : ?>
                    <?php $base = Uri::getInstance(); ?>
                    <li class="jl-active">
                        <a aria-current="true" <?php echo $lbl; ?> href="<?php echo htmlspecialchars_decode(htmlspecialchars($base, ENT_QUOTES, 'UTF-8'), ENT_NOQUOTES); ?>">
                            <?php if ($params->get('dropdownimage', 1) && ($language->image)) : ?>
                                <?php echo HTMLHelper::_('image', 'mod_languages/' . $language->image . '.gif', $params->get('full_name') ? '' : $language->title_native, null, true); ?>
                            <?php endif; ?>
                            <?php echo $params->get('full_name', 1) ? $language->title_native : strtoupper($language->sef); ?>
                        </a>
                    </li>
                <?php endif; ?>
            <?php endforeach; ?>
            </ul>
        </div>
    </div>
<?php else : ?>
    <ul aria-labelledby="language_picker_des_<?php echo $module->id; ?>" class="mod-languages__list <?php echo $params->get('inline', 1) ? 'jl-subnav' : 'jl-nav jl-nav-default'; ?>">

    <?php foreach ($list as $language) : ?>
        <?php
            $lbl = '';
        if ((($params->get('full_name') === 0) && ($params->get('image') === 0)) || (!$language->image)) {
            $lbl = 'aria-label="' . $language->title_native . '"';
        }
        ?>
        <?php if (!$language->active) : ?>
            <li>
                <a <?php echo $lbl; ?> href="<?php echo htmlspecialchars_decode(htmlspecialchars($language->link, ENT_QUOTES, 'UTF-8'), ENT_NOQUOTES); ?>">
                    <?php if ($params->get('image', 1)) : ?>
                        <?php if ($language->image) : ?>
                            <?php echo HTMLHelper::_('image', 'mod_languages/' . $language->image . '.gif', $language->title_native, ['title' => $language->title_native], true); ?>
                        <?php else : ?>
                            <span class="label" title="<?php echo $language->title_native; ?>"><?php echo strtoupper($language->sef); ?></span>
                        <?php endif; ?>
                    <?php else : ?>
                        <?php echo $params->get('full_name', 1) ? $language->title_native : strtoupper($language->sef); ?>
                    <?php endif; ?>
                </a>
            </li>
        <?php elseif ($params->get('show_active', 1)) : ?>
            <?php $base = Uri::getInstance(); ?>
            <li class="jl-active">
                <a aria-current="true" <?php echo $lbl; ?> href="<?php echo htmlspecialchars_decode(htmlspecialchars($base, ENT_QUOTES, 'UTF-8'), ENT_NOQUOTES); ?>">
                    <?php if ($params->get('image', 1)) : ?>
                        <?php if ($language->image) : ?>
                            <?php echo HTMLHelper::_('image', 'mod_languages/' . $language->image . '.gif', $language->title_native, ['title' => $language->title_native], true); ?>
                        <?php else : ?>
                            <span class="badge bg-secondary" title="<?php echo $language->title_native; ?>"><?php echo strtoupper($language->sef); ?></span>
                        <?php endif; ?>
                    <?php else : ?>
                        <?php echo $params->get('full_name', 1) ? $language->title_native : strtoupper($language->sef); ?>
                    <?php endif; ?>
                </a>
            </li>
        <?php endif; ?>
    <?php endforeach; ?>
    </ul>
<?php endif; ?>

<?php if ($footerText) : ?>
    <div class="mod-languages__posttext posttext"><p><?php echo $footerText; ?></p></div>
<?php endif; ?>
</div>
