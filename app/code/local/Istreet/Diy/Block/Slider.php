<?php

class Istreet_Diy_Block_Slider extends Mage_Core_Block_Template implements Mage_Widget_Block_Interface
{

    public function __construct()
    {
        parent::__construct();
        $datasets = Mage::getModel('diy/slider')
            ->getCollection()
            ->addAttributeToSelect('*');

        $this->setDatasets($datasets);

        $this->addData(array('cache_lifetime' => 86400));

        $this->addCacheTag(Mage_Catalog_Model_Product::CACHE_TAG);

    }

}