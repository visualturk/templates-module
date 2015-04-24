<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

/**
 * Class AnomalyModuleTemplates_1_0_0_CreateTemplatesFields
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 */
class AnomalyModuleTemplates_1_0_0_CreateTemplatesFields extends Migration
{

    /**
     * The addon fields.
     *
     * @var array
     */
    protected $fields = [
        'name'        => 'anomaly.field_type.text',
        'description' => 'anomaly.field_type.textarea',
        'subject'     => 'anomaly.field_type.text',
        'body'        => 'anomaly.field_type.wysiwyg',
        'to'          => 'anomaly.field_type.email',
        'from'        => 'anomaly.field_type.email'
    ];

}
