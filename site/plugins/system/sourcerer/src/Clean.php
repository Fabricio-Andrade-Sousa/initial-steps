<?php
/**
 * @package         Sourcerer
 * @version         10.0.3
 * 
 * @author          Peter van Westen <info@regularlabs.com>
 * @link            https://regularlabs.com
 * @copyright       Copyright © 2023 Regular Labs All Rights Reserved
 * @license         GNU General Public License version 2 or later
 */

namespace RegularLabs\Plugin\System\Sourcerer;

defined('_JEXEC') or die;

use Joomla\CMS\Language\Text as JText;
use RegularLabs\Library\PluginTag as RL_PluginTag;
use RegularLabs\Library\Protect as RL_Protect;
use RegularLabs\Library\RegEx as RL_RegEx;
use RegularLabs\Library\StringHelper as RL_String;

class Clean
{
    public static function cleanFinalHtmlOutput(string &$html): void
    {
        RL_Protect::removeAreaTags($html, 'SRC');

        $params = Params::get();

        if ( ! $params->place_comments)
        {
            RL_Protect::removeCommentTags($html, 'Sourcerer');
        }

        if ( ! str_contains($html, $params->tag_character_start . '/' . $params->tag))
        {
            Protect::unprotectTags($html);

            return;
        }

        $regex = Params::getRegex();

        $html = RL_RegEx::replace(
            $regex,
            Protect::getMessageCommentTag(JText::_('SRC_CODE_REMOVED_NOT_ENABLED')),
            $html
        );

        Protect::unprotectTags($html);
    }

    public static function cleanTagsFromHead(string &$string): void
    {
        if ( ! RL_String::contains($string, Params::getTags(true)))
        {
            return;
        }

        $params = Params::get();

        [$tag_start, $tag_end] = Params::getTagCharacters();

        $inside_tag = RL_PluginTag::getRegexInsideTag($tag_start, $tag_end);
        $spaces     = RL_PluginTag::getRegexSpaces();

        $tag_start = RL_RegEx::quote($tag_start);
        $tag_end   = RL_RegEx::quote($tag_end);

        $regex = Params::getRegex();

        // Remove start tag to end tag
        $string = RL_RegEx::replace(
            $regex,
            '',
            $string
        );

        // Remove start tag with optional php stuff after it
        $string = RL_RegEx::replace(
            $tag_start . RL_RegEx::quote($params->tag) . '(' . $spaces . $inside_tag . ')?' . $tag_end
            . '(\s*<\?php(.*?)\?>)?',
            '',
            $string
        );

        // Remove left over end tags
        $string = RL_RegEx::replace(
            $tag_start . '\/' . RL_RegEx::quote($params->tag) . $tag_end,
            '',
            $string
        );
    }
}
