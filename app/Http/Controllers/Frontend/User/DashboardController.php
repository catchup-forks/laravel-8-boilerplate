<?php

declare(strict_types=1);

namespace App\Http\Controllers\Frontend\User;

use Illuminate\Contracts\View\Factory;
use Illuminate\View\View;
use App\Http\Controllers\Controller;

/**
 * Class DashboardController.
 */
class DashboardController extends Controller
{
    /**
     * @return Factory|View
     */
    public function index()
    {
        return view('frontend.user.dashboard');
    }
}
