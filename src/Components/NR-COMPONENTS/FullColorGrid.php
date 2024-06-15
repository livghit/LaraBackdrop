<?php

namespace LivGhit\LaraBackdrop\Components;

use Illuminate\View\Component;

class FullColorGrid extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        public $dark = false
    ) {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('LaraBackdrop::components.full-grid-color');
    }
}
