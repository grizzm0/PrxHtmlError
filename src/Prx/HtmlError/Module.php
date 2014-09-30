<?php
namespace Prx\HtmlError;

class Module
{
    public function getConfig()
    {
        return require(__DIR__ . '/../../../config/module.config.php');
    }
}
