<?php

namespace App\View\Components\properties;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class interest extends Component
{
    public $sub;
    /**
     * Create a new component instance.
     */
    public function __construct($sub)
    {
        $this->sub = $sub;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.properties.interest');
    }
}
