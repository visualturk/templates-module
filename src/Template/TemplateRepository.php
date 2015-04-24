<?php namespace Anomaly\TemplatesModule\Template;

use Anomaly\TemplatesModule\Template\Contract\TemplateRepositoryInterface;

/**
 * Class TemplateRepository
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\TemplatesModule\Template
 */
class TemplateRepository implements TemplateRepositoryInterface
{

    /**
     * The template model.
     *
     * @var TemplateModel
     */
    protected $model;

    /**
     * Create a new TemplateRepository instance.
     *
     * @param TemplateModel $model
     */
    public function __construct(TemplateModel $model)
    {
        $this->model = $model;
    }
}
