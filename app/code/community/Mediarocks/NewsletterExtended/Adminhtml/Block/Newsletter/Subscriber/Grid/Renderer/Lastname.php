<?php

/**
 * Media Rocks
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * DISCLAIMER
 * 
 * Do not edit or add to this file if you wish to upgrade this extension to newer
 * version in the future.
 *
 * @category    Mediarocks
 * @package     Mediarocks_NewsletterExtended
 * @copyright   Copyright (c) 2013 Media Rocks GbR. (http://www.mediarocks.de)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

/**
 * Adminhtml newsletter subscribers grid lastname item renderer
 *
 * @category   Mediarocks
 * @package    Mediarocks_NewsletterExtended
 * @author     Media Rocks Developer
 */

class Mediarocks_NewsletterExtended_Adminhtml_Block_Newsletter_Subscriber_Grid_Renderer_Lastname extends Mage_Adminhtml_Block_Widget_Grid_Column_Renderer_Abstract
{

	public function render(Varien_Object $row)
	{
		if ($row->getType() == 2) {
			$value = $row->getCustomerLastname();
		}
		else {
			$value = $row->getSubscriberLastname();
		}
		
		return $value ? $value : '---';
	}
}