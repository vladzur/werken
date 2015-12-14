<?php
/**
 * Created by vladzur.
 * Date: 12-12-15
 * Time: 23:39
 */

namespace app\Http\Controllers\Admin;


use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('admin.dashboard.index');
    }
}