<?php

namespace MetaShipRU\MetaShipPHPSDK\Request\Autocomplete;
use JMS\Serializer\Annotation as Serializer;
use MetaShipRU\MetaShipPHPSDK\Request\IRequest;
use MetaShipRU\MetaShipPHPSDK\Request\RequestCore;

/**
 * Class GetCitiesAutocompleteRequest
 * @package MetaShipRU\MetaShipPHPSDK\Request\Autocomplete
 */
class GetCitiesAutocompleteRequest implements IRequest
{
    use RequestCore;

    const PATH = '/v1/autocomplete/cities';
    const METHOD = 'GET';

    /**
     * @Serializer\Type("string")
     * @var string
     */
    public $term;
}
