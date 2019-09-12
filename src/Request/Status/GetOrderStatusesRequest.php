<?php

namespace MetaShipRU\MetaShipPHPSDK\Request\Status;

use MetaShipRU\MetaShipPHPSDK\Request\IRequest;
use MetaShipRU\MetaShipPHPSDK\Request\RequestCore;

/**
 * Class GetStatusesRequest
 * @package MetaShipRU\MetaShipPHPSDK\Request\Statuses
 */
class GetOrderStatusesRequest implements IRequest
{
    use RequestCore;

    const METHOD = 'GET';
    const PATH = '/v1/orders';

    /**
     * @var int
     */
    public $id;

}
