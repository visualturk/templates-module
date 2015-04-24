<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

/**
 * Class AnomalyModuleTemplates_1_0_0_CreateTemplatesStream
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 */
class AnomalyModuleTemplates_1_0_0_CreateTemplatesStream extends Migration
{

    /**
     * The streams definition.
     *
     * @var array
     */
    protected $stream = [
        'slug'         => 'templates',
        'translatable' => true,
        'locked'       => true
    ];

    /**
     * The stream assignments.
     *
     * @var array
     */
    protected $assignments = [
        'body' => [
            'translatable' => true,
            'required'     => true
        ]
    ];

}
