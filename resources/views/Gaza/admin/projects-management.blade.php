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
                            <h1 class="text-3xl font-bold mb-2">إدارة المشاريع</h1>
                            <p class="text-neutral-600">متابعة حالة المشاريع ونسب الإنجاز</p>
                        </div>
                        <div class="flex gap-2">

                        </div>
                    </div>

                    <form method="GET" action="{{ route('Gaza.projects-management') }}" class="bg-white p-4 rounded-xl border mb-6 shadow-sm">
                        <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                            <div class="relative md:col-span-2">
                                <input type="text" name="search" value="{{ request('search') }}"
                                    class="block w-full pr-3 pl-3 py-2 border border-gray-300 rounded-md leading-5 bg-white placeholder-gray-500 focus:outline-none focus:placeholder-gray-400 focus:border-green-500 focus:ring-1 focus:ring-green-500 sm:text-sm"
                                    placeholder="بحث باسم المشروع...">
                            </div>
                            <select name="status" onchange="this.form.submit()"
                                class="block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none sm:text-sm">
                                <option value="">جميع الحالات</option>
                                <option value="pending" {{ request('status') == 'pending' ? 'selected' : '' }}>قيد الانتظار</option>
                                <option value="in_progress" {{ request('status') == 'in_progress' ? 'selected' : '' }}>قيد التنفيذ</option>
                                <option value="completed" {{ request('status') == 'completed' ? 'selected' : '' }}>مكتمل</option>
                            </select>
                            <select name="type" onchange="this.form.submit()"
                                class="block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none sm:text-sm">
                                <option value="">جميع الأنواع</option>
                                <option value="housing" {{ request('type') == 'housing' ? 'selected' : '' }}>سكني</option>
                                <option value="infrastructure" {{ request('type') == 'infrastructure' ? 'selected' : '' }}>بنية تحتية</option>
                                <option value="educational" {{ request('type') == 'educational' ? 'selected' : '' }}>تعليمي</option>
                                <option value="commercial" {{ request('type') == 'commercial' ? 'selected' : '' }}>تجاري</option>
                            </select>
                        </div>
                        <button type="submit" class="hidden"></button>
                    </form>

                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        @forelse($projects as $project)
                        <!-- Project Card -->
                        <div class="bg-white rounded-xl border shadow-sm p-6 hover:shadow-md transition-shadow">
                            <div class="flex justify-between items-start mb-4">
                                <div class="bg-blue-100 p-2 rounded-lg text-blue-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                        <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                    </svg>
                                </div>
                                @if($project->status == 'completed')
                                    <span class="bg-green-100 text-green-800 text-xs px-2 py-1 rounded-full font-semibold">مكتمل</span>
                                @elseif($project->status == 'in_progress')
                                    <span class="bg-yellow-100 text-yellow-800 text-xs px-2 py-1 rounded-full font-semibold">قيد التنفيذ</span>
                                @elseif($project->status == 'pending')
                                    <span class="bg-gray-100 text-gray-800 text-xs px-2 py-1 rounded-full font-semibold">قيد الانتظار</span>
                                @else
                                    <span class="bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded-full font-semibold">{{ $project->status }}</span>
                                @endif
                            </div>
                            <h3 class="text-lg font-bold mb-2">{{ $project->name }}</h3>
                            <p class="text-sm text-gray-500 mb-4">{{ Str::limit($project->description, 60) }}</p>

                            <div class="mb-4">
                                <div class="flex justify-between text-xs text-gray-600 mb-1">
                                    <span>نسبة الإنجاز</span>
                                    <span>{{ $project->progress_percentage }}%</span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-2">
                                    <div class="bg-green-600 h-2 rounded-full" style="width: {{ $project->progress_percentage }}%"></div>
                                </div>
                            </div>

                            <div class="flex justify-between items-center border-t pt-4">
                                <span class="text-sm font-bold text-gray-900">${{ number_format($project->total_budget) }}</span>
                                <div class="flex gap-2">
                                    <button class="text-gray-400 hover:text-green-600"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                            <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                        </svg></button>
                                    <button class="text-gray-400 hover:text-red-600"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <polyline points="3 6 5 6 21 6"></polyline>
                                            <path
                                                d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                            </path>
                                        </svg></button>
                                </div>
                            </div>
                        </div>
                        @empty
                        <div class="col-span-full text-center py-8 text-gray-500">
                            لا توجد مشاريع حالياً
                        </div>
                        @endforelse
                    </div>
                    <div class="mt-6">
                        {{ $projects->links() }}
                    </div>
                </div>
            </main>
        </div>
    </div>
 @endsection
 @section('script')

@endsection

