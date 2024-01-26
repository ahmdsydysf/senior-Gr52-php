<?php

namespace App\ViewComposer;

use App\Repositories\UserRepository;
use Illuminate\View\View;

class ViewComposer
{
    /**
     * Create a new profile composer.
     */
    public function __construct() {}

    /**
     * Bind data to the view.
     */
    public function compose(View $vw): void
    {
        $vw->with(['phone' => 12 , 'roomnum' => 88]);
    }
}
