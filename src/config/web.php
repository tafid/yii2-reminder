<?php
/**
 * Reminder module for Yii2
 *
 * @link      https://github.com/hiqdev/yii2-reminder
 * @package   yii2-reminder
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2016-2017, HiQDev (http://hiqdev.com/)
 */

return [
    'components' => [
        'i18n' => [
            'translations' => [
                'hiqdev:yii2:reminder' => [
                    'class' => \yii\i18n\PhpMessageSource::class,
                    'basePath' => '@hiqdev/yii2/reminder/messages',
                ],
            ],
        ],
    ],
    'modules' => [
        'reminder' => [
            'class' => \hiqdev\yii2\reminder\Module::class,
        ],
    ],
];
