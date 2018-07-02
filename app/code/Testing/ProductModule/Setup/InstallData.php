<?php
namespace Testing\ProductModule\Setup;

use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

class InstallData implements InstallDataInterface
{
	private $eavSetupFactory;

	public function __construct(\Magento\Eav\Setup\EavSetupFactory $eavSetupFactory)
	{
		$this->eavSetupFactory = $eavSetupFactory;
	}

	public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
	{
		$setup->startSetup();
		$this->eavSetupFactory->addAttribute(
			\Magento\Catalog\Model\Product::ENTITY,
			'product_text',
			[
				'group' => 'General',
				'type' => 'text',
				'backend' => '',
				'frontend' => 'Testing\ProductModule\Model\Attribute\Frontend\Product',
				'label' => 'Product Text',
				'input' => 'text',
				'sort_order' => 29,
				'entity_type_id' => 4,
				'source' => 'Magento\Eav\Model\Entity\Attribute\Source\Boolean',
				'global' => \Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface::SCOPE_GLOBAL,
				'filterable' => true,
				'user_defined' => false,
				'required' => false,
				'is_used_in_grid' => true,
				'is_visible_in_grid' => true,
				'is_filterable_in_grid' => true,
				'visible' => true,
				'is_html_allowed_on_front' => true,
				'visible_on_front' => true
			]
		);
		$setup->endSetup();
	}
}


