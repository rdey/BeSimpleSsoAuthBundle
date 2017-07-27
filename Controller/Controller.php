<?php

namespace BeSimple\SsoAuthBundle\Controller;

use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerAwareTrait;

class Controller implements ContainerAwareInterface
{
    use ContainerAwareTrait;

    protected function render($view, array $parameters)
    {
        return $this
            ->container
            ->get('templating')
            ->renderResponse($view, $parameters)
        ;
    }
}
