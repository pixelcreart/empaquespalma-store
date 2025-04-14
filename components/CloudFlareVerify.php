<?php
namespace app\components;

use Yii;

class CloudFlareVerify {
    public static function verify($token)
    {
        if(YII_ENV_DEV) {
            return true;
        }

        $url = 'https://challenges.cloudflare.com/turnstile/v0/siteverify';
        $secretKey = Yii::$app->params['cloudflare']['secretKey'];

        if(empty($token)) {
            return false;
        }

        $payload = [
            'secret' => $secretKey,
            'response' => $token,
            'remoteip' => $_SERVER['X_FORWARDED_FOR'] ?? $_SERVER['REMOTE_ADDR'],
            'idempotency_key' => Yii::$app->security->generateRandomString(32),
        ];

        $client = new \GuzzleHttp\Client();
        $response = $client->request('POST', $url, [
            'json' => $payload,
            'headers' => [
                'Content-Type' => 'application/json',
            ],
            'http_errors' => false,
        ]);

        $response = json_decode($response->getBody()->getContents());

        if($response->success) {
            return true;
        } else {
            Yii::$app->logtail->error('CloudFlare Verify Error', [
                'category' => 'cloudflare_verify',
                'response' => $response,
            ]);

            return false;
        }
    }
}