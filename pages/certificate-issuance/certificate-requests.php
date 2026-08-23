<?php
$basePath = '../../';
require_once __DIR__ . '/../../src/bootstrap.php';

include '../../includes/header.php';
include '../../includes/sidebar.php';

// Mock Citizen Registry for Auto-Fill Feature
$citizenRegistry = [
    'CTZ-2025-0142' => [
        'id' => 'CTZ-2025-0142',
        'name' => 'Juan Dela Cruz',
        'address' => 'Barangay 178, Camarin, District 3, Caloocan City',
        'contact' => '0917 123 4567',
        'civil_status' => 'Single',
        'resident_since' => '2015'
    ],
    'CTZ-2025-0189' => [
        'id' => 'CTZ-2025-0189',
        'name' => 'Maria Santos',
        'address' => 'Barangay 176, Bagong Silang, District 1, Caloocan City',
        'contact' => '0918 987 6543',
        'civil_status' => 'Married',
        'resident_since' => '2010'
    ],
    'CTZ-2025-0210' => [
        'id' => 'CTZ-2025-0210',
        'name' => 'Ana Marie Reyes',
        'address' => 'Barangay 12, District 2, Caloocan City',
        'contact' => '0920 555 4321',
        'civil_status' => 'Single',
        'resident_since' => '2020'
    ]
];

// Mock Certificate Requests Dataset
$requests = [
    [
        'id' => 'REQ-2025-0481',
        'citizen_id' => 'CTZ-2025-0142',
        'requester' => 'Juan Dela Cruz',
        'address' => 'Barangay 178, Caloocan City',
        'cert_type' => 'Barangay Clearance',
        'purpose' => 'Employment (Local Job Application)',
        'date_requested' => 'Jun 8, 2025 • 09:30 AM',
        'encoded_by' => 'Walk-in Staff (Staff: Liza Dy)',
        'docs' => ['Valid ID (Philsys)', 'Proof of Billing'],
        'status' => 'Pending',
        'status_class' => 'bg-amber-50 text-amber-600 border-amber-200'
    ],
    [
        'id' => 'REQ-2025-0482',
        'citizen_id' => 'CTZ-2025-0189',
        'requester' => 'Maria Santos',
        'address' => 'Barangay 176, Caloocan City',
        'cert_type' => 'Certificate of Indigency',
        'purpose' => 'Medical Assistance (Hospitalization)',
        'date_requested' => 'Jun 8, 2025 • 10:15 AM',
        'encoded_by' => 'Citizen Self-Service Portal',
        'docs' => ['Voter ID', 'Barangay Social Case Study'],
        'status' => 'Approved',
        'status_class' => 'bg-blue-50 text-[#0f53d1] border-blue-200'
    ],
    [
        'id' => 'REQ-2025-0483',
        'citizen_id' => 'CTZ-2025-0210',
        'requester' => 'Ana Marie Reyes',
        'address' => 'Barangay 12, Caloocan City',
        'cert_type' => 'First-Time Jobseeker Certificate (RA 11261)',
        'purpose' => 'Employment (First Job Application)',
        'date_requested' => 'Jun 7, 2025 • 02:45 PM',
        'encoded_by' => 'Walk-in Staff (Staff: John Cruz)',
        'docs' => ['School Diploma / Transcript', 'First Jobseeker Oath'],
        'status' => 'Ready for Release',
        'status_class' => 'bg-purple-50 text-purple-600 border-purple-200'
    ],
    [
        'id' => 'REQ-2025-0484',
        'citizen_id' => 'CTZ-2025-0305',
        'requester' => 'Pedro Ramos',
        'address' => 'Barangay 1, Caloocan City',
        'cert_type' => 'Business Permit Clearance',
        'purpose' => 'New Business Registration (Sari-Sari Store)',
        'date_requested' => 'Jun 6, 2025 • 11:20 AM',
        'encoded_by' => 'Walk-in Staff (Staff: Liza Dy)',
        'docs' => ['DTI Registration', 'Locational Map'],
        'status' => 'Released',
        'status_class' => 'bg-emerald-50 text-emerald-600 border-emerald-200'
    ],
    [
        'id' => 'REQ-2025-0485',
        'citizen_id' => 'CTZ-2025-0412',
        'requester' => 'Roderick Lim',
        'address' => 'Barangay 88, Caloocan City',
        'cert_type' => 'Certificate of Good Moral Character',
        'purpose' => 'School Enrollment & Scholarship',
        'date_requested' => 'Jun 5, 2025 • 04:10 PM',
        'encoded_by' => 'Citizen Self-Service Portal',
        'docs' => ['Student ID'],
        'status' => 'Rejected',
        'status_class' => 'bg-rose-50 text-rose-600 border-rose-200'
    ]
];
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

<main class="flex-1 p-4 md:p-6 lg:p-8 w-full overflow-y-auto bg-slate-50/50 min-h-[calc(100vh-4rem)] space-y-6">

    <!-- Top Title & Action Header Bar -->
    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 border-b border-slate-200/80 pb-5">
        <div class="flex items-center gap-3">
            <div class="w-10 h-10 rounded-xl bg-blue-50 text-[#0f53d1] flex items-center justify-center text-lg border border-blue-100 shadow-xs">
                <i class="fa-solid fa-file-signature"></i>
            </div>
            <div>
                <div class="flex items-center space-x-2 text-xs font-bold uppercase tracking-wider text-slate-400 mb-1">
                    <span>Barangay Certificate & ID Issuance</span>
                    <i class="fa-solid fa-chevron-right text-[8px] opacity-60"></i>
                    <span class="text-brand-dark">Certificate Requests</span>
                </div>
                <h1 class="text-xl md:text-2xl font-black text-slate-900 tracking-tight">Certificate Requests</h1>
            </div>
        </div>

        <div class="flex items-center gap-2.5 flex-wrap">
            <button onclick="exportRequestsCSV()" class="px-4 py-2.5 bg-white border border-slate-200 text-slate-700 hover:bg-slate-50 font-bold text-xs rounded-xl shadow-xs transition flex items-center gap-2 cursor-pointer">
                <i class="fa-solid fa-download text-slate-400"></i>
                <span>Export List</span>
            </button>

            <button onclick="openNewRequestModal()" class="px-4.5 py-2.5 bg-[#0f53d1] hover:bg-[#0d46b0] text-white font-bold text-xs rounded-xl shadow-xs transition flex items-center gap-2 cursor-pointer">
                <i class="fa-solid fa-plus text-xs"></i>
                <span>Encode Request</span>
            </button>
        </div>
    </div>

    <!-- Stat Summary Cards Row (4 Cards) -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
        
        <!-- Card 1: Total Requests -->
        <div class="bg-white rounded-2xl border border-slate-200 shadow-sm p-5 space-y-3">
            <div class="flex items-center justify-between">
                <span class="text-xs font-bold text-slate-400 uppercase tracking-wider">Total Requests</span>
                <div class="w-10 h-10 rounded-xl bg-blue-50 text-[#0f53d1] flex items-center justify-center text-base border border-blue-100">
                    <i class="fa-solid fa-folder-open"></i>
                </div>
            </div>
            <div>
                <h3 class="text-2xl font-black text-slate-900 tracking-tight">142</h3>
                <p class="text-[11px] font-semibold text-emerald-600 flex items-center gap-1 mt-1">
                    <i class="fa-solid fa-arrow-trend-up"></i>
                    <span>+18% vs last week</span>
                </p>
            </div>
        </div>

        <!-- Card 2: Pending Processing -->
        <div class="bg-white rounded-2xl border border-slate-200 shadow-sm p-5 space-y-3">
            <div class="flex items-center justify-between">
                <span class="text-xs font-bold text-slate-400 uppercase tracking-wider">Pending Processing</span>
                <div class="w-10 h-10 rounded-xl bg-amber-50 text-amber-600 flex items-center justify-center text-base border border-amber-100">
                    <i class="fa-solid fa-clock"></i>
                </div>
            </div>
            <div>
                <h3 class="text-2xl font-black text-slate-900 tracking-tight">14</h3>
                <p class="text-[11px] font-semibold text-amber-600 flex items-center gap-1 mt-1">
                    <i class="fa-solid fa-hourglass-half"></i>
                    <span>Awaiting captain approval</span>
                </p>
            </div>
        </div>

        <!-- Card 3: Ready for Release -->
        <div class="bg-white rounded-2xl border border-slate-200 shadow-sm p-5 space-y-3">
            <div class="flex items-center justify-between">
                <span class="text-xs font-bold text-slate-400 uppercase tracking-wider">Ready for Release</span>
                <div class="w-10 h-10 rounded-xl bg-purple-50 text-purple-600 flex items-center justify-center text-base border border-purple-100">
                    <i class="fa-solid fa-stamp"></i>
                </div>
            </div>
            <div>
                <h3 class="text-2xl font-black text-slate-900 tracking-tight">8</h3>
                <p class="text-[11px] font-semibold text-purple-600 flex items-center gap-1 mt-1">
                    <i class="fa-solid fa-building-flag"></i>
                    <span>For pickup at Barangay Hall</span>
                </p>
            </div>
        </div>

        <!-- Card 4: Released Today -->
        <div class="bg-white rounded-2xl border border-slate-200 shadow-sm p-5 space-y-3">
            <div class="flex items-center justify-between">
                <span class="text-xs font-bold text-slate-400 uppercase tracking-wider">Released Today</span>
                <div class="w-10 h-10 rounded-xl bg-emerald-50 text-emerald-600 flex items-center justify-center text-base border border-emerald-100">
                    <i class="fa-solid fa-circle-check"></i>
                </div>
            </div>
            <div>
                <h3 class="text-2xl font-black text-slate-900 tracking-tight">38</h3>
                <p class="text-[11px] font-semibold text-emerald-600 flex items-center gap-1 mt-1">
                    <i class="fa-solid fa-check"></i>
                    <span>100% processing efficiency</span>
                </p>
            </div>
        </div>

    </div>

    <!-- Main Grid Layout (Table Container + Right Side Drawer) -->
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 items-start">

        <!-- Left Table Column -->
        <div id="requestTableContainer" class="lg:col-span-12 space-y-4 transition-all duration-300">

            <!-- Search & Multi-Filter Card -->
            <div class="bg-white rounded-2xl border border-slate-200 shadow-sm p-4 space-y-3">
                <div class="flex flex-col md:flex-row items-stretch md:items-center justify-between gap-3">
                    
                    <!-- Search Input -->
                    <div class="relative flex-1">
                        <i class="fa-solid fa-search absolute left-3.5 top-1/2 -translate-y-1/2 text-slate-400 text-xs"></i>
                        <input type="text" id="requestSearchInput" oninput="filterRequestsTable()" placeholder="Search by requester name, reference ID, purpose, or certificate type..." class="w-full pl-9 pr-3 py-2.5 bg-slate-50 border border-slate-200 text-slate-800 font-medium rounded-xl text-xs outline-none focus:ring-2 focus:ring-[#0f53d1]/40 focus:border-[#0f53d1]">
                    </div>

                    <!-- Certificate Type Filter -->
                    <select id="certTypeFilter" onchange="filterRequestsTable()" class="bg-slate-50 border border-slate-200 text-slate-800 font-semibold rounded-xl py-2.5 px-3 text-xs outline-none cursor-pointer">
                        <option value="">All Certificate Types</option>
                        <option value="Barangay Clearance">Barangay Clearance</option>
                        <option value="Certificate of Residency">Certificate of Residency</option>
                        <option value="Certificate of Indigency">Certificate of Indigency</option>
                        <option value="Business Permit Clearance">Business Permit Clearance</option>
                        <option value="Certificate of Good Moral Character">Certificate of Good Moral Character</option>
                        <option value="First-Time Jobseeker Certificate (RA 11261)">First-Time Jobseeker (RA 11261)</option>
                    </select>

                    <!-- Status Filter -->
                    <select id="requestStatusFilter" onchange="filterRequestsTable()" class="bg-slate-50 border border-slate-200 text-slate-800 font-semibold rounded-xl py-2.5 px-3 text-xs outline-none cursor-pointer">
                        <option value="">All Statuses</option>
                        <option value="Pending">Pending</option>
                        <option value="Approved">Approved</option>
                        <option value="Ready for Release">Ready for Release</option>
                        <option value="Released">Released</option>
                        <option value="Rejected">Rejected</option>
                    </select>

                    <!-- Reset Button -->
                    <button onclick="resetRequestFilters()" class="px-3.5 py-2.5 bg-white border border-slate-200 text-slate-600 hover:bg-slate-50 font-bold text-xs rounded-xl transition flex items-center justify-center gap-1.5 cursor-pointer shrink-0">
                        <i class="fa-solid fa-rotate-left text-slate-400"></i>
                        <span>Reset</span>
                    </button>
                </div>
            </div>

            <!-- Certificate Requests Table Card -->
            <div class="bg-white rounded-2xl border border-slate-200 shadow-sm overflow-hidden">
                <div class="p-4 border-b border-slate-100 flex items-center justify-between">
                    <h3 class="text-xs font-black text-slate-900 uppercase tracking-wider">Requests Directory <span id="requestsCountBadge" class="text-slate-400 font-normal ml-1">(5 requests)</span></h3>
                </div>

                <div class="overflow-x-auto custom-scrollbar">
                    <table class="w-full text-left border-collapse min-w-[950px]">
                        <thead>
                            <tr class="bg-slate-50/80 border-b border-slate-200 text-[10px] font-bold text-slate-400 uppercase tracking-wider">
                                <th class="py-3.5 px-4">Request Ref ID & Requester</th>
                                <th class="py-3.5 px-3">Certificate Type</th>
                                <th class="py-3.5 px-3">Purpose</th>
                                <th class="py-3.5 px-3">Date Requested & Source</th>
                                <th class="py-3.5 px-3">Uploaded Docs</th>
                                <th class="py-3.5 px-3 text-center">Status</th>
                                <th class="py-3.5 px-3 text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody id="requestsTableBody" class="divide-y divide-slate-100 text-xs font-medium text-slate-700">
                            <?php foreach ($requests as $req): ?>
                            <tr onclick="selectRequestRow(this, '<?php echo $req['id']; ?>')" class="request-row hover:bg-slate-50 transition cursor-pointer select-none" data-id="<?php echo $req['id']; ?>" data-cert="<?php echo htmlspecialchars($req['cert_type']); ?>" data-status="<?php echo htmlspecialchars($req['status']); ?>">
                                <td class="py-3.5 px-4">
                                    <div class="flex items-center gap-3">
                                        <div class="w-9 h-9 rounded-xl bg-blue-50 text-[#0f53d1] flex items-center justify-center shrink-0 font-black text-xs border border-blue-100">
                                            <i class="fa-solid fa-file-lines"></i>
                                        </div>
                                        <div class="min-w-0">
                                            <p class="font-bold text-slate-900 text-xs truncate"><?php echo htmlspecialchars($req['requester']); ?></p>
                                            <div class="flex items-center gap-2 mt-0.5">
                                                <span class="text-[10px] font-bold text-[#0f53d1]"><?php echo $req['id']; ?></span>
                                                <span class="text-[9px] text-slate-400 font-semibold"><?php echo $req['citizen_id']; ?></span>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="py-3.5 px-3">
                                    <span class="font-bold text-slate-900 text-xs block"><?php echo htmlspecialchars($req['cert_type']); ?></span>
                                    <span class="text-[10px] text-slate-400 font-medium"><?php echo htmlspecialchars($req['address']); ?></span>
                                </td>
                                <td class="py-3.5 px-3 text-slate-700 font-medium">
                                    <span class="truncate block max-w-xs"><?php echo htmlspecialchars($req['purpose']); ?></span>
                                </td>
                                <td class="py-3.5 px-3 whitespace-nowrap">
                                    <p class="font-bold text-slate-800 text-[11px]"><?php echo $req['date_requested']; ?></p>
                                    <p class="text-[10px] text-slate-400 font-semibold"><?php echo $req['encoded_by']; ?></p>
                                </td>
                                <td class="py-3.5 px-3">
                                    <div class="flex items-center gap-1.5">
                                        <span class="px-2 py-0.5 rounded-md bg-slate-100 text-slate-700 font-bold text-[10px] border border-slate-200 flex items-center gap-1">
                                            <i class="fa-solid fa-paperclip text-[9px] text-slate-400"></i>
                                            <?php echo count($req['docs']); ?> Attachments
                                        </span>
                                    </div>
                                </td>
                                <td class="py-3.5 px-3 text-center">
                                    <span class="px-2.5 py-0.5 rounded-full font-bold text-[10px] border <?php echo $req['status_class']; ?>"><?php echo $req['status']; ?></span>
                                </td>
                                <td class="py-3.5 px-3 text-center">
                                    <div class="flex items-center justify-center gap-1">
                                        <button onclick="event.stopPropagation(); selectRequestRow(this.closest('tr'), '<?php echo $req['id']; ?>');" class="w-7 h-7 rounded-lg hover:bg-slate-100 text-slate-400 hover:text-[#0f53d1] flex items-center justify-center transition cursor-pointer" title="View Request Details"><i class="fa-regular fa-eye text-xs"></i></button>
                                        <button onclick="event.stopPropagation(); processRequestAction('<?php echo $req['id']; ?>');" class="w-7 h-7 rounded-lg hover:bg-slate-100 text-slate-400 hover:text-emerald-600 flex items-center justify-center transition cursor-pointer" title="Process Request"><i class="fa-solid fa-user-check text-xs"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                            <tr id="noRequestsRow" class="hidden">
                                <td colspan="7" class="p-8 text-center text-slate-400 font-medium text-xs">
                                    <i class="fa-solid fa-folder-open text-2xl mb-2 block text-slate-300"></i>
                                    No certificate requests match the filter criteria.
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Footer Pagination -->
                <div class="px-4 py-3 bg-slate-50/50 border-t border-slate-200 flex flex-col sm:flex-row items-center justify-between gap-3 text-xs text-slate-500 font-medium">
                    <div>
                        <span>Showing 1 to 5 of 5 requests</span>
                    </div>

                    <div class="flex items-center gap-1.5">
                        <button class="w-7 h-7 rounded-lg bg-white border border-slate-200 hover:bg-slate-50 flex items-center justify-center text-slate-400 hover:text-slate-700 transition cursor-pointer text-xs"><i class="fa-solid fa-chevron-left text-[10px]"></i></button>
                        <button class="w-7 h-7 rounded-lg bg-[#0f53d1] text-white font-bold flex items-center justify-center shadow-xs text-xs">1</button>
                        <button class="w-7 h-7 rounded-lg bg-white border border-slate-200 hover:bg-slate-50 flex items-center justify-center text-slate-400 hover:text-slate-700 transition cursor-pointer text-xs"><i class="fa-solid fa-chevron-right text-[10px]"></i></button>
                    </div>

                    <div class="flex items-center gap-2">
                        <span class="text-[11px]">Rows per page</span>
                        <select class="bg-white border border-slate-200 rounded-lg text-xs font-bold px-2 py-1 outline-none cursor-pointer">
                            <option>10</option>
                            <option>25</option>
                        </select>
                    </div>
                </div>
            </div>

        </div>

        <!-- Right Side Inspector Drawer: Request Details & Attached Documents (Hidden by Default) -->
        <div id="requestDetailsDrawer" class="hidden lg:col-span-4 bg-white rounded-2xl border border-slate-200 shadow-sm p-5 space-y-5 sticky top-6">
            
            <!-- Drawer Header -->
            <div class="flex items-center justify-between border-b border-slate-100 pb-3">
                <div class="flex items-center gap-2">
                    <span id="drawerReqId" class="text-xs font-bold text-[#0f53d1]">REQ-2025-0481</span>
                    <span id="drawerReqStatus" class="px-2 py-0.5 text-[10px] font-bold rounded-full bg-amber-50 text-amber-600 border border-amber-200">Pending</span>
                </div>
                <button onclick="closeRequestDrawer()" class="w-7 h-7 rounded-lg hover:bg-slate-100 text-slate-400 hover:text-slate-700 flex items-center justify-center transition cursor-pointer text-xs">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>

            <!-- Requester Details (Auto-filled from Registry) -->
            <div class="space-y-3">
                <div>
                    <span class="text-[10px] font-bold text-slate-400 uppercase tracking-wider block mb-1">Requester Profile</span>
                    <h3 id="drawerRequesterName" class="text-sm font-black text-slate-900 leading-snug">Juan Dela Cruz</h3>
                    <p id="drawerCitizenId" class="text-xs text-[#0f53d1] font-bold">CTZ-2025-0142</p>
                    <p id="drawerRequesterAddress" class="text-xs text-slate-500 font-medium mt-1">Barangay 178, Camarin, District 3, Caloocan City</p>
                </div>

                <div class="p-3 bg-slate-50 border border-slate-200 rounded-xl space-y-1 text-xs">
                    <div class="flex items-center justify-between text-[11px]">
                        <span class="text-slate-400 font-medium">Requested Certificate</span>
                        <span id="drawerCertType" class="font-bold text-slate-800">Barangay Clearance</span>
                    </div>
                    <div class="flex items-center justify-between text-[11px]">
                        <span class="text-slate-400 font-medium">Purpose</span>
                        <span id="drawerPurpose" class="font-bold text-slate-800 truncate max-w-[170px]">Employment (Local)</span>
                    </div>
                    <div class="flex items-center justify-between text-[11px]">
                        <span class="text-slate-400 font-medium">Date Encoded</span>
                        <span id="drawerDateRequested" class="font-bold text-slate-800">Jun 8, 2025</span>
                    </div>
                </div>
            </div>

            <!-- Uploaded Supporting Documents Section -->
            <div class="space-y-3 border-t border-slate-100 pt-3">
                <span class="text-[10px] font-bold text-slate-400 uppercase tracking-wider block">Uploaded Supporting Documents</span>
                
                <div id="drawerDocsList" class="space-y-2">
                    <div class="p-2.5 bg-slate-50 border border-slate-200 rounded-xl flex items-center justify-between text-xs">
                        <div class="flex items-center gap-2">
                            <i class="fa-solid fa-file-pdf text-rose-500 text-sm"></i>
                            <div>
                                <p class="font-bold text-slate-800 text-[11px]">Valid_ID_Philsys.pdf</p>
                                <p class="text-[9px] text-slate-400">Verified Citizen Document</p>
                            </div>
                        </div>
                        <button onclick="alert('Viewing document preview...')" class="text-xs text-[#0f53d1] font-bold hover:underline">Preview</button>
                    </div>

                    <div class="p-2.5 bg-slate-50 border border-slate-200 rounded-xl flex items-center justify-between text-xs">
                        <div class="flex items-center gap-2">
                            <i class="fa-solid fa-file-image text-blue-500 text-sm"></i>
                            <div>
                                <p class="font-bold text-slate-800 text-[11px]">Proof_of_Address.jpg</p>
                                <p class="text-[9px] text-slate-400">Utility Bill Attachment</p>
                            </div>
                        </div>
                        <button onclick="alert('Viewing document preview...')" class="text-xs text-[#0f53d1] font-bold hover:underline">Preview</button>
                    </div>
                </div>
            </div>

            <!-- Quick Action Buttons -->
            <div class="flex items-center gap-2 border-t border-slate-100 pt-4">
                <button type="button" onclick="forwardToApproval()" class="flex-1 py-2.5 bg-[#0f53d1] hover:bg-[#0d46b0] text-white font-bold text-xs rounded-xl shadow-xs transition flex items-center justify-center gap-1.5 cursor-pointer">
                    <i class="fa-solid fa-arrow-right text-xs"></i>
                    <span>Submit for Approval</span>
                </button>

                <button type="button" onclick="rejectRequestDrawer()" class="flex-1 py-2.5 bg-white border border-rose-200 text-rose-600 hover:bg-rose-50 font-bold text-xs rounded-xl shadow-xs transition flex items-center justify-center gap-1.5 cursor-pointer">
                    <i class="fa-solid fa-xmark text-xs"></i>
                    <span>Reject</span>
                </button>
            </div>

        </div>

    </div>

</main>

<!-- SECTION 4.1 NEW REQUEST ENCODING MODAL (Auto-Fill & Staff/Self-Service) -->
<div id="newRequestModal" class="hidden fixed inset-0 z-50 bg-slate-900/60 backdrop-blur-xs flex items-center justify-center p-4">
    <div class="bg-white rounded-2xl max-w-2xl w-full p-6 shadow-2xl border border-slate-100 space-y-5 animate-in fade-in zoom-in-95 duration-200 max-h-[90vh] overflow-y-auto custom-scrollbar">
        
        <div class="flex items-center justify-between border-b border-slate-100 pb-3.5">
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 rounded-xl bg-blue-50 text-[#0f53d1] flex items-center justify-center text-lg border border-blue-100">
                    <i class="fa-solid fa-keyboard"></i>
                </div>
                <div>
                    <h3 class="text-base font-black text-slate-900">Encode New Certificate Request</h3>
                    <p class="text-xs text-slate-500 font-medium">Select Citizen from Registry to auto-fill details and reduce encoding errors</p>
                </div>
            </div>
            <button onclick="closeNewRequestModal()" class="w-8 h-8 rounded-lg hover:bg-slate-100 text-slate-400 hover:text-slate-700 transition flex items-center justify-center cursor-pointer">
                <i class="fa-solid fa-xmark text-sm"></i>
            </button>
        </div>

        <div class="space-y-4 text-xs">
            <!-- Request Entry Mode Switcher -->
            <div class="p-3 bg-slate-50 border border-slate-200 rounded-xl flex items-center justify-between">
                <div>
                    <span class="font-bold text-slate-900 block text-xs">Encoding Channel / Source</span>
                    <span class="text-[11px] text-slate-500 font-medium">Staff Walk-in Encoding vs Citizen Portal Submission</span>
                </div>
                <select id="encodingSource" class="bg-white border border-slate-200 text-slate-800 font-bold rounded-lg px-2.5 py-1.5 outline-none cursor-pointer text-xs">
                    <option value="Walk-in Staff">Staff Encoded (Walk-in)</option>
                    <option value="Citizen Self-Service">Citizen Portal (Online)</option>
                </select>
            </div>

            <!-- Auto-Fill Citizen Selection Dropdown -->
            <div class="p-3.5 bg-blue-50/50 border border-blue-100 rounded-xl space-y-2">
                <div class="flex items-center justify-between">
                    <label class="font-black text-slate-900 text-xs flex items-center gap-1.5">
                        <i class="fa-solid fa-id-card text-[#0f53d1]"></i>
                        <span>Select Citizen from Registry (Auto-Fill)</span>
                    </label>
                    <span class="text-[10px] font-bold text-[#0f53d1]">Auto-populates fields</span>
                </div>
                <select id="citizenRegistrySelect" onchange="autoFillCitizenDetails(this.value)" class="w-full bg-white border border-slate-200 text-slate-800 font-bold rounded-xl p-2.5 outline-none text-xs cursor-pointer">
                    <option value="">-- Choose Citizen to Auto-Fill --</option>
                    <option value="CTZ-2025-0142">CTZ-2025-0142 - Juan Dela Cruz (Barangay 178, Camarin)</option>
                    <option value="CTZ-2025-0189">CTZ-2025-0189 - Maria Santos (Barangay 176, Bagong Silang)</option>
                    <option value="CTZ-2025-0210">CTZ-2025-0210 - Ana Marie Reyes (Barangay 12, Caloocan)</option>
                </select>
            </div>

            <!-- Auto-Filled Requester Details Fields -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                <div>
                    <label class="font-bold text-slate-700 block mb-1">Requester Full Name <span class="text-rose-500">*</span></label>
                    <input type="text" id="reqFullName" placeholder="e.g., Juan Dela Cruz" class="w-full bg-slate-50 border border-slate-200 text-slate-800 rounded-xl p-2.5 outline-none font-medium text-xs">
                </div>

                <div>
                    <label class="font-bold text-slate-700 block mb-1">Citizen ID Number</label>
                    <input type="text" id="reqCitizenId" placeholder="e.g., CTZ-2025-0142" readonly class="w-full bg-slate-100 border border-slate-200 text-slate-500 rounded-xl p-2.5 outline-none font-medium text-xs cursor-not-allowed">
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                <div>
                    <label class="font-bold text-slate-700 block mb-1">Residential Address</label>
                    <input type="text" id="reqAddress" placeholder="Barangay & District, Caloocan City" class="w-full bg-slate-50 border border-slate-200 text-slate-800 rounded-xl p-2.5 outline-none font-medium text-xs">
                </div>

                <div>
                    <label class="font-bold text-slate-700 block mb-1">Contact Mobile Number</label>
                    <input type="text" id="reqContact" placeholder="09XX XXX XXXX" class="w-full bg-slate-50 border border-slate-200 text-slate-800 rounded-xl p-2.5 outline-none font-medium text-xs">
                </div>
            </div>

            <!-- Certificate Type & Purpose Selectors -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                <div>
                    <label class="font-bold text-slate-700 block mb-1">Certificate Type <span class="text-rose-500">*</span></label>
                    <select id="reqCertType" class="w-full bg-slate-50 border border-slate-200 text-slate-800 rounded-xl p-2.5 outline-none font-medium text-xs cursor-pointer">
                        <option value="Barangay Clearance">Barangay Clearance</option>
                        <option value="Certificate of Residency">Certificate of Residency</option>
                        <option value="Certificate of Indigency">Certificate of Indigency</option>
                        <option value="Business Permit Clearance">Business Permit Clearance</option>
                        <option value="Certificate of Good Moral Character">Certificate of Good Moral Character</option>
                        <option value="First-Time Jobseeker Certificate (RA 11261)">First-Time Jobseeker Certificate (RA 11261)</option>
                    </select>
                </div>

                <div>
                    <label class="font-bold text-slate-700 block mb-1">Purpose of Request <span class="text-rose-500">*</span></label>
                    <select id="reqPurpose" class="w-full bg-slate-50 border border-slate-200 text-slate-800 rounded-xl p-2.5 outline-none font-medium text-xs cursor-pointer">
                        <option value="Employment Requirement">Employment Requirement (Local / OFW)</option>
                        <option value="School Requirement & Scholarship">School Requirement & Scholarship</option>
                        <option value="Loan Application & Bank Account">Loan Application & Bank Account</option>
                        <option value="Government Transaction (SSS/GSIS/Passport)">Government Transaction (SSS/GSIS/Passport)</option>
                        <option value="Medical & Financial Assistance">Medical & Financial Assistance</option>
                        <option value="New Business Permit Registration">New Business Permit Registration</option>
                    </select>
                </div>
            </div>

            <!-- Upload Supporting Documents -->
            <div>
                <label class="font-bold text-slate-700 block mb-1">Upload Supporting Documents (Valid ID, Proof of Address)</label>
                <input type="file" id="reqDocUpload" multiple class="w-full bg-slate-50 border border-slate-200 text-slate-700 rounded-xl p-2 outline-none font-medium text-xs file:mr-3 file:py-1 file:px-3 file:rounded-lg file:border-0 file:text-xs file:font-bold file:bg-[#0f53d1] file:text-white cursor-pointer">
            </div>
        </div>

        <div class="flex items-center justify-end gap-2.5 pt-3 border-t border-slate-100">
            <button onclick="closeNewRequestModal()" class="px-4 py-2.5 text-xs font-bold text-slate-600 bg-white border border-slate-200 rounded-xl hover:bg-slate-50 transition cursor-pointer">Cancel</button>
            <button onclick="submitNewRequest()" class="px-5 py-2.5 text-xs font-bold text-white bg-[#0f53d1] hover:bg-[#0d46b0] rounded-xl transition shadow-xs cursor-pointer flex items-center gap-1.5">
                <i class="fa-solid fa-paper-plane text-xs"></i>
                <span>Submit Request</span>
            </button>
        </div>
    </div>
</div>

<script>
const citizenRegistry = <?php echo json_encode($citizenRegistry); ?>;
const requestsData = <?php echo json_encode(array_column($requests, null, 'id')); ?>;

let activeRequestId = null;

function autoFillCitizenDetails(id) {
    const data = citizenRegistry[id];
    if (data) {
        document.getElementById('reqFullName').value = data.name;
        document.getElementById('reqCitizenId').value = data.id;
        document.getElementById('reqAddress').value = data.address;
        document.getElementById('reqContact').value = data.contact;
    } else {
        document.getElementById('reqFullName').value = '';
        document.getElementById('reqCitizenId').value = '';
        document.getElementById('reqAddress').value = '';
        document.getElementById('reqContact').value = '';
    }
}

function selectRequestRow(rowElement, id) {
    const drawer = document.getElementById('requestDetailsDrawer');
    const tableContainer = document.getElementById('requestTableContainer');

    if (activeRequestId === id && drawer && !drawer.classList.contains('hidden')) {
        closeRequestDrawer();
        return;
    }

    activeRequestId = id;
    document.querySelectorAll('.request-row').forEach(r => {
        r.classList.remove('bg-blue-50/40', 'bg-blue-50/60');
    });
    rowElement.classList.add('bg-blue-50/40');

    const data = requestsData[id];
    if (!data) return;

    document.getElementById('drawerReqId').innerText = data.id;
    document.getElementById('drawerRequesterName').innerText = data.requester;
    document.getElementById('drawerCitizenId').innerText = data.citizen_id;
    document.getElementById('drawerRequesterAddress').innerText = data.address;
    document.getElementById('drawerCertType').innerText = data.cert_type;
    document.getElementById('drawerPurpose').innerText = data.purpose;
    document.getElementById('drawerDateRequested').innerText = data.date_requested;

    const statusBadge = document.getElementById('drawerReqStatus');
    statusBadge.innerText = data.status;
    statusBadge.className = `px-2 py-0.5 text-[10px] font-bold rounded-full border ${data.status_class}`;

    if (drawer) {
        drawer.classList.remove('hidden');
        tableContainer.className = "lg:col-span-8 space-y-4 transition-all duration-300";
    }
}

function closeRequestDrawer() {
    activeRequestId = null;
    document.querySelectorAll('.request-row').forEach(r => {
        r.classList.remove('bg-blue-50/40', 'bg-blue-50/60');
    });
    const drawer = document.getElementById('requestDetailsDrawer');
    const tableContainer = document.getElementById('requestTableContainer');
    if (drawer) drawer.classList.add('hidden');
    if (tableContainer) tableContainer.className = "lg:col-span-12 space-y-4 transition-all duration-300";
}

function filterRequestsTable() {
    const searchVal = document.getElementById('requestSearchInput').value.toLowerCase();
    const certVal = document.getElementById('certTypeFilter').value.toLowerCase();
    const statusVal = document.getElementById('requestStatusFilter').value.toLowerCase();

    const rows = document.querySelectorAll('.request-row');
    let visibleCount = 0;

    rows.forEach(r => {
        const text = r.innerText.toLowerCase();
        const cert = (r.getAttribute('data-cert') || '').toLowerCase();
        const status = (r.getAttribute('data-status') || '').toLowerCase();

        const matchesSearch = !searchVal || text.includes(searchVal);
        const matchesCert = !certVal || cert.includes(certVal);
        const matchesStatus = !statusVal || status.includes(statusVal);

        if (matchesSearch && matchesCert && matchesStatus) {
            r.style.display = '';
            visibleCount++;
        } else {
            r.style.display = 'none';
        }
    });

    const noRow = document.getElementById('noRequestsRow');
    if (noRow) {
        if (visibleCount === 0) {
            noRow.classList.remove('hidden');
            noRow.style.display = '';
        } else {
            noRow.classList.add('hidden');
            noRow.style.display = 'none';
        }
    }
}

function resetRequestFilters() {
    document.getElementById('requestSearchInput').value = '';
    document.getElementById('certTypeFilter').value = '';
    document.getElementById('requestStatusFilter').value = '';
    filterRequestsTable();
}

function openNewRequestModal() {
    document.getElementById('newRequestModal').classList.remove('hidden');
}

function closeNewRequestModal() {
    document.getElementById('newRequestModal').classList.add('hidden');
}

function submitNewRequest() {
    const name = document.getElementById('reqFullName').value.trim();
    const certType = document.getElementById('reqCertType').value;
    const purpose = document.getElementById('reqPurpose').value;

    if (!name) {
        alert('Please enter or auto-fill Requester Full Name.');
        return;
    }

    const newId = `REQ-2025-0${Math.floor(Math.random() * 900) + 100}`;
    alert(`Request ${newId} for "${certType}" requested by "${name}" has been encoded successfully!`);
    closeNewRequestModal();
}

function forwardToApproval() {
    if (!activeRequestId) return;
    alert(`Request ${activeRequestId} forwarded to Barangay Captain Pending Approvals queue!`);
}

function rejectRequestDrawer() {
    if (!activeRequestId) return;
    if (confirm(`Reject request ${activeRequestId}? Notification will be sent to requester.`)) {
        closeRequestDrawer();
    }
}

function exportRequestsCSV() {
    alert('Exporting Certificate Requests Directory (CSV)...');
}
</script>

<?php include '../../includes/footer.php'; ?>
