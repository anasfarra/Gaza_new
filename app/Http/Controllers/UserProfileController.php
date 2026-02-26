<?php

namespace App\Http\Controllers;

use App\Models\UserProfile;
use Illuminate\Http\Request;

class UserProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = UserProfile::with('role', 'actor');

        // Search by name or email
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                  ->orWhereHasMorph('actor', '*', function ($q2) use ($search) {
                      // Assuming all actor models have an 'email' field
                      $q2->where('email', 'like', "%{$search}%");
                  });
            });
        }

        // Filter by role (actor_type)
        if ($request->filled('role')) {
            $roleMap = [
                'admin' => 'App\Models\Admin',
                'beneficiary' => 'App\Models\Beneficiary',
                'supplier' => 'App\Models\Supplier',
                'contractor' => 'App\Models\Contractor',
                'donor' => 'App\Models\Donor',
            ];

            if (array_key_exists($request->role, $roleMap)) {
                $query->where('actor_type', $roleMap[$request->role]);
            }
        }

        // Filter by status
        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        $users = $query->paginate(10)->withQueryString();

        return response()->view('Gaza.admin.users-management', compact('users'));
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
    public function show(UserProfile $userProfile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(UserProfile $userProfile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, UserProfile $userProfile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UserProfile $userProfile)
    {
        //
    }
}
