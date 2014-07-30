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
 * NewsletterExtended database setup
 *
 * @category   Mediarocks
 * @package    Mediarocks_NewsletterExtended
 * @author     Media Rocks Developer
 */

$installer = $this;
$installer->startSetup();

// add additional columns to "newsletter_subscriber" table

$this->getConnection()->addColumn(
    $this->getTable('newsletter/subscriber'),
    'subscriber_gender',
    array(
        'type' => Varien_Db_Ddl_Table::TYPE_BOOLEAN,
        'length' => 1,
        'nullable' => true,
        'comment' => 'Gender'
    )
);

$this->getConnection()->addColumn(
    $this->getTable('newsletter/subscriber'),
    'subscriber_firstname',
    array(
        'type' => Varien_Db_Ddl_Table::TYPE_TEXT,
        'length' => 255,
        'nullable' => true,
        'comment' => 'First Name'
    )
);

$this->getConnection()->addColumn(
    $this->getTable('newsletter/subscriber'),
    'subscriber_lastname',
    array(
        'type' => Varien_Db_Ddl_Table::TYPE_TEXT,
        'length' => 255,
        'nullable' => true,
        'comment' => 'Last Name'
    )
);

$installer->endSetup();