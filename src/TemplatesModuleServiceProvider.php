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
        'admin/templates'           => 'Anomaly\TemplatesModule\Http\Controller\Admin\TemplatesController@index',
        'admin/templates/create'    => 'Anomaly\TemplatesModule\Http\Controller\Admin\TemplatesController@create',
        'admin/templates/edit/{id}' => 'Anomaly\TemplatesModule\Http\Controller\Admin\TemplatesController@edit'
    ];

    /**
     * The addon bindings.
     *
     * @var array
     */
    protected $bindings = [
        'Anomaly\TemplatesModule\Template\TemplateModel'                        => 'Anomaly\TemplatesModule\Template\TemplateModel',
        'Anomaly\Streams\Platform\Model\Templates\TemplatesTemplatesEntryModel' => 'Anomaly\TemplatesModule\Template\TemplateModel'
    ];

    /**
     * The addon singletons.
     *
     * @var array
     */
    protected $singletons = [
        'Anomaly\TemplatesModule\Template\TemplateMailer'                       => 'Anomaly\TemplatesModule\Template\TemplateMailer',
        'Anomaly\TemplatesModule\Template\Contract\TemplateRepositoryInterface' => 'Anomaly\TemplatesModule\Template\TemplateRepository'
    ];

}
