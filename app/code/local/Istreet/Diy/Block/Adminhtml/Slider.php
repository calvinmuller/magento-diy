<?php


class Istreet_Diy_Block_Adminhtml_Slider extends Mage_Adminhtml_Block_Widget_Grid_Container{

	public function __construct()
	{

	$this->_controller = "adminhtml_slider";
	$this->_blockGroup = "diy";
	$this->_headerText = Mage::helper("diy")->__("Slider Manager");
	$this->_addButtonLabel = Mage::helper("diy")->__("Add New Item");
	parent::__construct();
	
	}

}