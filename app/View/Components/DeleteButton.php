<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Model;
use Illuminate\View\Component;
use phpDocumentor\Reflection\Types\Integer;

class DeleteButton extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public string $href, public int $id)
    {


    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.delete-button');
    }
}
