<?php

namespace Someline\Http\Controllers;


class DashboardController extends BaseController
{
    public function index()
    {
        return view('dashboard.index');
    }
}
