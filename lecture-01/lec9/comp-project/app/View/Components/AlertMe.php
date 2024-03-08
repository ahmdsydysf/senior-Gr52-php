<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class AlertMe extends Component
{
    public $message;
    public $clr;


    /**
     * Create a new component instance.
     */
    public function __construct($message = 'no message', $clr = 'success')
    {
        $this->message = $message ;
        $this->clr = $clr ;
    }


    // public function __construct(public $message , public  $clr)
    // {

    // }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.alert-me');
    }
}
