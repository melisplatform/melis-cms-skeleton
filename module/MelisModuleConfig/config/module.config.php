<?php

/**
 * Melis Technology (http://www.melistechnology.com)
 *
 * @copyright Copyright (c) 2016 Melis Technology (http://www.melistechnology.com)
 *
 */

return array(
    'router' => array(
        'routes' => array(
        ),
    ),
    'translator' => array(
    	'locale' => 'en_EN',
	),
    'service_manager' => array(
        'aliases' => array(
            'translator' => 'MvcTranslator',
        ),
    ),
    'controllers' => array(
        'invokables' => array(
        ),
    ),
    'view_manager' => array(
    ),
    'asset_manager' => array(
        'activate_cache' => array(
            'platforms' => array(
                'development' => 0,
                'preprod' => 1,
            ),
        ),
    ),
);
