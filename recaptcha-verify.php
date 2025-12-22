<?php

function verify_recaptcha_v3(string $token, string $expectedAction, float $minScore = 0.5): bool
{
    if (empty($token)) return false;

    $secret = '6LegQzMsAAAAANOGBGofGgi_zc01m00YpfxvDh_f';

    $response = file_get_contents(
        'https://www.google.com/recaptcha/api/siteverify?' . http_build_query([
            'secret'   => $secret,
            'response' => $token,
            'remoteip'=> $_SERVER['REMOTE_ADDR']
        ])
    );

    if (!$response) return false;

    $result = json_decode($response, true);
    error_log('reCAPTCHA response: ' . json_encode($result));

    if (
        empty($result['success']) ||
        $result['action'] !== $expectedAction ||
        $result['score'] < $minScore
    ) {
        error_log('reCAPTCHA failed: ' . json_encode($result));
        return false;
    }

    return true;
}
