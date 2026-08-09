<?php
$basePath = '../../';
require_once __DIR__ . '/../../src/bootstrap.php';

include '../../includes/header.php';
include '../../includes/sidebar.php';

// ID Verification Audit Logs Dataset (Read-Only Historical Record)
$verificationLogs = [
    [
        'log_id' => 'VLOG-2025-0981',
        'citizen_name' => 'Juan Dela Cruz',
        'citizen_id' => 'CTZ-2025-0142',
        'address' => 'Barangay 178, Camarin, Caloocan City',
        'id_type' => 'PhilSys National ID',
        'verifying_staff' => 'Desk Officer Liza Dy',
        'timestamp' => 'Jun 8, 2025 • 09:30 AM',
        'result' => 'Verified',
        'result_badge' => 'bg-emerald-50 text-emerald-600 border-emerald-200',
        'remarks' => 'PhilSys QR code scanned & verified via Philippine Identification System API. Demographics match 100%.'
    ],
    [
        'log_id' => 'VLOG-2025-0982',
        'citizen_name' => 'Maria Santos',
        'citizen_id' => 'CTZ-2025-0189',
        'address' => 'Barangay 176, Bagong Silang, Caloocan City',
        'id_type' => 'Voter\'s ID (COMELEC)',
        'verifying_staff' => 'Staff John Cruz',
        'timestamp' => 'Jun 8, 2025 • 10:15 AM',
        'result' => 'Verified',
        'result_badge' => 'bg-emerald-50 text-emerald-600 border-emerald-200',
        'remarks' => 'Voter precinct record confirmed in District 1 COMELEC database. Proof of residency validated.'
    ],
    [
        'log_id' => 'VLOG-2025-0983',
        'citizen_name' => 'Roderick Lim',
        'citizen_id' => 'CTZ-2025-0412',
        'address' => 'Barangay 88, Caloocan City',
        'id_type' => 'Driver\'s License (LTO)',
        'verifying_staff' => 'Desk Officer Liza Dy',
        'timestamp' => 'Jun 7, 2025 • 02:45 PM',
        'result' => 'Flagged',
        'result_badge' => 'bg-amber-50 text-amber-600 border-amber-200',
        'remarks' => 'Middle name discrepancy detected between LTO license and birth certificate. Sent to supervisor for review.'
    ],
    [
        'log_id' => 'VLOG-2025-0984',
        'citizen_name' => 'Renato Reyes',
        'citizen_id' => 'CTZ-2025-0501',
        'address' => 'Barangay 12, Caloocan City',
        'id_type' => 'Barangay ID (Expired)',
        'verifying_staff' => 'Staff John Cruz',
        'timestamp' => 'Jun 6, 2025 • 11:20 AM',
        'result' => 'Failed',
        'result_badge' => 'bg-rose-50 text-rose-600 border-rose-200',
        'remarks' => 'Document submitted is expired (>2 years). Requested applicant to re-upload valid government ID.'
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

    <!-- Top Action & Title Header Bar -->
    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 border-b border-slate-200/80 pb-5">
        <div class="flex items-center gap-3">
            <div class="w-10 h-10 rounded-xl bg-blue-50 text-[#0f53d1] flex items-center justify-center text-lg border border-blue-100 shadow-xs">
                <i class="fa-solid fa-address-card"></i>
            </div>
            <div>
                <h1 class="text-xl md:text-2xl font-black text-slate-900 tracking-tight">ID Verification Audit Logs</h1>
            </div>
        </div>

        <div class="flex items-center gap-2.5 flex-wrap">
            <button onclick="exportVerificationAuditCSV()" class="px-4.5 py-2.5 bg-[#0f53d1] hover:bg-[#0d46b0] text-white font-bold text-xs rounded-xl shadow-xs transition flex items-center gap-2 cursor-pointer">
                <i class="fa-solid fa-download text-xs"></i>
                <span>Export Verification Audit Log</span>
            </button>
        </div>
    </div>

    <!-- Audit Security Stat Cards Row (4 Cards) -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
        
        <!-- Card 1: Total Verifications -->
        <div class="bg-white rounded-2xl border border-slate-200 shadow-sm p-5 space-y-3">
            <div class="flex items-center justify-between">
                <span class="text-xs font-bold text-slate-400 uppercase tracking-wider">Total ID Checks Logged</span>
                <div class="w-10 h-10 rounded-xl bg-blue-50 text-[#0f53d1] flex items-center justify-center text-base border border-blue-100">
                    <i class="fa-solid fa-shield-check"></i>
                </div>
            </div>
            <div>
                <h3 class="text-2xl font-black text-slate-900 tracking-tight">1,842 Checks</h3>
                <p class="text-[11px] font-semibold text-emerald-600 flex items-center gap-1 mt-1">
                    <i class="fa-solid fa-lock"></i>
                    <span>Read-only append-only integrity</span>
                </p>
            </div>
        </div>

        <!-- Card 2: Verified Citizens -->
        <div class="bg-white rounded-2xl border border-slate-200 shadow-sm p-5 space-y-3">
            <div class="flex items-center justify-between">
                <span class="text-xs font-bold text-slate-400 uppercase tracking-wider">Passed Verification</span>
                <div class="w-10 h-10 rounded-xl bg-emerald-50 text-emerald-600 flex items-center justify-center text-base border border-emerald-100">
                    <i class="fa-solid fa-user-check"></i>
                </div>
            </div>
            <div>
                <h3 class="text-2xl font-black text-slate-900 tracking-tight">1,780 (96.6%)</h3>
                <p class="text-[11px] font-semibold text-emerald-600 flex items-center gap-1 mt-1">
                    <i class="fa-solid fa-check"></i>
                    <span>PhilSys / Government ID verified</span>
                </p>
            </div>
        </div>

        <!-- Card 3: Flagged Discrepancies -->
        <div class="bg-white rounded-2xl border border-slate-200 shadow-sm p-5 space-y-3">
            <div class="flex items-center justify-between">
                <span class="text-xs font-bold text-slate-400 uppercase tracking-wider">Flagged Discrepancies</span>
                <div class="w-10 h-10 rounded-xl bg-amber-50 text-amber-600 flex items-center justify-center text-base border border-amber-100">
                    <i class="fa-solid fa-triangle-exclamation"></i>
                </div>
            </div>
            <div>
                <h3 class="text-2xl font-black text-slate-900 tracking-tight">42 Flagged</h3>
                <p class="text-[11px] font-semibold text-amber-600 flex items-center gap-1 mt-1">
                    <i class="fa-solid fa-user-gear"></i>
                    <span>Name / DOB mismatch</span>
                </p>
            </div>
        </div>

        <!-- Card 4: Failed Verifications -->
        <div class="bg-white rounded-2xl border border-slate-200 shadow-sm p-5 space-y-3">
            <div class="flex items-center justify-between">
                <span class="text-xs font-bold text-slate-400 uppercase tracking-wider">Failed / Expired IDs</span>
                <div class="w-10 h-10 rounded-xl bg-rose-50 text-rose-600 flex items-center justify-center text-base border border-rose-100">
                    <i class="fa-solid fa-user-xmark"></i>
                </div>
            </div>
            <div>
                <h3 class="text-2xl font-black text-slate-900 tracking-tight">20 Failed</h3>
                <p class="text-[11px] font-semibold text-rose-600 flex items-center gap-1 mt-1">
                    <i class="fa-solid fa-ban"></i>
                    <span>Expired / Unreadable document</span>
                </p>
            </div>
        </div>

    </div>

    <!-- Multi-Filter & Search Bar -->
    <div class="bg-white rounded-2xl border border-slate-200 shadow-sm p-4 space-y-3">
        <div class="flex flex-col md:flex-row items-stretch md:items-center justify-between gap-3">
            
            <!-- Search Input -->
            <div class="relative flex-1">
                <i class="fa-solid fa-search absolute left-3.5 top-1/2 -translate-y-1/2 text-slate-400 text-xs"></i>
                <input type="text" id="vlogSearchInput" oninput="filterVerificationLogsTable()" placeholder="Search log ID, citizen name, staff, or ID type..." class="w-full pl-9 pr-3 py-2.5 bg-slate-50 border border-slate-200 text-slate-800 font-medium rounded-xl text-xs outline-none focus:ring-2 focus:ring-[#0f53d1]/40 focus:border-[#0f53d1]">
            </div>

            <!-- Result Filter -->
            <select id="vlogResultFilter" onchange="filterVerificationLogsTable()" class="bg-slate-50 border border-slate-200 text-slate-800 font-semibold rounded-xl py-2.5 px-3 text-xs outline-none cursor-pointer">
                <option value="">All Verification Results</option>
                <option value="Verified">Verified</option>
                <option value="Flagged">Flagged</option>
                <option value="Failed">Failed</option>
            </select>

            <!-- Staff Filter -->
            <select id="vlogStaffFilter" onchange="filterVerificationLogsTable()" class="bg-slate-50 border border-slate-200 text-slate-800 font-semibold rounded-xl py-2.5 px-3 text-xs outline-none cursor-pointer">
                <option value="">All Verifying Staff</option>
                <option value="Liza Dy">Desk Officer Liza Dy</option>
                <option value="John Cruz">Staff John Cruz</option>
            </select>
        </div>
    </div>

    <!-- ID Verification Logs Table (Read-Only Historical Record) -->
    <div class="bg-white rounded-2xl border border-slate-200 shadow-sm overflow-hidden space-y-4">
        
        <div class="p-4 border-b border-slate-100 flex items-center justify-between">
            <h3 class="text-xs font-black text-slate-900 uppercase tracking-wider">Historical Identity Check Logs</h3>
            <span class="text-[11px] font-bold text-slate-400 flex items-center gap-1">
                <i class="fa-solid fa-lock text-[10px]"></i> Immutability Enforced (Cannot be deleted/edited)
            </span>
        </div>

        <div class="overflow-x-auto custom-scrollbar">
            <table class="w-full text-left border-collapse min-w-[950px]">
                <thead>
                    <tr class="bg-slate-50/80 border-b border-slate-200 text-[10px] font-bold text-slate-400 uppercase tracking-wider">
                        <th class="py-3.5 px-4">Log ID & Citizen</th>
                        <th class="py-3.5 px-3">Government ID Type Checked</th>
                        <th class="py-3.5 px-3">Verifying Staff Officer</th>
                        <th class="py-3.5 px-3">Date & Timestamp</th>
                        <th class="py-3.5 px-3 text-center">Result</th>
                        <th class="py-3.5 px-3">Staff Verification Remarks</th>
                    </tr>
                </thead>
                <tbody id="vlogTableBody" class="divide-y divide-slate-100 text-xs font-medium text-slate-700">
                    <?php foreach ($verificationLogs as $log): ?>
                    <tr class="vlog-row hover:bg-slate-50 transition select-none" data-result="<?php echo htmlspecialchars($log['result']); ?>" data-staff="<?php echo htmlspecialchars($log['verifying_staff']); ?>">
                        <td class="py-3.5 px-4">
                            <span class="text-[10px] font-bold text-[#0f53d1] block"><?php echo $log['log_id']; ?></span>
                            <p class="font-bold text-slate-900 text-xs"><?php echo htmlspecialchars($log['citizen_name']); ?></p>
                            <span class="text-[10px] text-slate-400 font-semibold"><?php echo $log['citizen_id']; ?></span>
                        </td>
                        <td class="py-3.5 px-3 font-bold text-slate-800">
                            <span class="flex items-center gap-1.5"><i class="fa-solid fa-id-card text-[#0f53d1] text-xs"></i> <?php echo htmlspecialchars($log['id_type']); ?></span>
                        </td>
                        <td class="py-3.5 px-3 font-bold text-slate-800">
                            <?php echo htmlspecialchars($log['verifying_staff']); ?>
                        </td>
                        <td class="py-3.5 px-3 whitespace-nowrap font-bold text-slate-700 text-[11px]">
                            <?php echo $log['timestamp']; ?>
                        </td>
                        <td class="py-3.5 px-3 text-center">
                            <span class="px-2.5 py-0.5 rounded-full font-bold text-[10px] border <?php echo $log['result_badge']; ?>">
                                <?php echo $log['result']; ?>
                            </span>
                        </td>
                        <td class="py-3.5 px-3 text-slate-600 font-medium text-[11px] max-w-sm">
                            <?php echo htmlspecialchars($log['remarks']); ?>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

    </div>

</main>

<script>
function filterVerificationLogsTable() {
    const searchVal = document.getElementById('vlogSearchInput').value.toLowerCase();
    const resultVal = document.getElementById('vlogResultFilter').value.toLowerCase();
    const staffVal = document.getElementById('vlogStaffFilter').value.toLowerCase();

    const rows = document.querySelectorAll('.vlog-row');

    rows.forEach(r => {
        const text = r.innerText.toLowerCase();
        const res = (r.getAttribute('data-result') || '').toLowerCase();
        const staff = (r.getAttribute('data-staff') || '').toLowerCase();

        const matchesSearch = !searchVal || text.includes(searchVal);
        const matchesResult = !resultVal || res.includes(resultVal);
        const matchesStaff = !staffVal || staff.includes(staffVal);

        r.style.display = (matchesSearch && matchesResult && matchesStaff) ? '' : 'none';
    });
}

function exportVerificationAuditCSV() {
    alert('Exporting Read-Only ID Verification Audit Trail (CSV)...');
}
</script>

<?php include '../../includes/footer.php'; ?>
