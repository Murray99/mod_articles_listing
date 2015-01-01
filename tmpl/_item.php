<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_articles_listing
 *
 * @copyright   Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

$item_heading = $params->get('item_heading', 'h4');
$images = json_decode($item->images);
?>


<div class="article-listing">
		
	<div class="hidden-phone gantry-width-20">
		
		<?php  if (isset($images->image_intro) and !empty($images->image_intro)) : ?>
		
			<?php if ($params->get('link_images') && $item->link != '') : ?><a href="<?php echo $item->link; ?>" title="<?php echo $item->title; ?>"><?php endif; ?>
				
			<img <?php if ($images->image_intro_caption): echo 'class="caption"'.' title="' .htmlspecialchars($images->image_intro_caption) .'"'; endif; ?>
				src="<?php echo htmlspecialchars($images->image_intro); ?>" alt="<?php echo htmlspecialchars($images->image_intro_alt); ?>"/>
				
			<?php if ($params->get('link_images') && $item->link != '') : ?></a><?php endif; ?>
				
		<?php endif; ?>	

	</div> <!-- gantry-width-20 -->



	<div class="gantry-width-80">
		<div class="gantry-width-spacer" style="margin-top:0">
			
			<?php if ($params->get('item_title')) : ?>

				<<?php echo $item_heading; ?> style="margin-top:0" class="newsflash-title<?php echo $params->get('moduleclass_sfx'); ?>">
				
				<?php if ($params->get('link_titles') && $item->link != '') : ?>
					<a href="<?php echo $item->link; ?>" title="<?php echo $item->title; ?>"><?php echo $item->title; ?></a>
				<?php else : ?>
					<?php echo $item->title; ?>
				<?php endif; ?>
				</<?php echo $item_heading; ?>>

			<?php endif; ?>

			<?php if (!$params->get('intro_only')) : ?>
				<?php echo $item->afterDisplayTitle; ?>
			<?php endif; ?>

			<?php echo $item->beforeDisplayContent; ?>

			<?php echo $item->introtext; ?>
			
			<?php if (isset($item->link) && $item->readmore != 0 && $params->get('readmore')) : ?>
				<?php echo '<a class="readon" href="' . $item->link . '" title="' . $item->title . '">' . $item->linkText . '</a>'; ?>
			<?php endif; ?>
		</div> <!-- gantry-width-spacer -->
	</div> <!-- gantry-width-80 -->



	
	<div class="clear" style="height:10px">&nbsp;</div>

</div> <!-- article-listing -->
