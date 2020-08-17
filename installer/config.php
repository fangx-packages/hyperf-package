<?php

declare(strict_types=1);

/**
 * Fangx's Packages
 *
 * @link     https://nfangxu.com
 * @document https://pkg.nfangxu.com
 * @contact  nfangxu@gmail.com
 * @author   nfangxu
 * @license  https://pkg.nfangxu.com/license
 */

return [
    'packages' => [
        'hyperf/framework' => [
            'version' => '^2.0',
        ],
        'hyperf/di' => [
            'version' => '^2.0',
        ],
    ],
    'require-dev' => [
    ],
    'questions' => [
        'framework' => [
            'question' => 'Do you want to use hyperf/framework component ?',
            'default' => 'y',
            'required' => false,
            'force' => true,
            'custom-package' => true,
            'options' => [
                1 => [
                    'name' => 'yes',
                    'packages' => [
                        'hyperf/framework',
                    ],
                ],
            ],
        ],
        'di' => [
            'question' => 'Do you want to use hyperf/di component ?',
            'default' => 'y',
            'required' => false,
            'force' => true,
            'custom-package' => true,
            'options' => [
                1 => [
                    'name' => 'yes',
                    'packages' => [
                        'hyperf/di',
                    ],
                ],
            ],
        ],
    ],
];
