<?php

namespace MetaShipRU\MetaShipPHPSDK;

use GuzzleHttp\Client;
use JMS\Serializer\Serializer;
use JMS\Serializer\SerializerBuilder;
use MetaShipRU\MetaShipPHPSDK\Request\City\GetCitiesRequest;
use MetaShipRU\MetaShipPHPSDK\Request\City\GetZipsRequest;
use MetaShipRU\MetaShipPHPSDK\Request\Documents\GetAcceptanceRequest;
use MetaShipRU\MetaShipPHPSDK\Request\Documents\GetLabelRequest;
use MetaShipRU\MetaShipPHPSDK\Request\Offer\OfferRequest;
use MetaShipRU\MetaShipPHPSDK\Request\Order\CreateOrderRequest;
use MetaShipRU\MetaShipPHPSDK\Request\Order\DeleteOrderRequest;
use MetaShipRU\MetaShipPHPSDK\Request\Order\GetOrdersRequest;
use MetaShipRU\MetaShipPHPSDK\Request\Order\UpdateOrderRequest;
use MetaShipRU\MetaShipPHPSDK\Request\Parcel\CreateParcelRequest;
use MetaShipRU\MetaShipPHPSDK\Request\PickupPoint\GetPickupPointsRequest;
use MetaShipRU\MetaShipPHPSDK\Request\Status\GetStatusesRequest;
use Psr\Http\Message\ResponseInterface;

/**
 * Class MetaShipAPIClient
 * @package MetaShipRU\MetaShipPHPSDK
 */
class MetaShipAPIClient
{
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
        $this->url = $url;
        $this->apiKey = $apiKey;
        $this->apiSecret = $apiSecret;
        $this->options = $options;
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
        return $this->client->request($getOrdersRequest->getMethod(),
            $getOrdersRequest->getPath(),
            [
                'headers' => $this->getHeaders($getOrdersRequest->getMethod(), $getOrdersRequest->getPath()),
            ]);
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
                'headers' => $this->getHeaders($getZipsRequest->getMethod(),
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
                'headers' => $this->getHeaders($createParcelRequest->getMethod(),
                    $createParcelRequest->getPath(),
                    $body)
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
        $body = $this->serializer->serialize($updateOrderRequest, 'json');
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
            ]);
    }

    public function getStatuses(GetStatusesRequest $getStatusesRequest): ResponseInterface
    {
        $path = $getStatusesRequest->getPath() . '/' . $getStatusesRequest->id . '/statuses';
        return $this->client->request($getStatusesRequest->getMethod(),
            $path,
            [
                'headers' => $this->getHeaders($getStatusesRequest->getMethod(), $path),
            ]);
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
