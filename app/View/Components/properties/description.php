<?php

namespace App\View\Components\properties;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class description extends Component
{
    public $propertyDetails;
    /**
     * Create a new component instance.
     */
    public function __construct($propertyDetails)
    {
        $this->propertyDetails = $propertyDetails;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.properties.description');
    }
}
