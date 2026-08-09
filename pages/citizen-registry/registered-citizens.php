<?php
$basePath = '../../';
require_once __DIR__ . '/../../src/bootstrap.php';

// Dummy Data
$citizens = [
    ['id' => 'CIZ-2025-00001', 'name' => 'Dela Cruz, Juan Miguel', 'age' => 28, 'sex' => 'Male', 'district' => 'District 1', 'barangay' => 'Barangay 1', 'civil_status' => 'Single', 'household' => 'HH-2025-00125', 'occupation' => 'Software Developer', 'mobile' => '0917 123 4567', 'status' => 'Active', 'tags' => ['4Ps Beneficiary'], 'date' => 'May 15, 2025', 'updated' => 'May 20, 2025', 'avatar' => 'https://ui-avatars.com/api/?name=Juan+Dela+Cruz&background=random'],
    ['id' => 'CIZ-2025-00002', 'name' => 'Santos, Maria Theresa', 'age' => 34, 'sex' => 'Female', 'district' => 'District 3', 'barangay' => 'Barangay 178', 'civil_status' => 'Married', 'household' => 'HH-2025-00126', 'occupation' => 'Teacher', 'mobile' => '0920 987 6543', 'status' => 'Active', 'tags' => ['Solo Parent'], 'date' => 'May 15, 2025', 'updated' => 'May 19, 2025', 'avatar' => 'https://ui-avatars.com/api/?name=Maria+Santos&background=random'],
    ['id' => 'CIZ-2025-00003', 'name' => 'Reyes, Pedro Sr.', 'age' => 67, 'sex' => 'Male', 'district' => 'District 2', 'barangay' => 'Barangay 5', 'civil_status' => 'Widowed', 'household' => 'HH-2025-00127', 'occupation' => 'Retired', 'mobile' => '0918 111 2222', 'status' => 'Senior Citizen', 'tags' => ['Senior Citizen', 'PWD'], 'date' => 'May 14, 2025', 'updated' => 'May 18, 2025', 'avatar' => 'https://ui-avatars.com/api/?name=Pedro+Reyes&background=random'],
    ['id' => 'CIZ-2025-00004', 'name' => 'Villanueva, Ana Louise', 'age' => 23, 'sex' => 'Female', 'district' => 'District 1', 'barangay' => 'Barangay 77', 'civil_status' => 'Single', 'household' => 'HH-2025-00127', 'occupation' => 'Student', 'mobile' => '0935 444 5566', 'status' => 'Active', 'tags' => ['4Ps Beneficiary'], 'date' => 'May 14, 2025', 'updated' => 'May 16, 2025', 'avatar' => 'https://ui-avatars.com/api/?name=Ana+Villanueva&background=random'],
    ['id' => 'CIZ-2025-00005', 'name' => 'Garcia, Luis Antonio', 'age' => 45, 'sex' => 'Male', 'district' => 'District 1', 'barangay' => 'Barangay 132', 'civil_status' => 'Separated', 'household' => 'HH-2025-00122', 'occupation' => 'Driver', 'mobile' => '0916 777 8888', 'status' => 'Inactive', 'tags' => ['PWD'], 'date' => 'May 13, 2025', 'updated' => 'May 15, 2025', 'avatar' => 'https://ui-avatars.com/api/?name=Luis+Garcia&background=random'],
    ['id' => 'CIZ-2025-00006', 'name' => 'Cruz, Elena Magdalena', 'age' => 72, 'sex' => 'Female', 'district' => 'District 3', 'barangay' => 'Barangay 188', 'civil_status' => 'Widowed', 'household' => 'HH-2025-00130', 'occupation' => 'Retired', 'mobile' => '0908 999 0000', 'status' => 'Deceased', 'tags' => ['Senior Citizen', 'Solo Parent'], 'date' => 'May 12, 2025', 'updated' => 'May 12, 2025', 'avatar' => 'https://ui-avatars.com/api/?name=Elena+Cruz&background=random'],
    ['id' => 'CIZ-2025-00007', 'name' => 'Mendoza, Carlo Andres', 'age' => 31, 'sex' => 'Male', 'district' => 'District 2', 'barangay' => 'Barangay 131', 'civil_status' => 'Divorced/Annulled', 'household' => 'HH-2025-00121', 'occupation' => 'Electrician', 'mobile' => '0927 333 2211', 'status' => 'Transferred Out', 'tags' => [], 'date' => 'May 11, 2025', 'updated' => 'May 11, 2025', 'avatar' => 'https://ui-avatars.com/api/?name=Carlo+Mendoza&background=random'],
    ['id' => 'CIZ-2025-00008', 'name' => 'Ramos, Gabriel Jose', 'age' => 29, 'sex' => 'Male', 'district' => 'District 1', 'barangay' => 'Barangay 2', 'civil_status' => 'Single', 'household' => 'HH-2025-00135', 'occupation' => 'Technician', 'mobile' => '0919 555 4433', 'status' => 'Pending Validation', 'tags' => ['PWD', 'Pending Validation'], 'date' => 'May 22, 2025', 'updated' => 'May 22, 2025', 'avatar' => 'https://ui-avatars.com/api/?name=Gabriel+Ramos&background=random'],
    ['id' => 'CIZ-2025-00009', 'name' => 'Aquino, Teresa Isabel', 'age' => 41, 'sex' => 'Female', 'district' => 'District 2', 'barangay' => 'Barangay 12', 'civil_status' => 'Married', 'household' => 'HH-2025-00140', 'occupation' => 'Nurse', 'mobile' => '0917 888 9911', 'status' => 'Active', 'tags' => ['Solo Parent'], 'date' => 'May 20, 2025', 'updated' => 'May 21, 2025', 'avatar' => 'https://ui-avatars.com/api/?name=Teresa+Aquino&background=random'],
    ['id' => 'CIZ-2025-00010', 'name' => 'Bautista, Ramon Carlos', 'age' => 65, 'sex' => 'Male', 'district' => 'District 1', 'barangay' => 'Barangay 4', 'civil_status' => 'Married', 'household' => 'HH-2025-00142', 'occupation' => 'Vendor', 'mobile' => '0922 444 3322', 'status' => 'Senior Citizen', 'tags' => ['Senior Citizen', '4Ps Beneficiary'], 'date' => 'May 19, 2025', 'updated' => 'May 20, 2025', 'avatar' => 'https://ui-avatars.com/api/?name=Ramon+Bautista&background=random'],
    ['id' => 'CIZ-2025-00011', 'name' => 'Delos Reyes, Sofia Beatriz', 'age' => 26, 'sex' => 'Female', 'district' => 'District 3', 'barangay' => 'Barangay 180', 'civil_status' => 'Single', 'household' => 'HH-2025-00145', 'occupation' => 'Accountant', 'mobile' => '0915 222 7788', 'status' => 'Active', 'tags' => [], 'date' => 'May 18, 2025', 'updated' => 'May 19, 2025', 'avatar' => 'https://ui-avatars.com/api/?name=Sofia+Delos+Reyes&background=random'],
    ['id' => 'CIZ-2025-00012', 'name' => 'Flores, Mateo Fernando', 'age' => 38, 'sex' => 'Male', 'district' => 'District 2', 'barangay' => 'Barangay 25', 'civil_status' => 'Married', 'household' => 'HH-2025-00148', 'occupation' => 'Carpenter', 'mobile' => '0939 111 6655', 'status' => 'Active', 'tags' => ['PWD'], 'date' => 'May 17, 2025', 'updated' => 'May 18, 2025', 'avatar' => 'https://ui-avatars.com/api/?name=Mateo+Flores&background=random'],
    ['id' => 'CIZ-2025-00013', 'name' => 'Navarro, Clarissa Joy', 'age' => 22, 'sex' => 'Female', 'district' => 'District 1', 'barangay' => 'Barangay 80', 'civil_status' => 'Single', 'household' => 'HH-2025-00150', 'occupation' => 'Call Center Agent', 'mobile' => '0918 999 3344', 'status' => 'Active', 'tags' => ['4Ps Beneficiary'], 'date' => 'May 16, 2025', 'updated' => 'May 17, 2025', 'avatar' => 'https://ui-avatars.com/api/?name=Clarissa+Navarro&background=random'],
    ['id' => 'CIZ-2025-00014', 'name' => 'Torres, Benjamin Victor', 'age' => 58, 'sex' => 'Male', 'district' => 'District 3', 'barangay' => 'Barangay 185', 'civil_status' => 'Widowed', 'household' => 'HH-2025-00152', 'occupation' => 'Security Guard', 'mobile' => '0920 666 1122', 'status' => 'Active', 'tags' => ['Solo Parent'], 'date' => 'May 15, 2025', 'updated' => 'May 16, 2025', 'avatar' => 'https://ui-avatars.com/api/?name=Benjamin+Torres&background=random'],
    ['id' => 'CIZ-2025-00015', 'name' => 'Perez, Andrea Monique', 'age' => 19, 'sex' => 'Female', 'district' => 'District 2', 'barangay' => 'Barangay 30', 'civil_status' => 'Single', 'household' => 'HH-2025-00155', 'occupation' => 'Student', 'mobile' => '0917 444 8899', 'status' => 'Pending Validation', 'tags' => ['Pending Validation'], 'date' => 'May 22, 2025', 'updated' => 'May 22, 2025', 'avatar' => 'https://ui-avatars.com/api/?name=Andrea+Perez&background=random'],
];

function getStatusBadge($status) {
    switch ($status) {
        case 'Active': return 'bg-emerald-100 text-emerald-700 border-emerald-200';
        case 'Senior Citizen': return 'bg-blue-100 text-blue-700 border-blue-200';
        case 'Pending Validation': return 'bg-amber-100 text-amber-700 border-amber-200';
        case 'Inactive': return 'bg-slate-100 text-slate-700 border-slate-200';
        case 'Deceased': return 'bg-red-100 text-red-700 border-red-200';
        case 'Transferred Out': return 'bg-orange-100 text-orange-700 border-orange-200';
        default: return 'bg-slate-100 text-slate-700 border-slate-200';
    }
}

include '../../includes/header.php';
include '../../includes/sidebar.php';
?>

<style>
    /* Custom Scrollbar for the main area and table if needed */
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
    
    <!-- KPI Cards Row -->
    <!-- KPI Cards Row (2 lines x 4 boxes on desktop, responsive on smaller screens) -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-6">
        <!-- Card 1 -->
        <div onclick="filterByCard('all')" data-card-type="all" title="Click to view all citizens" class="kpi-stat-card bg-white rounded-2xl p-4.5 border border-slate-200/80 shadow-xs flex flex-col justify-between hover:shadow-md hover:border-blue-300 transition-all cursor-pointer group select-none">
            <div class="flex items-center gap-3.5">
                <div class="w-11 h-11 rounded-xl bg-blue-50/80 flex items-center justify-center shrink-0 border border-blue-100">
                    <i class="fa-solid fa-users text-blue-600 text-xl"></i>
                </div>
                <div class="min-w-0 flex-1">
                    <p class="text-[11px] font-bold text-slate-500 uppercase tracking-wide truncate">Total Registered Citizens</p>
                    <h3 class="text-2xl font-black text-slate-800 tracking-tight mt-0.5">12,458</h3>
                </div>
            </div>
            <div class="flex items-center gap-1.5 mt-3 pt-2.5 border-t border-slate-100 text-[11px] font-semibold">
                <span class="text-emerald-600 flex items-center gap-1"><i class="fa-solid fa-arrow-up text-[10px]"></i> 3.45%</span>
                <span class="text-slate-400">vs last month</span>
            </div>
        </div>

        <!-- Card 2 -->
        <div onclick="filterByCard('Active')" data-card-type="Active" title="Click to view active citizens" class="kpi-stat-card bg-white rounded-2xl p-4.5 border border-slate-200/80 shadow-xs flex flex-col justify-between hover:shadow-md hover:border-emerald-300 transition-all cursor-pointer group select-none">
            <div class="flex items-center gap-3.5">
                <div class="w-11 h-11 rounded-xl bg-emerald-50/80 flex items-center justify-center shrink-0 border border-emerald-100">
                    <i class="fa-solid fa-user-check text-emerald-600 text-xl"></i>
                </div>
                <div class="min-w-0 flex-1">
                    <p class="text-[11px] font-bold text-slate-500 uppercase tracking-wide truncate">Active Citizens</p>
                    <h3 class="text-2xl font-black text-slate-800 tracking-tight mt-0.5">11,234</h3>
                </div>
            </div>
            <div class="flex items-center gap-1.5 mt-3 pt-2.5 border-t border-slate-100 text-[11px] font-semibold">
                <span class="text-emerald-600 flex items-center gap-1"><i class="fa-solid fa-arrow-up text-[10px]"></i> 2.91%</span>
                <span class="text-slate-400">vs last month</span>
            </div>
        </div>

        <!-- Card 3 -->
        <div onclick="filterByCard('Senior Citizen')" data-card-type="Senior Citizen" title="Click to view senior citizens" class="kpi-stat-card bg-white rounded-2xl p-4.5 border border-slate-200/80 shadow-xs flex flex-col justify-between hover:shadow-md hover:border-orange-300 transition-all cursor-pointer group select-none">
            <div class="flex items-center gap-3.5">
                <div class="w-11 h-11 rounded-xl bg-orange-50/80 flex items-center justify-center shrink-0 border border-orange-100">
                    <i class="fa-solid fa-person-cane text-orange-600 text-xl"></i>
                </div>
                <div class="min-w-0 flex-1">
                    <p class="text-[11px] font-bold text-slate-500 uppercase tracking-wide truncate">Senior Citizens</p>
                    <h3 class="text-2xl font-black text-slate-800 tracking-tight mt-0.5">1,856</h3>
                </div>
            </div>
            <div class="flex items-center gap-1.5 mt-3 pt-2.5 border-t border-slate-100 text-[11px] font-semibold">
                <span class="text-emerald-600 flex items-center gap-1"><i class="fa-solid fa-arrow-up text-[10px]"></i> 1.88%</span>
                <span class="text-slate-400">vs last month</span>
            </div>
        </div>

        <!-- Card 4 -->
        <div onclick="filterByCard('PWD')" data-card-type="PWD" title="Click to view PWD citizens" class="kpi-stat-card bg-white rounded-2xl p-4.5 border border-slate-200/80 shadow-xs flex flex-col justify-between hover:shadow-md hover:border-purple-300 transition-all cursor-pointer group select-none">
            <div class="flex items-center gap-3.5">
                <div class="w-11 h-11 rounded-xl bg-purple-50/80 flex items-center justify-center shrink-0 border border-purple-100">
                    <i class="fa-brands fa-accessible-icon text-purple-600 text-xl"></i>
                </div>
                <div class="min-w-0 flex-1">
                    <p class="text-[11px] font-bold text-slate-500 uppercase tracking-wide truncate">PWD Citizens</p>
                    <h3 class="text-2xl font-black text-slate-800 tracking-tight mt-0.5">623</h3>
                </div>
            </div>
            <div class="flex items-center gap-1.5 mt-3 pt-2.5 border-t border-slate-100 text-[11px] font-semibold">
                <span class="text-emerald-600 flex items-center gap-1"><i class="fa-solid fa-arrow-up text-[10px]"></i> 2.14%</span>
                <span class="text-slate-400">vs last month</span>
            </div>
        </div>

        <!-- Card 5 -->
        <div onclick="filterByCard('Solo Parent')" data-card-type="Solo Parent" title="Click to view solo parents" class="kpi-stat-card bg-white rounded-2xl p-4.5 border border-slate-200/80 shadow-xs flex flex-col justify-between hover:shadow-md hover:border-pink-300 transition-all cursor-pointer group select-none">
            <div class="flex items-center gap-3.5">
                <div class="w-11 h-11 rounded-xl bg-pink-50/80 flex items-center justify-center shrink-0 border border-pink-100">
                    <i class="fa-solid fa-person-breastfeeding text-pink-600 text-xl"></i>
                </div>
                <div class="min-w-0 flex-1">
                    <p class="text-[11px] font-bold text-slate-500 uppercase tracking-wide truncate">Solo Parents</p>
                    <h3 class="text-2xl font-black text-slate-800 tracking-tight mt-0.5">742</h3>
                </div>
            </div>
            <div class="flex items-center gap-1.5 mt-3 pt-2.5 border-t border-slate-100 text-[11px] font-semibold">
                <span class="text-emerald-600 flex items-center gap-1"><i class="fa-solid fa-arrow-up text-[10px]"></i> 1.35%</span>
                <span class="text-slate-400">vs last month</span>
            </div>
        </div>

        <!-- Card 6 -->
        <div onclick="filterByCard('4Ps Beneficiary')" data-card-type="4Ps Beneficiary" title="Click to view 4Ps beneficiaries" class="kpi-stat-card bg-white rounded-2xl p-4.5 border border-slate-200/80 shadow-xs flex flex-col justify-between hover:shadow-md hover:border-cyan-300 transition-all cursor-pointer group select-none">
            <div class="flex items-center gap-3.5">
                <div class="w-11 h-11 rounded-xl bg-cyan-50/80 flex items-center justify-center shrink-0 border border-cyan-100">
                    <i class="fa-solid fa-people-group text-cyan-600 text-xl"></i>
                </div>
                <div class="min-w-0 flex-1">
                    <p class="text-[11px] font-bold text-slate-500 uppercase tracking-wide truncate">4Ps Beneficiaries</p>
                    <h3 class="text-2xl font-black text-slate-800 tracking-tight mt-0.5">1,204</h3>
                </div>
            </div>
            <div class="flex items-center gap-1.5 mt-3 pt-2.5 border-t border-slate-100 text-[11px] font-semibold">
                <span class="text-emerald-600 flex items-center gap-1"><i class="fa-solid fa-arrow-up text-[10px]"></i> 2.02%</span>
                <span class="text-slate-400">vs last month</span>
            </div>
        </div>

        <!-- Card 7 -->
        <div onclick="filterByCard('New Registrations')" data-card-type="New Registrations" title="Click to view new registrations" class="kpi-stat-card bg-white rounded-2xl p-4.5 border border-slate-200/80 shadow-xs flex flex-col justify-between hover:shadow-md hover:border-indigo-300 transition-all cursor-pointer group select-none">
            <div class="flex items-center gap-3.5">
                <div class="w-11 h-11 rounded-xl bg-indigo-50/80 flex items-center justify-center shrink-0 border border-indigo-100">
                    <i class="fa-regular fa-calendar-check text-indigo-600 text-xl"></i>
                </div>
                <div class="min-w-0 flex-1">
                    <p class="text-[11px] font-bold text-slate-500 uppercase tracking-wide truncate">New Registrations</p>
                    <h3 class="text-2xl font-black text-slate-800 tracking-tight mt-0.5">246</h3>
                </div>
            </div>
            <div class="flex items-center gap-1.5 mt-3 pt-2.5 border-t border-slate-100 text-[11px] font-semibold">
                <span class="text-emerald-600 flex items-center gap-1"><i class="fa-solid fa-arrow-up text-[10px]"></i> 12.40%</span>
                <span class="text-slate-400">vs last month</span>
            </div>
        </div>

        <!-- Card 8 -->
        <div onclick="filterByCard('Pending Validation')" data-card-type="Pending Validation" title="Click to view pending validation citizens" class="kpi-stat-card bg-white rounded-2xl p-4.5 border border-slate-200/80 shadow-xs flex flex-col justify-between hover:shadow-md hover:border-amber-300 transition-all cursor-pointer group select-none">
            <div class="flex items-center gap-3.5">
                <div class="w-11 h-11 rounded-xl bg-amber-50/80 flex items-center justify-center shrink-0 border border-amber-100">
                    <i class="fa-solid fa-shield-halved text-amber-600 text-xl"></i>
                </div>
                <div class="min-w-0 flex-1">
                    <p class="text-[11px] font-bold text-slate-500 uppercase tracking-wide truncate">Pending Validation</p>
                    <h3 class="text-2xl font-black text-slate-800 tracking-tight mt-0.5">189</h3>
                </div>
            </div>
            <div class="flex items-center gap-1.5 mt-3 pt-2.5 border-t border-slate-100 text-[11px] font-semibold">
                <span class="text-red-500 flex items-center gap-1"><i class="fa-solid fa-arrow-up text-[10px]"></i> 4.21%</span>
                <span class="text-slate-400">vs last month</span>
            </div>
        </div>
    </div>

    <!-- Main Layout -->
    <div class="flex flex-col gap-6 w-full">
        
        <!-- Main Table Section -->
        <div class="w-full flex flex-col gap-6 min-w-0">
            
            <!-- Filters Section -->
            <div class="bg-white p-5 rounded-2xl border border-slate-200 shadow-sm">
                <!-- Search Bar -->
                <div class="flex flex-col sm:flex-row gap-3 justify-between items-stretch sm:items-center">
                    <div class="relative w-full flex-1">
                        <i class="fa-solid fa-search absolute left-4 top-1/2 -translate-y-1/2 text-slate-400"></i>
                        <input type="text" id="searchInput" oninput="filterCitizensByDistrict()" placeholder="Search by Name, Household ID, National ID, Voter ID..." class="w-full bg-slate-50 border border-slate-200 text-slate-700 text-sm rounded-xl focus:ring-2 focus:ring-[#0f53d1]/50 focus:border-[#0f53d1] block pl-11 p-3 transition outline-none placeholder-slate-400 font-medium">
                    </div>
                    <div class="flex items-center gap-2.5 shrink-0">
                        <button id="searchBtn" onclick="filterCitizensByDistrict()" class="px-5 py-3 text-xs font-bold text-white bg-[#0f53d1] border border-[#0f53d1] rounded-xl hover:bg-[#0d46b0] shadow-sm transition cursor-pointer flex items-center gap-2">
                            <i class="fa-solid fa-search text-[10px]"></i>
                            <span>Search</span>
                        </button>
                        <button id="toggleFiltersBtn" onclick="toggleAdvancedFilters()" class="px-4 py-3 text-xs font-bold text-[#0f53d1] bg-blue-50/50 rounded-xl border border-[#0f53d1]/20 hover:bg-blue-50 transition cursor-pointer flex items-center gap-2">
                            <i class="fa-solid fa-sliders text-xs"></i>
                            <span id="toggleFiltersText">Show Filters</span>
                            <i id="toggleFiltersIcon" class="fa-solid fa-chevron-down text-[10px] ml-1 transition-transform"></i>
                        </button>
                    </div>
                </div>

                <!-- Advanced Filters (Hidden by Default) -->
                <div id="advancedFiltersContainer" class="hidden grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-6 gap-x-4 gap-y-5 mt-5 border-t border-slate-100 pt-5">
                    
                    <div class="space-y-1.5">
                        <label class="text-[11px] font-bold text-slate-500">District</label>
                        <select id="districtFilter" onchange="onDistrictChange()" class="w-full bg-white border border-slate-200 text-slate-700 text-xs rounded-lg focus:ring-2 focus:ring-[#0f53d1]/50 focus:border-[#0f53d1] block p-2.5 outline-none font-medium cursor-pointer">
                            <option value="">All Districts</option>
                            <option value="District 1">District 1</option>
                            <option value="District 2">District 2</option>
                            <option value="District 3">District 3</option>
                        </select>
                    </div>

                    <div class="space-y-1.5">
                        <label class="text-[11px] font-bold text-slate-500">Barangay</label>
                        <select id="barangayFilter" onchange="filterCitizensByDistrict()" disabled class="w-full bg-slate-50 border border-slate-200 text-slate-500 text-xs rounded-lg focus:ring-2 focus:ring-[#0f53d1]/50 focus:border-[#0f53d1] block p-2.5 outline-none font-medium cursor-not-allowed">
                            <option value="">Select District First...</option>
                        </select>
                    </div>
                    
                    <div class="space-y-1.5">
                        <label class="text-[11px] font-bold text-slate-500">Status</label>
                        <select id="statusFilter" onchange="filterCitizensByDistrict()" class="w-full bg-white border border-slate-200 text-slate-700 text-xs rounded-lg focus:ring-2 focus:ring-[#0f53d1]/50 focus:border-[#0f53d1] block p-2.5 outline-none font-medium cursor-pointer">
                            <option value="">All Status</option>
                            <option value="Active">Active</option>
                            <option value="Inactive">Inactive</option>
                            <option value="Senior Citizen">Senior Citizen</option>
                            <option value="Pending Validation">Pending Validation</option>
                            <option value="Deceased">Deceased</option>
                            <option value="Transferred Out">Transferred Out</option>
                        </select>
                    </div>

                    <div class="space-y-1.5">
                        <label class="text-[11px] font-bold text-slate-500">Sex</label>
                        <select id="sexFilter" onchange="filterCitizensByDistrict()" class="w-full bg-white border border-slate-200 text-slate-700 text-xs rounded-lg focus:ring-2 focus:ring-[#0f53d1]/50 focus:border-[#0f53d1] block p-2.5 outline-none font-medium cursor-pointer">
                            <option value="">All Sex</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>

                    <div class="space-y-1.5">
                        <label class="text-[11px] font-bold text-slate-500">Civil Status</label>
                        <select id="civilStatusFilter" onchange="filterCitizensByDistrict()" class="w-full bg-white border border-slate-200 text-slate-700 text-xs rounded-lg focus:ring-2 focus:ring-[#0f53d1]/50 focus:border-[#0f53d1] block p-2.5 outline-none font-medium cursor-pointer">
                            <option value="">All Civil Status</option>
                            <option value="Single">Single</option>
                            <option value="Married">Married</option>
                            <option value="Widowed">Widowed</option>
                            <option value="Separated">Separated</option>
                            <option value="Divorced/Annulled">Divorced / Annulled</option>
                        </select>
                    </div>

                    <div class="space-y-1.5">
                        <label class="text-[11px] font-bold text-slate-500">Age Range</label>
                        <select id="ageRangeFilter" onchange="filterCitizensByDistrict()" class="w-full bg-white border border-slate-200 text-slate-700 text-xs rounded-lg focus:ring-2 focus:ring-[#0f53d1]/50 focus:border-[#0f53d1] block p-2.5 outline-none font-medium cursor-pointer">
                            <option value="">All Ages</option>
                            <option value="0-4">0–4 years</option>
                            <option value="5-14">5–14 years</option>
                            <option value="15-29">15–29 years</option>
                            <option value="30-59">30–59 years</option>
                            <option value="60+">60+ years</option>
                        </select>
                    </div>
                    
                    <div class="xl:col-span-6 flex items-center justify-end pt-3 border-t border-slate-100 mt-1">
                        <button id="clearFiltersBtn" onclick="resetDistrictFilters()" class="px-5 py-2.5 text-xs font-bold text-[#0f53d1] bg-white border border-slate-200 rounded-lg hover:bg-slate-50 transition cursor-pointer">
                            Clear Filters
                        </button>
                    </div>

                </div>
            </div>

            <!-- Toolbar & Data Table -->
            <div class="bg-white rounded-2xl border border-slate-200 shadow-sm flex flex-col">
                
                <!-- Bulk Actions Toolbar -->
                <div class="flex items-center justify-between p-4 border-b border-slate-100 flex-wrap gap-4">
                    <div class="flex items-center gap-3">
                        <label class="flex items-center gap-2 cursor-pointer">
                            <input type="checkbox" id="selectAllCheckboxToolbar" onchange="toggleSelectAllCitizens(this)" class="w-4 h-4 text-[#0f53d1] bg-slate-100 border-slate-300 rounded focus:ring-[#0f53d1]/50 cursor-pointer">
                        </label>
                        <span id="selectedCountSpan" class="text-xs font-bold text-slate-800">0 selected</span>
                        <button id="selectAllTextBtn" onclick="toggleSelectAllBtnClick()" class="text-xs font-bold text-[#0f53d1] hover:underline cursor-pointer">Select all citizens</button>
                    </div>
                    
                    <div class="flex items-center gap-2 overflow-x-auto custom-scrollbar pb-1 -mb-1">
                        <button onclick="markSelectedForValidation()" class="whitespace-nowrap px-3 py-2 text-[11px] font-bold text-slate-600 bg-white border border-slate-200 rounded-lg hover:bg-slate-50 transition cursor-pointer flex items-center gap-1.5">
                            <i class="fa-solid fa-shield-halved text-amber-500"></i> Mark for Validation
                        </button>
                        <button class="whitespace-nowrap px-3 py-2 text-[11px] font-bold text-slate-600 bg-white border border-slate-200 rounded-lg hover:bg-slate-50 transition cursor-pointer flex items-center gap-1.5">
                            <i class="fa-solid fa-download text-slate-400"></i> Export Selected
                        </button>
                        <button class="whitespace-nowrap px-3 py-2 text-[11px] font-bold text-slate-600 bg-white border border-slate-200 rounded-lg hover:bg-slate-50 transition cursor-pointer flex items-center gap-1.5">
                            <i class="fa-solid fa-print text-slate-400"></i> Print Selected
                        </button>
                        <div class="relative inline-block text-left">
                            <button onclick="toggleChangeStatusDropdown(event)" class="whitespace-nowrap px-3 py-2 text-[11px] font-bold text-slate-600 bg-white border border-slate-200 rounded-lg hover:bg-slate-50 transition cursor-pointer flex items-center gap-1.5">
                                <i class="fa-solid fa-repeat text-slate-400"></i> Change Status <i class="fa-solid fa-chevron-down text-[8px] ml-1 opacity-60"></i>
                            </button>
                            <div id="changeStatusMenu" class="hidden fixed w-44 bg-white border border-slate-200 rounded-xl shadow-xl py-1.5 z-[9999] text-xs font-medium text-slate-600">
                                <button onclick="changeSelectedCitizensStatus('Active')" class="w-full text-left px-3.5 py-1.5 hover:bg-slate-50 hover:text-slate-900 transition flex items-center gap-2 cursor-pointer">
                                    <span class="w-2 h-2 rounded-full bg-emerald-500"></span> Active
                                </button>
                                <button onclick="changeSelectedCitizensStatus('Inactive')" class="w-full text-left px-3.5 py-1.5 hover:bg-slate-50 hover:text-slate-900 transition flex items-center gap-2 cursor-pointer">
                                    <span class="w-2 h-2 rounded-full bg-slate-400"></span> Inactive
                                </button>
                                <button onclick="changeSelectedCitizensStatus('Senior Citizen')" class="w-full text-left px-3.5 py-1.5 hover:bg-slate-50 hover:text-slate-900 transition flex items-center gap-2 cursor-pointer">
                                    <span class="w-2 h-2 rounded-full bg-blue-500"></span> Senior Citizen
                                </button>
                                <button onclick="changeSelectedCitizensStatus('Pending Validation')" class="w-full text-left px-3.5 py-1.5 hover:bg-slate-50 hover:text-slate-900 transition flex items-center gap-2 cursor-pointer">
                                    <span class="w-2 h-2 rounded-full bg-amber-500"></span> Pending Validation
                                </button>
                                <button onclick="changeSelectedCitizensStatus('Deceased')" class="w-full text-left px-3.5 py-1.5 hover:bg-slate-50 hover:text-slate-900 transition flex items-center gap-2 cursor-pointer">
                                    <span class="w-2 h-2 rounded-full bg-red-500"></span> Deceased
                                </button>
                                <button onclick="changeSelectedCitizensStatus('Transferred Out')" class="w-full text-left px-3.5 py-1.5 hover:bg-slate-50 hover:text-slate-900 transition flex items-center gap-2 cursor-pointer">
                                    <span class="w-2 h-2 rounded-full bg-orange-500"></span> Transferred Out
                                </button>
                            </div>
                        </div>
                        <button class="whitespace-nowrap px-3 py-2 text-[11px] font-bold text-slate-600 bg-white border border-slate-200 rounded-lg hover:bg-slate-50 transition cursor-pointer flex items-center gap-1.5">
                            <i class="fa-solid fa-house-user text-slate-400"></i> Assign to Household
                        </button>
                        <button class="whitespace-nowrap px-3 py-2 text-[11px] font-bold text-red-600 bg-white border border-red-100 rounded-lg hover:bg-red-50 transition cursor-pointer flex items-center gap-1.5">
                            <i class="fa-solid fa-box-archive opacity-80"></i> Archive Selected
                        </button>
                    </div>
                </div>

                <!-- Table Wrapper -->
                <div class="overflow-x-auto w-full custom-scrollbar">
                    <table class="w-full text-left border-collapse whitespace-nowrap min-w-[1200px]">
                        <thead>
                            <tr class="border-b border-slate-100 bg-slate-50/50">
                                <th class="p-4 w-12 text-center"></th>
                                <th class="p-4 text-[10px] font-bold text-slate-500 uppercase tracking-wider">Citizen ID</th>
                                <th class="p-4 text-[10px] font-bold text-slate-500 uppercase tracking-wider">Full Name</th>
                                <th class="p-4 text-[10px] font-bold text-slate-500 uppercase tracking-wider">Age</th>
                                <th class="p-4 text-[10px] font-bold text-slate-500 uppercase tracking-wider">Sex</th>
                                <th class="p-4 text-[10px] font-bold text-slate-500 uppercase tracking-wider">District</th>
                                <th class="p-4 text-[10px] font-bold text-slate-500 uppercase tracking-wider">Barangay</th>
                                <th class="p-4 text-[10px] font-bold text-slate-500 uppercase tracking-wider">Household ID</th>
                                <th class="p-4 text-[10px] font-bold text-slate-500 uppercase tracking-wider">Mobile Number</th>
                                <th class="p-4 text-[10px] font-bold text-slate-500 uppercase tracking-wider">Status</th>
                                <th class="p-4 text-[10px] font-bold text-slate-500 uppercase tracking-wider">Date Registered</th>
                                <th class="p-4 text-[10px] font-bold text-slate-500 uppercase tracking-wider">Last Updated</th>
                                <th class="p-4 text-[10px] font-bold text-slate-500 uppercase tracking-wider text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-100">
                            <?php foreach ($citizens as $index => $c): ?>
                            <tr onclick="toggleCitizenRow(event, this)" class="hover:bg-slate-50 transition cursor-pointer select-none" data-household="<?php echo htmlspecialchars($c['household']); ?>" data-district="<?php echo htmlspecialchars($c['district']); ?>" data-barangay="<?php echo htmlspecialchars($c['barangay']); ?>" data-sex="<?php echo htmlspecialchars($c['sex']); ?>" data-civil-status="<?php echo htmlspecialchars($c['civil_status']); ?>" data-age="<?php echo htmlspecialchars($c['age']); ?>" data-status="<?php echo htmlspecialchars($c['status']); ?>" data-tags="<?php echo htmlspecialchars(implode(',', $c['tags'])); ?>" data-date="<?php echo htmlspecialchars($c['date']); ?>">
                                <td class="p-4 text-center">
                                    <input type="checkbox" onchange="updateSelectAllState()" class="citizen-row-checkbox w-4 h-4 text-[#0f53d1] bg-slate-100 border-slate-300 rounded focus:ring-[#0f53d1]/50 cursor-pointer">
                                </td>
                                <td class="p-4 text-xs font-semibold text-slate-600"><?php echo $c['id']; ?></td>
                                <td class="p-4 flex items-center gap-3">
                                    <img src="<?php echo $c['avatar']; ?>" class="w-8 h-8 rounded-full border border-slate-200 shadow-sm" alt="Avatar">
                                    <span class="text-xs font-bold text-slate-800"><?php echo $c['name']; ?></span>
                                </td>
                                <td class="p-4 text-xs text-slate-600 font-medium"><?php echo $c['age']; ?></td>
                                <td class="p-4 text-xs text-slate-600 font-medium"><?php echo $c['sex']; ?></td>
                                <td class="p-4 text-xs text-slate-600 font-medium"><?php echo $c['district']; ?></td>
                                <td class="p-4 text-xs text-slate-600 font-medium"><?php echo $c['barangay']; ?></td>
                                <td class="p-4 text-xs text-slate-600 font-medium"><?php echo $c['household']; ?></td>
                                <td class="p-4 text-xs text-slate-600 font-medium"><?php echo $c['mobile']; ?></td>
                                <td class="p-4">
                                    <span class="px-2.5 py-1 text-[10px] font-bold rounded-md border <?php echo getStatusBadge($c['status']); ?>">
                                        <?php echo $c['status']; ?>
                                    </span>
                                </td>
                                <td class="p-4 text-[11px] text-slate-500 font-medium"><?php echo $c['date']; ?></td>
                                <td class="p-4 text-[11px] text-slate-500 font-medium"><?php echo $c['updated']; ?></td>
                                <td class="p-4 text-center">
                                    <button onclick="toggleRowActionsMenu(event, this, '<?php echo $c['id']; ?>')" class="w-8 h-8 rounded-lg hover:bg-slate-100 flex items-center justify-center text-slate-400 hover:text-slate-700 transition cursor-pointer mx-auto">
                                        <i class="fa-solid fa-ellipsis-vertical text-sm"></i>
                                    </button>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                            <tr id="noCitizensRow" class="hidden">
                                <td colspan="13" class="p-8 text-center text-slate-400 font-medium text-xs">
                                    <i class="fa-solid fa-users-slash text-2xl mb-2 block text-slate-300"></i>
                                    No registered citizens found for the selected filter.
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Pagination & Bottom Controls -->
                <div class="p-4 border-t border-slate-100 flex flex-col sm:flex-row items-center justify-between gap-4">
                    <div class="flex items-center gap-3 flex-wrap">
                        <span class="text-xs text-slate-500 font-medium">Rows per page</span>
                        <select id="rowsPerPageSelect" onchange="onRowsPerPageChange(this.value)" class="bg-white border border-slate-200 text-slate-700 text-xs rounded-lg py-1.5 px-2 outline-none font-medium cursor-pointer">
                            <option value="10" selected>10</option>
                            <option value="25">25</option>
                            <option value="50">50</option>
                        </select>
                        <span id="showingEntriesText" class="text-xs text-slate-500 font-medium ml-1 mr-2">Showing 1 to 10 of 15 entries</span>

                        <!-- Vertical Divider -->
                        <div class="h-5 w-px bg-slate-200 hidden sm:block"></div>

                        <!-- View Toggles Beside Showing Entries -->
                        <div class="flex items-center gap-2">
                            <button id="tableViewBtn" onclick="switchViewMode('table')" class="flex items-center gap-2.5 px-3.5 py-2 rounded-xl border-2 border-[#0f53d1]/30 bg-blue-50/50 shadow-xs cursor-pointer hover:bg-blue-50 transition group">
                                <div class="w-6 h-6 rounded-md bg-white flex items-center justify-center border border-[#0f53d1]/20 text-[#0f53d1] text-xs transition-transform group-hover:scale-105">
                                    <i class="fa-solid fa-table-cells"></i>
                                </div>
                                <div class="text-left">
                                    <h4 class="text-xs font-bold text-[#0f53d1] leading-tight">Table View</h4>
                                    <p class="text-[9px] text-slate-500 font-medium hidden sm:block">Detailed table format</p>
                                </div>
                            </button>

                            <button id="householdViewBtn" onclick="switchViewMode('household')" class="flex items-center gap-2.5 px-3.5 py-2 rounded-xl border-2 border-transparent bg-slate-50 shadow-xs cursor-pointer hover:border-slate-200 transition group">
                                <div class="w-6 h-6 rounded-md bg-white flex items-center justify-center border border-slate-200 text-slate-400 text-xs transition-transform group-hover:scale-105 group-hover:text-slate-600">
                                    <i class="fa-solid fa-house-chimney"></i>
                                </div>
                                <div class="text-left">
                                    <h4 class="text-xs font-bold text-slate-700 leading-tight">Household View</h4>
                                    <p class="text-[9px] text-slate-500 font-medium hidden sm:block">Grouped by household</p>
                                </div>
                            </button>
                        </div>
                    </div>

                    <div id="paginationButtonsContainer" class="flex items-center gap-1 flex-wrap">
                        <!-- Rendered by JS -->
                    </div>
                </div>

            </div>

        </div>

        <!-- Bottom Widgets Section (3 cards at bottom of table) -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            
            <!-- Recent Activities -->
            <div class="bg-white p-5 rounded-2xl border border-slate-200 shadow-sm flex flex-col justify-between">
                <div>
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-xs font-black text-slate-800 uppercase tracking-wider">Recent Activities</h3>
                        <a href="#" class="text-[10px] font-bold text-[#0f53d1] hover:underline">View All</a>
                    </div>
                    
                    <div class="space-y-4">
                        <div class="flex gap-3">
                            <div class="w-6 h-6 rounded-full bg-blue-50 flex items-center justify-center shrink-0 mt-0.5"><i class="fa-solid fa-user-plus text-[10px] text-blue-500"></i></div>
                            <div>
                                <p class="text-[11px] text-slate-700 font-medium"><span class="font-bold">Maria Santos</span> registered a new citizen</p>
                                <p class="text-[9px] text-slate-400 mt-0.5 font-semibold">2 mins ago</p>
                            </div>
                        </div>
                        <div class="flex gap-3">
                            <div class="w-6 h-6 rounded-full bg-emerald-50 flex items-center justify-center shrink-0 mt-0.5"><i class="fa-solid fa-pen text-[10px] text-emerald-500"></i></div>
                            <div>
                                <p class="text-[11px] text-slate-700 font-medium"><span class="font-bold">Juan Dela Cruz</span> updated a citizen profile</p>
                                <p class="text-[9px] text-slate-400 mt-0.5 font-semibold">15 mins ago</p>
                            </div>
                        </div>
                        <div class="flex gap-3">
                            <div class="w-6 h-6 rounded-full bg-amber-50 flex items-center justify-center shrink-0 mt-0.5"><i class="fa-solid fa-shield-halved text-[10px] text-amber-500"></i></div>
                            <div>
                                <p class="text-[11px] text-slate-700 font-medium"><span class="font-bold">Pedro Reyes</span> marked a citizen for validation</p>
                                <p class="text-[9px] text-slate-400 mt-0.5 font-semibold">1 hour ago</p>
                            </div>
                        </div>
                        <div class="flex gap-3">
                            <div class="w-6 h-6 rounded-full bg-slate-100 flex items-center justify-center shrink-0 mt-0.5"><i class="fa-solid fa-download text-[10px] text-slate-500"></i></div>
                            <div>
                                <p class="text-[11px] text-slate-700 font-medium"><span class="font-bold">System</span> exported 200 records</p>
                                <p class="text-[9px] text-slate-400 mt-0.5 font-semibold">2 hours ago</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Recently Registered -->
            <div class="bg-white p-5 rounded-2xl border border-slate-200 shadow-sm flex flex-col justify-between">
                <div>
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-xs font-black text-slate-800 uppercase tracking-wider">Recently Registered</h3>
                    </div>
                    
                    <div class="space-y-4">
                        <div class="flex items-center justify-between group">
                            <div class="flex items-center gap-3">
                                <img src="https://ui-avatars.com/api/?name=Kevin+Delos&background=random" class="w-8 h-8 rounded-full shadow-sm" alt="Avatar">
                                <div>
                                    <p class="text-[11px] font-bold text-slate-800 group-hover:text-[#0f53d1] transition cursor-pointer">Kevin Delos Reyes</p>
                                    <p class="text-[9px] text-slate-500 font-medium mt-0.5">May 21, 2025 &bull; District 3</p>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center justify-between group">
                            <div class="flex items-center gap-3">
                                <img src="https://ui-avatars.com/api/?name=Angela+Bernardo&background=random" class="w-8 h-8 rounded-full shadow-sm" alt="Avatar">
                                <div>
                                    <p class="text-[11px] font-bold text-slate-800 group-hover:text-[#0f53d1] transition cursor-pointer">Angela Bernardo</p>
                                    <p class="text-[9px] text-slate-500 font-medium mt-0.5">May 21, 2025 &bull; District 1</p>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center justify-between group">
                            <div class="flex items-center gap-3">
                                <img src="https://ui-avatars.com/api/?name=Mark+John&background=random" class="w-8 h-8 rounded-full shadow-sm" alt="Avatar">
                                <div>
                                    <p class="text-[11px] font-bold text-slate-800 group-hover:text-[#0f53d1] transition cursor-pointer">Mark John Lim</p>
                                    <p class="text-[9px] text-slate-500 font-medium mt-0.5">May 20, 2025 &bull; District 2</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="w-full mt-4 py-2 text-[10px] font-bold text-[#0f53d1] bg-blue-50/50 rounded-lg border border-[#0f53d1]/20 hover:bg-blue-50 hover:text-[#0d46b0] transition cursor-pointer">
                    View All
                </button>
            </div>

            <!-- Quick Statistics -->
            <div class="bg-white p-5 rounded-2xl border border-slate-200 shadow-sm flex flex-col justify-between">
                <div>
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-xs font-black text-slate-800 uppercase tracking-wider">Quick Statistics</h3>
                    </div>
                    
                    <div class="space-y-3">
                        <div class="flex items-center justify-between border-b border-slate-100 pb-2">
                            <div class="flex items-center gap-2 text-slate-600">
                                <i class="fa-solid fa-clock-rotate-left text-[10px] w-4 text-center"></i>
                                <span class="text-[11px] font-semibold">Average Age</span>
                            </div>
                            <span class="text-[11px] font-bold text-slate-800">29.4 years</span>
                        </div>
                        <div class="flex items-center justify-between border-b border-slate-100 pb-2">
                            <div class="flex items-center gap-2 text-slate-600">
                                <i class="fa-solid fa-venus-mars text-[10px] w-4 text-center"></i>
                                <span class="text-[11px] font-semibold">Male to Female Ratio</span>
                            </div>
                            <span class="text-[11px] font-bold text-slate-800">48% : 52%</span>
                        </div>
                        <div class="flex items-center justify-between border-b border-slate-100 pb-2">
                            <div class="flex items-center gap-2 text-slate-600">
                                <i class="fa-solid fa-house-chimney text-[10px] w-4 text-center"></i>
                                <span class="text-[11px] font-semibold">Total Households</span>
                            </div>
                            <span class="text-[11px] font-bold text-slate-800">3,245</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-2 text-slate-600">
                                <i class="fa-solid fa-bullseye text-[10px] w-4 text-center"></i>
                                <span class="text-[11px] font-semibold">Data Accuracy Score</span>
                            </div>
                            <span class="text-[11px] font-bold text-emerald-600">96.8%</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</main>

<script>
const districtBarangaysMap = {
    'District 1': [1, 2, 3, 4, 77, 78, 79, 80, 81, 82, 83, 84, 85, 132, 133, 134, 135, 136, 137, 138, 139, 140, 141, 142, 143, 144, 145, 146, 147, 148, 149, 150, 151, 152, 153, 154, 155, 156, 157, 158, 159, 160, 161, 162, 163, 164, 165, 166, 167, 168, 169, 170, 171, 172, 173, 174, 175, 176, 177],
    'District 2': [5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 86, 87, 88, 89, 90, 91, 92, 93, 94, 95, 96, 97, 98, 99, 100, 101, 102, 103, 104, 105, 106, 107, 108, 109, 110, 111, 112, 113, 114, 115, 116, 117, 118, 119, 120, 121, 122, 123, 124, 125, 126, 127, 128, 129, 130, 131],
    'District 3': [178, 179, 180, 181, 182, 183, 184, 185, 186, 187, 188]
};

function updateBarangayDropdown(selectedDistrict) {
    const barangayFilter = document.getElementById('barangayFilter');
    if (!barangayFilter) return;

    const previousSelected = barangayFilter.value;
    barangayFilter.innerHTML = '';

    if (!selectedDistrict || !districtBarangaysMap[selectedDistrict]) {
        const defaultOpt = document.createElement('option');
        defaultOpt.value = '';
        defaultOpt.textContent = 'Select District First...';
        barangayFilter.appendChild(defaultOpt);
        barangayFilter.disabled = true;
        barangayFilter.className = 'w-full bg-slate-50 border border-slate-200 text-slate-500 text-xs rounded-lg focus:ring-2 focus:ring-[#0f53d1]/50 focus:border-[#0f53d1] block p-2.5 outline-none font-medium cursor-not-allowed';
        return;
    }

    barangayFilter.disabled = false;
    barangayFilter.className = 'w-full bg-white border border-slate-200 text-slate-700 text-xs rounded-lg focus:ring-2 focus:ring-[#0f53d1]/50 focus:border-[#0f53d1] block p-2.5 outline-none font-medium cursor-pointer';

    const defaultOpt = document.createElement('option');
    defaultOpt.value = '';
    defaultOpt.textContent = `All Barangays in ${selectedDistrict}`;
    barangayFilter.appendChild(defaultOpt);

    const bList = districtBarangaysMap[selectedDistrict];
    bList.forEach(bNum => {
        const opt = document.createElement('option');
        const val = `Barangay ${bNum}`;
        opt.value = val;
        opt.textContent = val;
        if (val === previousSelected) opt.selected = true;
        barangayFilter.appendChild(opt);
    });
}

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

function onDistrictChange() {
    const districtFilter = document.getElementById('districtFilter');
    const selectedDistrict = districtFilter ? districtFilter.value.trim() : '';
    updateBarangayDropdown(selectedDistrict);
    filterCitizensByDistrict();
}

let activeCardFilters = new Set();
let currentPage = 1;
let rowsPerPage = 10;

function onRowsPerPageChange(val) {
    rowsPerPage = parseInt(val, 10) || 10;
    currentPage = 1;
    filterCitizensByDistrict();
}

function goToPage(page) {
    currentPage = page;
    filterCitizensByDistrict();
}

function filterByCard(cardType) {
    if (activeCardFilters.has(cardType)) {
        activeCardFilters.delete(cardType);
    } else {
        activeCardFilters.add(cardType);
    }
    currentPage = 1;

    const statusFilter = document.getElementById('statusFilter');
    if (statusFilter) {
        const activeStatuses = Array.from(activeCardFilters).filter(c => 
            ['Active', 'Senior Citizen', 'Pending Validation', 'Inactive', 'Deceased', 'Transferred Out'].includes(c)
        );
        if (activeStatuses.length === 1) {
            statusFilter.value = activeStatuses[0];
        } else {
            statusFilter.value = '';
        }
    }

    updateStatCardsHighlight();
    filterCitizensByDistrict();

    const tableContainer = document.querySelector('table');
    if (tableContainer) {
        tableContainer.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
    }
}

function updateStatCardsHighlight() {
    const cards = document.querySelectorAll('.kpi-stat-card');
    cards.forEach(card => {
        const type = card.getAttribute('data-card-type');
        if (type && activeCardFilters.has(type)) {
            card.classList.add('ring-2', 'ring-[#0f53d1]', 'border-[#0f53d1]', 'shadow-md', 'bg-blue-50/20');
            card.classList.remove('border-slate-200/80');
        } else {
            card.classList.remove('ring-2', 'ring-[#0f53d1]', 'border-[#0f53d1]', 'shadow-md', 'bg-blue-50/20');
            card.classList.add('border-slate-200/80');
        }
    });
}

function filterCitizensByDistrict() {
    const districtFilter = document.getElementById('districtFilter');
    const barangayFilter = document.getElementById('barangayFilter');
    const statusFilter = document.getElementById('statusFilter');
    const sexFilter = document.getElementById('sexFilter');
    const civilStatusFilter = document.getElementById('civilStatusFilter');
    const ageRangeFilter = document.getElementById('ageRangeFilter');
    const searchInput = document.getElementById('searchInput');

    const selectedDistrict = districtFilter ? districtFilter.value.trim() : '';
    const selectedBarangay = barangayFilter ? barangayFilter.value.trim() : '';
    const selectedStatus = statusFilter ? statusFilter.value.trim() : '';
    const selectedSex = sexFilter ? sexFilter.value.trim() : '';
    const selectedCivilStatus = civilStatusFilter ? civilStatusFilter.value.trim() : '';
    const selectedAgeRange = ageRangeFilter ? ageRangeFilter.value.trim() : '';
    const searchQuery = searchInput ? searchInput.value.trim().toLowerCase() : '';

    const rows = document.querySelectorAll('tbody tr[data-district]');
    const noRow = document.getElementById('noCitizensRow');
    const showingEntriesText = document.getElementById('showingEntriesText');

    const matchingRows = [];
    const totalRows = rows.length;

    rows.forEach(row => {
        const rowDistrict = row.getAttribute('data-district') || '';
        const rowBarangay = row.getAttribute('data-barangay') || '';
        const rowStatus = row.getAttribute('data-status') || '';
        const rowSex = row.getAttribute('data-sex') || '';
        const rowCivilStatus = row.getAttribute('data-civil-status') || '';
        const rowAge = parseInt(row.getAttribute('data-age') || '0', 10);
        const rowTagsStr = row.getAttribute('data-tags') || '';
        const rowTags = rowTagsStr.split(',').map(t => t.trim());
        const rowDate = row.getAttribute('data-date') || '';
        const rowText = row.textContent.toLowerCase();

        let matchesAge = true;
        if (selectedAgeRange === '0-4') matchesAge = rowAge >= 0 && rowAge <= 4;
        else if (selectedAgeRange === '5-14') matchesAge = rowAge >= 5 && rowAge <= 14;
        else if (selectedAgeRange === '15-29') matchesAge = rowAge >= 15 && rowAge <= 29;
        else if (selectedAgeRange === '30-59') matchesAge = rowAge >= 30 && rowAge <= 59;
        else if (selectedAgeRange === '60+') matchesAge = rowAge >= 60;

        let matchesCard = true;
        if (activeCardFilters.size > 0 && !activeCardFilters.has('all')) {
            matchesCard = Array.from(activeCardFilters).every(filter => {
                if (filter === 'PWD') return rowTags.includes('PWD');
                if (filter === 'Solo Parent') return rowTags.includes('Solo Parent');
                if (filter === '4Ps Beneficiary') return rowTags.includes('4Ps Beneficiary');
                if (filter === 'New Registrations') return rowDate.includes('May 2025');
                if (filter === 'Pending Validation') return rowStatus === 'Pending Validation' || rowTags.includes('Pending Validation');
                if (filter === 'Active') return rowStatus === 'Active';
                if (filter === 'Senior Citizen') return rowStatus === 'Senior Citizen' || rowAge >= 60 || rowTags.includes('Senior Citizen');
                return rowStatus === filter;
            });
        }

        const matchesDistrict = !selectedDistrict || rowDistrict === selectedDistrict;
        const matchesBarangay = !selectedBarangay || rowBarangay === selectedBarangay;
        const matchesStatus = !selectedStatus || rowStatus === selectedStatus;
        const matchesSex = !selectedSex || rowSex === selectedSex;
        const matchesCivilStatus = !selectedCivilStatus || rowCivilStatus === selectedCivilStatus;
        const matchesSearch = !searchQuery || rowText.includes(searchQuery);

        if (matchesDistrict && matchesBarangay && matchesStatus && matchesSex && matchesCivilStatus && matchesAge && matchesCard && matchesSearch) {
            matchingRows.push(row);
        } else {
            row.style.display = 'none';
        }
    });

    const totalMatching = matchingRows.length;
    const totalPages = Math.ceil(totalMatching / rowsPerPage) || 1;

    if (currentPage > totalPages) currentPage = totalPages;
    if (currentPage < 1) currentPage = 1;

    const startIndex = (currentPage - 1) * rowsPerPage;
    const endIndex = startIndex + rowsPerPage;

    matchingRows.forEach((row, idx) => {
        if (idx >= startIndex && idx < endIndex) {
            row.style.display = '';
        } else {
            row.style.display = 'none';
        }
    });

    if (noRow) {
        if (totalMatching === 0) {
            noRow.classList.remove('hidden');
            noRow.style.display = '';
        } else {
            noRow.classList.add('hidden');
            noRow.style.display = 'none';
        }
    }

    if (showingEntriesText) {
        if (totalMatching === 0) {
            showingEntriesText.textContent = 'Showing 0 entries';
        } else {
            const fromNum = startIndex + 1;
            const toNum = Math.min(endIndex, totalMatching);
            showingEntriesText.textContent = `Showing ${fromNum} to ${toNum} of ${totalMatching} entries`;
        }
    }

    renderPaginationControls(currentPage, totalPages);
}

function renderPaginationControls(page, totalPages) {
    const container = document.getElementById('paginationButtonsContainer');
    if (!container) return;

    let html = '';

    const prevDisabled = page === 1 ? 'disabled opacity-40 cursor-not-allowed' : 'hover:bg-slate-100 hover:text-slate-700 cursor-pointer';
    html += `<button onclick="goToPage(1)" ${page === 1 ? 'disabled' : ''} class="w-8 h-8 rounded-lg flex items-center justify-center text-slate-400 transition ${prevDisabled}"><i class="fa-solid fa-angles-left text-[10px]"></i></button>`;
    html += `<button onclick="goToPage(${page - 1})" ${page === 1 ? 'disabled' : ''} class="w-8 h-8 rounded-lg flex items-center justify-center text-slate-400 transition ${prevDisabled}"><i class="fa-solid fa-angle-left text-[10px]"></i></button>`;

    for (let p = 1; p <= totalPages; p++) {
        if (p === page) {
            html += `<button class="w-8 h-8 rounded-lg flex items-center justify-center text-white bg-[#0f53d1] font-bold text-xs shadow-sm">${p}</button>`;
        } else {
            html += `<button onclick="goToPage(${p})" class="w-8 h-8 rounded-lg flex items-center justify-center text-slate-600 hover:bg-slate-100 font-bold text-xs transition cursor-pointer">${p}</button>`;
        }
    }

    const nextDisabled = page === totalPages ? 'disabled opacity-40 cursor-not-allowed' : 'hover:bg-slate-100 hover:text-slate-700 cursor-pointer';
    html += `<button onclick="goToPage(${page + 1})" ${page === totalPages ? 'disabled' : ''} class="w-8 h-8 rounded-lg flex items-center justify-center text-slate-600 transition ${nextDisabled}"><i class="fa-solid fa-angle-right text-[10px]"></i></button>`;
    html += `<button onclick="goToPage(${totalPages})" ${page === totalPages ? 'disabled' : ''} class="w-8 h-8 rounded-lg flex items-center justify-center text-slate-600 transition ${nextDisabled}"><i class="fa-solid fa-angles-right text-[10px]"></i></button>`;

    container.innerHTML = html;
}

function resetDistrictFilters() {
    activeCardFilters.clear();
    updateStatCardsHighlight();

    const districtFilter = document.getElementById('districtFilter');
    const barangayFilter = document.getElementById('barangayFilter');
    const statusFilter = document.getElementById('statusFilter');
    const sexFilter = document.getElementById('sexFilter');
    const civilStatusFilter = document.getElementById('civilStatusFilter');
    const ageRangeFilter = document.getElementById('ageRangeFilter');
    const searchInput = document.getElementById('searchInput');

    if (districtFilter) districtFilter.value = '';
    if (statusFilter) statusFilter.value = '';
    if (sexFilter) sexFilter.value = '';
    if (civilStatusFilter) civilStatusFilter.value = '';
    if (ageRangeFilter) ageRangeFilter.value = '';
    if (searchInput) searchInput.value = '';

    updateBarangayDropdown('');
    filterCitizensByDistrict();
}

document.addEventListener('DOMContentLoaded', function () {
    const districtFilter = document.getElementById('districtFilter');
    const selectedDistrict = districtFilter ? districtFilter.value.trim() : '';
    updateBarangayDropdown(selectedDistrict);
    filterCitizensByDistrict();
    updateSelectAllState();
});

function toggleSelectAllCitizens(masterCheckbox) {
    const isChecked = masterCheckbox ? masterCheckbox.checked : false;
    const master1 = document.getElementById('selectAllCheckboxToolbar');
    const master2 = document.getElementById('selectAllCheckboxHeader');
    if (master1) { master1.checked = isChecked; master1.indeterminate = false; }
    if (master2) { master2.checked = isChecked; master2.indeterminate = false; }

    const rowCheckboxes = document.querySelectorAll('.citizen-row-checkbox');
    rowCheckboxes.forEach(cb => {
        const row = cb.closest('tr');
        if (row && row.style.display !== 'none') {
            cb.checked = isChecked;
            if (isChecked) {
                row.classList.add('bg-blue-50/30');
            } else {
                row.classList.remove('bg-blue-50/30');
            }
        }
    });
    updateSelectAllState();
}

function toggleSelectAllBtnClick() {
    const visibleRowCheckboxes = Array.from(document.querySelectorAll('.citizen-row-checkbox')).filter(cb => {
        const row = cb.closest('tr');
        return row && row.style.display !== 'none';
    });

    const allChecked = visibleRowCheckboxes.length > 0 && visibleRowCheckboxes.every(cb => cb.checked);
    const targetState = !allChecked;

    const master1 = document.getElementById('selectAllCheckboxToolbar');
    if (master1) master1.checked = targetState;
    toggleSelectAllCitizens(master1 || { checked: targetState });
}

function updateSelectAllState() {
    const master1 = document.getElementById('selectAllCheckboxToolbar');
    const master2 = document.getElementById('selectAllCheckboxHeader');
    const selectAllTextBtn = document.getElementById('selectAllTextBtn');
    
    const visibleRowCheckboxes = Array.from(document.querySelectorAll('.citizen-row-checkbox')).filter(cb => {
        const row = cb.closest('tr');
        return row && row.style.display !== 'none';
    });

    const allChecked = visibleRowCheckboxes.length > 0 && visibleRowCheckboxes.every(cb => cb.checked);
    const someChecked = visibleRowCheckboxes.some(cb => cb.checked);

    [master1, master2].forEach(m => {
        if (m) {
            m.checked = allChecked;
            m.indeterminate = !allChecked && someChecked;
        }
    });

    if (selectAllTextBtn) {
        selectAllTextBtn.textContent = allChecked ? 'Unselect all citizens' : 'Select all citizens';
    }

    document.querySelectorAll('.citizen-row-checkbox').forEach(cb => {
        const row = cb.closest('tr');
        if (row) {
            if (cb.checked) {
                row.classList.add('bg-blue-50/30');
            } else {
                row.classList.remove('bg-blue-50/30');
            }
        }
    });

    updateSelectedCounter();
}

function updateSelectedCounter() {
    const selectedCountSpan = document.getElementById('selectedCountSpan');
    if (!selectedCountSpan) return;
    const checkedCount = document.querySelectorAll('.citizen-row-checkbox:checked').length;
    selectedCountSpan.textContent = `${checkedCount} selected`;
}

function toggleCitizenRow(event, rowElement) {
    const target = event.target;
    if (target.closest('button') || target.closest('a') || (target.closest('.group') && target.closest('div.relative'))) {
        return;
    }

    const checkbox = rowElement.querySelector('.citizen-row-checkbox');
    if (!checkbox) return;

    if (target !== checkbox) {
        checkbox.checked = !checkbox.checked;
    }

    updateSelectAllState();
}

function markSelectedForValidation() {
    changeSelectedCitizensStatus('Pending Validation');
}

function toggleChangeStatusDropdown(event) {
    if (event) event.stopPropagation();
    const menu = document.getElementById('changeStatusMenu');
    const button = event ? event.currentTarget : null;
    
    if (menu) {
        const isHidden = menu.classList.contains('hidden');
        if (isHidden && button) {
            const rect = button.getBoundingClientRect();
            menu.style.position = 'fixed';
            menu.style.top = (rect.bottom + 6) + 'px';
            menu.style.left = rect.left + 'px';
            menu.style.zIndex = '9999';
            menu.classList.remove('hidden');
        } else {
            menu.classList.add('hidden');
        }
    }
}

document.addEventListener('click', function (e) {
    const changeStatusMenu = document.getElementById('changeStatusMenu');
    if (changeStatusMenu && !changeStatusMenu.contains(e.target) && !e.target.closest('button[onclick*="toggleChangeStatusDropdown"]')) {
        changeStatusMenu.classList.add('hidden');
    }

    const rowMenu = document.getElementById('globalRowActionsMenu');
    if (rowMenu && !rowMenu.contains(e.target) && !e.target.closest('button[onclick*="toggleRowActionsMenu"]')) {
        rowMenu.classList.add('hidden');
    }
});

window.addEventListener('scroll', function () {
    const changeStatusMenu = document.getElementById('changeStatusMenu');
    if (changeStatusMenu && !changeStatusMenu.classList.contains('hidden')) {
        changeStatusMenu.classList.add('hidden');
    }

    const rowMenu = document.getElementById('globalRowActionsMenu');
    if (rowMenu && !rowMenu.classList.contains('hidden')) {
        rowMenu.classList.add('hidden');
    }
}, true);

function toggleRowActionsMenu(event, buttonElement, citizenId) {
    if (event) event.stopPropagation();
    const menu = document.getElementById('globalRowActionsMenu');
    if (!menu) return;

    if (!menu.classList.contains('hidden') && menu.dataset.activeId === citizenId) {
        menu.classList.add('hidden');
        return;
    }

    menu.dataset.activeId = citizenId;

    const rect = buttonElement.getBoundingClientRect();
    const menuWidth = 208;
    const menuHeight = 265;

    let topPos = rect.bottom + 4;
    if (topPos + menuHeight > window.innerHeight) {
        topPos = rect.top - menuHeight - 4;
    }

    let leftPos = rect.right - menuWidth;
    if (leftPos < 10) leftPos = 10;

    menu.style.position = 'fixed';
    menu.style.top = topPos + 'px';
    menu.style.left = leftPos + 'px';
    menu.style.zIndex = '9999';
    menu.classList.remove('hidden');
}

function handleRowAction(event, action) {
    if (event) {
        event.preventDefault();
        event.stopPropagation();
    }
    const menu = document.getElementById('globalRowActionsMenu');
    if (!menu) return;
    const citizenId = menu.dataset.activeId;
    menu.classList.add('hidden');

    if (action === 'mark-validation') {
        const rows = document.querySelectorAll('tbody tr[data-district]');
        rows.forEach(row => {
            if (row.children[1] && row.children[1].textContent.trim() === citizenId) {
                row.setAttribute('data-status', 'Pending Validation');
                const statusCell = row.children[9];
                if (statusCell) {
                    statusCell.innerHTML = getStatusBadgeHtml('Pending Validation');
                }
            }
        });
        filterCitizensByDistrict();
    } else if (action === 'archive-record') {
        const rows = document.querySelectorAll('tbody tr[data-district]');
        rows.forEach(row => {
            if (row.children[1] && row.children[1].textContent.trim() === citizenId) {
                row.style.display = 'none';
            }
        });
    }
}

function getStatusBadgeHtml(status) {
    switch (status) {
        case 'Active':
            return '<span class="px-2.5 py-1 text-[10px] font-bold rounded-md border bg-emerald-100 text-emerald-700 border-emerald-200">Active</span>';
        case 'Senior Citizen':
            return '<span class="px-2.5 py-1 text-[10px] font-bold rounded-md border bg-blue-100 text-blue-700 border-blue-200">Senior Citizen</span>';
        case 'Pending Validation':
            return '<span class="px-2.5 py-1 text-[10px] font-bold rounded-md border bg-amber-100 text-amber-700 border-amber-200">Pending Validation</span>';
        case 'Inactive':
            return '<span class="px-2.5 py-1 text-[10px] font-bold rounded-md border bg-slate-100 text-slate-700 border-slate-200">Inactive</span>';
        case 'Deceased':
            return '<span class="px-2.5 py-1 text-[10px] font-bold rounded-md border bg-red-100 text-red-700 border-red-200">Deceased</span>';
        case 'Transferred Out':
            return '<span class="px-2.5 py-1 text-[10px] font-bold rounded-md border bg-orange-100 text-orange-700 border-orange-200">Transferred Out</span>';
        default:
            return `<span class="px-2.5 py-1 text-[10px] font-bold rounded-md border bg-slate-100 text-slate-700 border-slate-200">${status}</span>`;
    }
}

function changeSelectedCitizensStatus(newStatus) {
    const checkedRowCheckboxes = document.querySelectorAll('.citizen-row-checkbox:checked');
    if (checkedRowCheckboxes.length === 0) {
        alert('Please select at least one citizen to change status.');
        const menu = document.getElementById('changeStatusMenu');
        if (menu) menu.classList.add('hidden');
        return;
    }

    checkedRowCheckboxes.forEach(cb => {
        const row = cb.closest('tr');
        if (row) {
            row.setAttribute('data-status', newStatus);
            const statusCell = row.children[9];
            if (statusCell) {
                statusCell.innerHTML = getStatusBadgeHtml(newStatus);
            }
        }
    });

    const menu = document.getElementById('changeStatusMenu');
    if (menu) menu.classList.add('hidden');

    filterCitizensByDistrict();
}

let currentViewMode = 'table';

function switchViewMode(mode) {
    currentViewMode = mode;
    const tableBtn = document.getElementById('tableViewBtn');
    const householdBtn = document.getElementById('householdViewBtn');
    const tbody = document.querySelector('tbody');
    if (!tbody) return;

    const rows = Array.from(tbody.querySelectorAll('tr[data-district]'));
    const noRow = document.getElementById('noCitizensRow');

    if (mode === 'household') {
        if (tableBtn) {
            tableBtn.className = "flex items-center gap-2.5 px-3.5 py-2 rounded-xl border-2 border-transparent bg-slate-50 shadow-xs cursor-pointer hover:border-slate-200 transition group";
            const iconDiv = tableBtn.querySelector('div');
            const h4 = tableBtn.querySelector('h4');
            if (iconDiv) iconDiv.className = "w-6 h-6 rounded-md bg-white flex items-center justify-center border border-slate-200 text-slate-400 text-xs transition-transform group-hover:scale-105 group-hover:text-slate-600";
            if (h4) h4.className = "text-xs font-bold text-slate-700 leading-tight";
        }
        if (householdBtn) {
            householdBtn.className = "flex items-center gap-2.5 px-3.5 py-2 rounded-xl border-2 border-[#0f53d1]/30 bg-blue-50/50 shadow-xs cursor-pointer hover:bg-blue-50 transition group";
            const iconDiv = householdBtn.querySelector('div');
            const h4 = householdBtn.querySelector('h4');
            if (iconDiv) iconDiv.className = "w-6 h-6 rounded-md bg-white flex items-center justify-center border border-[#0f53d1]/20 text-[#0f53d1] text-xs transition-transform group-hover:scale-105";
            if (h4) h4.className = "text-xs font-bold text-[#0f53d1] leading-tight";
        }

        // Sort rows by Household ID
        rows.sort((a, b) => {
            const hhA = a.getAttribute('data-household') || '';
            const hhB = b.getAttribute('data-household') || '';
            return hhA.localeCompare(hhB);
        });

    } else {
        if (householdBtn) {
            householdBtn.className = "flex items-center gap-2.5 px-3.5 py-2 rounded-xl border-2 border-transparent bg-slate-50 shadow-xs cursor-pointer hover:border-slate-200 transition group";
            const iconDiv = householdBtn.querySelector('div');
            const h4 = householdBtn.querySelector('h4');
            if (iconDiv) iconDiv.className = "w-6 h-6 rounded-md bg-white flex items-center justify-center border border-slate-200 text-slate-400 text-xs transition-transform group-hover:scale-105 group-hover:text-slate-600";
            if (h4) h4.className = "text-xs font-bold text-slate-700 leading-tight";
        }
        if (tableBtn) {
            tableBtn.className = "flex items-center gap-2.5 px-3.5 py-2 rounded-xl border-2 border-[#0f53d1]/30 bg-blue-50/50 shadow-xs cursor-pointer hover:bg-blue-50 transition group";
            const iconDiv = tableBtn.querySelector('div');
            const h4 = tableBtn.querySelector('h4');
            if (iconDiv) iconDiv.className = "w-6 h-6 rounded-md bg-white flex items-center justify-center border border-[#0f53d1]/20 text-[#0f53d1] text-xs transition-transform group-hover:scale-105";
            if (h4) h4.className = "text-xs font-bold text-[#0f53d1] leading-tight";
        }

        // Sort rows by Citizen ID
        rows.sort((a, b) => {
            const idA = a.children[1] ? a.children[1].textContent.trim() : '';
            const idB = b.children[1] ? b.children[1].textContent.trim() : '';
            return idA.localeCompare(idB);
        });
    }

    rows.forEach(r => tbody.appendChild(r));
    if (noRow) tbody.appendChild(noRow);

    filterCitizensByDistrict();
}
</script>

<!-- Floating Global Row Actions Dropdown Overlay -->
<div id="globalRowActionsMenu" class="hidden fixed w-52 bg-white border border-slate-200 rounded-xl shadow-xl py-1.5 z-[9999] text-xs font-medium text-slate-600 text-left">
    <a href="#" onclick="handleRowAction(event, 'view-profile')" class="flex items-center gap-2.5 px-4 py-2 hover:bg-slate-50 hover:text-slate-900 transition"><i class="fa-regular fa-user text-slate-400 w-4 text-center"></i> View Profile</a>
    <a href="#" onclick="handleRowAction(event, 'edit-citizen')" class="flex items-center gap-2.5 px-4 py-2 hover:bg-slate-50 hover:text-slate-900 transition"><i class="fa-solid fa-pen text-slate-400 w-4 text-center"></i> Edit Citizen</a>
    <a href="#" onclick="handleRowAction(event, 'view-household')" class="flex items-center gap-2.5 px-4 py-2 hover:bg-slate-50 hover:text-slate-900 transition"><i class="fa-solid fa-house-user text-slate-400 w-4 text-center"></i> View Household</a>
    <a href="#" onclick="handleRowAction(event, 'edit-history')" class="flex items-center gap-2.5 px-4 py-2 hover:bg-slate-50 hover:text-slate-900 transition"><i class="fa-solid fa-clock-rotate-left text-slate-400 w-4 text-center"></i> View Edit History</a>
    <a href="#" onclick="handleRowAction(event, 'generate-pdf')" class="flex items-center gap-2.5 px-4 py-2 hover:bg-slate-50 hover:text-slate-900 transition"><i class="fa-solid fa-file-pdf text-slate-400 w-4 text-center"></i> Generate PDF</a>
    <a href="#" onclick="handleRowAction(event, 'mark-validation')" class="flex items-center gap-2.5 px-4 py-2 hover:bg-slate-50 hover:text-slate-900 transition"><i class="fa-solid fa-shield-halved text-slate-400 w-4 text-center"></i> Mark for Validation</a>
    <div class="border-t border-slate-100 my-1"></div>
    <a href="#" onclick="handleRowAction(event, 'archive-record')" class="flex items-center gap-2.5 px-4 py-2 hover:bg-red-50 text-red-600 transition"><i class="fa-solid fa-trash-can opacity-80 w-4 text-center"></i> Archive Record</a>
</div>

<?php include '../../includes/footer.php'; ?>
