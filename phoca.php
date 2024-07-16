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

?><div class="ph-cart-module-box ph-cart-module-cart-box <?php echo $moduleclass_sfx ;?>">
	<div class="dropdown">
	  <button id="phItemCartBoxBtn" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><?php echo PhocacartRenderIcon::icon($s['i']['shopping-cart']) ?> <sup class="ph-cart-count-sup phItemCartBoxCount" id="phItemCartBoxCount"><?php echo $cart->getCartCountItems(); ?></sup></button>
	  <div class="dropdown-menu dropdown-menu-end" aria-labelledby="phItemCartBoxBtn">
		<div id="phItemCartBox" class="ph-item-module-box ph-item-cart-box phItemCartBox"><?php echo $cart->render(); ?></div>
	  </div>
	</div>
</div>
