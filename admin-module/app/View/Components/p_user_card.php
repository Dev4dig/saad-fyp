<?php

namespace App\View\Components;

use Illuminate\View\Component;

class p_user_card extends Component
{
    /**
     * Create a new component instance.
     *
     *
     */
    public $name;
    public $iden;
    
    public function __construct($name, $iden)
    {
        //$this->data = json_decode($data);
        $this->name = $name;
        $this->iden = $iden;

       
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.user_card' );
    }
}
