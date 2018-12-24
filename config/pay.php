<?php

return [
    'alipay' => [
        'app_id'         => '2016092400582315',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEA0TzLAajO5BwoqGwqkZXZWBc7/qX/5uCilELnywrxY3bzgaCrK089+INkNRnyrwcmrppTDYrg0RZwRt5DQEHnmq/djsUGoTAmcnsUDy/sx2qFR+J1oY6ozu0sfADgHcECIIWrLjZfgTD21ZkGt2Csdr1fzmYgH0+X7h+ozKq+7ytiGWK6woq+sZax/eQOoZnrk7WNI6HUzoUvbGQ0P2kxmRDrUEupHIHjhaTOPAeS/cwvibNBgyrp4MML2yjcHjIAMQnHpu8X7DFkOUjogC9S8HtTjOFUb69iqZpsou5icPTdQl5754bBO96D1EZvuYVpxskx4Gs8aP7UQolQUjzLmwIDAQAB',
        'private_key'    => 'MIIEpAIBAAKCAQEA0TzLAajO5BwoqGwqkZXZWBc7/qX/5uCilELnywrxY3bzgaCrK089+INkNRnyrwcmrppTDYrg0RZwRt5DQEHnmq/djsUGoTAmcnsUDy/sx2qFR+J1oY6ozu0sfADgHcECIIWrLjZfgTD21ZkGt2Csdr1fzmYgH0+X7h+ozKq+7ytiGWK6woq+sZax/eQOoZnrk7WNI6HUzoUvbGQ0P2kxmRDrUEupHIHjhaTOPAeS/cwvibNBgyrp4MML2yjcHjIAMQnHpu8X7DFkOUjogC9S8HtTjOFUb69iqZpsou5icPTdQl5754bBO96D1EZvuYVpxskx4Gs8aP7UQolQUjzLmwIDAQABAoIBAEpslEznzYdn2LJnnxCfu2pRAV8HjqmBt3KDBc27+7aEZgLysk+6ZPGTUr5sl1zYb1Llw6rqfiMBFzit8D/X8VidO3J/9Ga7KMHJs43fXxpjcjrqeyrXAoZv6EXHTfBnaalFwmiyoG/kibfaMYBim5W0sHJK8xwQBJuHmVQLW9TX9cUhVziHlHBeAwWkHiO07zljMLRC0QRXzc3uwaswWEB4n53xC+yUpqqKxL7bJNzkzC+baXky2obZ7EmNtG0zDKCsMuA7jiW9JIZ5ZVj61EWWyNYzpjy7NMZxF/7ZES/LiYFYr6jJWEM3k8xMgv2LcuKRw0f1RPsN1kyvtVg3z/kCgYEA8akM/NqbsKEHgZp8TGtcqHUJiLtCUNrYoZxgp9tHEzcv7CaxouF7ELJ9Hojut8jIWfNWbTxGhHI7hxx3NLYVTLdN0RTUOmEXqoH+udyeC3U2PFafuagmrrzytGLhym1pUI7wQ3LOdRlgwwYtOyqZC3F3WTUOzpBXrdYoqsBOiGcCgYEA3ac4sNPy6PJBVXH3QEaGU2cJ0u3aVZs3a0FaMHZA2i+/abmcjTmEDEIcnQYAP7PQ8XGv9ivlHPF2TB3lf/i6YbUBc2tuy9OF8EdJLH5K+FdQfDlWPB81fLM7ZmnVtKgAsM+QbeC8/HRf08Lh60Zy3A3odE75lNFRqax6oTM1sq0CgYEAvyWWTlKkH1vf0hXeB5xMWDrq5aoo1EemXn6QvXTmjT5zu3kHvOxZKWXlLcfl+pzoTK37SMAKjyzEBSTw7VKxGlNLS/wLunmd/JKCZ4Unxaxaz/M8t99XaZOu7hvguPs9+Ch3xwICaAFA1kIGeOxCzhhb7MXZBm6Jy8i/tgASnjUCgYEA0ZKDgoXT3bb4WR65ZZeI+CCrZDkqP9jTbGDNMpcMuH9+3yr1P35LQP/daAY9g/2zqCYS9pIIPfZ8IHn//aCiMTHgXk4M40FrGYV9RUlf/zEnU10vEQd9HhulJS8aNYbHqGWIrKtaZORvmpxf2YGxpiisShRF3RSQvvnqtLHjqr0CgYAVHWAc65Kz941+BqrnRYuEmtp0mENiqhbFNt5Fmo9xdKdpiZElz+XPkNPeMLMZ348iq69SQB1UzbWqhWfyoF3nCf1YO654zWmxsVyHQ4eeJ50qSH/YTesmPPoT97UzdgAc3l0I9yDe5XxV7yA+UT+FUfrTKgT01Ha45oDQrcGFug==',
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id'      => '',
        'mch_id'      => '',
        'key'         => '',
        'cert_client' => '',
        'cert_key'    => '',
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];
