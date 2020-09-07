<?php declare(strict_types=1);

namespace Pagerfanta\View\Template;

class TwitterBootstrap3Template extends TwitterBootstrapTemplate
{
    public function __construct()
    {
        parent::__construct();

        if ($this->option('active_suffix') === '') {
            $this->setOptions(['active_suffix' => '<span class="sr-only">(current)</span>']);
        }
    }

    public function container(): string
    {
        return sprintf('<ul class="%s">%%pages%%</ul>',
            $this->option('css_container_class')
        );
    }
}
