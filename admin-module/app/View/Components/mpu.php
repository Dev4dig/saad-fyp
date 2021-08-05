<?php

namespace App\View\Components;

use Illuminate\View\Component;

class mpu extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $i;
    public $imgs;
    public function __construct($data)
    {
       $this->i= $data;
       $this->imgs = array("c.jpg", "ab.jpg", "d.jpg", "wa.jpg");
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.mpu');
    }
}
