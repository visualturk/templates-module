<?php namespace Anomaly\TemplatesModule\Template\Table;

use Anomaly\Streams\Platform\Ui\Table\TableBuilder;

/**
 * Class TemplateTableBuilder
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\TemplatesModule\Template\Table
 */
class TemplateTableBuilder extends TableBuilder
{

    /**
     * The table columns.
     *
     * @var array
     */
    protected $columns = [
        'entry.id'
    ];

    /**
     * The table buttons.
     *
     * @var array
     */
    protected $buttons = [
        'edit'
    ];

    /**
     * The table actions.
     *
     * @var array
     */
    protected $actions = [
        'delete'
    ];

}
