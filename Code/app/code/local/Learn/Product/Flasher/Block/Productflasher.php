<?php
/**
 * Integrate Product Flasher
 *
 * @category   Product Flasher
 * @package    Learn_Product_Flasher
 * @author     Vijayakumar
 *
 */

class Learn_Product_Flasher_Block_Productflasher extends Mage_Core_Block_Template
{

	/*
	 *
	 *
	 */
	protected function getProductFlasherURL($product_id) {
		return Mage::helper('catalog/product')->getProductUrl($product_id);
	}

	/*
	 *
	 *
	 */
	protected function getProductFlasherCollection() {
		$products = Mage::getModel('catalog/product')->getCollection()
					// ->addAttributeToSort("entity_id","DESC")
					->addAttributeToSelect('*')
					->addAttributeToFilter('product_flasher_enable', 1)
					->addAttributeToFilter('product_flasher_title_1', array('neq' => ''))
					->addAttributeToFilter('product_flasher_title_2', array('neq' => ''))
					->setVisibility(Mage::getSingleton('catalog/product_visibility')->getVisibleInSiteIds());
		Mage::getSingleton('catalog/product_status')->addVisibleFilterToCollection($products);
		Mage::getSingleton('catalog/product_visibility')->addVisibleInCatalogFilterToCollection($products);
		Mage::getSingleton('cataloginventory/stock')->addInStockFilterToCollection($products);
		$products->getSelect()->order('RAND()');
		return $products;
    }
}
