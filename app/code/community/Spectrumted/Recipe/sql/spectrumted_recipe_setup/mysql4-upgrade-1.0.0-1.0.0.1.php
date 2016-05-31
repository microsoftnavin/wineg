<?php
/**
 * Spectrumted (Neo Industries Pty Ltd)
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to Neo Industries Pty LTD Non-Distributable Software Modification License (NDSML)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://www.spectrumted.com/legal/licenses/NDSM.html
 * If the license is not included with the package or for any other reason, 
 * you did not receive your licence please send an email to 
 * license@spectrumted.com so we can send you a copy immediately.
 *
 * This software comes with no warrenty of any kind. By Using this software, the user agrees to hold 
 * Neo Industries Pty Ltd harmless of any damage it may cause.
 *
 * @category    modules
 * @module      Spectrumted_Recipe
 * @copyright   Copyright (c) 2011 Neo Industries Pty Ltd (http://www.spectrumted.com)
 * @license     http://www.spectrumted.com/  Non-Distributable Software Modification License(NDSML 1.0)
 */
$installer = $this;
/** @var $installer Mage_Catalog_Model_Resource_Setup */

$installer->startSetup();
$installer->addAttribute('customer', 'default_recipe_category_ids', array(
    'input'         => 'multiselect',
    'type'          => 'text',
    'label'         => 'Linked Recipe Category Ids',
    'source'        => 'eav/entity_attribute_backend_array',
    'backend'       => 'eav/entity_attribute_backend_array',
    'required'      => 0,
    'global'        => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
    'visible'       => 0
));
$installer->endSetup();
