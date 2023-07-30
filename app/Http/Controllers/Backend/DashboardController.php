<?php

declare(strict_types=1);

namespace App\Http\Controllers\Backend;

use Illuminate\View\View;
use App\Http\Controllers\Controller;

/**
 * Class DashboardController.
 */
class DashboardController extends Controller
{
    /**
     * @return View
     */
    public function index()
    {
        return view('backend.dashboard');
    }
}
