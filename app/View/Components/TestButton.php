<?php

namespace App\View\Components;

use Illuminate\View\Component;

class TestButton extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $type;

    public $label;
    
    public $btnClass;
    

    public function __construct($type = 'primary', $label = null, $btnClass = '')
    {
        $this->type = $type;
        $this->label = $label;
        $this->btnClass = $btnClass;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.test-button');
    }
}
