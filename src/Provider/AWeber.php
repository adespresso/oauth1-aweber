<?php
namespace AdEspresso\OAuth1\Client\Provider;

use League\OAuth1\Client\Credentials\TokenCredentials;
use League\OAuth1\Client\Server\Server;

class AWeber extends Server
{
    public function urlTemporaryCredentials(): string
    {
        return 'https://auth.aweber.com/1.0/oauth/request_token';
    }

    public function urlAuthorization(): string
    {
        return 'https://auth.aweber.com/1.0/oauth/authorize';
    }

    public function urlTokenCredentials(): string
    {
        return 'https://auth.aweber.com/1.0/oauth/access_token';
    }

    public function urlUserDetails(): string
    {
        return 'https://api.aweber.com/1.0/accounts';
    }

    public function userDetails($data, TokenCredentials $tokenCredentials)
    {
        return $data['entries'][0];
    }

    public function userUid($data, TokenCredentials $tokenCredentials)
    {
        return $data['entries'][0]['id'];
    }

    public function userEmail($data, TokenCredentials $tokenCredentials)
    {
        return null;
    }

    public function userScreenName($data, TokenCredentials $tokenCredentials)
    {
        return null;
    }
}
