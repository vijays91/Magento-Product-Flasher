<?php
/**
 * Integrate Product Flasher
 *
 * @category   Product Flasher
 * @package    Learn_Product_Flasher
 * @author     Vijayakumar
 *
 */

class Learn_Product_Flasher_Model_Observer extends Varien_Object
{

 	/**
     * Flag to stop observer executing more than once
     *
     * @var static bool
     */
    static protected $_singletonFlag = false;

    public function saveProductTabData(Varien_Event_Observer $observer) {
		if (!self::$_singletonFlag) {
			self::$_singletonFlag = true;
			$product = $observer->getEvent()->getProduct();         
			try {
				$data = $this->_getRequest()->getParams();
				// Mage::log($data);
				$product_flasher_title_1 = $data['product']['product_flasher_title_1'];
				$product_flasher_title_2 = $data['product']['product_flasher_title_2'];
				$product_flasher_enable  = $data['product']['product_flasher_enable'];

				// Get the value will store in separated table collection.

			}
			catch (Exception $e) {
				Mage::getSingleton('adminhtml/session')->addError($e->getMessage());
			}
		}
    }
      
    /**
     * Retrieve the product model
     *
     * @return Mage_Catalog_Model_Product $product
     */
    public function getProduct() {
        return Mage::registry('product');
    }
     
    protected function _getRequest() {
        return Mage::app()->getRequest();
    }
}