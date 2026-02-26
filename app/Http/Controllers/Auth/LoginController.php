<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\LoginLog; // سنستخدم المودل لتسجيل الدخول

class LoginController extends Controller
{
    // --- 1. Admin ---
    public function showAdminLogin() { return view('Gaza.auth.login-admin'); }
    public function adminLogin(Request $request) { return $this->login($request, 'admin', 'admin.dashboard'); }

    // --- 2. Donor ---
    public function showDonorLogin() { return view('Gaza.auth.login-DonorControl-Panel'); }
    public function donorLogin(Request $request) { return $this->login($request, 'donor', 'donor.dashboard'); }

    // --- 3. Beneficiary ---
    public function showBeneficiaryLogin() { return view('Gaza.auth.login-beneficiaris'); }
    public function beneficiaryLogin(Request $request) { return $this->login($request, 'beneficiary', 'beneficiary.home'); }

    // --- 4. Supplier ---
    public function showSupplierLogin() { return view('Gaza.auth.login-Supplier'); }
    public function supplierLogin(Request $request) { return $this->login($request, 'supplier', 'supplier.dashboard'); }

    // --- 5. Contractor ---
    public function showContractorLogin() { return view('Gaza.auth.login-Contractor'); }
    public function contractorLogin(Request $request) { return $this->login($request, 'contractor', 'contractor.dashboard'); }

    /**
     * الدالة المركزية للمصادقة
     */
    private function login(Request $request, $guard, $route)
    {
        $credentials = $request->validate([
            'email'    => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::guard($guard)->attempt($credentials)) {
            $request->session()->regenerate();

            // تسجيل هذا الحدث في جدول login_logs
             LoginLog::create([
                 'user_id' => Auth::guard($guard)->id(), // أو الحقل المناسب حسب جدولك
                 // ملاحظة: قد تحتاج لتعديل هذا الجزء ليتوافق مع علاقة البوليمورفك إذا كنت تستخدمها
                 'ip_address' => $request->ip(),
                 'user_agent' => $request->userAgent(),
                 'logged_in_at' => now(),
             ]);

            return redirect()->route($route);
        }

        return back()->withErrors(['email' => 'بيانات الدخول غير صحيحة.']);
    }

    public function logout(Request $request)
    {
        // تسجيل خروج شامل
        Auth::guard('admin')->logout();
        Auth::guard('donor')->logout();
        Auth::guard('beneficiary')->logout();
        Auth::guard('supplier')->logout();
        Auth::guard('contractor')->logout();
        Auth::guard('web')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
