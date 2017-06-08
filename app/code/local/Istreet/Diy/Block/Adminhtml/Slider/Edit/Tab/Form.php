<?php
class Istreet_Diy_Block_Adminhtml_Slider_Edit_Tab_Form extends Mage_Adminhtml_Block_Widget_Form
{
		protected function _prepareForm()
		{

				$form = new Varien_Data_Form();
				$this->setForm($form);
				$fieldset = $form->addFieldset("diy_form", array("legend"=>Mage::helper("diy")->__("Item information")));

								
						$fieldset->addField('image', 'image', array(
						'label' => Mage::helper('diy')->__('Image'),
						'name' => 'image',
						'note' => '(*.jpg, *.png, *.gif)',
						));
						$fieldset->addField("sort_order", "text", array(
						"label" => Mage::helper("diy")->__("Sort Order"),
						"name" => "sort_order",
						));
					

				if (Mage::getSingleton("adminhtml/session")->getSliderData())
				{
					$form->setValues(Mage::getSingleton("adminhtml/session")->getSliderData());
					Mage::getSingleton("adminhtml/session")->setSliderData(null);
				} 
				elseif(Mage::registry("slider_data")) {
				    $form->setValues(Mage::registry("slider_data")->getData());
				}
				return parent::_prepareForm();
		}
}
