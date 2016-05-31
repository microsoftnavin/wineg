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
class Spectrumted_Recipe_Block_Rss_List
extends Mage_Rss_Block_List
{	
    public function _construct() {
        parent::_construct();
        $this->setTemplate('spectrumted/recipe/rss/list.phtml');
    }
    public function getRecipeFeeds()
    {
        $this->resetRssFeed();
        $this->RecipeRssFeed();
        return $this->getRssFeeds();
    }
    
    public function RecipeRssFeed()
    {
        if (Mage::getStoreConfig(Spectrumted_Recipe_Helper_Data::XPATH_CONFIG_RSS_ACTIVE)){
            $path = self::XML_PATH_RSS_METHODS.'/recipe';
            $this->addRssFeed($path, $this->__('Recipe'));
        }
    }
}