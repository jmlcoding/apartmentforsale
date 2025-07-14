<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class navbar extends Component
{
    public $backgroundImg;
    public $titles;

    /**
     * Create a new component instance.
     */
    public function __construct($backgroundImg,$titles)
    {
        $this->backgroundImg = $backgroundImg;
        $this->titles = $titles;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.navbar');
    }
}
