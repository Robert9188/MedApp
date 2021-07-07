<?php

namespace App\View\Components\Personnel;

use Illuminate\View\Component;

class Reservation extends Component
{
    public $horaires;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($horaires)
    {
        $this->horaires = $horaires;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.personnel.reservation');
    }
}
