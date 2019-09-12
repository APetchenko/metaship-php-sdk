<?php

namespace MetaShipRU\MetaShipPHPSDK\Request\Shop;

use JMS\Serializer\Annotation as Serializer;
use MetaShipRU\MetaShipPHPSDK\Request\IRequest;
use MetaShipRU\MetaShipPHPSDK\Request\RequestCore;

/**
 * Class EditShopRequest
 * @package MetaShipRU\MetaShipPHPSDK\Request\Shop
 */
class EditShopRequest extends CreateShopRequest implements IRequest
{
    const METHOD = 'PUT';

    /**
     * @Serializer\Type("integer")
     * @var int
     */
    public $id;
}
