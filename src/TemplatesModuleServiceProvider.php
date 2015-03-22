<?php namespace Anomaly\TemplatesModule;

use Anomaly\Streams\Platform\Addon\AddonServiceProvider;

/**
 * Class TemplatesModuleServiceProvider
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\TemplatesModule
 */
class TemplatesModuleServiceProvider extends AddonServiceProvider
{

    /**
     * The addon routes.
     *
     * @var array
     */
    protected $routes = [
        'admin/templates' => 'Anomaly\TemplatesModule\Http\Controller\Admin\TemplatesController@index'
    ];

}
