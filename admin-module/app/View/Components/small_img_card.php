<?php

namespace App\View\Components;

use Illuminate\View\Component;

class small_img_card extends Component
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
        $this->i = 0;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.small_img_card');
    }
}
