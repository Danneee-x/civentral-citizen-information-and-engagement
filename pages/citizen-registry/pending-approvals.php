<?php
$basePath = '../../';
require_once __DIR__ . '/../../src/bootstrap.php';

// Dummy Applications Data
$applications = [
    [
        'id' => 'APP-2025-0421',
        'applicant' => 'Juan Dela Cruz',
        'avatar' => 'https://ui-avatars.com/api/?name=Juan+Dela+Cruz&background=random',
        'date' => 'May 19, 2025',
        'time' => '09:21 AM',
        'submitted_by' => 'Self-Service',
        'district' => 'District 3',
        'reviewer' => 'Maria Santos',
        'reviewer_avatar' => 'https://ui-avatars.com/api/?name=Maria+Santos&background=random',
        'docs_count' => '+2',
        'status' => 'Pending',
        'priority' => 'High',
        'selected' => true
    ],
    [
        'id' => 'APP-2025-0420',
        'applicant' => 'Ana Marie Reyes',
        'avatar' => 'https://ui-avatars.com/api/?name=Ana+Reyes&background=random',
        'date' => 'May 19, 2025',
        'time' => '08:45 AM',
        'submitted_by' => 'Staff: John Cruz',
        'district' => 'District 2',
        'reviewer' => 'John Cruz',
        'reviewer_avatar' => 'https://ui-avatars.com/api/?name=John+Cruz&background=random',
        'docs_count' => '+1',
        'status' => 'Under Review',
        'priority' => 'Medium',
        'selected' => true
    ],
    [
        'id' => 'APP-2025-0419',
        'applicant' => 'Pedro Mendoza',
        'avatar' => 'https://ui-avatars.com/api/?name=Pedro+Mendoza&background=random',
        'date' => 'May 19, 2025',
        'time' => '08:15 AM',
        'submitted_by' => 'Self-Service',
        'district' => 'District 1',
        'reviewer' => 'Maria Santos',
        'reviewer_avatar' => 'https://ui-avatars.com/api/?name=Maria+Santos&background=random',
        'docs_count' => '+3',
        'status' => 'Waiting for Applicant',
        'priority' => 'High',
        'selected' => true
    ],
    [
        'id' => 'APP-2025-0418',
        'applicant' => 'Rosa Valdez',
        'avatar' => 'https://ui-avatars.com/api/?name=Rosa+Valdez&background=random',
        'date' => 'May 18, 2025',
        'time' => '05:30 PM',
        'submitted_by' => 'Staff: Liza Dy',
        'district' => 'District 1',
        'reviewer' => 'Liza Dy',
        'reviewer_avatar' => 'https://ui-avatars.com/api/?name=Liza+Dy&background=random',
        'docs_count' => '+2',
        'status' => 'Pending',
        'priority' => 'Medium',
        'selected' => false
    ],
    [
        'id' => 'APP-2025-0417',
        'applicant' => 'Michael Santos',
        'avatar' => 'https://ui-avatars.com/api/?name=Michael+Santos&background=random',
        'date' => 'May 18, 2025',
        'time' => '04:12 PM',
        'submitted_by' => 'Self-Service',
        'district' => 'District 3',
        'reviewer' => 'Unassigned',
        'reviewer_avatar' => '',
        'docs_count' => '+1',
        'status' => 'Pending',
        'priority' => 'Low',
        'selected' => false
    ],
    [
        'id' => 'APP-2025-0416',
        'applicant' => 'Emily Johnson',
        'avatar' => 'https://ui-avatars.com/api/?name=Emily+Johnson&background=random',
        'date' => 'May 18, 2025',
        'time' => '03:40 PM',
        'submitted_by' => 'Staff: John Cruz',
        'district' => 'District 2',
        'reviewer' => 'John Cruz',
        'reviewer_avatar' => 'https://ui-avatars.com/api/?name=John+Cruz&background=random',
        'docs_count' => '+1',
        'status' => 'Under Review',
        'priority' => 'High',
        'selected' => false
    ],
    [
        'id' => 'APP-2025-0415',
        'applicant' => 'Carlos Miguel',
        'avatar' => 'https://ui-avatars.com/api/?name=Carlos+Miguel&background=random',
        'date' => 'May 18, 2025',
        'time' => '02:55 PM',
        'submitted_by' => 'Self-Service',
        'district' => 'District 2',
        'reviewer' => 'Maria Santos',
        'reviewer_avatar' => 'https://ui-avatars.com/api/?name=Maria+Santos&background=random',
        'docs_count' => '+1',
        'status' => 'Pending',
        'priority' => 'Low',
        'selected' => false
    ]
];

function getAppStatusBadge($status) {
    switch ($status) {
        case 'Pending': return 'bg-amber-50 text-amber-600 border-amber-200/80';
        case 'Under Review': return 'bg-blue-50 text-blue-600 border-blue-200/80';
        case 'Waiting for Applicant': return 'bg-orange-50 text-orange-600 border-orange-200/80';
        default: return 'bg-slate-50 text-slate-600 border-slate-200';
    }
}

function getPriorityBadge($priority) {
    switch ($priority) {
        case 'High': return 'bg-orange-50 text-orange-600 border-orange-200/80';
        case 'Medium': return 'bg-blue-50 text-blue-600 border-blue-200/80';
        case 'Low': return 'bg-slate-50 text-slate-500 border-slate-200';
        default: return 'bg-slate-50 text-slate-500 border-slate-200';
    }
}

include '../../includes/header.php';
include '../../includes/sidebar.php';
?>

<style>
    .custom-scrollbar::-webkit-scrollbar {
        height: 6px;
        width: 6px;
    }
    .custom-scrollbar::-webkit-scrollbar-track {
        background: transparent;
    }
    .custom-scrollbar::-webkit-scrollbar-thumb {
        background-color: #cbd5e1;
        border-radius: 20px;
    }
</style>

<main class="flex-1 p-4 md:p-6 lg:p-8 w-full overflow-y-auto bg-slate-50/50 min-h-[calc(100vh-4rem)]">

    <!-- Top Bar Quick Actions -->
    <div class="flex flex-col sm:flex-row sm:items-center justify-end gap-4 mb-6">
        <div class="flex items-center gap-2 flex-wrap">
            <button class="px-3.5 py-2 text-xs font-bold text-[#0f53d1] bg-white border border-slate-200 rounded-xl hover:bg-slate-50 transition cursor-pointer flex items-center gap-2 shadow-xs">
                <i class="fa-solid fa-rotate text-[11px]"></i>
                <span>Refresh Queue</span>
            </button>
            <button class="px-3.5 py-2 text-xs font-bold text-[#0f53d1] bg-white border border-slate-200 rounded-xl hover:bg-slate-50 transition cursor-pointer flex items-center gap-2 shadow-xs">
                <i class="fa-solid fa-upload text-[11px]"></i>
                <span>Export Pending List</span>
            </button>
            <button class="px-3.5 py-2 text-xs font-bold text-[#0f53d1] bg-white border border-slate-200 rounded-xl hover:bg-slate-50 transition cursor-pointer flex items-center gap-2 shadow-xs">
                <i class="fa-regular fa-clock text-[11px]"></i>
                <span>View Approval History</span>
            </button>
        </div>
    </div>

    <!-- KPI Summary Row -->
    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-7 gap-3 mb-6">
        <!-- Card 1 -->
        <div class="bg-white rounded-2xl p-3.5 border border-slate-100 shadow-sm flex flex-col justify-between hover:shadow-md transition-shadow">
            <div class="flex items-center gap-2.5">
                <div class="w-8 h-8 rounded-full bg-amber-50 flex items-center justify-center shrink-0">
                    <i class="fa-regular fa-file-lines text-amber-500 text-sm"></i>
                </div>
                <div>
                    <p class="text-[9px] font-bold text-slate-400 uppercase tracking-wide leading-tight">Total Pending<br>Applications</p>
                    <h3 class="text-lg font-black text-slate-800 mt-0.5">42</h3>
                </div>
            </div>
            <div class="flex items-center gap-1 mt-2 text-[9px] font-semibold text-emerald-500">
                <i class="fa-solid fa-caret-up"></i> <span>12%</span> <span class="text-slate-400 font-normal">vs yesterday</span>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="bg-white rounded-2xl p-3.5 border border-slate-100 shadow-sm flex flex-col justify-between hover:shadow-md transition-shadow">
            <div class="flex items-center gap-2.5">
                <div class="w-8 h-8 rounded-full bg-blue-50 flex items-center justify-center shrink-0">
                    <i class="fa-regular fa-clock text-blue-500 text-sm"></i>
                </div>
                <div>
                    <p class="text-[9px] font-bold text-slate-400 uppercase tracking-wide leading-tight">Awaiting<br>Review</p>
                    <h3 class="text-lg font-black text-slate-800 mt-0.5">28</h3>
                </div>
            </div>
            <div class="flex items-center gap-1 mt-2 text-[9px] font-semibold text-emerald-500">
                <i class="fa-solid fa-caret-up"></i> <span>8%</span> <span class="text-slate-400 font-normal">vs yesterday</span>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="bg-white rounded-2xl p-3.5 border border-slate-100 shadow-sm flex flex-col justify-between hover:shadow-md transition-shadow">
            <div class="flex items-center gap-2.5">
                <div class="w-8 h-8 rounded-full bg-blue-50 flex items-center justify-center shrink-0">
                    <i class="fa-regular fa-user text-blue-500 text-sm"></i>
                </div>
                <div>
                    <p class="text-[9px] font-bold text-slate-400 uppercase tracking-wide leading-tight">Assigned<br>to Me</p>
                    <h3 class="text-lg font-black text-slate-800 mt-0.5">7</h3>
                </div>
            </div>
            <div class="flex items-center gap-1 mt-2 text-[9px] font-semibold text-red-500">
                <i class="fa-solid fa-caret-down"></i> <span>3%</span> <span class="text-slate-400 font-normal">vs yesterday</span>
            </div>
        </div>

        <!-- Card 4 -->
        <div class="bg-white rounded-2xl p-3.5 border border-slate-100 shadow-sm flex flex-col justify-between hover:shadow-md transition-shadow">
            <div class="flex items-center gap-2.5">
                <div class="w-8 h-8 rounded-full bg-emerald-50 flex items-center justify-center shrink-0">
                    <i class="fa-solid fa-check text-emerald-500 text-sm"></i>
                </div>
                <div>
                    <p class="text-[9px] font-bold text-slate-400 uppercase tracking-wide leading-tight">Approved<br>Today</p>
                    <h3 class="text-lg font-black text-slate-800 mt-0.5">16</h3>
                </div>
            </div>
            <div class="flex items-center gap-1 mt-2 text-[9px] font-semibold text-emerald-500">
                <i class="fa-solid fa-caret-up"></i> <span>23%</span> <span class="text-slate-400 font-normal">vs yesterday</span>
            </div>
        </div>

        <!-- Card 5 -->
        <div class="bg-white rounded-2xl p-3.5 border border-slate-100 shadow-sm flex flex-col justify-between hover:shadow-md transition-shadow">
            <div class="flex items-center gap-2.5">
                <div class="w-8 h-8 rounded-full bg-red-50 flex items-center justify-center shrink-0">
                    <i class="fa-solid fa-xmark text-red-500 text-sm"></i>
                </div>
                <div>
                    <p class="text-[9px] font-bold text-slate-400 uppercase tracking-wide leading-tight">Rejected<br>Today</p>
                    <h3 class="text-lg font-black text-slate-800 mt-0.5">3</h3>
                </div>
            </div>
            <div class="flex items-center gap-1 mt-2 text-[9px] font-semibold text-red-500">
                <i class="fa-solid fa-caret-down"></i> <span>14%</span> <span class="text-slate-400 font-normal">vs yesterday</span>
            </div>
        </div>

        <!-- Card 6 -->
        <div class="bg-white rounded-2xl p-3.5 border border-slate-100 shadow-sm flex flex-col justify-between hover:shadow-md transition-shadow">
            <div class="flex items-center gap-2.5">
                <div class="w-8 h-8 rounded-full bg-orange-50 flex items-center justify-center shrink-0">
                    <i class="fa-solid fa-question text-orange-500 text-sm"></i>
                </div>
                <div>
                    <p class="text-[9px] font-bold text-slate-400 uppercase tracking-wide leading-tight">Requesting More<br>Information</p>
                    <h3 class="text-lg font-black text-slate-800 mt-0.5">5</h3>
                </div>
            </div>
            <div class="flex items-center gap-1 mt-2 text-[9px] font-semibold text-red-500">
                <i class="fa-solid fa-caret-down"></i> <span>9%</span> <span class="text-slate-400 font-normal">vs yesterday</span>
            </div>
        </div>

        <!-- Card 7 -->
        <div class="bg-white rounded-2xl p-3.5 border border-slate-100 shadow-sm flex flex-col justify-between hover:shadow-md transition-shadow">
            <div class="flex items-center gap-2.5">
                <div class="w-8 h-8 rounded-full bg-purple-50 flex items-center justify-center shrink-0">
                    <i class="fa-regular fa-clock text-purple-500 text-sm"></i>
                </div>
                <div>
                    <p class="text-[9px] font-bold text-slate-400 uppercase tracking-wide leading-tight">Avg. Processing<br>Time</p>
                    <h3 class="text-lg font-black text-slate-800 mt-0.5">2.4 <span class="text-xs font-normal">days</span></h3>
                </div>
            </div>
            <div class="flex items-center gap-1 mt-2 text-[9px] font-semibold text-red-500">
                <i class="fa-solid fa-caret-down"></i> <span>0.3</span> <span class="text-slate-400 font-normal">vs yesterday</span>
            </div>
        </div>
    </div>

    <!-- Main Content Area: Table (Left) + Detail Panel (Right) -->
    <div class="flex flex-col xl:flex-row gap-6 items-start">

        <!-- Left Column: Search, Filters & Table -->
        <div class="flex-1 w-full min-w-0 flex flex-col gap-5">

            <!-- Filter Card -->
            <div class="bg-white p-5 rounded-2xl border border-slate-200 shadow-sm">
                <!-- Top Search & Toggle -->
                <div id="filterSearchRow" class="flex flex-col md:flex-row gap-3 justify-between items-start md:items-center">
                    <div class="flex-1 w-full flex items-center gap-2">
                        <div class="relative w-full">
                            <i class="fa-solid fa-search absolute left-4 top-1/2 -translate-y-1/2 text-slate-400 text-sm"></i>
                            <input type="text" placeholder="Search by Applicant Name, Application ID, Household ID..." class="w-full bg-slate-50 border border-slate-200 text-slate-700 text-xs rounded-xl focus:ring-2 focus:ring-[#0f53d1]/40 focus:border-[#0f53d1] block pl-10 pr-4 py-2.5 outline-none font-medium placeholder-slate-400">
                        </div>
                        <button id="searchBtnPending" class="shrink-0 px-4 py-2.5 text-xs font-bold text-white bg-[#0f53d1] hover:bg-[#0d46b0] rounded-xl shadow-xs transition flex items-center justify-center gap-1.5 cursor-pointer">
                            <i class="fa-solid fa-search text-[10px]"></i>
                            <span>Search</span>
                        </button>
                    </div>
                    <button id="toggleFilterBtn" onclick="togglePendingFilterGrid()" class="shrink-0 flex items-center gap-2 px-3.5 py-2.5 text-xs font-bold text-slate-700 bg-slate-100/70 hover:bg-slate-200/70 rounded-xl transition cursor-pointer">
                        <i class="fa-solid fa-sliders text-xs"></i>
                        <span id="toggleFilterBtnText">Show Filters</span>
                        <i id="toggleFilterBtnChevron" class="fa-solid fa-chevron-down text-[9px] ml-0.5"></i>
                    </button>
                </div>

                <!-- Filters Grid (Hidden by Default) -->
                <div id="filterGrid" class="hidden grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mt-5">
                    <div class="space-y-1">
                        <label class="text-[10px] font-bold text-slate-500 uppercase">Submission Date</label>
                        <div class="relative">
                            <input type="text" placeholder="Select date range" class="w-full bg-white border border-slate-200 text-slate-700 text-xs rounded-lg p-2.5 outline-none font-medium pr-8">
                            <i class="fa-regular fa-calendar absolute right-3 top-1/2 -translate-y-1/2 text-slate-400 text-xs pointer-events-none"></i>
                        </div>
                    </div>

                    <div class="space-y-1">
                        <label class="text-[10px] font-bold text-slate-500 uppercase">Reviewer</label>
                        <select class="w-full bg-white border border-slate-200 text-slate-700 text-xs rounded-lg p-2.5 outline-none font-medium">
                            <option>All Reviewers</option>
                        </select>
                    </div>

                    <div class="space-y-1">
                        <label class="text-[10px] font-bold text-slate-500 uppercase">Submission Method</label>
                        <select class="w-full bg-white border border-slate-200 text-slate-700 text-xs rounded-lg p-2.5 outline-none font-medium">
                            <option>All Methods</option>
                        </select>
                    </div>

                    <div class="space-y-1">
                        <label class="text-[10px] font-bold text-slate-500 uppercase">District</label>
                        <select id="districtFilterPending" class="w-full bg-white border border-slate-200 text-slate-700 text-xs rounded-lg p-2.5 outline-none font-medium cursor-pointer">
                            <option value="">All Districts</option>
                            <option value="District 1">District 1</option>
                            <option value="District 2">District 2</option>
                            <option value="District 3">District 3</option>
                        </select>
                    </div>

                    <div class="space-y-1">
                        <label class="text-[10px] font-bold text-slate-500 uppercase">Status</label>
                        <select class="w-full bg-white border border-slate-200 text-slate-700 text-xs rounded-lg p-2.5 outline-none font-medium">
                            <option>All Status</option>
                        </select>
                    </div>

                    <div class="space-y-1">
                        <label class="text-[10px] font-bold text-slate-500 uppercase">Priority</label>
                        <select class="w-full bg-white border border-slate-200 text-slate-700 text-xs rounded-lg p-2.5 outline-none font-medium">
                            <option>All Priority</option>
                        </select>
                    </div>

                    <div class="space-y-1">
                        <label class="text-[10px] font-bold text-slate-500 uppercase">Has Uploaded Documents</label>
                        <select class="w-full bg-white border border-slate-200 text-slate-700 text-xs rounded-lg p-2.5 outline-none font-medium">
                            <option>All</option>
                        </select>
                    </div>

                    <div class="flex items-end justify-end">
                        <button id="clearFiltersBtnPending" class="w-full py-2.5 text-xs font-bold text-slate-600 bg-white border border-slate-200 rounded-lg hover:bg-slate-50 transition cursor-pointer">
                            Clear Filters
                        </button>
                    </div>
                </div>
            </div>

            <!-- Table Card -->
            <div class="bg-white rounded-2xl border border-slate-200 shadow-sm flex flex-col">
                
                <!-- Table Header Actions Bar -->
                <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between p-4 border-b border-slate-100 gap-3">
                    <span id="applicationsFoundText" class="text-xs font-bold text-slate-800">7 applications found</span>

                    <div class="flex items-center gap-3 w-full sm:w-auto justify-between sm:justify-end">
                        <select class="bg-white border border-slate-200 text-slate-700 text-xs font-semibold rounded-lg px-3 py-1.5 outline-none cursor-pointer">
                            <option>Bulk Actions (3 selected)</option>
                        </select>

                        <div class="flex items-center gap-1 bg-slate-100 p-0.5 rounded-lg">
                            <button class="w-7 h-7 rounded-md bg-white shadow-xs text-[#0f53d1] flex items-center justify-center text-xs font-bold"><i class="fa-solid fa-table-list"></i></button>
                            <button class="w-7 h-7 rounded-md text-slate-400 hover:text-slate-700 flex items-center justify-center text-xs"><i class="fa-regular fa-square"></i></button>
                            <button class="w-7 h-7 rounded-md text-slate-400 hover:text-slate-700 flex items-center justify-center text-xs"><i class="fa-solid fa-filter"></i></button>
                        </div>
                    </div>
                </div>

                <!-- Table Wrapper -->
                <div class="overflow-x-auto w-full custom-scrollbar">
                    <table class="w-full text-left border-collapse whitespace-nowrap min-w-[950px]">
                        <thead>
                            <tr class="border-b border-slate-100 bg-slate-50/50">
                                <th class="p-3.5 text-[10px] font-bold text-slate-500 uppercase tracking-wider">Application ID <i class="fa-solid fa-arrows-up-down text-[8px] opacity-60"></i></th>
                                <th class="p-3.5 text-[10px] font-bold text-slate-500 uppercase tracking-wider">Applicant Name</th>
                                <th class="p-3.5 text-[10px] font-bold text-slate-500 uppercase tracking-wider">Submission Date <i class="fa-solid fa-arrow-down text-[8px] opacity-60"></i></th>
                                <th class="p-3.5 text-[10px] font-bold text-slate-500 uppercase tracking-wider">Submitted By</th>
                                <th class="p-3.5 text-[10px] font-bold text-slate-500 uppercase tracking-wider">District</th>
                                <th class="p-3.5 text-[10px] font-bold text-slate-500 uppercase tracking-wider">Assigned Reviewer</th>
                                <th class="p-3.5 text-[10px] font-bold text-slate-500 uppercase tracking-wider">Documents</th>
                                <th class="p-3.5 text-[10px] font-bold text-slate-500 uppercase tracking-wider">Status</th>
                                <th class="p-3.5 text-[10px] font-bold text-slate-500 uppercase tracking-wider">Priority</th>
                                <th class="p-3.5 text-[10px] font-bold text-slate-500 uppercase tracking-wider text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-100">
                            <?php foreach ($applications as $app): ?>
                            <tr onclick="selectPendingApplication(this, '<?php echo $app['id']; ?>', '<?php echo htmlspecialchars(addslashes($app['applicant'])); ?>', '<?php echo htmlspecialchars($app['status']); ?>')" class="pending-app-row hover:bg-slate-50/80 transition cursor-pointer" data-district="<?php echo htmlspecialchars($app['district']); ?>">
                                <td class="p-3.5 text-xs font-bold text-slate-700"><?php echo $app['id']; ?></td>
                                <td class="p-3.5">
                                    <div class="flex items-center gap-2.5">
                                        <img src="<?php echo $app['avatar']; ?>" class="w-7 h-7 rounded-full border border-slate-200" alt="Avatar">
                                        <span class="text-xs font-bold text-slate-900"><?php echo $app['applicant']; ?></span>
                                    </div>
                                </td>
                                <td class="p-3.5">
                                    <div class="text-xs font-medium text-slate-700"><?php echo $app['date']; ?></div>
                                    <div class="text-[10px] text-slate-400"><?php echo $app['time']; ?></div>
                                </td>
                                <td class="p-3.5 text-xs text-slate-600 font-medium"><?php echo $app['submitted_by']; ?></td>
                                <td class="p-3.5 text-xs text-slate-600 font-medium"><?php echo $app['district']; ?></td>
                                <td class="p-3.5">
                                    <?php if ($app['reviewer'] !== 'Unassigned'): ?>
                                        <div class="flex items-center gap-2">
                                            <img src="<?php echo $app['reviewer_avatar']; ?>" class="w-6 h-6 rounded-full border border-slate-200" alt="Reviewer">
                                            <span class="text-xs text-slate-700 font-medium"><?php echo $app['reviewer']; ?></span>
                                        </div>
                                    <?php else: ?>
                                        <div class="flex items-center gap-1.5 text-slate-400">
                                            <i class="fa-regular fa-user text-xs"></i>
                                            <span class="text-xs font-medium italic">Unassigned</span>
                                        </div>
                                    <?php endif; ?>
                                </td>
                                <td class="p-3.5">
                                    <div class="flex items-center gap-1">
                                        <div class="w-6 h-6 rounded bg-slate-200 border border-slate-300 overflow-hidden flex items-center justify-center"><i class="fa-solid fa-file-image text-[10px] text-slate-500"></i></div>
                                        <div class="w-6 h-6 rounded bg-slate-200 border border-slate-300 overflow-hidden flex items-center justify-center"><i class="fa-solid fa-id-card text-[10px] text-slate-500"></i></div>
                                        <span class="text-[10px] font-bold text-white bg-slate-700 px-1.5 py-0.5 rounded"><?php echo $app['docs_count']; ?></span>
                                    </div>
                                </td>
                                <td class="p-3.5">
                                    <span class="px-2 py-0.5 text-[10px] font-bold rounded-md border <?php echo getAppStatusBadge($app['status']); ?>">
                                        <?php echo $app['status']; ?>
                                    </span>
                                </td>
                                <td class="p-3.5">
                                    <span class="px-2.5 py-0.5 text-[10px] font-bold rounded-md border <?php echo getPriorityBadge($app['priority']); ?>">
                                        <?php echo $app['priority']; ?>
                                    </span>
                                </td>
                                <td class="p-3.5 text-center">
                                    <div class="flex items-center justify-center gap-1.5">
                                        <button class="w-6 h-6 rounded hover:bg-slate-200/60 flex items-center justify-center text-slate-400 hover:text-slate-700 transition"><i class="fa-regular fa-eye text-xs"></i></button>
                                        <button class="w-6 h-6 rounded hover:bg-slate-200/60 flex items-center justify-center text-slate-400 hover:text-slate-700 transition"><i class="fa-solid fa-ellipsis-vertical text-xs"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>

                <!-- Pagination -->
                <div class="p-3.5 border-t border-slate-100 flex flex-col sm:flex-row items-center justify-between gap-3">
                    <div class="flex items-center gap-2">
                        <span class="text-xs text-slate-500 font-medium">Rows per page</span>
                        <select class="bg-white border border-slate-200 text-slate-700 text-xs rounded-lg py-1 px-2 outline-none font-medium cursor-pointer">
                            <option>10</option>
                            <option>25</option>
                        </select>
                    </div>

                    <div class="flex items-center gap-1 text-xs">
                        <button class="w-7 h-7 rounded-lg flex items-center justify-center text-slate-400 hover:bg-slate-100"><i class="fa-solid fa-chevron-left text-[10px]"></i></button>
                        <button class="w-7 h-7 rounded-lg flex items-center justify-center text-white bg-[#0f53d1] font-bold shadow-xs">1</button>
                        <button class="w-7 h-7 rounded-lg flex items-center justify-center text-slate-600 hover:bg-slate-100 font-bold">2</button>
                        <button class="w-7 h-7 rounded-lg flex items-center justify-center text-slate-600 hover:bg-slate-100 font-bold">3</button>
                        <button class="w-7 h-7 rounded-lg flex items-center justify-center text-slate-600 hover:bg-slate-100 font-bold">4</button>
                        <button class="w-7 h-7 rounded-lg flex items-center justify-center text-slate-600 hover:bg-slate-100 font-bold">5</button>
                        <button class="w-7 h-7 rounded-lg flex items-center justify-center text-slate-600 hover:bg-slate-100"><i class="fa-solid fa-chevron-right text-[10px]"></i></button>
                    </div>

                    <span class="text-xs text-slate-500 font-medium">Showing 1 to 10 of 42 results</span>
                </div>

            </div>

        </div>

        <!-- Right Column: Detail Inspector Drawer Panel -->
        <div id="pendingDetailDrawer" class="hidden w-full xl:w-[420px] bg-white rounded-2xl border border-slate-200 shadow-md p-5 shrink-0 flex-col gap-5">
            
            <!-- Drawer Header -->
            <div class="flex items-center justify-between border-b border-slate-100 pb-3">
                <div class="flex items-center gap-2">
                    <h2 id="drawerAppId" class="text-base font-black text-slate-900 tracking-tight">APP-2025-0421</h2>
                    <span id="drawerAppStatus" class="px-2 py-0.5 text-[10px] font-bold rounded-md bg-amber-50 text-amber-600 border border-amber-200/80">Pending</span>
                </div>
                <button onclick="closePendingDrawer()" class="text-slate-400 hover:text-slate-700 transition cursor-pointer p-1"><i class="fa-solid fa-xmark text-sm"></i></button>
            </div>

            <!-- Drawer Tabs -->
            <div class="flex items-center border-b border-slate-200">
                <button class="px-4 py-2 border-b-2 border-[#0f53d1] text-xs font-bold text-[#0f53d1]">Review Application</button>
                <button class="px-4 py-2 text-xs font-semibold text-slate-500 hover:text-slate-800 flex items-center gap-1.5">
                    <span>Activity History</span>
                    <span class="bg-blue-100 text-[#0f53d1] text-[9px] font-bold px-1.5 py-0.2 rounded-full">6</span>
                </button>
            </div>

            <!-- Applicant Information -->
            <div class="space-y-3">
                <div class="flex items-center justify-between">
                    <h3 class="text-xs font-black text-slate-800 tracking-wide uppercase">Applicant Information</h3>
                    <a href="#" class="text-[10px] font-bold text-[#0f53d1] hover:underline">View Full Profile</a>
                </div>

                <div class="grid grid-cols-2 gap-y-2.5 gap-x-4 text-xs">
                    <div>
                        <span class="text-slate-400 block text-[10px] font-semibold">Full Name</span>
                        <span id="drawerApplicantName" class="font-bold text-slate-800">Juan Dela Cruz</span>
                    </div>
                    <div>
                        <span class="text-slate-400 block text-[10px] font-semibold">Birthdate</span>
                        <span class="font-bold text-slate-800">March 12, 1995 (30)</span>
                    </div>
                    <div>
                        <span class="text-slate-400 block text-[10px] font-semibold">Sex</span>
                        <span class="font-bold text-slate-800">Male</span>
                    </div>
                    <div>
                        <span class="text-slate-400 block text-[10px] font-semibold">Civil Status</span>
                        <span class="font-bold text-slate-800">Single</span>
                    </div>
                    <div>
                        <span class="text-slate-400 block text-[10px] font-semibold">Citizenship</span>
                        <span class="font-bold text-slate-800">Filipino</span>
                    </div>
                    <div>
                        <span class="text-slate-400 block text-[10px] font-semibold">Mobile Number</span>
                        <span class="font-bold text-slate-800">0917 123 4567</span>
                    </div>
                    <div class="col-span-2">
                        <span class="text-slate-400 block text-[10px] font-semibold">Email</span>
                        <span class="font-bold text-slate-800">juan.delacruz@email.com</span>
                    </div>
                    <div class="col-span-2">
                        <span class="text-slate-400 block text-[10px] font-semibold">Address</span>
                        <span class="font-bold text-slate-800 leading-snug">Blk. 12 Lot 5, District 3, Commonwealth, Quezon City</span>
                    </div>
                    <div>
                        <span class="text-slate-400 block text-[10px] font-semibold">Household ID</span>
                        <span class="font-bold text-slate-800">HH-2025-00987</span>
                    </div>
                    <div>
                        <span class="text-slate-400 block text-[10px] font-semibold">Household Head</span>
                        <span class="font-bold text-slate-800">Maria Dela Cruz</span>
                    </div>
                </div>
            </div>

            <!-- Uploaded Documents -->
            <div class="space-y-3 pt-2 border-t border-slate-100">
                <div class="flex items-center justify-between">
                    <h3 class="text-xs font-black text-slate-800 tracking-wide uppercase">Uploaded Documents (5)</h3>
                    <a href="#" class="text-[10px] font-bold text-[#0f53d1] hover:underline">View All</a>
                </div>

                <div class="grid grid-cols-4 gap-2 relative">
                    <div class="flex flex-col items-center gap-1 text-center">
                        <div class="w-full h-16 bg-slate-100 rounded-lg border border-slate-200 flex items-center justify-center text-slate-400 overflow-hidden"><i class="fa-solid fa-file-lines text-xl"></i></div>
                        <span class="text-[9px] font-semibold text-slate-600 truncate w-full">Proof of Residency</span>
                        <span class="text-[9px] font-bold text-emerald-600 flex items-center gap-0.5"><i class="fa-solid fa-check"></i> Clear</span>
                    </div>
                    <div class="flex flex-col items-center gap-1 text-center">
                        <div class="w-full h-16 bg-slate-100 rounded-lg border border-slate-200 flex items-center justify-center text-slate-400 overflow-hidden"><i class="fa-solid fa-id-card text-xl"></i></div>
                        <span class="text-[9px] font-semibold text-slate-600 truncate w-full">Government ID</span>
                        <span class="text-[9px] font-bold text-emerald-600 flex items-center gap-0.5"><i class="fa-solid fa-check"></i> Clear</span>
                    </div>
                    <div class="flex flex-col items-center gap-1 text-center">
                        <div class="w-full h-16 bg-slate-100 rounded-lg border border-slate-200 flex items-center justify-center text-slate-400 overflow-hidden"><i class="fa-solid fa-certificate text-xl"></i></div>
                        <span class="text-[9px] font-semibold text-slate-600 truncate w-full">Barangay Cert.</span>
                        <span class="text-[9px] font-bold text-emerald-600 flex items-center gap-0.5"><i class="fa-solid fa-check"></i> Clear</span>
                    </div>
                    <div class="flex flex-col items-center gap-1 text-center">
                        <div class="w-full h-16 bg-slate-100 rounded-lg border border-slate-200 flex items-center justify-center text-slate-400 overflow-hidden"><i class="fa-solid fa-file text-xl"></i></div>
                        <span class="text-[9px] font-semibold text-slate-600 truncate w-full">Other Doc.</span>
                        <span class="text-[9px] font-bold text-emerald-600 flex items-center gap-0.5"><i class="fa-solid fa-check"></i> Clear</span>
                    </div>
                </div>
            </div>

            <!-- Verification Checklist -->
            <div class="space-y-3 pt-2 border-t border-slate-100">
                <div class="flex items-center justify-between">
                    <h3 class="text-xs font-black text-slate-800 tracking-wide uppercase">Verification Checklist</h3>
                    <span class="text-[10px] font-bold text-emerald-600">6/7 Completed</span>
                </div>

                <div class="w-full bg-slate-100 rounded-full h-1.5">
                    <div class="bg-emerald-500 h-1.5 rounded-full" style="width: 85%"></div>
                </div>

                <div class="space-y-1.5 text-xs">
                    <div class="flex items-center gap-2 text-slate-700 font-medium">
                        <i class="fa-regular fa-circle-check text-emerald-500 text-sm"></i>
                        <span>Personal information complete</span>
                    </div>
                    <div class="flex items-center gap-2 text-slate-700 font-medium">
                        <i class="fa-regular fa-circle-check text-emerald-500 text-sm"></i>
                        <span>Address verified</span>
                    </div>
                    <div class="flex items-center gap-2 text-slate-700 font-medium">
                        <i class="fa-regular fa-circle-check text-emerald-500 text-sm"></i>
                        <span>Government ID matches applicant</span>
                    </div>
                    <div class="flex items-center gap-2 text-slate-700 font-medium">
                        <i class="fa-regular fa-circle-check text-emerald-500 text-sm"></i>
                        <span>Proof of residency verified</span>
                    </div>
                    <div class="flex items-center gap-2 text-slate-700 font-medium">
                        <i class="fa-regular fa-circle-check text-emerald-500 text-sm"></i>
                        <span>Duplicate citizen record checked</span>
                    </div>
                    <div class="flex items-center gap-2 text-slate-700 font-medium">
                        <i class="fa-regular fa-circle-check text-emerald-500 text-sm"></i>
                        <span>Household information verified</span>
                    </div>
                    <div class="flex items-center gap-2 text-slate-400 font-medium">
                        <i class="fa-regular fa-circle text-slate-300 text-sm"></i>
                        <span>Required documents complete</span>
                    </div>
                </div>
            </div>

            <!-- Reviewer Notes -->
            <div class="space-y-2 pt-2 border-t border-slate-100">
                <h3 class="text-xs font-black text-slate-800 tracking-wide uppercase">Reviewer Notes (Internal)</h3>
                
                <div class="border border-slate-200 rounded-xl p-2 bg-slate-50 focus-within:bg-white focus-within:ring-2 focus-within:ring-[#0f53d1]/30 transition">
                    <div class="flex items-center gap-2 text-slate-400 text-xs border-b border-slate-200/80 pb-1.5 mb-1.5 px-1">
                        <span class="text-[11px]">@ Mention a reviewer...</span>
                        <div class="ml-auto flex items-center gap-2 font-bold">
                            <button class="hover:text-slate-700">B</button>
                            <button class="hover:text-slate-700 italic">I</button>
                            <button class="hover:text-slate-700 underline">U</button>
                            <button class="hover:text-slate-700"><i class="fa-solid fa-list-ul text-[10px]"></i></button>
                            <button class="hover:text-slate-700"><i class="fa-solid fa-smile text-[10px]"></i></button>
                            <button class="hover:text-slate-700"><i class="fa-solid fa-paperclip text-[10px]"></i></button>
                        </div>
                    </div>
                    <textarea rows="2" placeholder="Write internal notes here..." class="w-full bg-transparent text-xs text-slate-700 outline-none resize-none px-1 placeholder-slate-400"></textarea>
                </div>
            </div>

            <!-- Decision Action Buttons Grid -->
            <div class="grid grid-cols-2 gap-2.5 pt-2 border-t border-slate-100">
                <button class="py-2.5 px-3 bg-emerald-600 hover:bg-emerald-700 text-white font-bold text-xs rounded-xl shadow-xs transition flex items-center justify-center gap-1.5 cursor-pointer">
                    <i class="fa-solid fa-check"></i>
                    <span>Approve Registration</span>
                </button>

                <button class="py-2.5 px-3 bg-red-600 hover:bg-red-700 text-white font-bold text-xs rounded-xl shadow-xs transition flex items-center justify-center gap-1.5 cursor-pointer">
                    <i class="fa-solid fa-xmark"></i>
                    <span>Reject Registration</span>
                </button>

                <button class="py-2.5 px-3 bg-orange-500 hover:bg-orange-600 text-white font-bold text-xs rounded-xl shadow-xs transition flex items-center justify-center gap-1.5 cursor-pointer">
                    <i class="fa-solid fa-pen-to-square"></i>
                    <span>Request More Info</span>
                </button>

                <button class="py-2.5 px-3 bg-[#0f53d1] hover:bg-[#0d46b0] text-white font-bold text-xs rounded-xl shadow-xs transition flex items-center justify-center gap-1.5 cursor-pointer">
                    <i class="fa-solid fa-user-plus"></i>
                    <span>Assign Reviewer</span>
                </button>
            </div>

        </div>

    </div>

</main>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const districtFilter = document.getElementById('districtFilterPending');
    const clearFiltersBtn = document.getElementById('clearFiltersBtnPending');
    const searchBtn = document.getElementById('searchBtnPending');
    const rows = document.querySelectorAll('tbody tr[data-district]');
    const applicationsFoundText = document.getElementById('applicationsFoundText');

    function applyDistrictFilter() {
        const selected = districtFilter ? districtFilter.value.trim() : '';
        let visibleCount = 0;

        rows.forEach(row => {
            const district = row.getAttribute('data-district') || '';
            if (!selected || district === selected) {
                row.style.display = '';
                visibleCount++;
            } else {
                row.style.display = 'none';
            }
        });

        if (applicationsFoundText) {
            if (selected) {
                applicationsFoundText.textContent = `${visibleCount} applications found (${selected})`;
            } else {
                applicationsFoundText.textContent = `${rows.length} applications found`;
            }
        }
    }

    if (districtFilter) {
        districtFilter.addEventListener('change', applyDistrictFilter);
    }
    if (searchBtn) {
        searchBtn.addEventListener('click', applyDistrictFilter);
    }
    if (clearFiltersBtn) {
        clearFiltersBtn.addEventListener('click', function () {
            if (districtFilter) districtFilter.value = '';
            applyDistrictFilter();
        });
    }
});

function togglePendingFilterGrid() {
    const filterGrid = document.getElementById('filterGrid');
    const filterSearchRow = document.getElementById('filterSearchRow');
    const btnText = document.getElementById('toggleFilterBtnText');
    const btnChevron = document.getElementById('toggleFilterBtnChevron');

    if (!filterGrid) return;

    if (filterGrid.classList.contains('hidden')) {
        filterGrid.classList.remove('hidden');
        if (filterSearchRow) filterSearchRow.classList.add('mb-5');
        if (btnText) btnText.textContent = 'Hide Filters';
        if (btnChevron) btnChevron.className = 'fa-solid fa-chevron-up text-[9px] ml-0.5';
    } else {
        filterGrid.classList.add('hidden');
        if (filterSearchRow) filterSearchRow.classList.remove('mb-5');
        if (btnText) btnText.textContent = 'Show Filters';
        if (btnChevron) btnChevron.className = 'fa-solid fa-chevron-down text-[9px] ml-0.5';
    }
}

let activeAppId = null;

function selectPendingApplication(rowElement, appId, applicantName, status) {
    const drawer = document.getElementById('pendingDetailDrawer');
    if (!drawer) return;

    if (activeAppId === appId && !drawer.classList.contains('hidden')) {
        closePendingDrawer();
        return;
    }

    activeAppId = appId;
    document.querySelectorAll('.pending-app-row').forEach(r => {
        r.classList.remove('bg-blue-50/40', 'bg-blue-50/30');
    });
    rowElement.classList.add('bg-blue-50/40');

    const drawerId = document.getElementById('drawerAppId');
    const drawerName = document.getElementById('drawerApplicantName');
    const drawerStatus = document.getElementById('drawerAppStatus');

    if (drawerId) drawerId.textContent = appId;
    if (drawerName) drawerName.textContent = applicantName;
    if (drawerStatus) drawerStatus.textContent = status;

    drawer.classList.remove('hidden');
    drawer.classList.add('flex');
}

function closePendingDrawer() {
    activeAppId = null;
    document.querySelectorAll('.pending-app-row').forEach(r => {
        r.classList.remove('bg-blue-50/40', 'bg-blue-50/30');
    });
    const drawer = document.getElementById('pendingDetailDrawer');
    if (drawer) {
        drawer.classList.add('hidden');
        drawer.classList.remove('flex');
    }
}
</script>

<?php include '../../includes/footer.php'; ?>
