<?php
/* @package Joomla
 * @copyright Copyright (C) Open Source Matters. All rights reserved.
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
 * @extension Phoca Extension
 * @copyright Copyright (C) Jan Pavelka www.phoca.cz
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
 */

use Joomla\CMS\Factory;
use Joomla\CMS\HTML\HTMLHelper;

defined('_JEXEC') or die;
HTMLHelper::_('bootstrap.framework');
HTMLHelper::_('bootstrap.collapse', '');

?><div class="ph-cart-module-box ph-cart-module-wishlist-box <?php echo $moduleclass_sfx ;?>">
	<div class="dropdown">
	  <button id="phItemWishListBoxBtn" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><?php echo PhocacartRenderIcon::icon($s['i']['wish-list']) ?> <sup class="ph-cart-count-sup phItemWishListBoxCount" id="phItemWishListBoxCount"><?php echo $wishlist->getWishListCountItems(); ?></sup></button>
	  <div class="dropdown-menu dropdown-menu-end" aria-labelledby="phItemWishListBoxBtn">
		<div id="phItemWishListBox" class="ph-item-module-box ph-item-wishlist-box phItemWishListBox"><?php echo $wishlist->renderList(); ?></div>
	  </div>
	</div>
</div>
