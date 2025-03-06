<?php

namespace Squidex\Client;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Handler\CurlHandler;
use GuzzleHttp\HandlerStack;
use Psr\Http\Message\RequestInterface;
use Squidex\Client\AccessToken;
use Squidex\Client\Api\AppsApi;
use Squidex\Client\Api\AssetsApi;
use Squidex\Client\Api\BackupsApi;
use Squidex\Client\Api\CommentsApi;
use Squidex\Client\Api\ContentsApi;
use Squidex\Client\Api\DiagnosticsApi;
use Squidex\Client\Api\EventConsumersApi;
use Squidex\Client\Api\HistoryApi;
use Squidex\Client\Api\LanguagesApi;
use Squidex\Client\Api\NotificationsApi;
use Squidex\Client\Api\PingApi;
use Squidex\Client\Api\PlansApi;
use Squidex\Client\Api\RulesApi;
use Squidex\Client\Api\SchemasApi;
use Squidex\Client\Api\SearchApi;
use Squidex\Client\Api\StatisticsApi;
use Squidex\Client\Api\TeamsApi;
use Squidex\Client\Api\TemplatesApi;
use Squidex\Client\Api\TranslationsApi;
use Squidex\Client\Api\UserManagementApi;
use Squidex\Client\Api\USersApi;

class SquidexClient
{
    private $client = null;
    private $appsClient = null;
    private $assetsClient = null;
    private $backupsClient = null;
    private $commentsClient = null;
    private $contentsClient = null;
    private $diagnosticsClient = null;
    private $eventConsumersClient = null;
    private $historyClient = null;
    private $languagesClient = null;
    private $notificationsClient = null;
    private $pingClient = null;
    private $plansClient = null;
    private $rulesClient = null;
    private $schemasClient = null;
    private $searchClient = null;
    private $statisticsClient = null;
    private $teamsClient = null;
    private $templateClients = null;
    private $translationsClient = null;
    private $userManagementClient = null;
    private $usersClient = null;

    /**
     * The configuration
     *
     * @var Configuration
     */
     public $config;


    /**
     * SquidexClient constructor.
     * @param $options
     * @throws ApiException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function __construct($config)
    {
        $this->config = $config;
        
        $stack = new HandlerStack();
        $stack->setHandler(new CurlHandler());
        $stack->push(requestToken($config));

        $this->client = new Client([ 'verify' => !$config->getIgnoreCertificates(), 'handler' => $stack, 'timeout' => $config->getTimeout() ]);
    }

    /**
     * @return AppsApi
     */
    public function apps()
    {
        return $this->appsClient?: $this->appsClient = new AppsApi($this->config, $this->client);
    }

    /**
     * @return AssetsApi
     */
    public function assets()
    {
        return $this->assetsClient?: $this->assetsClient = new AssetsApi($this->config, $this->client);
    }

    /**
     * @return BackupsApi
     */
    public function backups()
    {
        return $this->backupsClient?: $this->backupsClient = new BackupsApi($this->config, $this->client);
    }

    /**
     * @return CommentsApi
     */
    public function comments()
    {
        return $this->commentsClient?: $this->commentsClient = new CommentsApi($this->config, $this->client);
    }

    /**
     * @return ContentsApi
     */
    public function contents()
    {
        return $this->contentsClient?: $this->contentsClient = new ContentsApi($this->config, $this->client);
    }

    /**
     * @return DiagnosticsClient
     */
    public function diagnostics()
    {
        return $this->diagnosticsClient?: $this->diagnosticsClient = new DiagnosticsClient($this->config, $this->client);
    }

    /**
     * @return EventConsumersApi
     */
    public function eventConsumers()
    {
        return $this->eventConsumersClient?: $this->diagnosticsClient = new EventConsumersApi($this->config, $this->client);
    }

    /**
     * @return HistoryApi
     */
    public function history()
    {
        return $this->historyClient?: $this->historyClient = new HistoryApi($this->config, $this->client);
    }

    /**
     * @return LanguagesApi
     */
    public function languages()
    {
        return $this->languagesClient?: $this->languagesClient = new LanguagesApi($this->config, $this->client);
    }

    /**
     * @return NotificationsApi
     */
    public function notifications()
    {
        return $this->notificationsClient?: $this->notificationsClient = new NotificationsApi($this->config, $this->client);
    }

    /**
     * @return PingApi
     */
    public function ping()
    {
        return $this->pingClient?: $this->pingClient = new PingApi($this->config, $this->client);
    }

    /**
     * @return PlansApi
     */
    public function plans()
    {
        return $this->plansClient?: $this->plansClient = new PlansApi($this->config, $this->client);
    }

    /**
     * @return RulesApi
     */
    public function rules()
    {        
        return $this->rulesClient?: $this->rulesClient = new RulesApi($this->config, $this->client);
    }

    /**
     * @return SchemasApi
     */
    public function schemas()
    {        
        return $this->schemasClient?: $this->schemasClient = new SchemasApi($this->config, $this->client);
    }

    /**
     * @return SearchApi
     */
    public function search()
    {        
        return $this->searchClient?: $this->searchClient = new SearchApi($this->config, $this->client);
    }

    /**
     * @return StatisticsApi
     */
    public function statistics()
    {        
        return $this->statisticsClient?: $this->statisticsClient = new StatisticsApi($this->config, $this->client);
    }

    /**
     * @return RulesApi
     */
    public function TeamsApi()
    {        
        return $this->teamsClient?: $this->teamsClient = new TeamsApi($this->config, $this->client);
    }

    /**
     * @return TemplatesApi
     */
    public function templates()
    {        
        return $this->templatesClient?: $this->templatesClient = new TemplatesApi($this->config, $this->client);
    }

    /**
     * @return TranslationsApi
     */
    public function translations()
    {        
        return $this->translationsClient?: $this->translationsClient = new TranslationsApi($this->config, $this->client);
    }

    /**
     * @return UserManagementApi
     */
    public function userManagement()
    {        
        return $this->userManagementClient?: $this->userManagementClient = new UserManagementApi($this->config, $this->client);
    }

    /**
     * @return UsersApi
     */
    public function users()
    {        
        return $this->users?: $this->users = new UsersApi($this->config, $this->client);
    }
}

function requestToken($config) 
{
    $requestClient = new Client([ 'verify' => false ]);
    $clientId = $config->getClientId();
    $clientSecret = $config->getClientSecret();
    $tokenStore = $config->getTokenStore();

    $acquireToken = function () use ($clientId, $clientSecret, $config, $requestClient) 
    {
        $request = $requestClient->request('POST', $config->getUrl() . '/identity-server/connect/token', [
            'form_params' => [
                'grant_type' => 'client_credentials',
                'client_id' => $clientId,
                'client_secret' => $clientSecret,
                'scope' => 'squidex-api',
            ],
        ]);

        $response = json_decode($request->getBody()->getContents());

        return new AccessToken($response->access_token, $response->expires_in);
    };

    $makeRequest = function (RequestInterface $request, array $options, $handler) use ($acquireToken, $tokenStore)
    {
        $token = $tokenStore->get();

        if (isset($token) && $token->getExpiresAt() < time())
        {
            $token = null;
            $tokenStore->clear();
        }

        if ($token == null) {
            $token = $acquireToken();
            $tokenStore->set($token);
        }

        $request = $request->withHeader('Authorization', 'Bearer ' . $token->getAccessToken());
        return $handler($request, $options);
    };

    return function (callable $handler) use ($makeRequest, $tokenStore)
    {
        return function (RequestInterface $request, array $options) use ($handler, $makeRequest, $tokenStore)
        {
            try {
                $response = $makeRequest($request, $options, $handler);
            } catch (RequestException $e) {
                if ($e->getCode() == 401) {
                    $tokenStore->clear();
                    $response = $makeRequest($request, $options, $handler);
                } else {
                    throw $e;
                }
            }

            return $response;
        };
    };
}