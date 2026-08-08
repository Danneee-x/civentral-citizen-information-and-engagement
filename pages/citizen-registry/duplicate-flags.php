<?php
$basePath = '../../';
require_once __DIR__ . '/../../src/bootstrap.php';

// Dummy Data tailored specifically for Duplicate Flags
$duplicateFlags = [
    [
        'flag_id' => 'DF-2025-00124',
        'person_a' => 'Maria Theresa Santos', 'id_a' => 'CIZ-2024-00153', 'avatar_a' => 'https://ui-avatars.com/api/?name=Maria+Santos&background=random',
        'person_b' => 'Maria Teresa Santos', 'id_b' => 'CIZ-2025-01234', 'avatar_b' => 'https://ui-avatars.com/api/?name=Maria+Teresa&background=random',
        'criteria' => 'Name, Birthdate, Address', 'score' => '96%', 'date' => 'May 21, 2025', 'time' => '10:24 AM',
        'status' => 'Pending Review', 'assigned' => 'Maria Santos', 'barangay' => 'Barangay 1'
    ],
    [
        'flag_id' => 'DF-2025-00123',
        'person_a' => 'Juan Miguel Dela Cruz', 'id_a' => 'CIZ-2024-00421', 'avatar_a' => 'https://ui-avatars.com/api/?name=Juan+Dela+Cruz&background=random',
        'person_b' => 'Juan M. Dela Cruz', 'id_b' => 'CIZ-2025-01011', 'avatar_b' => 'https://ui-avatars.com/api/?name=Juan+M&background=random',
        'criteria' => 'Name, Birthdate', 'score' => '92%', 'date' => 'May 21, 2025', 'time' => '09:11 AM',
        'status' => 'Pending Review', 'assigned' => 'You', 'barangay' => 'Barangay 3'
    ],
    [
        'flag_id' => 'DF-2025-00122',
        'person_a' => 'Pedro Reyes', 'id_a' => 'CIZ-2024-00211', 'avatar_a' => 'https://ui-avatars.com/api/?name=Pedro+Reyes&background=random',
        'person_b' => 'Pedro S. Reyes', 'id_b' => 'CIZ-2025-00876', 'avatar_b' => 'https://ui-avatars.com/api/?name=Pedro+S&background=random',
        'criteria' => 'Name, Birthdate, Address', 'score' => '91%', 'date' => 'May 20, 2025', 'time' => '03:45 PM',
        'status' => 'Pending Review', 'assigned' => 'Ana Reyes', 'barangay' => 'Barangay 2'
    ],
    [
        'flag_id' => 'DF-2025-00121',
        'person_a' => 'Elena Villanueva', 'id_a' => 'CIZ-2024-00377', 'avatar_a' => 'https://ui-avatars.com/api/?name=Elena+Villanueva&background=random',
        'person_b' => 'Elena C. Villanueva', 'id_b' => 'CIZ-2025-00765', 'avatar_b' => 'https://ui-avatars.com/api/?name=Elena+C&background=random',
        'criteria' => 'Name, Birthdate', 'score' => '89%', 'date' => 'May 20, 2025', 'time' => '02:30 PM',
        'status' => 'Resolved', 'assigned' => 'John Cruz', 'barangay' => 'Barangay 4'
    ],
    [
        'flag_id' => 'DF-2025-00120',
        'person_a' => 'Mark Anthony Lim', 'id_a' => 'CIZ-2024-00533', 'avatar_a' => 'https://ui-avatars.com/api/?name=Mark+Lim&background=random',
        'person_b' => 'Mark A. Lim', 'id_b' => 'CIZ-2025-00654', 'avatar_b' => 'https://ui-avatars.com/api/?name=Mark+A&background=random',
        'criteria' => 'Name, Birthdate, Address', 'score' => '87%', 'date' => 'May 19, 2025', 'time' => '11:05 AM',
        'status' => 'Resolved', 'assigned' => 'You', 'barangay' => 'Barangay 1'
    ],
    [
        'flag_id' => 'DF-2025-00119',
        'person_a' => 'Patricia Mae Cruz', 'id_a' => 'CIZ-2024-00642', 'avatar_a' => 'https://ui-avatars.com/api/?name=Patricia+Cruz&background=random',
        'person_b' => 'Patricia M. Cruz', 'id_b' => 'CIZ-2025-00521', 'avatar_b' => 'https://ui-avatars.com/api/?name=Patricia+M&background=random',
        'criteria' => 'Name, Birthdate', 'score' => '85%', 'date' => 'May 19, 2025', 'time' => '09:50 AM',
        'status' => 'Not Duplicate', 'assigned' => 'Maria Santos', 'barangay' => 'Barangay 5'
    ],
    [
        'flag_id' => 'DF-2025-00118',
        'person_a' => 'Ramon Garcia', 'id_a' => 'CIZ-2024-00121', 'avatar_a' => 'https://ui-avatars.com/api/?name=Ramon+Garcia&background=random',
        'person_b' => 'Ramon C. Garcia', 'id_b' => 'CIZ-2025-00412', 'avatar_b' => 'https://ui-avatars.com/api/?name=Ramon+C&background=random',
        'criteria' => 'Name, Address', 'score' => '83%', 'date' => 'May 18, 2025', 'time' => '04:20 PM',
        'status' => 'Pending Review', 'assigned' => 'Unassigned', 'barangay' => 'Barangay 2'
    ],
    [
        'flag_id' => 'DF-2025-00117',
        'person_a' => 'Lorna Bautista', 'id_a' => 'CIZ-2024-00289', 'avatar_a' => 'https://ui-avatars.com/api/?name=Lorna+Bautista&background=random',
        'person_b' => 'Loma A. Bautista', 'id_b' => 'CIZ-2025-00398', 'avatar_b' => 'https://ui-avatars.com/api/?name=Loma+A&background=random',
        'criteria' => 'Name, Birthdate, Address', 'score' => '82%', 'date' => 'May 18, 2025', 'time' => '01:15 PM',
        'status' => 'Pending Review', 'assigned' => 'Ana Reyes', 'barangay' => 'Barangay 3'
    ],
];

function getFlagStatusBadge($status) {
    switch ($status) {
        case 'Pending Review': return 'bg-amber-100 text-amber-700 border-amber-200 dark:bg-amber-950 dark:text-amber-300 dark:border-amber-900';
        case 'Resolved': return 'bg-emerald-100 text-emerald-700 border-emerald-200 dark:bg-emerald-950 dark:text-emerald-300 dark:border-emerald-900';
        case 'Not Duplicate': return 'bg-blue-100 text-blue-700 border-blue-200 dark:bg-blue-950 dark:text-blue-300 dark:border-blue-900';
        default: return 'bg-slate-100 text-slate-700 border-slate-200';
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
    /* Circular Donut Chart Conic Gradient */
    .donut-chart {
        background: conic-gradient(
            #eab308 0deg 197deg,   /* 54.8% Pending Review (Yellow) */
            #22c55e 197deg 336deg, /* 38.7% Resolved (Green) */
            #3b82f6 336deg 360deg  /* 13.7% Not Duplicates (Blue) */
        );
    }
</style>

<main class="flex-1 p-3 sm:p-4 md:p-6 lg:p-8 w-full min-w-0 overflow-y-auto bg-slate-50/50 dark:bg-slate-950 min-h-[calc(100vh-4rem)] text-slate-800 dark:text-slate-100">
    <div class="max-w-7xl mx-auto space-y-6">

        <!-- Top 6 KPI Stat Cards Row -->
        <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-3 sm:gap-4">
            
            <!-- Card 1: Total Duplicate Flags -->
            <div class="bg-white dark:bg-slate-900 rounded-2xl p-4 border border-slate-200/80 dark:border-slate-800 shadow-sm flex flex-col justify-between hover:shadow-md transition">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-purple-50 dark:bg-purple-950/60 text-purple-600 dark:text-purple-400 flex items-center justify-center shrink-0">
                        <i class="fa-solid fa-users-rectangle text-lg"></i>
                    </div>
                    <div class="min-w-0 flex-1">
                        <span class="text-[10px] font-bold text-slate-500 dark:text-slate-400 uppercase tracking-tight block truncate">Total Duplicate Flags</span>
                        <h3 class="text-xl font-black text-slate-800 dark:text-white mt-0.5">124</h3>
                    </div>
                </div>
                <div class="flex items-center gap-1 mt-3 text-[10px] font-semibold text-emerald-500">
                    <i class="fa-solid fa-arrow-up text-[9px]"></i>
                    <span>12.5%</span>
                    <span class="text-slate-400 font-normal ml-0.5">vs last month</span>
                </div>
            </div>

            <!-- Card 2: Pending Review -->
            <div class="bg-white dark:bg-slate-900 rounded-2xl p-4 border border-slate-200/80 dark:border-slate-800 shadow-sm flex flex-col justify-between hover:shadow-md transition">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-amber-50 dark:bg-amber-950/60 text-amber-500 flex items-center justify-center shrink-0">
                        <i class="fa-regular fa-clock text-lg"></i>
                    </div>
                    <div class="min-w-0 flex-1">
                        <span class="text-[10px] font-bold text-slate-500 dark:text-slate-400 uppercase tracking-tight block truncate">Pending Review</span>
                        <h3 class="text-xl font-black text-slate-800 dark:text-white mt-0.5">68</h3>
                    </div>
                </div>
                <div class="flex items-center gap-1 mt-3 text-[10px] font-semibold text-emerald-500">
                    <i class="fa-solid fa-arrow-up text-[9px]"></i>
                    <span>8.3%</span>
                    <span class="text-slate-400 font-normal ml-0.5">vs last month</span>
                </div>
            </div>

            <!-- Card 3: Resolved -->
            <div class="bg-white dark:bg-slate-900 rounded-2xl p-4 border border-slate-200/80 dark:border-slate-800 shadow-sm flex flex-col justify-between hover:shadow-md transition">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-blue-50 dark:bg-blue-950/60 text-blue-500 flex items-center justify-center shrink-0">
                        <i class="fa-regular fa-circle-check text-lg"></i>
                    </div>
                    <div class="min-w-0 flex-1">
                        <span class="text-[10px] font-bold text-slate-500 dark:text-slate-400 uppercase tracking-tight block truncate">Resolved</span>
                        <h3 class="text-xl font-black text-slate-800 dark:text-white mt-0.5">48</h3>
                    </div>
                </div>
                <div class="flex items-center gap-1 mt-3 text-[10px] font-semibold text-emerald-500">
                    <i class="fa-solid fa-arrow-up text-[9px]"></i>
                    <span>20.0%</span>
                    <span class="text-slate-400 font-normal ml-0.5">vs last month</span>
                </div>
            </div>

            <!-- Card 4: Merged Records -->
            <div class="bg-white dark:bg-slate-900 rounded-2xl p-4 border border-slate-200/80 dark:border-slate-800 shadow-sm flex flex-col justify-between hover:shadow-md transition">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-emerald-50 dark:bg-emerald-950/60 text-emerald-500 flex items-center justify-center shrink-0">
                        <i class="fa-solid fa-code-merge text-lg"></i>
                    </div>
                    <div class="min-w-0 flex-1">
                        <span class="text-[10px] font-bold text-slate-500 dark:text-slate-400 uppercase tracking-tight block truncate">Merged Records</span>
                        <h3 class="text-xl font-black text-slate-800 dark:text-white mt-0.5">31</h3>
                    </div>
                </div>
                <div class="flex items-center gap-1 mt-3 text-[10px] font-semibold text-emerald-500">
                    <i class="fa-solid fa-arrow-up text-[9px]"></i>
                    <span>15.6%</span>
                    <span class="text-slate-400 font-normal ml-0.5">vs last month</span>
                </div>
            </div>

            <!-- Card 5: Not Duplicates -->
            <div class="bg-white dark:bg-slate-900 rounded-2xl p-4 border border-slate-200/80 dark:border-slate-800 shadow-sm flex flex-col justify-between hover:shadow-md transition">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-rose-50 dark:bg-rose-950/60 text-rose-500 flex items-center justify-center shrink-0">
                        <i class="fa-regular fa-circle-xmark text-lg"></i>
                    </div>
                    <div class="min-w-0 flex-1">
                        <span class="text-[10px] font-bold text-slate-500 dark:text-slate-400 uppercase tracking-tight block truncate">Not Duplicates</span>
                        <h3 class="text-xl font-black text-slate-800 dark:text-white mt-0.5">17</h3>
                    </div>
                </div>
                <div class="flex items-center gap-1 mt-3 text-[10px] font-semibold text-rose-500">
                    <i class="fa-solid fa-arrow-down text-[9px]"></i>
                    <span>5.2%</span>
                    <span class="text-slate-400 font-normal ml-0.5">vs last month</span>
                </div>
            </div>

            <!-- Card 6: Avg. Resolution Time -->
            <div class="bg-white dark:bg-slate-900 rounded-2xl p-4 border border-slate-200/80 dark:border-slate-800 shadow-sm flex flex-col justify-between hover:shadow-md transition">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-indigo-50 dark:bg-indigo-950/60 text-indigo-500 flex items-center justify-center shrink-0">
                        <i class="fa-solid fa-clock-rotate-left text-lg"></i>
                    </div>
                    <div class="min-w-0 flex-1">
                        <span class="text-[10px] font-bold text-slate-500 dark:text-slate-400 uppercase tracking-tight block truncate">Avg. Resolution Time</span>
                        <h3 class="text-xl font-black text-slate-800 dark:text-white mt-0.5">2.4 <span class="text-xs font-normal">Days</span></h3>
                    </div>
                </div>
                <div class="flex items-center gap-1 mt-3 text-[10px] font-semibold text-emerald-500">
                    <i class="fa-solid fa-arrow-down text-[9px]"></i>
                    <span>0.6 days</span>
                    <span class="text-slate-400 font-normal ml-0.5">vs last month</span>
                </div>
            </div>

        </div>

        <!-- Filters & Main Area Layout -->
        <div class="flex flex-col xl:flex-row gap-6">

            <!-- Left / Main Content Column -->
            <div class="flex-1 flex flex-col gap-6 min-w-0">

                <!-- Search Bar & Filters Section -->
                <div class="bg-white dark:bg-slate-900 p-5 rounded-2xl border border-slate-200/80 dark:border-slate-800 shadow-sm space-y-4">
                    
                    <!-- Top Search Input -->
                    <div class="flex flex-col sm:flex-row gap-3 justify-between items-stretch sm:items-center">
                        <div class="relative w-full flex-1">
                            <i class="fa-solid fa-search absolute left-4 top-1/2 -translate-y-1/2 text-slate-400"></i>
                            <input type="text" id="searchInput" oninput="filterFlags()" placeholder="Search by Name, Birthdate, Household ID, National ID..." class="w-full bg-slate-50 dark:bg-slate-800 border border-slate-200 dark:border-slate-700 text-slate-700 dark:text-slate-200 text-xs sm:text-sm rounded-xl focus:ring-2 focus:ring-[#0f53d1]/50 block pl-11 p-3 transition outline-none placeholder-slate-400 font-medium">
                        </div>
                        <div class="flex items-center gap-2 shrink-0">
                            <button onclick="filterFlags()" class="px-5 py-3 text-xs font-bold text-white bg-[#0f53d1] border border-[#0f53d1] rounded-xl hover:bg-[#0d46b0] shadow-sm transition cursor-pointer flex items-center justify-center gap-2 whitespace-nowrap">
                                <i class="fa-solid fa-search text-[10px]"></i>
                                <span>Search</span>
                            </button>
                            <button id="toggleFiltersBtn" onclick="toggleAdvancedFilters()" class="px-4 py-3 text-xs font-bold text-[#0f53d1] bg-blue-50/50 dark:bg-blue-950/40 rounded-xl border border-[#0f53d1]/20 hover:bg-blue-50 transition cursor-pointer flex items-center justify-center gap-2 whitespace-nowrap">
                                <i class="fa-solid fa-filter-list"></i>
                                <span id="toggleFiltersText">Show Filters</span>
                                <i id="toggleFiltersIcon" class="fa-solid fa-chevron-down text-[10px] ml-1 transition-transform"></i>
                            </button>
                        </div>
                    </div>

                    <!-- Filters Grid Container -->
                    <div id="advancedFiltersContainer" class="hidden space-y-4 pt-4 border-t border-slate-100 dark:border-slate-800">
                        <!-- Row 1 -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4">
                            <div class="space-y-1.5">
                                <label class="text-[11px] font-bold text-slate-500 dark:text-slate-400">Flag Status</label>
                                <select id="statusFilter" onchange="filterFlags()" class="w-full bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 text-slate-700 dark:text-slate-200 text-xs rounded-lg p-2.5 outline-none font-medium cursor-pointer">
                                    <option value="">All Status</option>
                                    <option value="Pending Review">Pending Review</option>
                                    <option value="Resolved">Resolved</option>
                                    <option value="Not Duplicate">Not Duplicate</option>
                                </select>
                            </div>

                            <div class="space-y-1.5">
                                <label class="text-[11px] font-bold text-slate-500 dark:text-slate-400">Detected By</label>
                                <select id="detectedFilter" onchange="filterFlags()" class="w-full bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 text-slate-700 dark:text-slate-200 text-xs rounded-lg p-2.5 outline-none font-medium cursor-pointer">
                                    <option value="">All Sources</option>
                                    <option value="AI Engine">AI Engine</option>
                                    <option value="System Rule">System Rule</option>
                                    <option value="Manual Flag">Manual Flag</option>
                                </select>
                            </div>

                            <div class="space-y-1.5">
                                <label class="text-[11px] font-bold text-slate-500 dark:text-slate-400">Barangay</label>
                                <select id="barangayFilter" onchange="filterFlags()" class="w-full bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 text-slate-700 dark:text-slate-200 text-xs rounded-lg p-2.5 outline-none font-medium cursor-pointer">
                                    <option value="">All Barangays</option>
                                    <option value="Barangay 1">Barangay 1</option>
                                    <option value="Barangay 2">Barangay 2</option>
                                    <option value="Barangay 3">Barangay 3</option>
                                    <option value="Barangay 4">Barangay 4</option>
                                    <option value="Barangay 5">Barangay 5</option>
                                </select>
                            </div>

                            <div class="space-y-1.5">
                                <label class="text-[11px] font-bold text-slate-500 dark:text-slate-400">Date Flagged</label>
                                <input type="date" id="dateFlaggedInput" onclick="openDatePicker('dateFlaggedInput')" onchange="filterFlags()" class="w-full bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 text-slate-700 dark:text-slate-200 text-xs rounded-lg p-2.5 outline-none font-medium cursor-pointer focus:ring-2 focus:ring-[#0f53d1]/50 transition">
                            </div>
                        </div>

                        <!-- Row 2 -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4 items-end">
                            <div class="space-y-1.5">
                                <label class="text-[11px] font-bold text-slate-500 dark:text-slate-400">Similarity Score</label>
                                <select id="scoreFilter" onchange="filterFlags()" class="w-full bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 text-slate-700 dark:text-slate-200 text-xs rounded-lg p-2.5 outline-none font-medium cursor-pointer">
                                    <option value="">All Scores</option>
                                    <option value="90+">90%+</option>
                                    <option value="85-89">85% - 89%</option>
                                    <option value="80-84">80% - 84%</option>
                                </select>
                            </div>

                            <div class="space-y-1.5">
                                <label class="text-[11px] font-bold text-slate-500 dark:text-slate-400">Flag Type</label>
                                <select id="typeFilter" onchange="filterFlags()" class="w-full bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 text-slate-700 dark:text-slate-200 text-xs rounded-lg p-2.5 outline-none font-medium cursor-pointer">
                                    <option value="">All Types</option>
                                    <option value="Name, Birthdate, Address">Exact Name + DOB + Address</option>
                                    <option value="Name, Birthdate">Similar Name + DOB</option>
                                    <option value="Name, Address">Same Name + Address</option>
                                </select>
                            </div>

                            <div class="space-y-1.5">
                                <label class="text-[11px] font-bold text-slate-500 dark:text-slate-400">Assigned Reviewer</label>
                                <select id="reviewerFilter" onchange="filterFlags()" class="w-full bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 text-slate-700 dark:text-slate-200 text-xs rounded-lg p-2.5 outline-none font-medium cursor-pointer">
                                    <option value="">All Reviewers</option>
                                    <option value="Maria Santos">Maria Santos</option>
                                    <option value="You">You</option>
                                    <option value="Ana Reyes">Ana Reyes</option>
                                    <option value="John Cruz">John Cruz</option>
                                    <option value="Unassigned">Unassigned</option>
                                </select>
                            </div>

                            <div class="flex items-center gap-3 justify-between sm:justify-end pb-1">
                                <label class="flex items-center gap-2 text-xs text-slate-600 dark:text-slate-300 font-medium cursor-pointer">
                                    <input type="checkbox" id="onlyUnassigned" onchange="filterFlags()" class="w-4 h-4 text-[#0f53d1] border-slate-300 rounded focus:ring-[#0f53d1]">
                                    <span>Only Unassigned</span>
                                </label>
                                <button onclick="resetFilters()" class="px-4 py-2.5 text-xs font-bold text-[#0f53d1] bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-xl hover:bg-slate-50 transition cursor-pointer">
                                    Clear Filters
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Duplicate Flags List Table Card -->
                <div class="bg-white dark:bg-slate-900 rounded-2xl border border-slate-200/80 dark:border-slate-800 shadow-sm flex flex-col">
                    <div class="p-4 border-b border-slate-100 dark:border-slate-800 flex items-center justify-between">
                        <h3 class="text-xs font-black text-slate-800 dark:text-white uppercase tracking-wider">Duplicate Flags List</h3>
                    </div>

                    <!-- Table Wrapper -->
                    <div class="overflow-x-auto w-full custom-scrollbar">
                        <table class="w-full text-left border-collapse whitespace-nowrap min-w-[1000px]">
                            <thead>
                                <tr class="border-b border-slate-100 dark:border-slate-800 bg-slate-50/50 dark:bg-slate-800/40 text-[10px] font-bold text-slate-500 dark:text-slate-400 uppercase tracking-wider">
                                    <th class="p-3.5 w-10 text-center">
                                        <input type="checkbox" id="masterFlagCheckbox" onchange="toggleSelectAllFlags(this)" class="w-4 h-4 text-[#0f53d1] border-slate-300 rounded focus:ring-[#0f53d1] cursor-pointer" title="Select all flags">
                                    </th>
                                    <th class="p-3.5">Flag ID</th>
                                    <th class="p-3.5">Primary Match (Record A)</th>
                                    <th class="p-3.5">Potential Duplicate (Record B)</th>
                                    <th class="p-3.5">Match Criteria</th>
                                    <th class="p-3.5">Similarity Score</th>
                                    <th class="p-3.5">Flagged On</th>
                                    <th class="p-3.5">Status</th>
                                    <th class="p-3.5">Assigned To</th>
                                    <th class="p-3.5 text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-slate-100 dark:divide-slate-800">
                                <?php foreach ($duplicateFlags as $f): ?>
                                <tr onclick="toggleFlagRow(event, this)" class="hover:bg-slate-50/80 dark:hover:bg-slate-800/50 transition select-none cursor-pointer" data-status="<?php echo $f['status']; ?>" data-assigned="<?php echo $f['assigned']; ?>" data-barangay="<?php echo $f['barangay']; ?>" data-criteria="<?php echo $f['criteria']; ?>" data-score="<?php echo $f['score']; ?>">
                                    <td class="p-3.5 text-center">
                                        <input type="checkbox" class="flag-row-checkbox w-4 h-4 text-[#0f53d1] border-slate-300 rounded focus:ring-[#0f53d1] cursor-pointer" onchange="updateMasterFlagState()">
                                    </td>
                                    <td class="p-3.5 text-xs font-bold text-slate-600 dark:text-slate-300"><?php echo $f['flag_id']; ?></td>
                                    
                                    <!-- Person A -->
                                    <td class="p-3.5">
                                        <div class="flex items-center gap-2.5">
                                            <img src="<?php echo $f['avatar_a']; ?>" class="w-7 h-7 rounded-full border border-slate-200" alt="Avatar">
                                            <div>
                                                <span class="text-xs font-bold text-slate-800 dark:text-white block"><?php echo $f['person_a']; ?></span>
                                                <span class="text-[10px] text-slate-400 font-mono block"><?php echo $f['id_a']; ?></span>
                                            </div>
                                        </div>
                                    </td>

                                    <!-- Person B -->
                                    <td class="p-3.5">
                                        <div class="flex items-center gap-2.5">
                                            <img src="<?php echo $f['avatar_b']; ?>" class="w-7 h-7 rounded-full border border-slate-200" alt="Avatar">
                                            <div>
                                                <span class="text-xs font-bold text-slate-800 dark:text-white block"><?php echo $f['person_b']; ?></span>
                                                <span class="text-[10px] text-slate-400 font-mono block"><?php echo $f['id_b']; ?></span>
                                            </div>
                                        </div>
                                    </td>

                                    <td class="p-3.5 text-xs font-medium text-slate-600 dark:text-slate-300"><?php echo $f['criteria']; ?></td>
                                    
                                    <!-- Similarity Score (Red Highlighted) -->
                                    <td class="p-3.5">
                                        <span class="text-xs font-black text-rose-600 dark:text-rose-400"><?php echo $f['score']; ?></span>
                                    </td>

                                    <!-- Flagged On Date & Time -->
                                    <td class="p-3.5">
                                        <span class="text-xs font-semibold text-slate-700 dark:text-slate-300 block"><?php echo $f['date']; ?></span>
                                        <span class="text-[10px] text-slate-400 font-medium block"><?php echo $f['time']; ?></span>
                                    </td>

                                    <!-- Status Badge -->
                                    <td class="p-3.5">
                                        <span class="px-2.5 py-1 text-[10px] font-bold rounded-md border <?php echo getFlagStatusBadge($f['status']); ?>">
                                            <?php echo $f['status']; ?>
                                        </span>
                                    </td>

                                    <td class="p-3.5 text-xs font-medium text-slate-700 dark:text-slate-300"><?php echo $f['assigned']; ?></td>

                                    <!-- Actions (View Eye + 3-dots) -->
                                    <td class="p-3.5 text-center">
                                        <div class="flex items-center justify-center gap-1.5">
                                            <button class="w-7 h-7 rounded-lg hover:bg-slate-100 dark:hover:bg-slate-800 text-slate-400 hover:text-blue-600 transition flex items-center justify-center">
                                                <i class="fa-regular fa-eye text-xs"></i>
                                            </button>
                                            <button class="w-7 h-7 rounded-lg hover:bg-slate-100 dark:hover:bg-slate-800 text-slate-400 hover:text-slate-700 transition flex items-center justify-center">
                                                <i class="fa-solid fa-ellipsis-vertical text-xs"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>

                    <!-- Pagination Footer -->
                    <div class="p-4 border-t border-slate-100 dark:border-slate-800 flex flex-col sm:flex-row items-center justify-between gap-4">
                        <div class="flex items-center gap-3">
                            <span class="text-xs text-slate-500 font-medium">Rows per page</span>
                            <select class="bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 text-slate-700 dark:text-slate-200 text-xs rounded-lg py-1.5 px-2 outline-none font-medium">
                                <option value="10" selected>10</option>
                                <option value="25">25</option>
                                <option value="50">50</option>
                            </select>
                            <span class="text-xs text-slate-500 dark:text-slate-400 font-medium ml-2">Showing 1 to 10 of 124 entries</span>
                        </div>

                        <!-- Stepper -->
                        <div class="flex items-center gap-1">
                            <button class="w-7 h-7 rounded-lg flex items-center justify-center text-slate-400 hover:bg-slate-100 text-xs"><i class="fa-solid fa-angles-left text-[10px]"></i></button>
                            <button class="w-7 h-7 rounded-lg flex items-center justify-center text-slate-400 hover:bg-slate-100 text-xs"><i class="fa-solid fa-angle-left text-[10px]"></i></button>
                            <button class="w-7 h-7 rounded-lg flex items-center justify-center text-white bg-[#0f53d1] font-bold text-xs shadow-xs">1</button>
                            <button class="w-7 h-7 rounded-lg flex items-center justify-center text-slate-600 dark:text-slate-300 hover:bg-slate-100 font-bold text-xs">2</button>
                            <button class="w-7 h-7 rounded-lg flex items-center justify-center text-slate-600 dark:text-slate-300 hover:bg-slate-100 font-bold text-xs">3</button>
                            <span class="px-1 text-slate-400 text-xs">...</span>
                            <button class="w-7 h-7 rounded-lg flex items-center justify-center text-slate-600 dark:text-slate-300 hover:bg-slate-100 font-bold text-xs">13</button>
                            <button class="w-7 h-7 rounded-lg flex items-center justify-center text-slate-600 dark:text-slate-300 hover:bg-slate-100 text-xs"><i class="fa-solid fa-angle-right text-[10px]"></i></button>
                            <button class="w-7 h-7 rounded-lg flex items-center justify-center text-slate-600 dark:text-slate-300 hover:bg-slate-100 text-xs"><i class="fa-solid fa-angles-right text-[10px]"></i></button>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Right Sidebar Widgets Column -->
            <div class="w-full xl:w-80 flex flex-col gap-6 shrink-0">
                
                <!-- Widget 1: Duplicate Summary (Donut Chart) -->
                <div class="bg-white dark:bg-slate-900 p-5 rounded-2xl border border-slate-200/80 dark:border-slate-800 shadow-sm space-y-4">
                    <h3 class="text-xs font-black text-slate-800 dark:text-white uppercase tracking-wider">Duplicate Summary</h3>
                    
                    <div class="flex flex-col items-center justify-center py-2 relative">
                        <!-- Donut Graphic -->
                        <div class="donut-chart w-32 h-32 rounded-full flex items-center justify-center shadow-inner relative">
                            <div class="w-20 h-20 rounded-full bg-white dark:bg-slate-900 flex flex-col items-center justify-center shadow-sm">
                                <span class="text-xl font-black text-slate-800 dark:text-white leading-none">124</span>
                                <span class="text-[9px] font-bold text-slate-400 uppercase mt-0.5">Total</span>
                            </div>
                        </div>
                    </div>

                    <!-- Donut Legend -->
                    <div class="space-y-2 pt-2 border-t border-slate-100 dark:border-slate-800">
                        <div class="flex items-center justify-between text-xs">
                            <div class="flex items-center gap-2">
                                <span class="w-2.5 h-2.5 rounded-full bg-amber-500"></span>
                                <span class="text-slate-600 dark:text-slate-300 font-medium">Pending Review</span>
                            </div>
                            <span class="font-bold text-slate-800 dark:text-white">68 <span class="text-[10px] text-slate-400 font-normal">(54.8%)</span></span>
                        </div>

                        <div class="flex items-center justify-between text-xs">
                            <div class="flex items-center gap-2">
                                <span class="w-2.5 h-2.5 rounded-full bg-emerald-500"></span>
                                <span class="text-slate-600 dark:text-slate-300 font-medium">Resolved</span>
                            </div>
                            <span class="font-bold text-slate-800 dark:text-white">48 <span class="text-[10px] text-slate-400 font-normal">(38.7%)</span></span>
                        </div>

                        <div class="flex items-center justify-between text-xs">
                            <div class="flex items-center gap-2">
                                <span class="w-2.5 h-2.5 rounded-full bg-blue-500"></span>
                                <span class="text-slate-600 dark:text-slate-300 font-medium">Not Duplicates</span>
                            </div>
                            <span class="font-bold text-slate-800 dark:text-white">17 <span class="text-[10px] text-slate-400 font-normal">(13.7%)</span></span>
                        </div>
                    </div>
                </div>

                <!-- Widget 2: Recent Activity -->
                <div class="bg-white dark:bg-slate-900 p-5 rounded-2xl border border-slate-200/80 dark:border-slate-800 shadow-sm space-y-4">
                    <div class="flex items-center justify-between">
                        <h3 class="text-xs font-black text-slate-800 dark:text-white uppercase tracking-wider">Recent Activity</h3>
                        <a href="#" class="text-[10px] font-bold text-[#0f53d1] hover:underline">View All</a>
                    </div>
                    
                    <div class="space-y-4">
                        <div class="flex gap-3">
                            <img src="https://ui-avatars.com/api/?name=Maria+Santos&background=random" class="w-6 h-6 rounded-full shrink-0 mt-0.5" alt="Avatar">
                            <div>
                                <p class="text-[11px] text-slate-700 dark:text-slate-300 font-medium leading-tight">
                                    <span class="font-bold text-slate-800 dark:text-white">Maria Santos</span> merged a duplicate record <span class="text-[#0f53d1] font-mono">DF-2025-00121</span>
                                </p>
                                <span class="text-[9px] text-slate-400 font-semibold mt-0.5 block">2 mins ago</span>
                            </div>
                        </div>

                        <div class="flex gap-3">
                            <div class="w-6 h-6 rounded-full bg-emerald-50 dark:bg-emerald-950/60 text-emerald-600 flex items-center justify-center shrink-0 mt-0.5 text-[10px]">
                                <i class="fa-solid fa-user-check"></i>
                            </div>
                            <div>
                                <p class="text-[11px] text-slate-700 dark:text-slate-300 font-medium leading-tight">
                                    <span class="font-bold text-slate-800 dark:text-white">John Cruz</span> marked as not duplicate <span class="text-[#0f53d1] font-mono">DF-2025-00119</span>
                                </p>
                                <span class="text-[9px] text-slate-400 font-semibold mt-0.5 block">15 mins ago</span>
                            </div>
                        </div>

                        <div class="flex gap-3">
                            <div class="w-6 h-6 rounded-full bg-blue-50 dark:bg-blue-950/60 text-blue-600 flex items-center justify-center shrink-0 mt-0.5 text-[10px]">
                                <i class="fa-solid fa-user-gear"></i>
                            </div>
                            <div>
                                <p class="text-[11px] text-slate-700 dark:text-slate-300 font-medium leading-tight">
                                    You assigned <span class="text-[#0f53d1] font-mono">DF-2025-00124</span> to Maria Santos
                                </p>
                                <span class="text-[9px] text-slate-400 font-semibold mt-0.5 block">28 mins ago</span>
                            </div>
                        </div>

                        <div class="flex gap-3">
                            <img src="https://ui-avatars.com/api/?name=Ana+Reyes&background=random" class="w-6 h-6 rounded-full shrink-0 mt-0.5" alt="Avatar">
                            <div>
                                <p class="text-[11px] text-slate-700 dark:text-slate-300 font-medium leading-tight">
                                    <span class="font-bold text-slate-800 dark:text-white">Ana Reyes</span> merged a duplicate record <span class="text-[#0f53d1] font-mono">DF-2025-00120</span>
                                </p>
                                <span class="text-[9px] text-slate-400 font-semibold mt-0.5 block">1 hour ago</span>
                            </div>
                        </div>

                        <div class="flex gap-3">
                            <div class="w-6 h-6 rounded-full bg-amber-50 dark:bg-amber-950/60 text-amber-600 flex items-center justify-center shrink-0 mt-0.5 text-[10px]">
                                <i class="fa-solid fa-robot"></i>
                            </div>
                            <div>
                                <p class="text-[11px] text-slate-700 dark:text-slate-300 font-medium leading-tight">
                                    System auto-flagged new potential duplicate <span class="text-[#0f53d1] font-mono">DF-2025-00124</span>
                                </p>
                                <span class="text-[9px] text-slate-400 font-semibold mt-0.5 block">2 hours ago</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Widget 3: Top Match Criteria -->
                <div class="bg-white dark:bg-slate-900 p-5 rounded-2xl border border-slate-200/80 dark:border-slate-800 shadow-sm space-y-4">
                    <h3 class="text-xs font-black text-slate-800 dark:text-white uppercase tracking-wider">Top Match Criteria</h3>
                    
                    <div class="space-y-3.5">
                        <!-- Criteria 1 -->
                        <div class="space-y-1">
                            <div class="flex justify-between text-xs">
                                <span class="font-bold text-slate-700 dark:text-slate-300">Name + Birthdate + Address</span>
                                <span class="font-black text-slate-800 dark:text-white">78 <span class="text-[10px] text-slate-400 font-normal">(62.9%)</span></span>
                            </div>
                            <div class="w-full bg-slate-100 dark:bg-slate-800 rounded-full h-1.5 overflow-hidden">
                                <div class="bg-purple-600 h-1.5 rounded-full w-[62.9%]"></div>
                            </div>
                        </div>

                        <!-- Criteria 2 -->
                        <div class="space-y-1">
                            <div class="flex justify-between text-xs">
                                <span class="font-bold text-slate-700 dark:text-slate-300">Name + Birthdate</span>
                                <span class="font-black text-slate-800 dark:text-white">34 <span class="text-[10px] text-slate-400 font-normal">(27.4%)</span></span>
                            </div>
                            <div class="w-full bg-slate-100 dark:bg-slate-800 rounded-full h-1.5 overflow-hidden">
                                <div class="bg-blue-500 h-1.5 rounded-full w-[27.4%]"></div>
                            </div>
                        </div>

                        <!-- Criteria 3 -->
                        <div class="space-y-1">
                            <div class="flex justify-between text-xs">
                                <span class="font-bold text-slate-700 dark:text-slate-300">Name + Address</span>
                                <span class="font-black text-slate-800 dark:text-white">10 <span class="text-[10px] text-slate-400 font-normal">(8.1%)</span></span>
                            </div>
                            <div class="w-full bg-slate-100 dark:bg-slate-800 rounded-full h-1.5 overflow-hidden">
                                <div class="bg-cyan-500 h-1.5 rounded-full w-[8.1%]"></div>
                            </div>
                        </div>

                        <!-- Criteria 4 -->
                        <div class="space-y-1">
                            <div class="flex justify-between text-xs">
                                <span class="font-bold text-slate-700 dark:text-slate-300">Others</span>
                                <span class="font-black text-slate-800 dark:text-white">2 <span class="text-[10px] text-slate-400 font-normal">(1.6%)</span></span>
                            </div>
                            <div class="w-full bg-slate-100 dark:bg-slate-800 rounded-full h-1.5 overflow-hidden">
                                <div class="bg-amber-500 h-1.5 rounded-full w-[1.6%]"></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- Bottom Informational Banner & Detection Rules Button -->
        <div class="bg-white dark:bg-slate-900 p-4 rounded-2xl border border-slate-200/80 dark:border-slate-800 shadow-sm flex flex-col sm:flex-row items-center justify-between gap-4">
            <div class="flex items-center gap-3">
                <div class="w-8 h-8 rounded-full bg-blue-50 dark:bg-blue-950 text-blue-600 flex items-center justify-center shrink-0">
                    <i class="fa-solid fa-circle-info text-sm"></i>
                </div>
                <div>
                    <h4 class="text-xs font-bold text-slate-800 dark:text-white">About Duplicate Flags</h4>
                    <p class="text-[11px] text-slate-500 dark:text-slate-400 font-medium">
                        The system automatically detects potential duplicate records based on matching information. Please review each flag carefully and take appropriate action to maintain data integrity.
                    </p>
                </div>
            </div>
            <button class="whitespace-nowrap px-4 py-2 text-xs font-bold text-slate-700 dark:text-slate-200 bg-slate-50 dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-xl hover:bg-slate-100 transition cursor-pointer flex items-center gap-2">
                <i class="fa-solid fa-sliders text-blue-600"></i>
                <span>Duplicate Detection Rules</span>
            </button>
        </div>

    </div>
</main>

<script>
function toggleAdvancedFilters() {
    const container = document.getElementById('advancedFiltersContainer');
    const textSpan = document.getElementById('toggleFiltersText');
    const icon = document.getElementById('toggleFiltersIcon');

    if (!container) return;

    if (container.classList.contains('hidden')) {
        container.classList.remove('hidden');
        if (textSpan) textSpan.textContent = 'Hide Filters';
        if (icon) {
            icon.classList.remove('fa-chevron-down');
            icon.classList.add('fa-chevron-up');
        }
    } else {
        container.classList.add('hidden');
        if (textSpan) textSpan.textContent = 'Show Filters';
        if (icon) {
            icon.classList.remove('fa-chevron-up');
            icon.classList.add('fa-chevron-down');
        }
    }
}

function filterFlags() {
    const searchInput = document.getElementById('searchInput');
    const statusFilter = document.getElementById('statusFilter');
    const detectedFilter = document.getElementById('detectedFilter');
    const barangayFilter = document.getElementById('barangayFilter');
    const reviewerFilter = document.getElementById('reviewerFilter');
    const typeFilter = document.getElementById('typeFilter');
    const scoreFilter = document.getElementById('scoreFilter');
    const onlyUnassigned = document.getElementById('onlyUnassigned') ? document.getElementById('onlyUnassigned').checked : false;

    const query = searchInput ? searchInput.value.trim().toLowerCase() : '';
    const statusVal = statusFilter ? statusFilter.value.trim() : '';
    const barangayVal = barangayFilter ? barangayFilter.value.trim() : '';
    const reviewerVal = reviewerFilter ? reviewerFilter.value.trim() : '';
    const typeVal = typeFilter ? typeFilter.value.trim() : '';
    const scoreVal = scoreFilter ? scoreFilter.value.trim() : '';

    const rows = document.querySelectorAll('tbody tr[data-status]');

    rows.forEach(row => {
        const rowStatus = row.getAttribute('data-status') || '';
        const rowAssigned = row.getAttribute('data-assigned') || '';
        const rowBarangay = row.getAttribute('data-barangay') || '';
        const rowCriteria = row.getAttribute('data-criteria') || '';
        const rowScore = parseInt(row.getAttribute('data-score') || '0', 10);
        const text = row.textContent.toLowerCase();

        let matchesSearch = !query || text.includes(query);
        let matchesStatus = !statusVal || rowStatus === statusVal;
        let matchesBarangay = !barangayVal || rowBarangay === barangayVal;
        let matchesReviewer = !reviewerVal || rowAssigned === reviewerVal;
        let matchesType = !typeVal || rowCriteria.includes(typeVal);
        let matchesUnassigned = !onlyUnassigned || rowAssigned === 'Unassigned';

        let matchesScore = true;
        if (scoreVal === '90+') matchesScore = rowScore >= 90;
        else if (scoreVal === '85-89') matchesScore = rowScore >= 85 && rowScore <= 89;
        else if (scoreVal === '80-84') matchesScore = rowScore >= 80 && rowScore <= 84;

        if (matchesSearch && matchesStatus && matchesBarangay && matchesReviewer && matchesType && matchesUnassigned && matchesScore) {
            row.style.display = '';
        } else {
            row.style.display = 'none';
        }
    });
}

function openDatePicker(id) {
    const input = document.getElementById(id);
    if (input) {
        if (typeof input.showPicker === 'function') {
            try {
                input.showPicker();
            } catch (e) {
                input.focus();
            }
        } else {
            input.focus();
        }
    }
}

function resetFilters() {
    ['searchInput', 'statusFilter', 'detectedFilter', 'barangayFilter', 'reviewerFilter', 'typeFilter', 'scoreFilter', 'dateFlaggedInput'].forEach(id => {
        const el = document.getElementById(id);
        if (el) el.value = '';
    });

    const unassigned = document.getElementById('onlyUnassigned');
    if (unassigned) unassigned.checked = false;

    filterFlags();
}

function toggleSelectAllFlags(masterCheckbox) {
    const isChecked = masterCheckbox ? masterCheckbox.checked : false;
    const rowCheckboxes = document.querySelectorAll('.flag-row-checkbox');
    rowCheckboxes.forEach(cb => {
        const row = cb.closest('tr');
        if (row && row.style.display !== 'none') {
            cb.checked = isChecked;
            if (isChecked) {
                row.classList.add('bg-blue-50/40', 'dark:bg-blue-950/20');
            } else {
                row.classList.remove('bg-blue-50/40', 'dark:bg-blue-950/20');
            }
        }
    });
    updateMasterFlagState();
}

function toggleFlagRow(event, rowElement) {
    const target = event.target;
    if (target.closest('button') || target.closest('a') || target.closest('.flex') && target.closest('button')) {
        return;
    }
    const checkbox = rowElement.querySelector('.flag-row-checkbox');
    if (!checkbox) return;
    if (target !== checkbox) {
        checkbox.checked = !checkbox.checked;
    }
    updateMasterFlagState();
}

function updateMasterFlagState() {
    const master = document.getElementById('masterFlagCheckbox');
    const visibleCheckboxes = Array.from(document.querySelectorAll('.flag-row-checkbox')).filter(cb => {
        const row = cb.closest('tr');
        return row && row.style.display !== 'none';
    });

    const allChecked = visibleCheckboxes.length > 0 && visibleCheckboxes.every(cb => cb.checked);
    const someChecked = visibleCheckboxes.some(cb => cb.checked);

    if (master) {
        master.checked = allChecked;
        master.indeterminate = !allChecked && someChecked;
    }

    document.querySelectorAll('.flag-row-checkbox').forEach(cb => {
        const row = cb.closest('tr');
        if (row) {
            if (cb.checked) {
                row.classList.add('bg-blue-50/40', 'dark:bg-blue-950/20');
            } else {
                row.classList.remove('bg-blue-50/40', 'dark:bg-blue-950/20');
            }
        }
    });
}
</script>

<?php include '../../includes/footer.php'; ?>
