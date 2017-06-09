<?php
		$installer = $this;
		$installer->startSetup();
		
$installer->addAttribute("slider", "image", array("type"=>"varchar"));
$installer->addAttribute("slider", "sort_order", array("type"=>"int"));
		$installer->endSetup();
			 