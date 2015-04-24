<?php namespace Anomaly\TemplatesModule\Template;

use Anomaly\Streams\Platform\Support\Parser;
use Anomaly\TemplatesModule\Template\Contract\TemplateRepositoryInterface;
use Illuminate\Mail\Mailer;

/**
 * Class TemplateMailer
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\TemplatesModule\Template
 */
class TemplateMailer
{

    /**
     * The mailer utility.
     *
     * @var Mailer
     */
    protected $mailer;

    /**
     * The parser utility.
     *
     * @var Parser
     */
    protected $parser;

    /**
     * The template repository.
     *
     * @var TemplateRepositoryInterface
     */
    protected $repository;

    /**
     * Create a new TemplateMailer instance.
     *
     * @param Mailer                      $mailer
     * @param Parser                      $parser
     * @param TemplateRepositoryInterface $repository
     */
    function __construct(Mailer $mailer, Parser $parser, TemplateRepositoryInterface $repository)
    {
        $this->mailer     = $mailer;
        $this->parser     = $parser;
        $this->repository = $repository;
    }

    /**
     * Send a template email.
     *
     * @param $template
     * @param $data
     * @return bool
     */
    public function send($template, $data)
    {
        return ($this->mailer->raw($template, $data));
    }
}
