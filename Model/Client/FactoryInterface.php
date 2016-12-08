<?php
/**
 * Copyright © 2016 Magetut. All rights reserved.
 * See LICENSE.txt for license details.
 */
namespace Magetut\AdvancedSearch\Model\Client;

interface FactoryInterface
{
    /**
     * Return search client
     *
     * @param array $options
     * @return mixed
     */
    public function create(array $options = []);
}
