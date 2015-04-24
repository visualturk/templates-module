<?php namespace Anomaly\TemplatesModule\Http\Controller\Admin;

use Anomaly\Streams\Platform\Http\Controller\AdminController;
use Anomaly\TemplatesModule\Template\Form\TemplateFormBuilder;
use Anomaly\TemplatesModule\Template\Table\TemplateTableBuilder;

/**
 * Class TemplatesController
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\TemplatesModule\Http\Controller\Admin
 */
class TemplatesController extends AdminController
{

    /**
     * Return an index of existing templates.
     *
     * @param TemplateTableBuilder $table
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(TemplateTableBuilder $table)
    {
        return $table->render();
    }

    /**
     * Return a form for a new template.
     *
     * @param TemplateFormBuilder $form
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function create(TemplateFormBuilder $form)
    {
        return $form->render();
    }

    /**
     * Return a form for an existing template.
     *
     * @param TemplateFormBuilder $form
     * @param                     $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function edit(TemplateFormBuilder $form, $id)
    {
        return $form->render($id);
    }
}
