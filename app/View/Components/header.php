<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class header extends Component
{
    public $title;
    public $description;
    public $canonical;
    public $ogSiteName;
    public $ogTitle;
    public $ogDescription;
    public $ogUrl;
    public $ogType;
    public $ogImage;

    /**
     * Create a new component instance.
     */
    public function __construct($title, $description, $canonical, $ogSiteName,$ogTitle,$ogDescription,$ogUrl,$ogType,$ogImage)
    {
        $this->title = $title;
        $this->description = $description;
        $this->canonical = $canonical;
        $this->ogSiteName = $ogSiteName;
        $this->ogTitle = $ogTitle;
        $this->ogDescription = $ogDescription;
        $this->ogUrl = $ogUrl;
        $this->ogType = $ogType;
        $this->ogImage = $ogImage;

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.header');
    }
}
