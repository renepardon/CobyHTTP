<?php

namespace CobyHTTP;

return array(
    'cobyhttp' => array(
        /**
         * This array contains default configuration options for the CobyHTTP
         */
        'defaults' => array(
        ),
    ),

    'service_manager' => array(
        'factories' => array(
            'cobyhttp' => 'CobyHTTP\Service\Factory',
        ),
    ),
);
