<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Models\Buyer;

class BuyerComposer
{
    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('buyers', Buyer::select('id', 'name')->get());
    }
}
