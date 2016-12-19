<?php namespace Sfc\SfcSimple\Components;

use Cms\Classes\ComponentBase;

use Sfc\SfcSimple\Models\Leader;

class Leaders extends ComponentBase

{
    public function componentDetails(){
        return [
            'name' => 'Leader list',
            'description' => 'A list of leaders for the staff page.'
        ];
    }

    public function onRun(){
        $this->leaders = $this->loadLeaders();
    }

    protected function loadLeaders(){
        return Leader::all();
    }

public $leaders;

}

