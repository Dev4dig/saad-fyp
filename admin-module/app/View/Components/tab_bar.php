<?php

namespace App\View\Components;

use Illuminate\View\Component;

class tab_bar extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $first;
    public $second;
    public function __construct($first, $second)
    {
        //
        $this->$first = $first;
        $this->$second = $second;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.tab_bar');
    }
}
