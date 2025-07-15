<?php

    namespace App\Http\Controllers\Admin;

    use App\Http\Controllers\Controller;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\DB;

    class DashboardController extends Controller
    {
        /**
         * Display the admin dashboard.
         *
         * @return \Illuminate\View\View
         */
        public function index()
        {
            // You can fetch some stats here to display on the dashboard.
            // For example, we can count the number of portfolio items and team members.
            $portfolioCount = DB::table('portfolio')->count();
            $teamMemberCount = DB::table('team_members')->count();

            return view('admin.dashboard', compact('portfolioCount', 'teamMemberCount'));
        }
    }
?>
