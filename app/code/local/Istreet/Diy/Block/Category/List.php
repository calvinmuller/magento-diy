<?php

class Istreet_Diy_Block_Category_List extends Mage_Core_Block_Template implements Mage_Widget_Block_Interface
{

    public function __construct()
    {
        parent::__construct();
    }


    /**
     *
     */
    protected function _getCategories()
    {
        $selected = explode(",", $this->getData('categories'));

        $categories = Mage::getModel('catalog/category')
            ->getCollection()
            ->addAttributeToSelect(['name', 'image'])
            ->addIdFilter($selected)
            ->load();

        $this->setCollection($categories);
    }


    protected function _toHtml()
    {

        $this->_getCategories();

        $this->setTemplate($this->getData('template'));

        return parent::_toHtml();
    }

}