<?php

	 
				$installer = $this;
				$installer->addEntityType('slider',Array(
				'entity_model'          =>'diy-eav/slider',
				'attribute_model'       =>'',
				'table'         =>'diy-eav/slider',
				'increment_model'       =>'',
				'increment_per_store'   =>'0'
				));

				$installer->createEntityTables(
					$this->getTable('diy-eav/slider')
				);

				$installer->installEntities();
	 
	 
	