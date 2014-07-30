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
 * NewsletterExtended Subscribers Collection
 *
 * @category   Mediarocks
 * @package    Mediarocks_NewsletterExtended
 * @author     Media Rocks Developer
 */

class Mediarocks_NewsletterExtended_Model_Mysql4_Subscriber_Collection extends Mage_Newsletter_Model_Mysql4_Subscriber_Collection
{
    /**
     * Adds customer info to select
     *
     * @return Mage_Newsletter_Model_Resource_Subscriber_Collection
     */
    public function showCustomerGender()
    {
        $adapter = $this->getConnection();
        $customer = Mage::getModel('customer/customer');
        $gender   = $customer->getAttribute('gender');

        $this->getSelect()
            ->joinLeft(
                array('customer_gender_table'=>$gender->getBackend()->getTable()),
                $adapter->quoteInto('customer_gender_table.entity_id=main_table.customer_id
                 AND customer_gender_table.attribute_id = ?', (int)$gender->getAttributeId()),
                array('customer_gender'=>'value')
            );

        return $this;
    }
}
