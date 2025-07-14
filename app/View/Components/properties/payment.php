<?php

namespace App\View\Components\properties;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class payment extends Component
{
    public $propertyPlan;
    public $hasCombobox;
    /**
     * Create a new component instance.
     */
    public function __construct($propertyPlan,$hasCombobox)
    {
        $this->propertyPlan = $propertyPlan;
        $this->hasCombobox = $hasCombobox;

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.properties.payment');
    }
}
