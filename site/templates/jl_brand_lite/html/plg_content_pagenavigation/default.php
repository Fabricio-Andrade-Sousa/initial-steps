<?php

/**
 * @package     Joomla.Plugin
 * @subpackage  Content.pagenavigation
 *
 * @copyright   (C) 2013 Open Source Matters, Inc. <https://www.joomla.org>
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

use Joomla\CMS\Language\Text;
use Joomla\CMS\Router\Route;

$lang = $this->getLanguage();
?>

<nav class="pagenavigation">
    <ul class="jl-pagination">
    <?php if ($row->prev) :
        $direction = $lang->isRtl() ? 'right' : 'left'; ?>
    <li>
        <a href="<?php echo Route::_($row->prev); ?>" rel="prev">
        <span class="visually-hidden">
            <?php echo Text::sprintf('JPREVIOUS_TITLE', htmlspecialchars($rows[$location - 1]->title)); ?>
        </span>
        <span jl-pagination-previous></span><?php echo ' <span aria-hidden="true">' . $row->prev_label . '</span>'; ?>
        </a>
    </li>
    <?php endif; ?>
    <?php if ($row->next) :
        $direction = $lang->isRtl() ? 'left' : 'right'; ?>
        <li class="jl-margin-auto-left">
            <a href="<?php echo Route::_($row->next); ?>" rel="next">
            <span class="visually-hidden">
                <?php echo Text::sprintf('JNEXT_TITLE', htmlspecialchars($rows[$location + 1]->title)); ?>
            </span>
            <?php echo '<span aria-hidden="true">' . $row->next_label . '</span> <span jl-pagination-next></span>'; ?>
            </a>
        </li>
    <?php endif; ?>
    </ul>
</nav>
