<?php namespace Sfc\SfcSimple\Components;

use Cms\Classes\ComponentBase;

use Sfc\SfcSimple\Models\Belief;

class Beliefs extends ComponentBase

{
    public function componentDetails(){
        return [
            'name' => 'Belief list',
            'description' => 'A list of beliefs for the belief page.'
        ];
    }

    public function onRun(){
        $this->beliefs = $this->loadBeliefs();
    }

    protected function loadBeliefs(){
        return Belief::all();
    }

public $beliefs;

}

