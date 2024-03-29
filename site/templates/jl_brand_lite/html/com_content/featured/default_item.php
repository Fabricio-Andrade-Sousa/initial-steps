<?php

/**
 * @package     Joomla.Site
 * @subpackage  com_content
 *
 * @copyright   (C) 2006 Open Source Matters, Inc. <https://www.joomla.org>
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

use Joomla\CMS\Factory;
use Joomla\CMS\HTML\HTMLHelper;
use Joomla\CMS\Language\Associations;
use Joomla\CMS\Language\Text;
use Joomla\CMS\Layout\LayoutHelper;
use Joomla\CMS\Router\Route;
use Joomla\CMS\Uri\Uri;
use Joomla\Component\Content\Administrator\Extension\ContentComponent;
use Joomla\Component\Content\Site\Helper\RouteHelper;

// Create a shortcut for params.
$params  = &$this->item->params;
$canEdit = $this->item->params->get('access-edit');
$info    = $this->item->params->get('info_block_position', 0);

// Check if associations are implemented. If they are, define the parameter.
$assocParam = (Associations::isEnabled() && $params->get('show_associations'));

$currentDate       = Factory::getDate()->format('Y-m-d H:i:s');
$isExpired         = !is_null($this->item->publish_down) && $this->item->publish_down < $currentDate;
$isNotPublishedYet = $this->item->publish_up > $currentDate;
$isUnpublished     = $this->item->state == ContentComponent::CONDITION_UNPUBLISHED || $isNotPublishedYet || $isExpired;
?>

<article class="jl-article<?php echo $this->pageclass_sfx; ?>" itemscope itemtype="https://schema.org/Article" data-permalink="<?php echo Route::_(RouteHelper::getArticleRoute($this->item->slug, $this->item->catid, $this->item->language), true, 0, 1); ?>">
	<meta itemprop="inLanguage" content="<?php echo ($this->item->language === '*') ? Factory::getApplication()->get('language') : $this->item->language; ?>">
	<meta property="author" typeof="Person" content="<?php echo $this->item->author; ?>">
	<meta property="dateModified" content="<?php echo HTMLHelper::_('date', $this->item->modified, 'c'); ?>">
	<meta property="datePublished" content="<?php echo HTMLHelper::_('date', $this->item->publish_up, 'c'); ?>">
	<meta class="jl-margin-remove-adjacent" property="articleSection" content="<?php echo $this->escape($this->item->category_title); ?>">
			
	<?php if ($isUnpublished) : ?>
		<div class="system-unpublished">
	<?php endif; ?>

	<?php echo LayoutHelper::render('joomla.content.intro_image', $this->item); ?>

	<?php // Todo Not that elegant would be nice to group the params ?>
	<?php $useDefList = ($params->get('show_modify_date') || $params->get('show_publish_date') || $params->get('show_create_date')
		|| $params->get('show_hits') || $params->get('show_category') || $params->get('show_parent_category') || $params->get('show_author') || $assocParam); ?>

	<?php if ($useDefList && $info == 0) : ?>
		<?php echo LayoutHelper::render('joomla.content.meta', $this->item); ?>
	<?php endif; ?>

	<?php if ($params->get('show_title')) : ?>
		<h2 class="el-title jl-h4 jl-margin-small-top jl-margin-remove-bottom" itemprop="headline">
		<?php if ($params->get('link_titles') && $params->get('access-view')) : ?>
			<a href="<?php echo Route::_(RouteHelper::getArticleRoute($this->item->slug, $this->item->catid, $this->item->language)); ?>" itemprop="url">
				<?php echo $this->escape($this->item->title); ?>
			</a>
		<?php else : ?>
			<?php echo $this->escape($this->item->title); ?>
		<?php endif; ?>
		</h2>
	<?php endif; ?>

	<?php if ($this->item->state == ContentComponent::CONDITION_UNPUBLISHED) : ?>
		<span class="badge bg-warning text-light"><?php echo Text::_('JUNPUBLISHED'); ?></span>
	<?php endif; ?>
	<?php if ($isNotPublishedYet) : ?>
		<span class="badge bg-warning text-light"><?php echo Text::_('JNOTPUBLISHEDYET'); ?></span>
	<?php endif; ?>
	<?php if ($isExpired) : ?>
		<span class="badge bg-warning text-light"><?php echo Text::_('JEXPIRED'); ?></span>
	<?php endif; ?>

	<?php // Content is generated by content plugin event "onContentAfterTitle" ?>
	<?php echo $this->item->event->afterDisplayTitle; ?>

	<?php if ($useDefList && $info != 0 ) : ?>
		<?php echo LayoutHelper::render('joomla.content.meta', $this->item); ?>
	<?php endif; ?>

	<?php // Content is generated by content plugin event "onContentBeforeDisplay" ?>
	<?php echo $this->item->event->beforeDisplayContent; ?>

	<div class="jl-margin-top" property="text">
		<?php echo $this->item->introtext; ?>
	</div>

	<?php if ($params->get('show_tags', 1) && !empty($this->item->tags->itemTags)) : ?>
		<?php echo LayoutHelper::render('joomla.content.tags', $this->item->tags->itemTags); ?>
	<?php endif; ?>
	
	<?php if ($params->get('show_readmore') && $this->item->readmore) :
		if ($params->get('access-view')) :
			$link = Route::_(RouteHelper::getArticleRoute($this->item->slug, $this->item->catid, $this->item->language));
		else :
            $menu = Factory::getApplication()->getMenu();
            $active = $menu->getActive();
            $itemId = $active->id;
            $link = new Uri(Route::_('index.php?option=com_users&view=login&Itemid=' . $itemId, false));
            $link->setVar('return', base64_encode(RouteHelper::getArticleRoute($this->item->slug, $this->item->catid, $this->item->language)));
		endif; ?>

		<?php echo LayoutHelper::render('joomla.content.readmore', ['item' => $this->item, 'params' => $params, 'link' => $link]); ?>

	<?php endif; ?>

	<?php if ($params->get('show_create_date') || $params->get('show_modify_date') || $params->get('show_hits')) : ?>
		<ul class="jl-list">
			<?php if ($params->get('show_create_date')) : ?>
				<li>
					<time datetime="<?php echo HTMLHelper::_('date', $this->item->created, 'c'); ?>" itemprop="dateCreated">
						<?php echo Text::sprintf('G5_META_DATE_CREATED', HTMLHelper::_('date', $this->item->created, Text::_('DATE_FORMAT_LC3'))); ?>
					</time>
				</li>
			<?php endif ?>

			<?php if ($params->get('show_modify_date')) : ?>
				<li>
					<time datetime="<?php echo HTMLHelper::_('date', $this->item->modified, 'c'); ?>" itemprop="dateModified">
						<?php echo Text::sprintf('G5_META_DATE_MODIFIED', HTMLHelper::_('date', $this->item->modified, Text::_('DATE_FORMAT_LC3'))); ?>
					</time>
				</li>
			<?php endif ?>

			<?php if ($params->get('show_hits')) : ?>
				<li>
					<meta content="UserPageVisits:<?php echo $this->item->hits; ?>" itemprop="interactionCount">
					<?php echo Text::sprintf('COM_CONTENT_ARTICLE_HITS', $this->item->hits); ?>
				</li>
			<?php endif ?>
		</ul>
	<?php endif ?>	

	<?php if ($canEdit) : ?>
        <?php echo LayoutHelper::render('joomla.content.icons', ['params' => $params, 'item' => $this->item]); ?>
    <?php endif; ?>
	
	<?php if ($isUnpublished) : ?>
		</div>
	<?php endif; ?>
</article>

<?php // Content is generated by content plugin event "onContentAfterDisplay" ?>
<?php echo $this->item->event->afterDisplayContent; ?>

