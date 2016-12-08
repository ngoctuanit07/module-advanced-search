<?php
/**
 * Copyright © 2016 Magetut. All rights reserved.
 * See LICENSE.txt for license details.
 */
namespace Magetut\AdvancedSearch\Model\Client;

class SolariumFactory implements \Magetut\AdvancedSearch\Model\Client\FactoryInterface
{
    /**
     * Object manager
     *
     * @var \Magento\Framework\ObjectManagerInterface
     */
    protected $_objectManager;

    /**
     * @param \Magento\Framework\ObjectManagerInterface $objectManager
     */
    public function __construct(\Magento\Framework\ObjectManagerInterface $objectManager)
    {
        $this->_objectManager = $objectManager;
    }

    /**
     * {@inheritdoc}
     */
    public function create(array $options = [])
    {
        return $this->_objectManager->create('Magetut\AdvancedSearch\Model\Client\Solarium', ['options' => $options]);
    }
}
