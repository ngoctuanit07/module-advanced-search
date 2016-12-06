<?php
/**
 * Copyright © 2016 Magetut. All rights reserved.
 * See LICENSE.txt for license details.
 */
namespace Magetut\AdvancedSearch\Model\Adapter;

/**
 * Search engine abstract adapter
 *
 *
 * @SuppressWarnings(PHPMD.TooManyFields)
 * @SuppressWarnings(PHPMD.ExcessiveClassComplexity)
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 */
abstract class AbstractAdapter
{
    protected $client = null;

    /**
     * @var float|bool
     */
    private $ping;

    private $clientFactory;

    private $clientHelper;

    public function __construct(

        $options = []
    ) {

        try {
            $this->connect($options);
        } catch (\Exception $e) {
            $this->logger->critical($e);
            throw new LocalizedException(
                __('We were unable to perform the search because of a search engine misconfiguration.')
            );
        }
    }

    protected function connect($options = [])
    {
        try {

        } catch (\Exception $e) {
            throw new \RuntimeException('Solr client is not set.');
        }

        return $this->client;
    }

    public function prepareDocsPerStore(array $docData, $storeId)
    {
        if (0 === count($docData)) {
            return [];
        }

        $docs = [];


        return $docs;
    }
}
