<?php
/**
 * Copyright © 2016 Magetut. All rights reserved.
 * See LICENSE.txt for license details.
 */
namespace Magetut\AdvancedSearch\Adapter;

use Magento\Framework\Search\AdapterInterface;
use Magento\Framework\Search\RequestInterface;
use Magento\Framework\Search\Response\QueryResponse;
use Inchoo\Solr\SearchAdapter\Aggregation\Builder;

/**
 * Solr Search Adapter
 */
class Adapter implements AdapterInterface
{
    protected $responseFactory;

    protected $connectionManager;

    protected $aggregationBuilder;

    public function __construct(
        ResponseFactory $responseFactory,
        Builder $aggregationBuilder,
        ConnectionManager $connectionManager
    ) {
        $this->responseFactory = $responseFactory;
        $this->aggregationBuilder = $aggregationBuilder;
        $this->connectionManager = $connectionManager;

    }

    /**
     * @param RequestInterface $request
     * @return QueryResponse
     */
    public function query(RequestInterface $request)
    {
        $client = $this->getConnection();
        $documents = [];

        $documents[1007] = array('entity_id'=>'1007', 'score'=>46.055);
        $documents[1031] = array('entity_id'=>'1031', 'score'=>45.055);
        $documents[1120] = array('entity_id'=>'1120', 'score'=>44.055);

        $aggregations = $this->aggregationBuilder->build($request, $documents);

        $response = [
            'documents' => $documents,
            'aggregations' => $aggregations,
        ];
        return $this->responseFactory->create($response);
    }

    public function getConnection(){
        return $this->connectionManager->getConnection();
    }
}
