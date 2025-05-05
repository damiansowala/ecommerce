<?php

namespace App\View\Components\Select;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SelectEnumsTooltip extends Component
{
    /**
     * Create a new component instance.
     */
    public string $name;
    public string $placeholder;
    public array $options;
    public string $tooltip;

    public function __construct(string $name, string $placeholder, array $options, string $tooltip = '')
    {
        $this->name = $name;
        $this->placeholder = $placeholder;
        $this->options = $options;
        $this->tooltip = $tooltip;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render()
    {
        return view('components.select.select-enums-tooltip');
    }
}
