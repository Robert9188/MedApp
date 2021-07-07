<?php

namespace App\View\Components;

use Illuminate\View\Component;

class DashLi extends Component
{

    public $href;

    public $active;


    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($href, $active = true)
    {
        $this->href = $href;
        $this->active = $active;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.dash-li');
    }
}
