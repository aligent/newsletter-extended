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
 * NewsletterExtended module observer
 *
 * @category   Mediarocks
 * @package    Mediarocks_NewsletterExtended
 * @author     Media Rocks Developer
 */

class Mediarocks_NewsletterExtended_Model_Observer
{
    public function newsletterSubscriberChange(Varien_Event_Observer $observer)
	{
		$subscriber = $observer->getEvent()->getSubscriber();
        $data = Mage::app()->getRequest()->getParams();
		
		if (is_array($data) && isset($data['email'])) {
			
			if (isset($data['gender'])) $subscriber->setSubscriberGender($data['gender']);
			if (isset($data['firstname']))$subscriber->setSubscriberFirstname($data['firstname']);
			if (isset($data['lastname']))$subscriber->setSubscriberLastname($data['lastname']);
		}
		
		return $this;
    }
}