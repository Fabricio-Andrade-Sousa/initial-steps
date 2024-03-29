<?php

/**
 * @copyright   Copyright (C) 2021 Ryan Demmer. All rights reserved
 * @license     GNU General Public License version 2 or later
 */
defined('JPATH_BASE') or die;

use Joomla\CMS\Plugin\CMSPlugin;

class WfTemplateYootheme extends CMSPlugin
{
    public function onWfGetTemplateStylesheets(&$files, $template)
    {
        $path = JPATH_SITE . '/templates/' . $template->name;

        // not a yootheme template
        if ($template->name != 'yootheme') {
            // not a warp template
            if (!is_dir($path . '/warp')) {
                return false;
            }
        }

        // legacy "warp" templates
        if (is_dir($path . '/warp')) {
            $file = 'css/theme.css';

            $config = $path . '/config.json';

            if (is_file($config)) {
                $data = file_get_contents($config);
                $json = json_decode($data);

                $style = '';

                if ($json) {
                    if (!empty($json->layouts->default->style)) {
                        $style = $json->layouts->default->style;
                    }
                }

                if ($style && $style !== 'default') {
                    $file = 'styles/' . $style . '/css/theme.css';
                }
            }

            // add base theme.css file
            if (is_file($path . '/' . $file)) {
                $files[] = 'templates/' . $template->name . '/' . $file;
            }

            // add custom css file
            if (is_file($path . '/css/custom.css')) {
                $files[] = 'templates/' . $template->name . '/css/custom.css';
            }
        }

        // youtheme pagebuilder
        if ($template->name == 'yootheme') {
            $files[] = 'templates/' . $template->name . '/css/theme.css';

            // add custom css file
            if (is_file($path . '/css/custom.css')) {
                $files[] = 'templates/' . $template->name . '/css/custom.css';
            }
        }
    }
}
