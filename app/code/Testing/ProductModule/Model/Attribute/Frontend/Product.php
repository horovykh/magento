<?php

namespace Testing\ProductModule\Model\Attribute\Frontend;

class Product extends \Magento\Eav\Model\Entity\Attribute\Frontend\AbstractFrontend
{

	public function getCustomText(\Magento\Framework\DataObject $object)
	{
		$value = $object->getData($this->getAttribute()->getAttributeCode());
		return $value;
	}
}