<?php
/**
 * Copyright © 2016 Magetut. All rights reserved.
 * See LICENSE.txt for license details.
 */
namespace Magetut\AdvancedSearch\Model;

interface AdapterFactoryInterface
{
    /**
     * Return search adapter
     *
     * @return \Magetut\AdvancedSearch\Model\Adapter\Solarium
     */
    public function createAdapter();
}
