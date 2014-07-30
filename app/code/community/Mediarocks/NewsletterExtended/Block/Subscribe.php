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
 * Newsletter Subscription block
 *
 * @category   Mediarocks
 * @package    Mediarocks_NewsletterExtended
 * @author     Media Rocks Developer
 */

class Mediarocks_NewsletterExtended_Block_Subscribe extends Mage_Newsletter_Block_Subscribe
{

    protected function _toHtml()
    {
		// set extended template if no template or the default template is set (that makes it possible to override the template via layout.xml)
    	if (!$this->getTemplate() || $this->getTemplate() == 'newsletter/subscribe.phtml') {
			$this->setTemplate('mediarocks/newsletterextended/subscribe.phtml');
        }
		
        return parent::_toHtml();
    }
}
