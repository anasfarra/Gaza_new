<?php

namespace App\Http\Controllers;

use App\Models\CompensationRequest;
use Illuminate\Http\Request;

class CompensationRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // 1. بدء الاستعلام
        // نستخدم with لجلب بيانات المستفيد واسمه (من جدول المستخدمين) لتجنب بطء الاستعلام
        $query = CompensationRequest::with('beneficiary.profile');

        // 2. البحث (Search Logic)
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                // البحث برقم الطلب
                $q->where('request_number', 'like', "%$search%")
                  // أو البحث باسم المستفيد (عبر العلاقة)
                  ->orWhereHas('beneficiary.profile', function($q2) use ($search) {
                      $q2->where('name', 'like', "%$search%");
                  });
            });
        }

        // 3. فلترة حسب الحالة (Status)
        if ($request->filled('status') && $request->status != 'all') {
            $query->where('status', $request->status);
        }

        // 4. فلترة حسب النوع (Type)
        if ($request->filled('type') && $request->type != 'all') {
            $query->where('request_type', $request->type);
        }

        // 5. فلترة حسب التاريخ (Date)
        if ($request->filled('date')) {
            $query->whereDate('submitted_at', $request->date);
        }

        // 6. جلب البيانات مع الترتيب (الأحدث أولاً) والتقسيم (Pagination)
        $requests = $query->latest('submitted_at')->paginate(10);

        // الاحتفاظ بمعايير البحث في روابط الصفحات (عشان لما تنتقل للصفحة 2 ما يضيع البحث)
        $requests->appends($request->all());

        return view('Gaza.admin.all-requests', compact('requests'));
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
    public function show(CompensationRequest $compensationRequest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CompensationRequest $compensationRequest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CompensationRequest $compensationRequest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CompensationRequest $compensationRequest)
    {
        //
    }
}
