<?php

namespace Danphyxius\Designer\Engines\Mustache;

use Mustache_Engine;
use Danphyxius\Designer\Engines\Engine as BaseEngine;

class Engine implements BaseEngine
{
    /**
     * @var Mustache_Engine
     */
    protected $engine;

    /**
     * @param Mustache_Engine $engine
     */
    public function __construct(Mustache_Engine $engine)
    {
        $this->engine = $engine;
    }

    /**
     * Compile the template with
     * given data.
     *
     * @param $template
     * @param $data
     * @return mixed
     */
    public function render($template, $data)
    {
        return $this->engine->render($template, $data);
    }
}
