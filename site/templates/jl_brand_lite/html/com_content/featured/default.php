<?php

/**
 * @package     Joomla.Site
 * @subpackage  com_content
 *
 * @copyright   (C) 2006 Open Source Matters, Inc. <https://www.joomla.org>
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

?>
<div class="blog-featured" itemscope itemtype="https://schema.org/Blog">
    <?php if ($this->params->get('show_page_heading') != 0) : ?>
    <div class="page-header">
        <h1>
        <?php echo $this->escape($this->params->get('page_heading')); ?>
        </h1>
    </div>
    <?php endif; ?>

    <?php if (!empty($this->lead_items)) : ?>
        <div class="jl-grid jl-child-width-1-1 <?php echo $this->params->get('blog_class_leading'); ?>">
            <?php foreach ($this->lead_items as &$item) : ?>
                <div class="el-blog-item" itemprop="blogPost" itemscope itemtype="https://schema.org/BlogPosting">
                        <?php
                        $this->item = & $item;
                        echo $this->loadTemplate('item');
                        ?>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>

    <?php if (!empty($this->intro_items)) : ?>
        <?php $blogClass = $this->params->get('blog_class', ''); ?>
		<?php if ((int) $this->params->get('num_columns') > 1) : ?>
			<?php $blogClass .= ' jl-child-width-1-' . (int) $this->params->get('num_columns') . '@m'; ?>
		<?php else: ?>
			<?php $blogClass .= ' jl-child-width-1-1'; ?>
		<?php endif; ?>
        <div jl-grid class="jl-grid <?php echo $blogClass; ?>">
        <?php foreach ($this->intro_items as $key => &$item) : ?>
            <div>
                    <?php
                    $this->item = & $item;
                    echo $this->loadTemplate('item');
                    ?>
            </div>
        <?php endforeach; ?>
        </div>
    <?php endif; ?>

    <?php if (!empty($this->link_items)) : ?>
        <div class="jl-margin-large items-more">
            <h3><?= JText::_('COM_CONTENT_MORE_ARTICLES') ?></h3>
            <?php echo $this->loadTemplate('links'); ?>
        </div>
    <?php endif; ?>

    <?php if ($this->params->def('show_pagination', 2) == 1  || ($this->params->get('show_pagination') == 2 && $this->pagination->pagesTotal > 1)) : ?>
        <div class="jl-margin">
            <?php echo $this->pagination->getPagesLinks(); ?>
            <?php if ($this->params->def('show_pagination_results', 1)) : ?>
                <p class="jl-text-center">
                    <?php echo $this->pagination->getPagesCounter(); ?>
                </p>
            <?php endif; ?>
        </div>
    <?php endif; ?>

</div>
