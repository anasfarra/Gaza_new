@extends('Gaza.admin.parent-dashboard')

@section('title','dashboard')

@section('css')
<link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

@endsection


@section('content1')


      <!-- ========================================== -->
      <!-- Main Content Area                          -->
      <!-- ========================================== -->
            <main>
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
                    <div class="mb-8 flex flex-col md:flex-row md:items-center justify-between gap-4">
                        <div>
                            <h1 class="text-3xl font-bold mb-2">إدارة المستخدمين</h1>
                            <p class="text-neutral-600">إدارة حسابات المستخدمين وصلاحياتهم</p>
                        </div>

                    </div>

                    <form method="GET" action="{{ route('Gaza.users-management') }}" class="bg-white p-4 rounded-xl border mb-6 shadow-sm">
                        <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                            <div class="relative md:col-span-2">
                                <input type="text" name="search" value="{{ request('search') }}"
                                    class="block w-full pr-3 pl-3 py-2 border border-gray-300 rounded-md leading-5 bg-white placeholder-gray-500 focus:outline-none focus:placeholder-gray-400 focus:border-green-500 focus:ring-1 focus:ring-green-500 sm:text-sm"
                                    placeholder="بحث بالاسم أو البريد...">
                            </div>
                            <select name="role" onchange="this.form.submit()"
                                class="block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none sm:text-sm">
                                <option value="">جميع الأدوار</option>
                                <option value="admin" {{ request('role') == 'admin' ? 'selected' : '' }}>مدير</option>
                                <option value="beneficiary" {{ request('role') == 'beneficiary' ? 'selected' : '' }}>مستفيد</option>
                                <option value="supplier" {{ request('role') == 'supplier' ? 'selected' : '' }}>مورد</option>
                                <option value="contractor" {{ request('role') == 'contractor' ? 'selected' : '' }}>مقاول</option>
                                <option value="donor" {{ request('role') == 'donor' ? 'selected' : '' }}>متبرع</option>
                            </select>
                            <select name="status" onchange="this.form.submit()"
                                class="block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none sm:text-sm">
                                <option value="">الحالة</option>
                                <option value="active" {{ request('status') == 'active' ? 'selected' : '' }}>نشط</option>
                                <option value="inactive" {{ request('status') == 'inactive' ? 'selected' : '' }}>غير نشط</option>
                            </select>
                        </div>
                        <!-- Hidden submit button to allow pressing Enter in the search field -->
                        <button type="submit" class="hidden"></button>
                    </form>

                    <div class="bg-white rounded-xl border shadow-sm overflow-hidden">
                        <div class="overflow-x-auto">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th
                                            class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            المستخدم</th>
                                        <th
                                            class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            الدور</th>
                                        <th
                                            class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            تاريخ الانضمام</th>
                                        <th
                                            class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            الحالة</th>
                                        <th
                                            class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            إجراءات</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    @forelse($users as $user)
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div
                                                    class="h-10 w-10 rounded-full bg-green-100 flex items-center justify-center text-green-600 font-bold">
                                                    {{ mb_substr($user->name ?? 'م', 0, 1) }}</div>
                                                <div class="mr-4">
                                                    <div class="text-sm font-medium text-gray-900">{{ $user->name }}</div>
                                                    <div class="text-sm text-gray-500">{{ $user->actor->email ?? 'لا يوجد بريد' }}</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            @if($user->actor_type == 'App\Models\Beneficiary')
                                                مستفيد
                                            @elseif($user->actor_type == 'App\Models\Supplier')
                                                مورد
                                            @elseif($user->actor_type == 'App\Models\Contractor')
                                                مقاول
                                            @elseif($user->actor_type == 'App\Models\Donor')
                                                متبرع
                                            @elseif($user->actor_type == 'App\Models\Admin')
                                                مدير
                                            @else
                                                {{ class_basename($user->actor_type) }}
                                            @endif
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $user->created_at ? $user->created_at->format('Y-m-d') : '-' }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            @if($user->status == 'active')
                                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">نشط</span>
                                            @elseif($user->status == 'inactive')
                                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">غير نشط</span>
                                            @else
                                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-gray-100 text-gray-800">{{ $user->status }}</span>
                                            @endif
                                        </td>
                                        <td class="text-center whitespace-nowrap">
                                            <!-- زر العرض -->
                                            <a href="#" class="btn btn-sm btn-info text-white mx-1" title="عرض">
                                                <i class="fas fa-eye"></i>
                                            </a>

                                            <!-- زر التعديل -->
                                            <a href="#" class="btn btn-sm btn-primary mx-1" title="تعديل">
                                                <i class="fas fa-edit"></i>
                                            </a>

                                            <!-- زر الحذف -->
                                            <form action="#" method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger mx-1" title="حذف" onclick="return confirm('هل أنت متأكد من حذف هذا المستخدم؟');">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="5" class="px-6 py-4 text-center text-gray-500">لا يوجد مستخدمين</td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                        <div class="mt-4">
                            {{ $users->links() }}
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
@endsection
 @section('script')

@endsection


