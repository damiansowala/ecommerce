<?php

namespace App\View\Components\Button;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ButtonSave extends Component
{
    /**
     * Create a new component instance.
     */
    public string $type;
    public string $text;

    public function __construct(string $type = 'button', string $text = 'Click Me')
    {
        $this->type = $type;
        $this->text = $text;
    }

    public function render()
    {
        return view('components.button.button-save');
    }
}
