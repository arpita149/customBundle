<?php

/**
 * Pimcore
 *
 * This source file is available under two different licenses:
 * - GNU General Public License version 3 (GPLv3)
 * - Pimcore Commercial License (PCL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 *  @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.org)
 *  @license    http://www.pimcore.org/license     GPLv3 and PCL
 */

namespace Demo\MyCustomBundle\Service;

use CustomerManagementFrameworkBundle\CustomerSaveManager\DefaultCustomerSaveManager;
use Pimcore\Model\Element\ValidationException;

class CustomerService extends DefaultCustomerSaveManager
{
    public function preAdd(CustomerInterface $customer)
    {
        parent::preAdd($customer);

        // Set the customer's active and published properties to true by default.
        $customer->setActive(true);
        $customer->setPublished(true);
    }
    
} 
