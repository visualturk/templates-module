<?php namespace Anomaly\TemplatesModule\Template;

use Anomaly\TemplatesModule\Template\Contract\TemplateRepositoryInterface;
use Illuminate\Filesystem\Filesystem;

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
     * The file system.
     *
     * @var Filesystem
     */
    protected $files;

    /**
     * Create a new TemplateRepository instance.
     *
     * @param TemplateModel $model
     * @param Filesystem    $files
     */
    public function __construct(TemplateModel $model, Filesystem $files)
    {
        $this->model = $model;
        $this->files = $files;
    }

    public function get($key)
    {
        list($namespace, $slug) = explode('::', $key);

        dd($namespace);
    }
}
