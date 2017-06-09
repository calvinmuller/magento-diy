<?php

$installer = $this;
$installer->startSetup();

$attribute = array(
    'group' => 'General Information',
    'input' => 'text',
    'type' => 'text',
    'label' => 'Custom Class (CSS)',
    'global' => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_GLOBAL,
    'visible' => 1,
    'required' => 0,
    'visible_on_front' => 1,
    'is_html_allowed_on_front' => 0,
    'is_configurable' => 0,
    'searchable' => 0,
    'filterable' => 0,
    'comparable' => 0,
    'unique' => false,
    'user_defined' => false,
    'default' => '',
    'is_user_defined' => false,
    'used_in_product_listing' => true
);

$installer->addAttribute('catalog_category', 'custom_class', $attribute);
$installer->endSetup();

?>