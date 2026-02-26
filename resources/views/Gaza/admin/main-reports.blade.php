@extends('Gaza.admin.parent-dashboard')

@section('title','dashboard')

@section('css')
<link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
@endsection

@section('content1')


      <!-- ========================================== -->
      <!-- Main Content Area                          -->
      <!-- ========================================== -->
            <main>
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
                    <div class="mb-8 flex flex-col md:flex-row md:items-center justify-between gap-4">
                        <div>
                            <h1 class="text-3xl font-bold mb-2">التقارير والإحصائيات</h1>
                            <p class="text-neutral-600">نظرة شاملة على أداء المنصة والتقدم في العمليات</p>
                        </div>
                        <div class="flex gap-2">
                            <button
                                class="inline-flex items-center justify-center gap-2 h-9 px-4 rounded-md text-sm font-medium bg-green-600 text-white hover:bg-green-700 transition-all">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4" />
                                    <polyline points="7 10 12 15 17 10" />
                                    <line x1="12" x2="12" y1="15" />
                                    <line x1="12" x2="12" y1="3" />
                                </svg>
                                <span>تصدير PDF</span>
                            </button>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                        <div class="bg-white p-6 rounded-xl border shadow-sm">
                            <h3 class="text-gray-500 text-sm font-medium mb-2">إجمالي التبرعات</h3>
                            <div class="flex items-end gap-2">
                                <span class="text-3xl font-bold text-gray-900">${{ number_format($totalDonations) }}</span>
                            </div>
                        </div>
                        <div class="bg-white p-6 rounded-xl border shadow-sm">
                            <h3 class="text-gray-500 text-sm font-medium mb-2">عدد المستفيدين</h3>
                            <div class="flex items-end gap-2">
                                <span class="text-3xl font-bold text-gray-900">{{ number_format($beneficiariesCount) }}</span>
                            </div>
                        </div>
                        <div class="bg-white p-6 rounded-xl border shadow-sm">
                            <h3 class="text-gray-500 text-sm font-medium mb-2">مشاريع مكتملة</h3>
                            <div class="flex items-end gap-2">
                                <span class="text-3xl font-bold text-gray-900">{{ $completedProjects }}</span>
                                <span class="text-blue-600 text-sm font-medium mb-1">من أصل {{ $totalProjects }}</span>
                            </div>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-8">
                        <!-- Chart 1 Placeholder -->
                        <div class="bg-white p-6 rounded-xl border shadow-sm min-h-[300px]">
                            <h3 class="font-bold text-lg mb-4">توزيع التبرعات حسب الشهر (النصف الأول)</h3>
                            <div class="flex items-end justify-between h-48 mt-8 px-4 gap-2">
                                @php
                                    $months = [1 => 'يناير', 2 => 'فبراير', 3 => 'مارس', 4 => 'أبريل', 5 => 'مايو', 6 => 'يونيو'];
                                @endphp
                                @foreach($months as $num => $name)
                                    @php
                                        $height = $maxDonation > 0 ? round(($monthlyDonations[$num] / $maxDonation) * 100) : 0;
                                        // Ensure minimum height for visibility if there's a donation
                                        if($monthlyDonations[$num] > 0 && $height < 5) $height = 5;
                                    @endphp
                                    <div class="w-full bg-green-100 rounded-t-md relative group" style="height: {{ $height > 0 ? $height : 5 }}%;">
                                        <div
                                            class="absolute bottom-0 w-full bg-green-500 rounded-t-md h-full transition-all group-hover:bg-green-600" title="${{ number_format($monthlyDonations[$num]) }}">
                                        </div>
                                        <span
                                            class="absolute -bottom-6 w-full text-center text-xs text-gray-500">{{ $name }}</span>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <!-- Chart 2 Placeholder -->
                        <div class="bg-white p-6 rounded-xl border shadow-sm min-h-[300px]">
                            <h3 class="font-bold text-lg mb-4">أنواع المشاريع</h3>
                            <div class="flex flex-col items-center justify-center h-56">
                                @php
                                    $p1 = $housingPercent;
                                    $p2 = $p1 + $infrastructurePercent;
                                    $p3 = $p2 + $educationalPercent;
                                    $p4 = $p3 + $commercialPercent;
                                @endphp
                                <div
                                    class="w-40 h-40 rounded-full flex items-center justify-center"
                                    style="background: conic-gradient(
                                        #22c55e 0% {{ $p1 }}%,
                                        #3b82f6 {{ $p1 }}% {{ $p2 }}%,
                                        #eab308 {{ $p2 }}% {{ $p3 }}%,
                                        #a855f7 {{ $p3 }}% 100%
                                    );">
                                    <div class="w-24 h-24 bg-white rounded-full"></div>
                                </div>
                            </div>
                            <div class="flex justify-center gap-4 text-sm">
                                <div class="flex items-center gap-1"><span
                                        class="w-3 h-3 rounded-full bg-green-500"></span> سكني ({{ $housingPercent }}%)</div>
                                <div class="flex items-center gap-1"><span
                                        class="w-3 h-3 rounded-full bg-blue-500"></span> بنية تحتية ({{ $infrastructurePercent }}%)</div>
                                <div class="flex items-center gap-1"><span
                                        class="w-3 h-3 rounded-full bg-yellow-500"></span> تعليمي ({{ $educationalPercent }}%)</div>
                                <div class="flex items-center gap-1"><span
                                        class="w-3 h-3 rounded-full bg-purple-500"></span> تجاري ({{ $commercialPercent }}%)</div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
@endsection
 @section('script')

@endsection


