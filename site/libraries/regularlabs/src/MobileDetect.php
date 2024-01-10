<?php
/**
 * @package         Regular Labs Library
 * @version         23.12.1338
 * 
 * @author          Peter van Westen <info@regularlabs.com>
 * @link            https://regularlabs.com
 * @copyright       Copyright © 2023 Regular Labs All Rights Reserved
 * @license         GNU General Public License version 2 or later
 */

namespace RegularLabs\Library;

defined('_JEXEC') or die;

require_once dirname(__FILE__, 2) . '/vendor/autoload.php';

class MobileDetect extends \Detection\MobileDetect
{
    public function isMac(): bool
    {
        return $this->match('(Mac OS|Mac_PowerPC|Macintosh)', $this->getUserAgent());
    }
}
