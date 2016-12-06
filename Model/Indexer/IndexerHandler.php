<?php
/**
 * Copyright © 2016 Magetut. All rights reserved.
 * See LICENSE.txt for license details.
 */
namespace Magetut\AdvancedSearch\Model\Indexer;

use Magento\Framework\Indexer\SaveHandler\IndexerInterface;
use Magetut\AdvancedSearch\Model\Adapter\Solarium;

class IndexerHandler implements IndexerInterface
{
    /**
     * @var Solarium
     */
    private $adapter;

    /**
     * @var array
     */
    private $data;

    /**
     * @var \Magento\Framework\Indexer\SaveHandler\Batch
     */
    private $batch;

    /**
     * @var int
     */
    private $batchSize;

    /**
     * IndexerHandler constructor.
     * @param \Magetut\AdvancedSearch\Model\AdapterFactoryInterface $adapterFactory
     * @param \Magento\Framework\Indexer\SaveHandler\Batch $batch
     * @param array $data
     * @param int $batchSize
     */
    public function __construct(
        \Magetut\AdvancedSearch\Model\AdapterFactoryInterface $adapterFactory,
        \Magento\Framework\Indexer\SaveHandler\Batch $batch,
        array $data = [],
        $batchSize = 500
    ) {
        $this->adapter = $adapterFactory->createAdapter();
        $this->data = $data;
        $this->batch = $batch;
        $this->batchSize = $batchSize;
    }

    public function saveIndex($dimensions, \Traversable $documents)
    {
        foreach ($this->batch->getItems($documents, $this->batchSize) as $documentsBatch) {

        }
    }

    public function deleteIndex($dimensions, \Traversable $documents)
    {
        foreach ($this->batch->getItems($documents, $this->batchSize) as $documentsBatch) {

        }
    }

    public function cleanIndex($dimensions)
    {

    }

    public function isAvailable()
    {
        return true;
    }
}
