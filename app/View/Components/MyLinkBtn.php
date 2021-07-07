<?php

namespace App\View\Components;

use Illuminate\View\Component;

class MyLinkBtn extends Component
{

    public $link;

    public $classes;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($link, $classes)
    {
        $this->link = $link;
        $this->classes = $classes;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.my-link-btn');
    }
}
