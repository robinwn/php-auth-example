<?php
/**
 * SocialConnect project
 * @author: Patsura Dmitry https://github.com/ovr <talk@dmtry.me>
 */

return [
    'redirectUri' => 'http://localhost:8000/auth/cb/${provider}/',
    'provider' => [
        /*
        // keycloak
        'keycloak' => [
            // 'name' => 'abc', // override for multiple providers based on keycloak
            'baseUrl' => 'https://keycloak_server/auth',
            'realm' => 'your_master',
            'applicationId' => 'your_client',
            'applicationSecret' => 'your_client_uuid4_secret',
            'scope' => [
                'email', 'profile' // openid will be always added
            ],
        ],
*/
        // keycloak
        'keycloak' => [
            //'name' => 'bcgovidir', // override for multiple providers based on keycloak
            'baseUrl' => 'https://dev.loginproxy.gov.bc.ca/auth',
            'realm' => 'standard',
            'applicationId' => 'pnp-provincial-nominee-program-4062',
            'applicationSecret' => '** client secret here **',
            'scope' => [
                'email', 'profile' // openid will be always added
            ],
        ],

    ]
];
