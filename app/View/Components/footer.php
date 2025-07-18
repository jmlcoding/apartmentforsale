<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class footer extends Component
{
    public $footerBanner;
    public $mapImage;
    /**
     * Create a new component instance.
     */
    public function __construct($footerBanner = null, $mapImage= null)
    {
        $this->footerBanner = $footerBanner;
        $this->mapImage = $mapImage;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.footer');
    }
}
