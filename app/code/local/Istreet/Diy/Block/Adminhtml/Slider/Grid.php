<?php

class Istreet_Diy_Block_Adminhtml_Slider_Grid extends Mage_Adminhtml_Block_Widget_Grid
{

    public function __construct()
    {
        parent::__construct();
        $this->setId("sliderGrid");
        $this->setDefaultSort("");
        $this->setDefaultDir("DESC");
        $this->setSaveParametersInSession(true);
    }

    protected function _prepareCollection()
    {
        $collection = Mage::getModel("diy-eav/slider")
            ->getCollection()
            ->addAttributeToSelect('*');

        $collection->getSelect()->distinct(true);
        $this->setCollection($collection);
        return parent::_prepareCollection();
    }

    protected function _prepareColumns()
    {
        $this->addColumn("entity_id", array(
            "header" => Mage::helper("diy")->__("#"),
            "align" => "right",
            "width" => "50px",
            "type" => "number",
            "index" => "entity_id",
        ));

        $this->addColumn("image", array(
            "header" => Mage::helper("diy")->__("Image"),
            "index" => "image",
        ));

        $this->addColumn("link", array(
            "header" => Mage::helper("diy")->__("Link"),
            "index" => "link",
        ));

        $this->addColumn("sort_order", array(
            "header" => Mage::helper("diy")->__("Sort Order"),
            "index" => "sort_order",
        ));

        $this->addExportType('*/*/exportCsv', Mage::helper('sales')->__('CSV'));
        $this->addExportType('*/*/exportExcel', Mage::helper('sales')->__('Excel'));

        return parent::_prepareColumns();
    }

    public function getRowUrl($row)
    {
        return $this->getUrl("*/*/edit", array("id" => $row->getId()));
    }


    protected function _prepareMassaction()
    {
        $this->setMassactionIdField('entity_id');
        $this->getMassactionBlock()->setFormFieldName('entity_ids');
        $this->getMassactionBlock()->setUseSelectAll(true);
        $this->getMassactionBlock()->addItem('remove_slider', array(
            'label' => Mage::helper('diy')->__('Remove Slider'),
            'url' => $this->getUrl('*/adminhtml_slider/massRemove'),
            'confirm' => Mage::helper('diy')->__('Are you sure?')
        ));
        return $this;
    }


}