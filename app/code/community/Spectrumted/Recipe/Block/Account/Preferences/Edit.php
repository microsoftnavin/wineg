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
class Spectrumted_Recipe_Block_Account_Preferences_Edit
extends Mage_Core_Block_Template 
implements Mage_Widget_Block_Interface
{	
    function __construct(){
        $this->setTitle('Recipe Preferences');
    }
    
    function getSaveUrl(){
        return  Mage::getUrl('*/*/save');
    }
    
    function getSelectedCategories(){
        if (!$this->getData("selected_category_ids")){
            $categoryIdsStr = Mage::getSingleton('customer/session')->getCustomer()->getData('default_recipe_category_ids');
            $this->setData("selected_category_ids", explode(",",$categoryIdsStr));
        }
        return $this->getData("selected_category_ids");
    }
    
    function getCategories(){
        $categories = Mage::getModel('spectrumted_recipe/category')->getCollection()->addStoreFilter();
        return $categories;
    }


}