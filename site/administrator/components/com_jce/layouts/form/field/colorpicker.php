<?php
/**
 * @package     JCE
 * @subpackage  Admin
 *
 * @copyright   Copyright (C) 2005 - 2020 Open Source Matters, Inc. All rights reserved.
 * @copyright 	Copyright (c) 2009-2023 Ryan Demmer. All rights reserved
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('JPATH_BASE') or die;

extract($displayData);

/**
 * Layout variables
 * -----------------
 * @var   string   $class           Classes for the input.
 * @var   string   $id              DOM id of the field.
 * @var   string   $name            Name of the input field.
 * @var   string   $value           Value attribute of the field.

 */

?>
<div class="input-group input-append">
    <input type="text" class="colorpicker input-small" name="<?php echo $name; ?>" id="<?php echo $id; ?>" value="<?php echo htmlspecialchars($value, ENT_COMPAT, 'UTF-8'); ?>" placeholder="#rrggbb" />
    <div class="input-group-append">    
        <span class="add-on input-group-text colorpicker_widget"></span>
    </div>
</div>