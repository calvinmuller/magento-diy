<?php

class Istreet_Diy_Model_Resource_Eav_Mysql4_Slider extends Mage_Eav_Model_Entity_Abstract
{

    public function _construct()
    {
        $resource = Mage::getSingleton('core/resource');
        $this->setType('slider');
        $this->setConnection(
            $resource->getConnection('diy-eav_read'),
            $resource->getConnection('diy-eav_write')
             );
    }

}
	 