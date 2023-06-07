<?php


namespace OpenAPI\Client;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use OpenAPI\Client\Api\AppsApi;
use OpenAPI\Client\Api\RulesApi;

class SquidexClient
{

    /**
     * @var
     */
     public $options;


    /**
     * SquidexClient constructor.
     * @param $options
     * @throws ApiException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function __construct($options)
    {
        $this->options = $options;
        $this->options['access_token'] = $this->getToken();
    }

    /**
     * @return RulesApi
     */
    public function rules()
    {
        return new RulesApi($this->options);
    }


    /**
     * @return AppsApi
     */
    public function apps()
    {
        return new AppsApi($this->options);
    }



    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws ApiException
     */
   private function getToken()
   {
       try {
           $client = new Client();
           $r = $client->request('POST', 'https://cloud.squidex.io/identity-server/connect/token', [
               'form_params' => [
                   'grant_type' => 'client_credentials',
                   'client_id' => $this->options['clientId'],
                   'client_secret' => $this->options['clientSecret'],
                   'scope' => 'squidex-api',
               ],
           ]);
           return $response = json_decode($r->getBody()->getContents())->access_token;
       } catch (RequestException $e) {
           throw new ApiException(
               "[{$e->getCode()}] {$e->getMessage()}",
               (int) $e->getCode(),
               $e->getResponse() ? $e->getResponse()->getHeaders() : null,
               $e->getResponse() ? (string) $e->getResponse()->getBody() : null
           );
       } catch (ConnectException $e) {
           throw new ApiException(
               "[{$e->getCode()}] {$e->getMessage()}",
               (int) $e->getCode(),
               null,
               null
           );
       }
    }

}