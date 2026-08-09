<?php
$basePath = '../../';
require_once __DIR__ . '/../../src/bootstrap.php';

include '../../includes/header.php';
include '../../includes/sidebar.php';

// Issued Certificates Dataset
$issuedCertificates = [
    [
        'ref_no' => 'CLR-2025-0891',
        'req_id' => 'REQ-2025-0470',
        'citizen_id' => 'CTZ-2025-0142',
        'requester' => 'Juan Dela Cruz',
        'cert_type' => 'Barangay Clearance',
        'date_released' => 'Jun 8, 2025 • 10:15 AM',
        'released_by' => 'Staff: Liza Dy',
        'or_no' => 'OR-984102',
        'fee' => '₱50.00',
        'reprint_count' => 0,
        'reprint_label' => 'Original Copy'
    ],
    [
        'ref_no' => 'IND-2025-0342',
        'req_id' => 'REQ-2025-0468',
        'citizen_id' => 'CTZ-2025-0189',
        'requester' => 'Maria Santos',
        'cert_type' => 'Certificate of Indigency',
        'date_released' => 'Jun 8, 2025 • 09:45 AM',
        'released_by' => 'Staff: John Cruz',
        'or_no' => 'WAIVED-INDIGENT',
        'fee' => '₱0.00 (Waived)',
        'reprint_count' => 1,
        'reprint_label' => 'Reprinted (1x)'
    ],
    [
        'ref_no' => 'JOB-2025-0120',
        'req_id' => 'REQ-2025-0465',
        'citizen_id' => 'CTZ-2025-0210',
        'requester' => 'Ana Marie Reyes',
        'cert_type' => 'First-Time Jobseeker Certificate (RA 11261)',
        'date_released' => 'Jun 7, 2025 • 03:20 PM',
        'released_by' => 'Staff: Liza Dy',
        'or_no' => 'WAIVED-RA11261',
        'fee' => '₱0.00 (Waived)',
        'reprint_count' => 0,
        'reprint_label' => 'Original Copy'
    ],
    [
        'ref_no' => 'BUS-2025-0512',
        'req_id' => 'REQ-2025-0450',
        'citizen_id' => 'CTZ-2025-0305',
        'requester' => 'Pedro Ramos',
        'cert_type' => 'Business Permit Clearance',
        'date_released' => 'Jun 6, 2025 • 01:10 PM',
        'released_by' => 'Staff: John Cruz',
        'or_no' => 'OR-984088',
        'fee' => '₱200.00',
        'reprint_count' => 2,
        'reprint_label' => 'Reprinted (2x)'
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

    @media print {
        body * {
            visibility: hidden;
        }
        #printableCertificateCanvas, #printableCertificateCanvas * {
            visibility: visible;
        }
        #printableCertificateCanvas {
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
        }
    }
</style>

<main class="flex-1 p-4 md:p-6 lg:p-8 w-full overflow-y-auto bg-slate-50/50 min-h-[calc(100vh-4rem)] space-y-6">

    <!-- Top Action & Title Header Bar -->
    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 border-b border-slate-200/80 pb-5">
        <div class="flex items-center gap-3">
            <div class="w-10 h-10 rounded-xl bg-purple-50 text-purple-600 flex items-center justify-center text-lg border border-purple-100 shadow-xs">
                <i class="fa-solid fa-stamp"></i>
            </div>
            <div>
                <h1 class="text-xl md:text-2xl font-black text-slate-900 tracking-tight">Issued Certificates</h1>
                <p class="text-xs text-slate-500 font-medium mt-0.5">Audit log of released certificates, official PDF print layout & reprint tracking</p>
            </div>
        </div>

        <div class="flex items-center gap-2 flex-wrap">
            <button onclick="exportIssuedLogCSV()" class="px-4 py-2.5 bg-white border border-slate-200 text-slate-700 hover:bg-slate-50 font-bold text-xs rounded-xl shadow-xs transition flex items-center gap-2 cursor-pointer">
                <i class="fa-solid fa-download text-slate-400"></i>
                <span>Export Issued Log</span>
            </button>
        </div>
    </div>

    <!-- KPI Cards Row -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
        
        <!-- Card 1: Total Issued Certificates -->
        <div class="bg-white rounded-2xl border border-slate-200 shadow-sm p-5 space-y-2">
            <span class="text-xs font-bold text-slate-400 uppercase tracking-wider">Total Released Certificates</span>
            <h3 class="text-2xl font-black text-slate-900">1,248</h3>
            <p class="text-[11px] font-bold text-emerald-600">+12% vs last month</p>
        </div>

        <!-- Card 2: Released This Month -->
        <div class="bg-white rounded-2xl border border-slate-200 shadow-sm p-5 space-y-2">
            <span class="text-xs font-bold text-slate-400 uppercase tracking-wider">Issued This Month</span>
            <h3 class="text-2xl font-black text-slate-900">184</h3>
            <p class="text-[11px] font-bold text-blue-600">Active barangay log</p>
        </div>

        <!-- Card 3: Reprints Tracked -->
        <div class="bg-white rounded-2xl border border-slate-200 shadow-sm p-5 space-y-2">
            <span class="text-xs font-bold text-slate-400 uppercase tracking-wider">Reprints Logged</span>
            <h3 class="text-2xl font-black text-slate-900">14 Reprints</h3>
            <p class="text-[11px] font-bold text-purple-600">Tracked for lost copies</p>
        </div>

        <!-- Card 4: Official Control Numbers -->
        <div class="bg-white rounded-2xl border border-slate-200 shadow-sm p-5 space-y-2">
            <span class="text-xs font-bold text-slate-400 uppercase tracking-wider">Barangay Seal Integrity</span>
            <h3 class="text-2xl font-black text-slate-900">100% Verified</h3>
            <p class="text-[11px] font-bold text-emerald-600">Unique control reference</p>
        </div>

    </div>

    <!-- Issued Certificates Log Table -->
    <div class="bg-white rounded-2xl border border-slate-200 shadow-sm overflow-hidden space-y-4">
        
        <div class="p-4 border-b border-slate-100 flex flex-col md:flex-row items-stretch md:items-center justify-between gap-3">
            <h3 class="text-xs font-black text-slate-900 uppercase tracking-wider">Issued Certificates Audit Log</h3>

            <!-- Search Bar -->
            <div class="relative w-full md:w-80">
                <i class="fa-solid fa-search absolute left-3.5 top-1/2 -translate-y-1/2 text-slate-400 text-xs"></i>
                <input type="text" id="issuedSearchInput" oninput="filterIssuedTable()" placeholder="Search control no., requester, or type..." class="w-full pl-9 pr-3 py-2 bg-slate-50 border border-slate-200 text-slate-800 font-medium rounded-xl text-xs outline-none focus:ring-2 focus:ring-[#0f53d1]/40 focus:border-[#0f53d1]">
            </div>
        </div>

        <div class="overflow-x-auto custom-scrollbar">
            <table class="w-full text-left border-collapse min-w-[950px]">
                <thead>
                    <tr class="bg-slate-50/80 border-b border-slate-200 text-[10px] font-bold text-slate-400 uppercase tracking-wider">
                        <th class="py-3.5 px-4">Control / Reference No.</th>
                        <th class="py-3.5 px-3">Certificate Type</th>
                        <th class="py-3.5 px-3">Requester Name & ID</th>
                        <th class="py-3.5 px-3">Date Released & Staff</th>
                        <th class="py-3.5 px-3">OR Number & Fee</th>
                        <th class="py-3.5 px-3 text-center">Reprint Tracking</th>
                        <th class="py-3.5 px-3 text-center">Print / Reprint Actions</th>
                    </tr>
                </thead>
                <tbody id="issuedTableBody" class="divide-y divide-slate-100 text-xs font-medium text-slate-700">
                    <?php foreach ($issuedCertificates as $cert): ?>
                    <tr class="issued-row hover:bg-slate-50 transition cursor-pointer select-none">
                        <td class="py-3.5 px-4 font-black text-[#0f53d1] whitespace-nowrap">
                            <span class="flex items-center gap-1.5"><i class="fa-solid fa-certificate text-xs text-[#0f53d1]"></i> <?php echo $cert['ref_no']; ?></span>
                        </td>
                        <td class="py-3.5 px-3 font-bold text-slate-900">
                            <?php echo htmlspecialchars($cert['cert_type']); ?>
                        </td>
                        <td class="py-3.5 px-3">
                            <p class="font-bold text-slate-900"><?php echo htmlspecialchars($cert['requester']); ?></p>
                            <p class="text-[10px] text-slate-400 font-semibold"><?php echo $cert['citizen_id']; ?></p>
                        </td>
                        <td class="py-3.5 px-3 whitespace-nowrap">
                            <p class="font-bold text-slate-800 text-[11px]"><?php echo $cert['date_released']; ?></p>
                            <p class="text-[10px] text-slate-400 font-semibold"><?php echo $cert['released_by']; ?></p>
                        </td>
                        <td class="py-3.5 px-3 whitespace-nowrap">
                            <p class="font-bold text-slate-800 text-[11px]"><?php echo $cert['or_no']; ?></p>
                            <p class="text-[10px] text-emerald-600 font-bold"><?php echo $cert['fee']; ?></p>
                        </td>
                        <td class="py-3.5 px-3 text-center">
                            <span class="px-2.5 py-0.5 rounded-full text-[10px] font-bold border <?php echo $cert['reprint_count'] > 0 ? 'bg-purple-50 text-purple-600 border-purple-200' : 'bg-slate-100 text-slate-600 border-slate-200'; ?>">
                                <?php echo $cert['reprint_label']; ?>
                            </span>
                        </td>
                        <td class="py-3.5 px-3 text-center">
                            <div class="flex items-center justify-center gap-1.5">
                                <button onclick="printOfficialCopy('<?php echo $cert['ref_no']; ?>')" class="px-2.5 py-1 bg-[#0f53d1] hover:bg-[#0d46b0] text-white font-bold text-[11px] rounded-lg transition shadow-xs cursor-pointer flex items-center gap-1">
                                    <i class="fa-solid fa-print text-[10px]"></i> Print PDF
                                </button>
                                <button onclick="openReprintModal('<?php echo $cert['ref_no']; ?>')" class="px-2.5 py-1 bg-white border border-slate-200 hover:bg-slate-50 text-slate-700 font-bold text-[11px] rounded-lg transition cursor-pointer flex items-center gap-1">
                                    <i class="fa-solid fa-rotate-right text-[10px] text-slate-400"></i> Reprint
                                </button>
                            </div>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

    </div>

</main>

<!-- PRINTABLE CERTIFICATE MODAL (Official Barangay Letterhead & Seal) -->
<div id="printModal" class="hidden fixed inset-0 z-50 bg-slate-900/70 backdrop-blur-xs flex items-center justify-center p-4">
    <div class="bg-white rounded-2xl max-w-3xl w-full p-6 sm:p-8 shadow-2xl border border-slate-100 space-y-6 max-h-[90vh] overflow-y-auto custom-scrollbar">
        
        <div class="flex items-center justify-between border-b border-slate-100 pb-3">
            <div class="flex items-center gap-2">
                <span class="px-2.5 py-1 rounded-md bg-emerald-50 text-emerald-600 font-bold text-xs border border-emerald-200">Official Document Print View</span>
                <span id="printRefNo" class="text-xs font-bold text-slate-400">CLR-2025-0891</span>
            </div>
            <button onclick="closePrintModal()" class="w-8 h-8 rounded-lg hover:bg-slate-100 text-slate-400 hover:text-slate-700 transition flex items-center justify-center cursor-pointer">
                <i class="fa-solid fa-xmark text-sm"></i>
            </button>
        </div>

        <!-- Printable Document Canvas -->
        <div id="printableCertificateCanvas" class="p-8 border border-slate-300 rounded-xl bg-white shadow-inner space-y-6 font-serif text-slate-900">
            <!-- Barangay Header -->
            <div class="text-center border-b-2 border-slate-900 pb-4 space-y-1">
                <p class="text-xs uppercase font-bold tracking-wider text-slate-600">Republic of the Philippines &bull; City of Caloocan</p>
                <h2 class="text-lg font-black tracking-tight text-slate-900 uppercase">OFFICE OF THE PUNONG BARANGAY</h2>
                <p class="text-xs font-semibold text-slate-500">Barangay 178, Camarin, District 3, Caloocan City</p>
            </div>

            <!-- Title -->
            <div class="text-center pt-2">
                <h1 id="printCertTitle" class="text-2xl font-black uppercase tracking-widest text-slate-900 underline underline-offset-8">BARANGAY CLEARANCE</h1>
            </div>

            <!-- Content -->
            <div class="space-y-4 text-sm leading-relaxed font-sans text-slate-800 pt-4">
                <p class="font-bold">TO WHOM IT MAY CONCERN:</p>
                <p>This is to certify that <span id="printRequesterName" class="font-black underline text-slate-900">JUAN DELA CRUZ</span>, of legal age, is a bonafide resident of <span class="font-bold text-slate-900">Barangay 178, Caloocan City</span>.</p>
                <p>Official Record Check: <span class="font-bold text-emerald-700">NO DEROGATORY RECORD / CLEARED</span>.</p>
                <p>Control Ref No: <span id="printControlNo" class="font-bold text-slate-900">CLR-2025-0891</span> | OR No: <span id="printORNo" class="font-bold text-slate-900">OR-984102</span></p>
                <p>Issued on this <span class="font-bold">8th day of June, 2025</span> at Caloocan City, Philippines.</p>
            </div>

            <!-- Signature Line -->
            <div class="flex items-end justify-between pt-12 text-xs font-sans">
                <div class="space-y-1">
                    <p class="font-bold text-slate-500">Applicant Signature:</p>
                    <div class="w-40 border-b border-slate-400 h-8"></div>
                </div>

                <div class="text-center space-y-1">
                    <p class="font-black text-slate-900 text-sm uppercase">HON. ROBERTO V. DELA CRUZ</p>
                    <p class="font-bold text-slate-600 text-xs">Punong Barangay / Barangay Captain</p>
                </div>
            </div>
        </div>

        <div class="flex items-center justify-end gap-2.5 pt-2 border-t border-slate-100">
            <button onclick="closePrintModal()" class="px-4 py-2.5 text-xs font-bold text-slate-600 bg-white border border-slate-200 rounded-xl hover:bg-slate-50 transition cursor-pointer">Close</button>
            <button onclick="window.print()" class="px-5 py-2.5 text-xs font-bold text-white bg-[#0f53d1] hover:bg-[#0d46b0] rounded-xl transition shadow-xs cursor-pointer flex items-center gap-1.5">
                <i class="fa-solid fa-print text-xs"></i>
                <span>Print Document PDF</span>
            </button>
        </div>
    </div>
</div>

<!-- REPRINT REASON MODAL -->
<div id="reprintModal" class="hidden fixed inset-0 z-50 bg-slate-900/60 backdrop-blur-xs flex items-center justify-center p-4">
    <div class="bg-white rounded-2xl max-w-md w-full p-6 shadow-2xl border border-slate-100 space-y-4 animate-in fade-in zoom-in-95 duration-200">
        
        <div class="flex items-center justify-between border-b border-slate-100 pb-3">
            <h3 class="text-sm font-black text-slate-900 flex items-center gap-2">
                <i class="fa-solid fa-rotate-right text-purple-600"></i>
                <span>Reprint Certificate Copy</span>
            </h3>
            <button onclick="closeReprintModal()" class="w-7 h-7 rounded-lg hover:bg-slate-100 text-slate-400 hover:text-slate-700 transition flex items-center justify-center cursor-pointer">
                <i class="fa-solid fa-xmark text-sm"></i>
            </button>
        </div>

        <div class="space-y-3 text-xs">
            <p class="text-slate-600 font-medium">Reprinting requires logging the official reason for document audit and reprint tracking.</p>

            <div>
                <label class="font-bold text-slate-700 block mb-1">Reason for Reprint <span class="text-rose-500">*</span></label>
                <select id="reprintReasonSelect" class="w-full bg-slate-50 border border-slate-200 text-slate-800 rounded-xl p-2.5 outline-none font-medium text-xs cursor-pointer">
                    <option value="Lost Original Copy">Lost Original Copy</option>
                    <option value="Damaged Original Document">Damaged Original Document</option>
                    <option value="Additional Copy for Government Transaction">Additional Copy Required</option>
                    <option value="Correction of Typographical Error">Correction of Error</option>
                </select>
            </div>
        </div>

        <div class="flex items-center justify-end gap-2 pt-2 border-t border-slate-100">
            <button onclick="closeReprintModal()" class="px-4 py-2.5 text-xs font-bold text-slate-600 bg-white border border-slate-200 rounded-xl hover:bg-slate-50 transition cursor-pointer">Cancel</button>
            <button onclick="confirmReprint()" class="px-4 py-2.5 text-xs font-bold text-white bg-purple-600 hover:bg-purple-700 rounded-xl transition shadow-xs cursor-pointer flex items-center gap-1">
                <i class="fa-solid fa-print text-xs"></i>
                <span>Log Reprint & Open PDF</span>
            </button>
        </div>
    </div>
</div>

<script>
const issuedData = <?php echo json_encode(array_column($issuedCertificates, null, 'ref_no')); ?>;
let activeReprintRef = null;

function printOfficialCopy(refNo) {
    const data = issuedData[refNo];
    if (data) {
        document.getElementById('printRefNo').innerText = data.ref_no;
        document.getElementById('printCertTitle').innerText = data.cert_type.toUpperCase();
        document.getElementById('printRequesterName').innerText = data.requester.toUpperCase();
        document.getElementById('printControlNo').innerText = data.ref_no;
        document.getElementById('printORNo').innerText = data.or_no;
    }
    document.getElementById('printModal').classList.remove('hidden');
}

function closePrintModal() {
    document.getElementById('printModal').classList.add('hidden');
}

function openReprintModal(refNo) {
    activeReprintRef = refNo;
    document.getElementById('reprintModal').classList.remove('hidden');
}

function closeReprintModal() {
    document.getElementById('reprintModal').classList.add('hidden');
}

function confirmReprint() {
    const reason = document.getElementById('reprintReasonSelect').value;
    alert(`Reprint logged for ${activeReprintRef} (Reason: ${reason}). Incrementing reprint tracking log.`);
    closeReprintModal();
    printOfficialCopy(activeReprintRef);
}

function filterIssuedTable() {
    const searchVal = document.getElementById('issuedSearchInput').value.toLowerCase();
    const rows = document.querySelectorAll('.issued-row');

    rows.forEach(r => {
        const text = r.innerText.toLowerCase();
        r.style.display = (!searchVal || text.includes(searchVal)) ? '' : 'none';
    });
}

function exportIssuedLogCSV() {
    alert('Exporting Issued Certificates Log & Audit Trail (CSV)...');
}
</script>

<?php include '../../includes/footer.php'; ?>
