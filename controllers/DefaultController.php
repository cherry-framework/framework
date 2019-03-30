<?php

namespace Cherry\Controller;

class DefaultController
{
    use ControllerTrait;

    public function hello()
    {
        $this->render('index');
    }
}