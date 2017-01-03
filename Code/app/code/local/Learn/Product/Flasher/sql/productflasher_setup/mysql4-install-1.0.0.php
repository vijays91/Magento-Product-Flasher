<?php
/**
 * Integrate Product Flasher
 *
 * @category   Product Flasher
 * @package    Learn_Product_Flasher
 * @author     Vijayakumar	
 *
 */

/** $this = Mage_Catalog_Model_Resource_Setup **/

$installer = $this;

$installer->startSetup();

$installer->addAttribute('catalog_product', 'product_flasher_title_1', array(
		'backend'				=> '',
		'frontend'				=> '',
		'label'					=> 'Product Flasher Title#1',
		'note'					=> 'Product Flasher Title#1',
		'input'					=> 'text',
		'type' 					=> 'text',
		'frontend_class'			=> ' required_entry input-text ',
		'source'				=> '',
		'global'				=> Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_GLOBAL,
		'visible' 				=> false, // 'is_visible'			=> false, 
		'required'				=> true,
		'user_defined'				=> true,
		'visible_on_front'			=> false,
		'sort_order'				=> 1800,
		'group'					=> '',
	)
);
$installer->addAttributeToSet('catalog_product', 'Default', 'General', 'product_flasher_title_1', 1000);

$installer->addAttribute('catalog_product', 'product_flasher_title_2', array(
		'backend'				=> '',
		'frontend'				=> '',
		'label'					=> 'Product Flasher Title#2',
		'note'					=> 'Product Flasher Title#2',
		'input'					=> 'text',
		'type' 					=> 'text',
		'frontend_class'			=> ' required_entry input-text ',
		'source'				=> '',
		'global'				=> Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_GLOBAL,
		'visible' 				=> false, // 'is_visible'			=> false, 
		'required'				=> true,
		'user_defined'				=> true,
		'visible_on_front'			=> false,
		'sort_order'				=> 1500,
		'group'					=> '',
	)
);
$installer->addAttributeToSet('catalog_product', 'Default', 'General', 'product_flasher_title_2', 1000);

$data =  array(
		'backend'				=> '',
		'frontend'				=> '',
		'label'					=> 'Product Flasher Enable',
		'note'					=> 'Product Flasher Enable',
		'input'					=> 'select',
		'type' 					=> 'int',
		'frontend_class'			=> ' required_entry select ',
		'global'				=> Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_GLOBAL,
		'visible' 				=> false, // 'is_visible'			=> false, 
		'required'				=> true,
		'user_defined'				=> true,
		'visible_on_front'			=> false,
		'sort_order'				=> 1000,
		'group'					=> '',
		'source'				=> 'eav/entity_attribute_source_boolean',
	);
$installer->addAttribute('catalog_product','product_flasher_enable', $data);
$installer->addAttributeToSet('catalog_product', 'Default', 'General', 'product_flasher_enable', 1000);
//Default = attribute set, Product Flasher = attribute group (Like General, Price)

/*-
	$entityTypeId = Mage::getModel('catalog/product')->getResource()->getEntityType()->getId();
	$attributeSetId = $this->getAttributeSetId($entityTypeId, 'New Attr Set');
	$this->addAttributeToSet($entityTypeId, $attributeSetId, 'General', 'new_attr', 10);
-*/
$installer->endSetup();
