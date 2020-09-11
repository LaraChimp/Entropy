<?php

namespace LaraChimp\Entropy\Http\Controllers;

class DashboardController
{
    /**
     * Show the Dashboard view.
     *
     * @return \Illuminate\View\View
     */
    public function __invoke()
    {
        return view('entropy::dashboard');
    }
}
