<?php
class Istreet_Diy_Adminhtml_DiybackendController extends Mage_Adminhtml_Controller_Action
{

	protected function _isAllowed()
	{
		//return Mage::getSingleton('admin/session')->isAllowed('diy/diybackend');
		return true;
	}

	public function indexAction()
    {
       $this->loadLayout();
	   $this->_title($this->__("Backend Page Title"));
	   $this->renderLayout();
    }
}