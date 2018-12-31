<?php

return [
    'alipay' => [
        'app_id'         => '2016092400582315',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAtg8gP/BfnNS32IdzeElhh6fyZM8xzdRtJe+o8M7nTVNkfaU9RIsFIcCTA/8tqXz2d+6drqIpFHWS99HGFaqiZ1U3rM+BY20B7jYuOpPtG/bWlQ8m5b9SKHsNFGBml+JspmcDNBUnLx/nb7sYJY7ubOYiVejWAQTxmWBP5AN9SYgWJ1/BuZXq8n/+td8ygVJMJzFjPpKfpXprMWD+91CDvO11bFNl8VJiJnNOQt91nh7mYIujaTFopkbeoVK0gjURSEoAutsckZJChIMAYIKZlGr5AAoHkm7Hyc+ohySjM+k0AJktaZ5XJrL8J+El4o8E4l+D22UMLYeukxaz3x2qgQIDAQAB',
        'private_key'    => 'MIIEogIBAAKCAQEAssXav26fWIWiECqSi+vDPJean7KUnLV/mwAszdOgmfPKLoYC+ew8ian1tVp04LM++L/bCSMVXxEsvgRK0XCeMm1c0ukTSoGQQbaBsNYkLLZHd0yx34eTsBhimJBrUVup8bybllZ8SfGPxsEYxDvkiqoTAfU5oCtCCQd/pgx+lI7haBB4IFfR8b03fKwqSbDpMcyPHohb44mZgvycwphsmFQ2dDa0Qwxhrk+YyvsUxjord6z+OJYQErlctfCh6pBLkaORKhk2LeTD52gfjzxYMZhIWEtttnX7HkG4w1TdeCZ1DCphn6R0Mglp8VetE5idXmmaknFNy9kBGeBitZ8/KQIDAQABAoIBAD6yNO0+FpQtCZEx3QNFQ8tUP94R+xyaao4pmYz10zUq0pVOWmzb9L8y5AEeIC9NrZ//aQnjS/NzSoW5a6PYIyL8R7mQFDvlBHqHTyR9dWJY6udj9l22Zo0zgCCRRZHa29bzln07B4vHM+04ez8W4iffTZs6LWOGyDnyb0oEx7/BZexPtXAWej2VZOR+/XPcwMU3GaOgnKvfy4/7zwCRckNem1jFWeBfS3beJ6JSvZbUzpAdK8XbWLRUEsbtNb4OMqvPEGTMhmrTOz4uUF+1Re6gt8mgJ8YxmfZbAyfPI2lPnTCWXuZ6jZBDzO4HAL/xHQxUUa9aP1eEFnzjqT7fPAECgYEA4tO8kWmRc49TXvCPTpQyR5M9VkuhmPnh881KP2q0bDEQlna2RVFldf5JMI4j31FquurDZcNwgWSwLUqtaQFlkcPE9w4ofb/2LEHsu5fFNUcSLskorzpd/i+THY7pOHTEDC3ZzvP0jFqF+a2v8MsP9R3sQFToU2kgByysbcPTdFkCgYEAycPvuinbA+WrfTFzAGN+OSp03Ajfzs2JcmMxLElch5yg7sQy+KMjF0fXu4vC+5v9cnS5KwCbSBym0qB1bQBKWaMUX/gnfAXtdJy7eTIfe58n2ApehKx2cCVtL59/7Lz1GAwqFcemalmXm4yWut6RERGEDromWlUj7NEzLPaxB1ECgYBI8DFIyRuef04dz1kluX3Zij1FDJjwKhpAXZksf1F5IOXmnFHMRHpN0PEUDgD3BKU/adJfXNNGqGwGhGbyxyI0FzG1B/Z5SUsNvD01rX4avbnZFZJhlnE3FXFHJfdU0idgizXo2IWgxFMkkHdtBL8i4PZhUWxLthg4dmMUAM50MQKBgFVqxvWYPKlktPoWUipq9If9CmYQt7dUWoj7p1ipYivjSlpq421Rm0yC1LkITS659k1bTvz+j76yqolm9u+DfPZ/zONoKkceN030AIYpixyJ35NdqHAgly+ZGKVdsAmoYVah57s6v6Asd7uZhEJucRm5wZ9+fTgm7UOXuUOi2IVRAoGAXUt/CXOLcv7Y4FWw4Cn5pI3OV+4YRx8egfy75CtWo9m9X2/yH7pFN22QwcegRnXTUXN7Ds6cMjlhNV8EJnmt5sb0bwty6z09XZYOJAyzdj8LtbOzunPayYfdL4ELjOactUujwMHqf5f7qn2huyaD1MxiB8YAW9OtUnQZ/a7iPxk=',
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
