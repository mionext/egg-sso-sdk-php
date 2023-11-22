<?php

namespace Egg\Foundation\Sso;

use GuzzleHttp\Client as HttpClient;
use Psr\Http\Message\ResponseInterface;

class Client
{
    private $config = [
        'secret' => '',
        'guzzle_options' => [
            'base_uri' => 'https://cas-api.52ezm.cn/v1/api/',
            'timeout' => 2.5
        ]
    ];

    public function __construct(bool $dev = false, string $secret = null)
    {
        if (is_null($secret)) {
            $secret = getenv('SSO_SECRET');
        }

        $this->config['secret'] = $secret;
        if ($dev) {
            $this->config['guzzle_options']['base_uri'] =
                'https://t-cas-api.52ezm.cn/v1/api/';
        }
    }

    /**
     * 获取系统角色
     *
     * @return array
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function roles(): array
    {
        return json_decode($this->request('roles')->getBody()->getContents(), true);
    }

    /**
     * Ticket to Session
     *
     * @param string $ticket
     * @return array
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function ticket2session(string $ticket, int $ttl = 0): array
    {
        return json_decode($this->request(sprintf("token?ticket=%s&ttl=%d", $ticket, $ttl))
            ->getBody()->getContents(), true);
    }


    /**
     * 检查Token是否有效
     *
     * @param string $token
     * @return array
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function checkSession(string $token): array
    {
        return json_decode($this->request('token/check?token=' . $token)
            ->getBody()->getContents(), true);
    }


    /**
     * 获取账号信息
     *
     * @param string $token
     * @return array
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function profile(string $token): array
    {
        return json_decode($this->request('profile?token=' . $token)
            ->getBody()->getContents(), true);
    }


    /**
     * @param string $uri
     * @param string $method
     * @return ResponseInterface
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    protected function request(string $uri, string $method = 'GET', array $payloads = []): ResponseInterface
    {
        $options = ['headers' => ['X-AK' => $this->config['secret']]];
        if ($payloads && in_array(strtoupper($method), ['POST', 'PUT', 'PATCH', 'DELETE'])) {
            $options['json'] = $payloads;
            $options['headers']['content-type'] = 'application/json';
        }

        return (new HttpClient($this->config['guzzle_options']))->request($method, ltrim($uri, '/'), $options);
    }
}
