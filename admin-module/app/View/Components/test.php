<?php

namespace App\View\Components;

use Illuminate\View\Component;

class test extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $i;
    public function __construct($data)
    {
        //
        $this->i=$data;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.test');
    }
}
