<?php
/**
 * Integrate Product Flasher
 *
 * @category   Product Flasher
 * @package    Learn_Product_Flasher
 * @author     Vijayakumar
 *
 */
 
class Learn_Product_Flasher_Helper_Data extends Mage_Core_Helper_Abstract
{

	const XML_PATH_PROUD_FLASHER_ACTIVE				 = 'productflasher/settings/active';
	const XML_PATH_PROUD_FLASHER_BG_COLOR			 = 'productflasher/settings/background_color';
	const XML_PATH_PROUD_FLASHER_TITLE_TXT_COLOR 	 = 'productflasher/settings/title_text_color';
	const XML_PATH_PROUD_FLASHER_SUB_TITLE_TXT_COLOR = 'productflasher/settings/subtitle_text_color';
	const XML_PATH_PROUD_FLASHER_ANIMATION_SPEDD	 = 'productflasher/settings/animation_speed';

	private function conf($code, $store = null) {
        return Mage::getStoreConfig($code, $store);
    }

	public function pf_enable($store = null) {
		return $this->conf(self::XML_PATH_PROUD_FLASHER_ACTIVE, $store);
	}

	public function pf_bg_color($store = null) {
		return $this->conf(self::XML_PATH_PROUD_FLASHER_BG_COLOR, $store);
	}

	public function pf_title_txt_color($store = null) {
		return $this->conf(self::XML_PATH_PROUD_FLASHER_TITLE_TXT_COLOR, $store);
	}

	public function pf_subtitle_txt_color($store = null) {
		return $this->conf(self::XML_PATH_PROUD_FLASHER_SUB_TITLE_TXT_COLOR, $store);
	}

	public function pf_animation_speed($store = null) {
		return $this->conf(self::XML_PATH_PROUD_FLASHER_ANIMATION_SPEDD, $store);
	}
}