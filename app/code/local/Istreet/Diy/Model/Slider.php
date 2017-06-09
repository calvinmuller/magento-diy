<?php

class Istreet_Diy_Model_Slider extends Mage_Core_Model_Abstract
{
    protected function _construct()
    {

        $this->_init("diy-eav/slider");

    }

    /**
     * Return re-sized image URL
     *
     * @deprecated since 1.1.5
     * @return string
     */
    public function getImageUrl()
    {
        return Mage::getBaseUrl('media') . $this->getData('image');
    }
}
	 