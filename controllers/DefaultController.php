<?php

namespace Cherry\Controller;

use Cherry\Log\LogViewer;

class DefaultController
{
    use ControllerTrait;

    public function hello()
    {
        $this->render('index');
    }

    public function showLogs()
    {
        $lw = new LogViewer();
        $lw->render();
    }
}