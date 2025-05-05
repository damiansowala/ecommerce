<?php

namespace App\View\Components\Form;

use Illuminate\View\Component;

class FormInput extends Component
{
    /**
     * Create a new component instance.
     */
    public string $name;
    public string $label;
    public string $type;

    public function __construct(string $name, string $label, string $type = 'text')
    {
        $this->name = $name;
        $this->label = $label;
        $this->type = $type;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render()
    {
        return view('components.form.form-input');
    }
}
