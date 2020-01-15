<?php

namespace MetaShipRU\MetaShipPHPSDK\Request\Parcel;

use JMS\Serializer\Annotation as Serializer;
use MetaShipRU\MetaShipPHPSDK\Request\IRequest;
use MetaShipRU\MetaShipPHPSDK\Request\RequestCore;

/**
 * Class CreateParcelRequest
 * @package MetaShipRU\MetaShipPHPSDK\Request\Parcel
 */
class CreateParcelRequest implements IRequest
{
    use RequestCore;

    const PATH = '/v1/parcels';
    const METHOD = 'POST';

    /**
     * @Serializer\Type("array")
     * @Serializer\SerializedName("orderNumbers")
     * @var array
     */
    public $orderNumbers;

    /**
     * @Serializer\Type("array")
     * @Serializer\SerializedName("shopNumbers")
     * @var array
     */
    public $shopNumbers;

    /**
     * @Serializer\SerializedName("shipmentDate")
     * @Serializer\Type("string")
     * @var string
     */
    public $shipmentDate;

    /**
     * @Serializer\SerializedName("shopServiceNumber")
     * @Serializer\Type("string")
     * @var string
     */
    public $shopServiceNumber;
}
