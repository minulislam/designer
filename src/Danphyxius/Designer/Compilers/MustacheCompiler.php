<?php

namespace Danphyxius\Designer\Compilers;

use Danphyxius\Designer\Engines\MustacheFactory;

class MustacheCompiler extends TemplateCompiler implements Compiler
{
    /**
     * Create a new Mustache Compiler instance.
     * @param MustacheFactory $factory
     * @param array $options
     */
    public function __construct(MustacheFactory $factory, $options = [])
    {
        parent::__construct($factory, $options);
    }

    /**
     * Compile the template with
     * given data.
     *
     * @param $template
     * @param $data
     * @return mixed
     */
    public function compile($template, $data)
    {
        return $this->engine->render($template, $data);
    }
}
