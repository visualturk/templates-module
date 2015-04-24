<?php namespace Anomaly\TemplatesModule;

use Anomaly\Streams\Platform\Addon\Module\Module;

/**
 * Class TemplatesModule
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\TemplatesModule
 */
class TemplatesModule extends Module
{

    /**
     * The module icon.
     *
     * @var string
     */
    protected $icon = 'order';

    /**
     * The module sections.
     *
     * @var array
     */
    protected $sections = [
        'templates' => [
            'buttons' => [
                'new_template'
            ]
        ]
    ];

}
