<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class gallery extends Component
{
    public $description;
    public $images;
    /**
     * Create a new component instance.
     */
    public function __construct($description,$images)
    {
        $this->description = $description;
        $this->images = $images;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.gallery');
    }
}
