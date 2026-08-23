<?php
$basePath = '../../';
require_once __DIR__ . '/../../src/bootstrap.php';

include '../../includes/header.php';
include '../../includes/sidebar.php';

// Mock Configurable Fee Schedule per Certificate Type
$feeSchedule = [
    'Barangay Clearance' => 50.00,
    'Certificate of Residency' => 30.00,
    'Certificate of Indigency' => 0.00, // Waived
    'Business Permit Clearance' => 200.00,
    'Certificate of Good Moral Character' => 50.00,
    'First-Time Jobseeker Certificate (RA 11261)' => 0.00 // Waived under RA 11261
];

// Payment Records Dataset
$payments = [
    [
        'or_no' => 'OR-984102',
        'ref_no' => 'CLR-2025-0891',
        'requester' => 'Juan Dela Cruz',
        'cert_type' => 'Barangay Clearance',
        'amount_due' => 50.00,
        'amount_paid' => 50.00,
        'payment_status' => 'Paid',
        'status_class' => 'bg-emerald-50 text-emerald-600 border-emerald-200',
        'date' => 'Jun 8, 2025 • 09:35 AM',
        'cashier' => 'Treasurer Staff: Maria Santos'
    ],
    [
        'or_no' => 'WAIVED-INDIGENT',
        'ref_no' => 'IND-2025-0342',
        'requester' => 'Maria Santos',
        'cert_type' => 'Certificate of Indigency',
        'amount_due' => 0.00,
        'amount_paid' => 0.00,
        'payment_status' => 'Waived (Indigent)',
        'status_class' => 'bg-purple-50 text-purple-600 border-purple-200',
        'date' => 'Jun 8, 2025 • 09:50 AM',
        'cashier' => 'System Automated (Indigent Exemption)'
    ],
    [
        'or_no' => 'WAIVED-RA11261',
        'ref_no' => 'JOB-2025-0120',
        'requester' => 'Ana Marie Reyes',
        'cert_type' => 'First-Time Jobseeker Certificate (RA 11261)',
        'amount_due' => 0.00,
        'amount_paid' => 0.00,
        'payment_status' => 'Waived (RA 11261)',
        'status_class' => 'bg-purple-50 text-purple-600 border-purple-200',
        'date' => 'Jun 7, 2025 • 03:25 PM',
        'cashier' => 'System Automated (RA 11261 Exemption)'
    ],
    [
        'or_no' => 'OR-984088',
        'ref_no' => 'BUS-2025-0512',
        'requester' => 'Pedro Ramos',
        'cert_type' => 'Business Permit Clearance',
        'amount_due' => 200.00,
        'amount_paid' => 200.00,
        'payment_status' => 'Paid',
        'status_class' => 'bg-emerald-50 text-emerald-600 border-emerald-200',
        'date' => 'Jun 6, 2025 • 01:15 PM',
        'cashier' => 'Barangay Treasurer: John Cruz'
    ],
    [
        'or_no' => 'PENDING-OR',
        'ref_no' => 'REQ-2025-0488',
        'requester' => 'Roderick Lim',
        'cert_type' => 'Certificate of Residency',
        'amount_due' => 30.00,
        'amount_paid' => 0.00,
        'payment_status' => 'Pending',
        'status_class' => 'bg-amber-50 text-amber-600 border-amber-200',
        'date' => 'Jun 8, 2025 • 11:30 AM',
        'cashier' => 'Awaiting Cashier Collection'
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
            <div class="w-10 h-10 rounded-xl bg-emerald-50 text-emerald-600 flex items-center justify-center text-lg border border-emerald-100 shadow-xs">
                <i class="fa-solid fa-receipt"></i>
            </div>
            <div>
                <div class="flex items-center space-x-2 text-xs font-bold uppercase tracking-wider text-slate-400 mb-1">
                    <span>Barangay Certificate & ID Issuance</span>
                    <i class="fa-solid fa-chevron-right text-[8px] opacity-60"></i>
                    <span class="text-brand-dark">Payment Records</span>
                </div>
                <h1 class="text-xl md:text-2xl font-black text-slate-900 tracking-tight">Payment Records & Revenue Summary</h1>
            </div>
        </div>

        <div class="flex items-center gap-2.5 flex-wrap">
            <button onclick="openFeeScheduleModal()" class="px-4 py-2.5 bg-white border border-slate-200 text-slate-700 hover:bg-slate-50 font-bold text-xs rounded-xl shadow-xs transition flex items-center gap-2 cursor-pointer">
                <i class="fa-solid fa-sliders text-slate-400"></i>
                <span>Configure Fee Schedule</span>
            </button>

            <button onclick="exportTreasurerReport()" class="px-4.5 py-2.5 bg-[#0f53d1] hover:bg-[#0d46b0] text-white font-bold text-xs rounded-xl shadow-xs transition flex items-center gap-2 cursor-pointer">
                <i class="fa-solid fa-file-csv text-xs"></i>
                <span>Export Financial Report</span>
            </button>
        </div>
    </div>

    <!-- Daily & Monthly Revenue Summary KPI Cards (4 Cards) -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
        
        <!-- Card 1: Today's Revenue -->
        <div class="bg-white rounded-2xl border border-slate-200 shadow-sm p-5 space-y-3">
            <div class="flex items-center justify-between">
                <span class="text-xs font-bold text-slate-400 uppercase tracking-wider">Today's Revenue</span>
                <div class="w-10 h-10 rounded-xl bg-emerald-50 text-emerald-600 flex items-center justify-center text-base border border-emerald-100">
                    <i class="fa-solid fa-peso-sign"></i>
                </div>
            </div>
            <div>
                <h3 class="text-2xl font-black text-slate-900 tracking-tight">₱3,450.00</h3>
                <p class="text-[11px] font-semibold text-emerald-600 flex items-center gap-1 mt-1">
                    <i class="fa-solid fa-arrow-trend-up"></i>
                    <span>Collected today by Cashier</span>
                </p>
            </div>
        </div>

        <!-- Card 2: Monthly Total Revenue -->
        <div class="bg-white rounded-2xl border border-slate-200 shadow-sm p-5 space-y-3">
            <div class="flex items-center justify-between">
                <span class="text-xs font-bold text-slate-400 uppercase tracking-wider">Monthly Collections</span>
                <div class="w-10 h-10 rounded-xl bg-blue-50 text-[#0f53d1] flex items-center justify-center text-base border border-blue-100">
                    <i class="fa-solid fa-building-columns"></i>
                </div>
            </div>
            <div>
                <h3 class="text-2xl font-black text-slate-900 tracking-tight">₱84,200.00</h3>
                <p class="text-[11px] font-semibold text-emerald-600 flex items-center gap-1 mt-1">
                    <i class="fa-solid fa-circle-check"></i>
                    <span>For Treasurer Reconciliation</span>
                </p>
            </div>
        </div>

        <!-- Card 3: Waived Indigent / RA 11261 -->
        <div class="bg-white rounded-2xl border border-slate-200 shadow-sm p-5 space-y-3">
            <div class="flex items-center justify-between">
                <span class="text-xs font-bold text-slate-400 uppercase tracking-wider">Total Fees Waived</span>
                <div class="w-10 h-10 rounded-xl bg-purple-50 text-purple-600 flex items-center justify-center text-base border border-purple-100">
                    <i class="fa-solid fa-hand-holding-heart"></i>
                </div>
            </div>
            <div>
                <h3 class="text-2xl font-black text-slate-900 tracking-tight">₱12,500.00</h3>
                <p class="text-[11px] font-semibold text-purple-600 flex items-center gap-1 mt-1">
                    <i class="fa-solid fa-shield-heart"></i>
                    <span>250 Indigent & RA 11261 Exemptions</span>
                </p>
            </div>
        </div>

        <!-- Card 4: Pending OR Payments -->
        <div class="bg-white rounded-2xl border border-slate-200 shadow-sm p-5 space-y-3">
            <div class="flex items-center justify-between">
                <span class="text-xs font-bold text-slate-400 uppercase tracking-wider">Pending Payments</span>
                <div class="w-10 h-10 rounded-xl bg-amber-50 text-amber-600 flex items-center justify-center text-base border border-amber-100">
                    <i class="fa-solid fa-clock-rotate-left"></i>
                </div>
            </div>
            <div>
                <h3 class="text-2xl font-black text-slate-900 tracking-tight">₱1,200.00</h3>
                <p class="text-[11px] font-semibold text-amber-600 flex items-center gap-1 mt-1">
                    <i class="fa-solid fa-receipt"></i>
                    <span>Awaiting OR issuing</span>
                </p>
            </div>
        </div>

    </div>

    <!-- Transactions Log Table -->
    <div class="bg-white rounded-2xl border border-slate-200 shadow-sm overflow-hidden space-y-4">
        
        <div class="p-4 border-b border-slate-100 flex flex-col md:flex-row items-stretch md:items-center justify-between gap-3">
            <h3 class="text-xs font-black text-slate-900 uppercase tracking-wider">Payment Transactions Directory</h3>

            <div class="flex items-center gap-3">
                <select id="paymentStatusFilter" onchange="filterPaymentTable()" class="bg-slate-50 border border-slate-200 text-slate-800 font-semibold rounded-xl py-2 px-3 text-xs outline-none cursor-pointer">
                    <option value="">All Payment Statuses</option>
                    <option value="Paid">Paid</option>
                    <option value="Waived">Waived</option>
                    <option value="Pending">Pending</option>
                </select>

                <div class="relative w-full md:w-64">
                    <i class="fa-solid fa-search absolute left-3.5 top-1/2 -translate-y-1/2 text-slate-400 text-xs"></i>
                    <input type="text" id="paymentSearchInput" oninput="filterPaymentTable()" placeholder="Search OR No., Requester..." class="w-full pl-9 pr-3 py-2 bg-slate-50 border border-slate-200 text-slate-800 font-medium rounded-xl text-xs outline-none focus:ring-2 focus:ring-[#0f53d1]/40 focus:border-[#0f53d1]">
                </div>
            </div>
        </div>

        <div class="overflow-x-auto custom-scrollbar">
            <table class="w-full text-left border-collapse min-w-[950px]">
                <thead>
                    <tr class="bg-slate-50/80 border-b border-slate-200 text-[10px] font-bold text-slate-400 uppercase tracking-wider">
                        <th class="py-3.5 px-4">Official Receipt (OR) No.</th>
                        <th class="py-3.5 px-3">Control Ref & Requester</th>
                        <th class="py-3.5 px-3">Certificate Type</th>
                        <th class="py-3.5 px-3">Amount Paid / Fee</th>
                        <th class="py-3.5 px-3 text-center">Payment Status</th>
                        <th class="py-3.5 px-3">Date & Cashier</th>
                        <th class="py-3.5 px-3 text-center">Actions</th>
                    </tr>
                </thead>
                <tbody id="paymentTableBody" class="divide-y divide-slate-100 text-xs font-medium text-slate-700">
                    <?php foreach ($payments as $pay): ?>
                    <tr class="payment-row hover:bg-slate-50 transition cursor-pointer select-none" data-status="<?php echo htmlspecialchars($pay['payment_status']); ?>">
                        <td class="py-3.5 px-4 font-black text-slate-900 whitespace-nowrap">
                            <span class="flex items-center gap-1.5"><i class="fa-solid fa-receipt text-xs text-emerald-600"></i> <?php echo $pay['or_no']; ?></span>
                        </td>
                        <td class="py-3.5 px-3">
                            <p class="font-bold text-slate-900"><?php echo htmlspecialchars($pay['requester']); ?></p>
                            <p class="text-[10px] text-[#0f53d1] font-semibold"><?php echo $pay['ref_no']; ?></p>
                        </td>
                        <td class="py-3.5 px-3 font-bold text-slate-900">
                            <?php echo htmlspecialchars($pay['cert_type']); ?>
                        </td>
                        <td class="py-3.5 px-3 font-black text-emerald-600 whitespace-nowrap">
                            ₱<?php echo number_format($pay['amount_paid'], 2); ?>
                        </td>
                        <td class="py-3.5 px-3 text-center">
                            <span class="px-2.5 py-0.5 rounded-full text-[10px] font-bold border <?php echo $pay['status_class']; ?>">
                                <?php echo $pay['payment_status']; ?>
                            </span>
                        </td>
                        <td class="py-3.5 px-3 whitespace-nowrap">
                            <p class="font-bold text-slate-800 text-[11px]"><?php echo $pay['date']; ?></p>
                            <p class="text-[10px] text-slate-400 font-semibold"><?php echo $pay['cashier']; ?></p>
                        </td>
                        <td class="py-3.5 px-3 text-center">
                            <button onclick="printReceipt('<?php echo $pay['or_no']; ?>')" class="w-7 h-7 rounded-lg hover:bg-slate-100 text-slate-400 hover:text-emerald-600 flex items-center justify-center transition mx-auto cursor-pointer" title="Print OR Receipt"><i class="fa-solid fa-print text-xs"></i></button>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

    </div>

</main>

<!-- CONFIGURE FEE SCHEDULE MODAL -->
<div id="feeScheduleModal" class="hidden fixed inset-0 z-50 bg-slate-900/60 backdrop-blur-xs flex items-center justify-center p-4">
    <div class="bg-white rounded-2xl max-w-lg w-full p-6 shadow-2xl border border-slate-100 space-y-5 animate-in fade-in zoom-in-95 duration-200">
        
        <div class="flex items-center justify-between border-b border-slate-100 pb-3">
            <div class="flex items-center gap-2">
                <div class="w-8 h-8 rounded-lg bg-emerald-50 text-emerald-600 flex items-center justify-center text-sm border border-emerald-100">
                    <i class="fa-solid fa-sliders"></i>
                </div>
                <h3 class="text-sm font-black text-slate-900">Certificate Fee Schedule (Settings)</h3>
            </div>
            <button onclick="closeFeeScheduleModal()" class="w-8 h-8 rounded-lg hover:bg-slate-100 text-slate-400 hover:text-slate-700 transition flex items-center justify-center cursor-pointer">
                <i class="fa-solid fa-xmark text-sm"></i>
            </button>
        </div>

        <div class="space-y-3 text-xs">
            <p class="text-slate-500 font-medium">Configure standard fees per certificate type. Fee exemption applies automatically for Indigents and RA 11261.</p>

            <div class="space-y-2.5">
                <?php foreach ($feeSchedule as $type => $fee): ?>
                <div class="p-3 bg-slate-50 border border-slate-200 rounded-xl flex items-center justify-between">
                    <span class="font-bold text-slate-800 text-xs"><?php echo $type; ?></span>
                    <div class="flex items-center gap-1">
                        <span class="font-bold text-slate-400">₱</span>
                        <input type="number" step="10" value="<?php echo number_format($fee, 2, '.', ''); ?>" class="w-24 bg-white border border-slate-200 text-slate-800 font-bold rounded-lg p-1.5 text-xs text-right outline-none">
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="flex items-center justify-end gap-2.5 pt-3 border-t border-slate-100">
            <button onclick="closeFeeScheduleModal()" class="px-4 py-2 text-xs font-bold text-slate-600 bg-white border border-slate-200 rounded-xl hover:bg-slate-50 transition cursor-pointer">Cancel</button>
            <button onclick="saveFeeSchedule()" class="px-5 py-2 text-xs font-bold text-white bg-emerald-600 hover:bg-emerald-700 rounded-xl transition shadow-xs cursor-pointer">Save Fee Schedule</button>
        </div>
    </div>
</div>

<script>
function openFeeScheduleModal() {
    document.getElementById('feeScheduleModal').classList.remove('hidden');
}

function closeFeeScheduleModal() {
    document.getElementById('feeScheduleModal').classList.add('hidden');
}

function saveFeeSchedule() {
    alert('Certificate fee schedule updated successfully!');
    closeFeeScheduleModal();
}

function filterPaymentTable() {
    const searchVal = document.getElementById('paymentSearchInput').value.toLowerCase();
    const statusVal = document.getElementById('paymentStatusFilter').value.toLowerCase();

    const rows = document.querySelectorAll('.payment-row');
    rows.forEach(r => {
        const text = r.innerText.toLowerCase();
        const status = (r.getAttribute('data-status') || '').toLowerCase();
        r.style.display = (!searchVal || text.includes(searchVal)) && (!statusVal || status.includes(statusVal)) ? '' : 'none';
    });
}

function printReceipt(orNo) {
    alert(`Printing Official Receipt (${orNo}) for Barangay Treasurer reconciliation...`);
}

function exportTreasurerReport() {
    alert('Exporting Barangay Treasurer Financial Report (CSV/PDF)...');
}
</script>

<?php include '../../includes/footer.php'; ?>
