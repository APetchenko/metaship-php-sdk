<?php

namespace MetaShipRU\MetaShipPHPSDK;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use JMS\Serializer\Serializer;
use JMS\Serializer\SerializerBuilder;
use MetaShipRU\MetaShipPHPSDK\Request\Autocomplete\GetCitiesAutocompleteRequest;
use MetaShipRU\MetaShipPHPSDK\Request\City\GetCitiesRequest;
use MetaShipRU\MetaShipPHPSDK\Request\City\GetZipsRequest;
use MetaShipRU\MetaShipPHPSDK\Request\Delivery\GetDeliveriesRequest;
use MetaShipRU\MetaShipPHPSDK\Request\Documents\GetAcceptanceRequest;
use MetaShipRU\MetaShipPHPSDK\Request\Documents\GetLabelRequest;
use MetaShipRU\MetaShipPHPSDK\Request\Intake\CreateIntakeRequest;
use MetaShipRU\MetaShipPHPSDK\Request\Intake\DeleteIntakeRequest;
use MetaShipRU\MetaShipPHPSDK\Request\Intake\GetIntakeRequest;
use MetaShipRU\MetaShipPHPSDK\Request\Intake\GetIntakesRequest;
use MetaShipRU\MetaShipPHPSDK\Request\Offer\OfferRequest;
use MetaShipRU\MetaShipPHPSDK\Request\Order\CreateOrderRequest;
use MetaShipRU\MetaShipPHPSDK\Request\Order\DeleteOrderRequest;
use MetaShipRU\MetaShipPHPSDK\Request\Order\GetOrderRequest;
use MetaShipRU\MetaShipPHPSDK\Request\Order\GetOrdersRequest;
use MetaShipRU\MetaShipPHPSDK\Request\Order\UpdateOrderRequest;
use MetaShipRU\MetaShipPHPSDK\Request\Parcel\CreateParcelRequest;
use MetaShipRU\MetaShipPHPSDK\Request\Parcel\GetParcelRequest;
use MetaShipRU\MetaShipPHPSDK\Request\Parcel\GetParcelsRequest;
use MetaShipRU\MetaShipPHPSDK\Request\Product\ProductDataRequest;
use MetaShipRU\MetaShipPHPSDK\Request\Search\GetSearchOrderRequest;
use MetaShipRU\MetaShipPHPSDK\Request\Search\GetSearchOrdersRequest;
use MetaShipRU\MetaShipPHPSDK\Request\Search\GetSearchPickupPointRequest;
use MetaShipRU\MetaShipPHPSDK\Request\Search\GetSearchWarehousesRequest;
use MetaShipRU\MetaShipPHPSDK\Request\Search\SearchOrdersStatusHistoryRequest;
use MetaShipRU\MetaShipPHPSDK\Request\Search\SearchOrderStatusHistoryRequest;
use MetaShipRU\MetaShipPHPSDK\Request\Search\SearchShipmentsRequest;
use MetaShipRU\MetaShipPHPSDK\Request\Shipment\ShipmentDataRequest;
use MetaShipRU\MetaShipPHPSDK\Request\Shipment\ShipmentPatchRequest;
use MetaShipRU\MetaShipPHPSDK\Request\Shop\CreateShopRequest;
use MetaShipRU\MetaShipPHPSDK\Request\Shop\EditShopRequest;
use MetaShipRU\MetaShipPHPSDK\Request\Shop\GetShopsRequest;
use MetaShipRU\MetaShipPHPSDK\Request\Status\GetStatusesRequest;
use MetaShipRU\MetaShipPHPSDK\Request\Vat\GetVatsRequest;
use MetaShipRU\MetaShipPHPSDK\Request\Warehouse\EditWarehouseRequest;
use MetaShipRU\MetaShipPHPSDK\Request\Warehouse\GetWarehousesRequest;
use MetaShipRU\MetaShipPHPSDK\Request\PickupPoint\GetPickupPointsRequest;
use MetaShipRU\MetaShipPHPSDK\Request\Status\GetOrderStatusesRequest;
use MetaShipRU\MetaShipPHPSDK\Request\Warehouse\UpdateBatchWarehousesRequest;
use Psr\Http\Message\ResponseInterface;

/**
 * Class MetaShipAPIClient
 * @package MetaShipRU\MetaShipPHPSDK
 */
class MetaShipAPIClient
{
    private const FORMAT_JSON = 'json';

    /**
     * @var Client
     */
    private $client;

    /**
     * @var string
     */
    private $apiKey;

    /**
     * @var string
     */
    private $apiSecret;

    /**
     * @var string
     */
    private $url;

    /**
     * @var array
     */
    private $options;

    /**
     * @var Serializer
     */
    private $serializer;

    public function __construct(string $url, string $apiKey, string $apiSecret, array $options = [])
    {
        $this->client = new Client(array_merge(['base_uri' => $url], $options));
        $this->apiKey = $apiKey;
        $this->apiSecret = $apiSecret;
        $this->serializer = SerializerBuilder::create()->build();
    }

    public function getOffers(OfferRequest $offerRequest): ResponseInterface
    {
        $params = $this->serializer->toArray($offerRequest);
        return $this->client->request($offerRequest->getMethod(),
            $offerRequest->getPath(),
            [
                'query' => $params,
                'headers' => $this->getHeaders($offerRequest->getMethod(),
                    $offerRequest->getPath(),
                    '',
                    http_build_query($params))
            ]);
    }

    public function createOrder(CreateOrderRequest $createOrderRequest): ResponseInterface
    {
        $body = $this->serializer->serialize($createOrderRequest, 'json');
        return $this->client->post($createOrderRequest->getPath(),
            [
                'body' => $body,
                'headers' => $this->getHeaders($createOrderRequest->getMethod(), $createOrderRequest->getPath(), $body)
            ]);
    }

    public function getOrders(GetOrdersRequest $getOrdersRequest): ResponseInterface
    {
        $params = $this->serializer->toArray($getOrdersRequest);
        return $this->client->request($getOrdersRequest->getMethod(),
            $getOrdersRequest->getPath(),
            [
                'query' => $params,
                'headers' => $this->getHeaders($getOrdersRequest->getMethod(),
                    $getOrdersRequest->getPath(),
                    '',
                    http_build_query($params)),
            ]);
    }

    public function getOrder(GetOrderRequest $getOrderRequest): ResponseInterface
    {
        $path = "{$getOrderRequest->getPath()}/{$getOrderRequest->id}";
        return $this->client->get($path,
            [
                'headers' => $this->getHeaders($getOrderRequest->getMethod(), $path)
            ]
        );
    }

    public function getLabel(GetLabelRequest $getLabelRequest): ResponseInterface
    {
        $path = $getLabelRequest->getPath() . '/' . $getLabelRequest->id . '/labels';
        return $this->client->request($getLabelRequest->getMethod(),
            $path,
            [
                'headers' => $this->getHeaders($getLabelRequest->getMethod(), $path),
            ]);
    }

    public function getPickupPoints(GetPickupPointsRequest $getPickupPointsRequest): ResponseInterface
    {
        $params = $this->serializer->toArray($getPickupPointsRequest);
        return $this->client->request($getPickupPointsRequest->getMethod(),
            $getPickupPointsRequest->getPath(),
            [
                'query' => $params,
                'headers' => $this->getHeaders($getPickupPointsRequest->getMethod(),
                    $getPickupPointsRequest->getPath(),
                    '',
                    http_build_query($params))
            ]);
    }

    public function getCities(GetCitiesRequest $getCitiesRequest): ResponseInterface
    {
        $params = $this->serializer->toArray($getCitiesRequest);
        return $this->client->request($getCitiesRequest->getMethod(),
            $getCitiesRequest->getPath(),
            [
                'query' => $params,
                'headers' => $this->getHeaders($getCitiesRequest->getMethod(),
                    $getCitiesRequest->getPath(),
                    '',
                    http_build_query($params))
            ]);
    }

    public function getZips(GetZipsRequest $getZipsRequest): ResponseInterface
    {
        $params = $this->serializer->toArray($getZipsRequest);

        return $this->client->request($getZipsRequest->getMethod(),
            $getZipsRequest->getPath(),
            [
                'query' => $params,
                'headers' => $this->getHeaders(
                    $getZipsRequest->getMethod(),
                    $getZipsRequest->getPath(),
                    '',
                    http_build_query($params))
            ]);
    }

    public function createParcel(CreateParcelRequest $createParcelRequest): ResponseInterface
    {
        $body = $this->serializer->serialize($createParcelRequest, 'json');
        return $this->client->post($createParcelRequest->getPath(),
            [
                'body' => $body,
                'headers' => $this->getHeaders(
                    $createParcelRequest->getMethod(),
                    $createParcelRequest->getPath(),
                    $body
                )
            ]);
    }

    public function getParcels(GetParcelsRequest $getParcelsRequest): ResponseInterface
    {
        $params = $this->serializer->toArray($getParcelsRequest);
        return $this->client->request(
            $getParcelsRequest->getMethod(),
            $getParcelsRequest->getPath(),
            [
                'query' => $params,
                'headers' => $this->getHeaders(
                    $getParcelsRequest->getMethod(),
                    $getParcelsRequest->getPath(),
                    '',
                    http_build_query($params)
                ),
            ]
        );
    }

    public function getParcel(GetParcelRequest $getParcelRequest): ResponseInterface
    {
        $path = "{$getParcelRequest->getPath()}/{$getParcelRequest->id}";
        return $this->client->request(
            $getParcelRequest->getMethod(),
            $path,
            [
                'headers' => $this->getHeaders($getParcelRequest->getMethod(), $path),
            ]);
    }

    public function createProduct(ProductDataRequest $request): ResponseInterface
    {
        $body = $this->serializer->serialize($request, self::FORMAT_JSON);

        return $this->client->post($request->getPath(), [
            'body' => $body,
            'headers' => $this->getHeaders($request->getMethod(), $request->getPath(), $body),
        ]);
    }

    public function createShipment(ShipmentDataRequest $request): ResponseInterface
    {
        $body = $this->serializer->serialize($request, self::FORMAT_JSON);

        return $this->client->post(
            $request->getPath(),
            [
                'body' => $body,
                'headers' => $this->getHeaders($request->getMethod(), $request->getPath(), $body),
            ]
        );
    }

    public function getWarehouses(GetWarehousesRequest $getWarehousesRequest): ResponseInterface
    {
        $params = $this->serializer->toArray($getWarehousesRequest);
        return $this->client->request(
            $getWarehousesRequest->getMethod(),
            $getWarehousesRequest->getPath(),
            [
                'query' => $params,
                'headers' => $this->getHeaders(
                    $getWarehousesRequest->getMethod(),
                    $getWarehousesRequest->getPath(),
                    '',
                    http_build_query($params)
                ),
            ]
        );
    }

    public function updateBatchWarehouses(UpdateBatchWarehousesRequest $updateBatchWarehousesRequest)
    {
        $body = $this->serializer->serialize($updateBatchWarehousesRequest, 'json');
        return $this->client->put($updateBatchWarehousesRequest->getPath(),
            [
                'body' => $body,
                'headers' => $this->getHeaders($updateBatchWarehousesRequest->getMethod(),
                    $updateBatchWarehousesRequest->getPath(),
                    $body)
            ]);
    }

    public function searchOrdersStatusHistory(SearchOrdersStatusHistoryRequest $searchOrdersStatusHistoryRequest): ResponseInterface
    {
        $params = $this->serializer->toArray($searchOrdersStatusHistoryRequest);
        return $this->client->request($searchOrdersStatusHistoryRequest->getMethod(),
            $searchOrdersStatusHistoryRequest->getPath(),
            [
                'query' => $params,
                'headers' => $this->getHeaders($searchOrdersStatusHistoryRequest->getMethod(),
                    $searchOrdersStatusHistoryRequest->getPath(),
                    '',
                    http_build_query($params)),
            ]);
    }

    public function getSearchOrder(GetSearchOrderRequest $getSearchOrderRequest): ResponseInterface
    {
        $params = $this->serializer->toArray($getSearchOrderRequest);
        return $this->client->request(
            $getSearchOrderRequest->getMethod(),
            $getSearchOrderRequest->getPath(),
            [
                'query' => $params,
                'headers' => $this->getHeaders(
                    $getSearchOrderRequest->getMethod(),
                    $getSearchOrderRequest->getPath(),
                    '',
                    http_build_query($params)
                ),
            ]
        );
    }

    public function getSearchPickupPoint(GetSearchPickupPointRequest $getSearchPickupPointRequest): ResponseInterface
    {
        $params = $this->serializer->toArray($getSearchPickupPointRequest);
        return $this->client->request(
            $getSearchPickupPointRequest->getMethod(),
            $getSearchPickupPointRequest->getPath(),
            [
                'query' => $params,
                'headers' => $this->getHeaders(
                    $getSearchPickupPointRequest->getMethod(),
                    $getSearchPickupPointRequest->getPath(),
                    '',
                    http_build_query($params)
                ),
            ]
        );
    }

    public function getCitiesAutocomplete(GetCitiesAutocompleteRequest $getCitiesAutocompleteRequest): ResponseInterface
    {
        $params = $this->serializer->toArray($getCitiesAutocompleteRequest);
        return $this->client->request(
            $getCitiesAutocompleteRequest->getMethod(),
            $getCitiesAutocompleteRequest->getPath(),
            [
                'query' => $params,
                'headers' => $this->getHeaders(
                    $getCitiesAutocompleteRequest->getMethod(),
                    $getCitiesAutocompleteRequest->getPath(),
                    '',
                    http_build_query($params)
                ),
            ]
        );
    }

    public function getDeliveries(GetDeliveriesRequest $getDeliveriesRequest): ResponseInterface
    {
        $path = $getDeliveriesRequest->getPath();
        if ($getDeliveriesRequest->deliveryName) {
            $path .= '/' . $getDeliveriesRequest->deliveryName;
        }
        $params = $this->serializer->toArray($getDeliveriesRequest);
        return $this->client->request(
            $getDeliveriesRequest->getMethod(),
            $path,
            [
                'query' => $params,
                'headers' => $this->getHeaders(
                    $getDeliveriesRequest->getMethod(),
                    $path,
                    '',
                    http_build_query($params)
                ),
            ]
        );
    }

    /**
     * @param GetVatsRequest $getVatsRequest
     * @return ResponseInterface
     * @throws GuzzleException
     */
    public function getVats(GetVatsRequest $getVatsRequest): ResponseInterface
    {
        $params = $this->serializer->toArray($getVatsRequest);
        return $this->client->request(
            $getVatsRequest->getMethod(),
            $getVatsRequest->getPath(),
            [
                'query' => $params,
                'headers' => $this->getHeaders(
                    $getVatsRequest->getMethod(),
                    $getVatsRequest->getPath(),
                    '',
                    http_build_query($params)
                ),
            ]
        );
    }

    /**
     * @param GetSearchOrdersRequest $getSearchOrdersRequest
     * @return ResponseInterface
     * @throws GuzzleException
     */
    public function getSearchOrders(GetSearchOrdersRequest $getSearchOrdersRequest): ResponseInterface
    {
        $params = $this->serializer->toArray($getSearchOrdersRequest);
        return $this->client->request(
            $getSearchOrdersRequest->getMethod(),
            $getSearchOrdersRequest->getPath(),
            [
                'query' => $params,
                'headers' => $this->getHeaders(
                    $getSearchOrdersRequest->getMethod(),
                    $getSearchOrdersRequest->getPath(),
                    '',
                    http_build_query($params)
                ),
            ]
        );
    }

    /**
     * @param SearchOrderStatusHistoryRequest $searchOrderStatusHistoryRequest
     * @return ResponseInterface
     * @throws GuzzleException
     */
    public function searchOrderStatusHistory(SearchOrderStatusHistoryRequest $searchOrderStatusHistoryRequest): ResponseInterface
    {
        $params = $this->serializer->toArray($searchOrderStatusHistoryRequest);
        return $this->client->request($searchOrderStatusHistoryRequest->getMethod(),
            $searchOrderStatusHistoryRequest->getPath(),
            [
                'query' => $params,
                'headers' => $this->getHeaders($searchOrderStatusHistoryRequest->getMethod(),
                    $searchOrderStatusHistoryRequest->getPath(),
                    '',
                    http_build_query($params)),
            ]);
    }

    /**
     * @param SearchShipmentsRequest $request
     * @return ResponseInterface
     * @throws GuzzleException
     */
    public function searchShipments(SearchShipmentsRequest $request): ResponseInterface
    {
        $method = $request->getMethod();
        $path = $request->getPath();
        $params = $this->serializer->toArray($request);

        return $this->client->request(
            $method,
            $path,
            [
                'query' => $params,
                'headers' => $this->getHeaders($method, $path, '', http_build_query($params)),
            ]
        );
    }

    /**
     * @param int $id
     * @param ShipmentPatchRequest $request
     * @return ResponseInterface
     * @throws GuzzleException
     */
    public function updateShipment(int $id, ShipmentPatchRequest $request): ResponseInterface
    {
        $method = $request->getMethod();
        $path = $request->getPath($id);
        $body = $this->serializer->serialize($request, self::FORMAT_JSON);

        return $this->client->request(
            $method,
            $path,
            [
                'body' => $body,
                'headers' => $this->getHeaders($method, $path, $body),
            ]
        );
    }

    public function getSearchWarehouses(GetSearchWarehousesRequest $getSearchWarehousesRequest): ResponseInterface
    {
        $params = $this->serializer->toArray($getSearchWarehousesRequest);
        return $this->client->request(
            $getSearchWarehousesRequest->getMethod(),
            $getSearchWarehousesRequest->getPath(),
            [
                'query' => $params,
                'headers' => $this->getHeaders(
                    $getSearchWarehousesRequest->getMethod(),
                    $getSearchWarehousesRequest->getPath(),
                    '',
                    http_build_query($params)
                ),
            ]
        );
    }

    public function getShops(GetShopsRequest $getShopsRequest): ResponseInterface
    {
        $params = $this->serializer->toArray($getShopsRequest);
        return $this->client->request(
            $getShopsRequest->getMethod(),
            $getShopsRequest->getPath(),
            [
                'query' => $params,
                'headers' => $this->getHeaders(
                    $getShopsRequest->getMethod(),
                    $getShopsRequest->getPath(),
                    '',
                    http_build_query($params)
                ),
            ]
        );
    }

    public function createShop(CreateShopRequest $createShopRequest): ResponseInterface
    {
        $body = $this->serializer->serialize($createShopRequest, self::FORMAT_JSON);
        return $this->client->post($createShopRequest->getPath(),
            [
                'body' => $body,
                'headers' => $this->getHeaders(
                    $createShopRequest->getMethod(),
                    $createShopRequest->getPath(),
                    $body
                )
            ]);
    }

    public function editShop(EditShopRequest $editShopRequest): ResponseInterface
    {
        $body = $this->serializer->serialize($editShopRequest, self::FORMAT_JSON);
        $path = $editShopRequest->getPath() . '/' . $editShopRequest->id;

        return $this->client->put($path,
            [
                'body' => $body,
                'headers' => $this->getHeaders(
                    $editShopRequest->getMethod(),
                    $path,
                    $body
                )
            ]);
    }

    public function getAcceptance(GetAcceptanceRequest $getAcceptanceRequest): ResponseInterface
    {
        $path = $getAcceptanceRequest->getPath() . '/' . $getAcceptanceRequest->id . '/acceptance';
        return $this->client->request($getAcceptanceRequest->getMethod(),
            $path,
            [
                'headers' => $this->getHeaders($getAcceptanceRequest->getMethod(), $path),
            ]);
    }

    public function updateOrder(UpdateOrderRequest $updateOrderRequest): ResponseInterface
    {
        $body = $this->serializer->serialize($updateOrderRequest, self::FORMAT_JSON);
        $path = $updateOrderRequest->getPath() . '/' . $updateOrderRequest->id;
        return $this->client->put($path,
            [
                'body' => $body,
                'headers' => $this->getHeaders($updateOrderRequest->getMethod(), $path, $body)
            ]);
    }

    public function deleteOrder(DeleteOrderRequest $deleteOrderRequest): ResponseInterface
    {
        $path = $deleteOrderRequest->getPath() . '/' . $deleteOrderRequest->id;
        return $this->client->delete($path,
            [
                'headers' => $this->getHeaders($deleteOrderRequest->getMethod(), $path)
            ]
        );
    }

    public function editWarehouse(EditWarehouseRequest $editWarehouseRequest): ResponseInterface
    {
        $body = $this->serializer->serialize($editWarehouseRequest, self::FORMAT_JSON);
        $path = $editWarehouseRequest->getPath() . '/' . $editWarehouseRequest->id;
        return $this->client->put($path,
            [
                'body' => $body,
                'headers' => $this->getHeaders($editWarehouseRequest->getMethod(), $path, $body)
            ]);
    }

    public function deleteIntake(DeleteIntakeRequest $deleteIntakeRequest): ResponseInterface
    {
        $path = $deleteIntakeRequest->getPath() . '/' . $deleteIntakeRequest->id;
        return $this->client->delete(
            $path,
            [
                'headers' => $this->getHeaders($deleteIntakeRequest->getMethod(), $path)
            ]
        );
    }

    public function getIntake(GetIntakeRequest $getIntakeRequest): ResponseInterface
    {
        $path = $getIntakeRequest->getPath() . '/' . $getIntakeRequest->id;
        return $this->client->request(
            $getIntakeRequest->getMethod(),
            $path,
            [
                'headers' => $this->getHeaders($getIntakeRequest->getMethod(), $path)
            ]
        );
    }

    public function createIntake(CreateIntakeRequest $createIntakeRequest): ResponseInterface
    {
        $body = $this->serializer->serialize($createIntakeRequest, self::FORMAT_JSON);
        return $this->client->post(
            $createIntakeRequest->getPath(),
            [
                'body' => $body,
                'headers' => $this->getHeaders(
                    $createIntakeRequest->getMethod(),
                    $createIntakeRequest->getPath(),
                    $body
                )
            ]
        );
    }

    public function getIntakes(GetIntakesRequest $getIntakesRequest): ResponseInterface
    {
        $params = $this->serializer->toArray($getIntakesRequest);
        return $this->client->request(
            $getIntakesRequest->getMethod(),
            $getIntakesRequest->getPath(),
            [
                'query' => $params,
                'headers' => $this->getHeaders(
                    $getIntakesRequest->getMethod(),
                    $getIntakesRequest->getPath(),
                    '',
                    http_build_query($params)
                ),
            ]
        );
    }

    public function getOrderStatuses(GetOrderStatusesRequest $getStatusesRequest): ResponseInterface
    {
        $path = $getStatusesRequest->getPath() . '/' . $getStatusesRequest->id . '/statuses';
        return $this->client->request($getStatusesRequest->getMethod(),
            $path,
            [
                'headers' => $this->getHeaders($getStatusesRequest->getMethod(), $path),
            ]
        );
    }

    public function getStatuses(GetStatusesRequest $getStatusesRequest): ResponseInterface
    {
        return $this->client->request(
            $getStatusesRequest->getMethod(),
            $getStatusesRequest->getPath(),
            [
                'headers' => $this->getHeaders(
                    $getStatusesRequest->getMethod(),
                    $getStatusesRequest->getPath()
                ),
            ]
        );
    }

    private function getHeaders(string $requestMethod, string $requestSlug, string $requestBody = '',
        string $queryParams = ''
    ) {
        $signature = $this->generateSignatureFromRequest($requestMethod,
            $requestSlug,
            $requestBody,
            $queryParams);
        return [
            'ContentType' => 'application/json',
            'Authorization' => $signature
        ];
    }

    private function generateSignatureFromRequest(string $requestMethod, string $requestSlug, string $requestBody = '',
        string $queryParams = '')
    {
        $hashedPayload = hash('sha256', $requestBody);
        $dateTime = (new \DateTime())->format('Y-m-d\TH:i:s');
        $query = $queryParams ? urldecode($queryParams) : '';
        $requestData = implode(' ',
            [
                $requestMethod,
                $requestSlug,
                $query,
                $dateTime,
                $hashedPayload
            ]);
        $hashedRequestData = hash('sha256', $requestData);
        $generatedInternalSecretKey = hash_hmac('sha256', $hashedRequestData, $this->apiSecret);

        return sprintf('%s, %s, %s, %s',
            'HMAC-SHA256',
            $dateTime,
            $this->apiKey,
            $generatedInternalSecretKey);
    }
}
