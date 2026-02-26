<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\UserProfile;
use App\Models\Project;
use App\Models\CompensationRequest;
use App\Models\Donation;
use Carbon\Carbon;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
            $users = UserProfile::orderBy('id','desc')->get();
            $activeProjects = Project::where('status', 'ongoing')->get();
            $delayedRequestsCount = CompensationRequest::where('status', 'pending')
            ->where('submitted_at', '<', Carbon::now()->subDays(7))
            ->count();
            $pendingRequests = CompensationRequest::whereIn('status', ['pending', 'under_review'])
            ->with('beneficiary') // نحتاج علاقة المستفيد لجلب الاسم
            ->latest('submitted_at')
            ->take(5)
            ->get();
             $recentDonations = Donation::latest('created_at')->take(3)->get();

             return response()->view('Gaza.admin.dashboard', compact(
            'users',
            'activeProjects',
            'delayedRequestsCount',
            'pendingRequests',
            'recentDonations'
        ));




    }

    public function reports()
    {
        $totalDonations = Donation::sum('amount');
        $beneficiariesCount = \App\Models\Beneficiary::count();
        $completedProjects = Project::where('status', 'completed')->count();
        $totalProjects = Project::count();

        $projectTypes = Project::select('project_type', \DB::raw('count(*) as total'))
            ->groupBy('project_type')
            ->get()
            ->keyBy('project_type');

        $housingCount = $projectTypes->get('housing')->total ?? 0;
        $infrastructureCount = $projectTypes->get('infrastructure')->total ?? 0;
        $educationalCount = $projectTypes->get('educational')->total ?? 0;
        $commercialCount = $projectTypes->get('commercial')->total ?? 0;

        $housingPercent = $totalProjects > 0 ? round(($housingCount / $totalProjects) * 100) : 0;
        $infrastructurePercent = $totalProjects > 0 ? round(($infrastructureCount / $totalProjects) * 100) : 0;
        $educationalPercent = $totalProjects > 0 ? round(($educationalCount / $totalProjects) * 100) : 0;
        $commercialPercent = $totalProjects > 0 ? round(($commercialCount / $totalProjects) * 100) : 0;

        $donationsByMonth = Donation::select(
            \DB::raw('MONTH(created_at) as month'),
            \DB::raw('SUM(amount) as total')
        )
        ->whereYear('created_at', date('Y'))
        ->groupBy('month')
        ->get()
        ->keyBy('month');

        $monthlyDonations = [];
        $maxDonation = 0;
        for ($i = 1; $i <= 6; $i++) {
            $total = $donationsByMonth->get($i)->total ?? 0;
            $monthlyDonations[$i] = $total;
            if ($total > $maxDonation) {
                $maxDonation = $total;
            }
        }

        return response()->view('Gaza.admin.main-reports', compact(
            'totalDonations',
            'beneficiariesCount',
            'completedProjects',
            'totalProjects',
            'housingPercent',
            'infrastructurePercent',
            'educationalPercent',
            'commercialPercent',
            'monthlyDonations',
            'maxDonation'
        ));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Admin $admin)
    {
        //
    }
}
