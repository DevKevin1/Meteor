<?php
class Extension extends \Twig_Extension implements Twig_Extension_GlobalsInterface
{
    public function getGlobals()
    {
        return array(
            'someStuff' => 'test',
        );
    }
}