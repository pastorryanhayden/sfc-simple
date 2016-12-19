<?php namespace Sfc\SfcSimple;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            'Sfc\SfcSimple\Components\Beliefs' => 'beliefs',
            'Sfc\SfcSimple\Components\Leaders' => 'leaders'

        ];
    }

    public function registerSettings()
    {
    }
}
