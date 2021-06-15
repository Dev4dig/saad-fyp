<?php

namespace App\View\Components;

use Illuminate\View\Component;

class media_post_u extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    
    public function __construct()
    {
       
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.media_post_u');
    }
}
