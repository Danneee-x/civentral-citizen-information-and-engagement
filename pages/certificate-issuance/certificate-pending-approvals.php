<?php
$basePath = '../../';
require_once __DIR__ . '/../../src/bootstrap.php';

include '../../includes/header.php';
include '../../includes/sidebar.php';

// Pending Approvals Dataset
$pendingApprovals = [
    [
        'id' => 'REQ-2025-0481',
        'citizen_id' => 'CTZ-2025-0142',
        'requester' => 'Juan Dela Cruz',
        'address' => 'Barangay 178, Camarin, District 3, Caloocan City',
        'cert_type' => 'Barangay Clearance',
        'purpose' => 'Employment (Local Job Application)',
        'date_requested' => 'Jun 8, 2025 • 09:30 AM',
        'civil_status' => 'Single',
        'resident_since' => '2015',
        'fees_status' => 'Paid (OR-984102)',
        'officer_recommendation' => 'Cleared & Verified by Desk Officer Liza Dy'
    ],
    [
        'id' => 'REQ-2025-0482',
        'citizen_id' => 'CTZ-2025-0189',
        'requester' => 'Maria Santos',
        'address' => 'Barangay 176, Bagong Silang, District 1, Caloocan City',
        'cert_type' => 'Certificate of Indigency',
        'purpose' => 'Medical Assistance (Hospitalization)',
        'date_requested' => 'Jun 8, 2025 • 10:15 AM',
        'civil_status' => 'Married',
        'resident_since' => '2010',
        'fees_status' => 'Waived (Indigent)',
        'officer_recommendation' => 'Verified Indigent Record by Social Services Officer'
    ],
    [
        'id' => 'REQ-2025-0486',
        'citizen_id' => 'CTZ-2025-0305',
        'requester' => 'Pedro Ramos',
        'address' => 'Barangay 1, District 1, Caloocan City',
        'cert_type' => 'Business Permit Clearance',
        'purpose' => 'New Sari-Sari Store Permit',
        'date_requested' => 'Jun 8, 2025 • 11:00 AM',
        'civil_status' => 'Married',
        'resident_since' => '2008',
        'fees_status' => 'Paid (OR-984105)',
        'officer_recommendation' => 'Locational & Barangay Inspection Approved'
    ],
    [
        'id' => 'REQ-2025-0487',
        'citizen_id' => 'CTZ-2025-0210',
        'requester' => 'Ana Marie Reyes',
        'address' => 'Barangay 12, District 2, Caloocan City',
        'cert_type' => 'First-Time Jobseeker Certificate (RA 11261)',
        'purpose' => 'Employment Requirement',
        'date_requested' => 'Jun 8, 2025 • 11:45 AM',
        'civil_status' => 'Single',
        'resident_since' => '2020',
        'fees_status' => 'Waived (RA 11261 First Jobseeker)',
        'officer_recommendation' => 'Oath of Undertaking Verified'
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
            <div class="w-10 h-10 rounded-xl bg-amber-50 text-amber-600 flex items-center justify-center text-lg border border-amber-100 shadow-xs">
                <i class="fa-solid fa-stamp"></i>
            </div>
            <div>
                <h1 class="text-xl md:text-2xl font-black text-slate-900 tracking-tight">Pending Approvals</h1>
                <p class="text-xs text-slate-500 font-medium mt-0.5">Approval Queue for Barangay Captain & Authorized Approving Officials</p>
            </div>
        </div>

        <div class="flex items-center gap-2 flex-wrap">
            <button onclick="approveAllSelected()" class="px-4 py-2.5 bg-emerald-600 hover:bg-emerald-700 text-white font-bold text-xs rounded-xl shadow-xs transition flex items-center gap-2 cursor-pointer">
                <i class="fa-solid fa-check-double text-xs"></i>
                <span>Bulk Approve Queue</span>
            </button>
        </div>
    </div>

    <!-- KPI Queue Summary Cards (4 Cards) -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
        
        <!-- Card 1: Pending Captain Signature -->
        <div class="bg-white rounded-2xl border border-slate-200 shadow-sm p-5 space-y-2">
            <span class="text-xs font-bold text-slate-400 uppercase tracking-wider">Awaiting Captain Approval</span>
            <h3 id="pendingCountBadge" class="text-2xl font-black text-slate-900">4 Requests</h3>
            <p class="text-[11px] font-bold text-amber-600 flex items-center gap-1">
                <i class="fa-solid fa-clock text-[10px]"></i>
                <span>Requires official signature</span>
            </p>
        </div>

        <!-- Card 2: Avg Approval Turnaround -->
        <div class="bg-white rounded-2xl border border-slate-200 shadow-sm p-5 space-y-2">
            <span class="text-xs font-bold text-slate-400 uppercase tracking-wider">Avg Approval Speed</span>
            <h3 class="text-2xl font-black text-slate-900">1.2 Hours</h3>
            <p class="text-[11px] font-bold text-emerald-600 flex items-center gap-1">
                <i class="fa-solid fa-bolt text-[10px]"></i>
                <span>High efficiency queue</span>
            </p>
        </div>

        <!-- Card 3: Approved Today -->
        <div class="bg-white rounded-2xl border border-slate-200 shadow-sm p-5 space-y-2">
            <span class="text-xs font-bold text-slate-400 uppercase tracking-wider">Approved Today</span>
            <h3 class="text-2xl font-black text-slate-900">38 Certificates</h3>
            <p class="text-[11px] font-bold text-blue-600 flex items-center gap-1">
                <i class="fa-solid fa-print text-[10px]"></i>
                <span>Moved to release queue</span>
            </p>
        </div>

        <!-- Card 4: Fee Exempted (Indigents) -->
        <div class="bg-white rounded-2xl border border-slate-200 shadow-sm p-5 space-y-2">
            <span class="text-xs font-bold text-slate-400 uppercase tracking-wider">Waived Indigent Requests</span>
            <h3 class="text-2xl font-black text-slate-900">2 Waived</h3>
            <p class="text-[11px] font-bold text-purple-600 flex items-center gap-1">
                <i class="fa-solid fa-heart text-[10px]"></i>
                <span>Zero fee (Indigency/RA 11261)</span>
            </p>
        </div>

    </div>

    <!-- Main Pending Queue Table -->
    <div class="bg-white rounded-2xl border border-slate-200 shadow-sm overflow-hidden space-y-4">
        
        <div class="p-4 border-b border-slate-100 flex items-center justify-between">
            <h3 class="text-xs font-black text-slate-900 uppercase tracking-wider">Pending Approval Queue</h3>
            <span class="text-xs font-bold text-slate-400">Click row to preview certificate document</span>
        </div>

        <div class="overflow-x-auto custom-scrollbar">
            <table class="w-full text-left border-collapse min-w-[900px]">
                <thead>
                    <tr class="bg-slate-50/80 border-b border-slate-200 text-[10px] font-bold text-slate-400 uppercase tracking-wider">
                        <th class="py-3.5 px-4">Ref ID & Requester</th>
                        <th class="py-3.5 px-3">Certificate Type</th>
                        <th class="py-3.5 px-3">Purpose</th>
                        <th class="py-3.5 px-3">Payment Status</th>
                        <th class="py-3.5 px-3">Verification Note</th>
                        <th class="py-3.5 px-3 text-center">Approval Actions</th>
                    </tr>
                </thead>
                <tbody id="pendingTableBody" class="divide-y divide-slate-100 text-xs font-medium text-slate-700">
                    <?php foreach ($pendingApprovals as $item): ?>
                    <tr class="pending-row hover:bg-slate-50 transition cursor-pointer select-none" data-id="<?php echo $item['id']; ?>">
                        <td class="py-3.5 px-4">
                            <div class="flex items-center gap-3">
                                <div class="w-9 h-9 rounded-xl bg-amber-50 text-amber-600 flex items-center justify-center shrink-0 font-black text-xs border border-amber-100">
                                    <i class="fa-solid fa-hourglass-half"></i>
                                </div>
                                <div class="min-w-0">
                                    <p class="font-bold text-slate-900 text-xs truncate"><?php echo htmlspecialchars($item['requester']); ?></p>
                                    <div class="flex items-center gap-2 mt-0.5">
                                        <span class="text-[10px] font-bold text-[#0f53d1]"><?php echo $item['id']; ?></span>
                                        <span class="text-[9px] text-slate-400 font-semibold"><?php echo $item['citizen_id']; ?></span>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="py-3.5 px-3">
                            <span class="font-bold text-slate-900 text-xs block"><?php echo htmlspecialchars($item['cert_type']); ?></span>
                            <span class="text-[10px] text-slate-400 font-medium"><?php echo htmlspecialchars($item['address']); ?></span>
                        </td>
                        <td class="py-3.5 px-3 font-medium text-slate-700">
                            <span class="truncate block max-w-xs"><?php echo htmlspecialchars($item['purpose']); ?></span>
                        </td>
                        <td class="py-3.5 px-3">
                            <span class="px-2.5 py-0.5 rounded-full font-bold text-[10px] border <?php echo strpos($item['fees_status'], 'Waived') !== false ? 'bg-purple-50 text-purple-600 border-purple-200' : 'bg-emerald-50 text-emerald-600 border-emerald-200'; ?>">
                                <?php echo $item['fees_status']; ?>
                            </span>
                        </td>
                        <td class="py-3.5 px-3 text-slate-600 font-medium text-[11px]">
                            <span><i class="fa-solid fa-shield-check text-emerald-500 mr-1"></i><?php echo htmlspecialchars($item['officer_recommendation']); ?></span>
                        </td>
                        <td class="py-3.5 px-3 text-center">
                            <div class="flex items-center justify-center gap-1.5">
                                <button onclick="event.stopPropagation(); previewCertificateDoc('<?php echo $item['id']; ?>');" class="px-2.5 py-1 bg-slate-100 hover:bg-slate-200 text-slate-700 font-bold text-[11px] rounded-lg transition flex items-center gap-1 cursor-pointer">
                                    <i class="fa-solid fa-eye text-[10px] text-slate-500"></i> Preview
                                </button>
                                <button onclick="event.stopPropagation(); approveSingleRequest(this, '<?php echo $item['id']; ?>');" class="px-2.5 py-1 bg-emerald-600 hover:bg-emerald-700 text-white font-bold text-[11px] rounded-lg transition shadow-xs cursor-pointer flex items-center gap-1">
                                    <i class="fa-solid fa-check text-[10px]"></i> Approve
                                </button>
                                <button onclick="event.stopPropagation(); openRejectModal('<?php echo $item['id']; ?>');" class="px-2 py-1 bg-white border border-rose-200 text-rose-600 hover:bg-rose-50 font-bold text-[11px] rounded-lg transition cursor-pointer">
                                    <i class="fa-solid fa-xmark text-[10px]"></i> Reject
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

<!-- DOCUMENT PREVIEW MODAL (Barangay Letterhead Format) -->
<div id="certificatePreviewModal" class="hidden fixed inset-0 z-50 bg-slate-900/70 backdrop-blur-xs flex items-center justify-center p-4">
    <div class="bg-white rounded-2xl max-w-3xl w-full p-6 sm:p-8 shadow-2xl border border-slate-100 space-y-6 animate-in fade-in zoom-in-95 duration-200 max-h-[90vh] overflow-y-auto custom-scrollbar">
        
        <div class="flex items-center justify-between border-b border-slate-100 pb-3">
            <div class="flex items-center gap-2">
                <span class="px-2.5 py-1 rounded-md bg-amber-50 text-amber-600 font-bold text-xs border border-amber-200">Official Document Preview</span>
                <span id="previewRefId" class="text-xs font-bold text-slate-400">REQ-2025-0481</span>
            </div>
            <button onclick="closePreviewModal()" class="w-8 h-8 rounded-lg hover:bg-slate-100 text-slate-400 hover:text-slate-700 transition flex items-center justify-center cursor-pointer">
                <i class="fa-solid fa-xmark text-sm"></i>
            </button>
        </div>

        <!-- Document Preview Canvas (Barangay Official Header Layout) -->
        <div class="p-8 border border-slate-300 rounded-xl bg-white shadow-inner space-y-6 font-serif text-slate-900">
            <!-- Header Header -->
            <div class="text-center border-b-2 border-slate-900 pb-4 space-y-1">
                <p class="text-xs uppercase font-bold tracking-wider text-slate-600">Republic of the Philippines &bull; City of Caloocan</p>
                <h2 class="text-lg font-black tracking-tight text-slate-900 uppercase">OFFICE OF THE PUNONG BARANGAY</h2>
                <p class="text-xs font-semibold text-slate-500">Barangay 178, Camarin, District 3, Caloocan City</p>
            </div>

            <!-- Certificate Title -->
            <div class="text-center pt-2">
                <h1 id="previewDocTitle" class="text-2xl font-black uppercase tracking-widest text-[#0f53d1] underline underline-offset-8">BARANGAY CLEARANCE</h1>
            </div>

            <!-- Body Text -->
            <div class="space-y-4 text-sm leading-relaxed font-sans text-slate-800 pt-4">
                <p class="font-bold">TO WHOM IT MAY CONCERN:</p>
                <p>This is to certify that <span id="previewDocName" class="font-black underline text-slate-900">JUAN DELA CRUZ</span>, of legal age, Filipino citizen, is a bonafide resident of <span id="previewDocAddress" class="font-bold text-slate-900">Barangay 178, Camarin, District 3, Caloocan City</span>.</p>
                <p>Based on official barangay records, the above-named individual has **NO DEROGATORY RECORD** or pending administrative case filed against him/her in this office and is known to be of good moral character.</p>
                <p>This certification is being issued upon the request of the interested party for the purpose of: <span id="previewDocPurpose" class="font-bold text-slate-900">EMPLOYMENT (LOCAL JOB APPLICATION)</span>.</p>
                <p>Issued this <span class="font-bold">8th day of June, 2025</span> at Barangay 178 Hall, Caloocan City, Philippines.</p>
            </div>

            <!-- Signature Line -->
            <div class="flex items-end justify-between pt-12 text-xs font-sans">
                <div class="space-y-1">
                    <p class="font-bold text-slate-500">Applicant Signature:</p>
                    <div class="w-40 border-b border-slate-400 h-8"></div>
                    <p class="text-[10px] text-slate-400">Thumbprint / Signature</p>
                </div>

                <div class="text-center space-y-1">
                    <p class="font-black text-slate-900 text-sm uppercase">HON. ROBERTO V. DELA CRUZ</p>
                    <p class="font-bold text-slate-600 text-xs">Punong Barangay / Barangay Captain</p>
                    <p class="text-[9px] text-slate-400 italic">Official Seal Attached</p>
                </div>
            </div>
        </div>

        <div class="flex items-center justify-end gap-2.5 pt-2">
            <button onclick="closePreviewModal()" class="px-4 py-2.5 text-xs font-bold text-slate-600 bg-white border border-slate-200 rounded-xl hover:bg-slate-50 transition cursor-pointer">Close</button>
            <button onclick="approveFromPreview()" class="px-5 py-2.5 text-xs font-bold text-white bg-emerald-600 hover:bg-emerald-700 rounded-xl transition shadow-xs cursor-pointer flex items-center gap-1.5">
                <i class="fa-solid fa-check text-xs"></i>
                <span>Approve & Assign Control No.</span>
            </button>
        </div>

    </div>
</div>

<!-- REJECTION REASON MODAL -->
<div id="rejectModal" class="hidden fixed inset-0 z-50 bg-slate-900/60 backdrop-blur-xs flex items-center justify-center p-4">
    <div class="bg-white rounded-2xl max-w-md w-full p-6 shadow-2xl border border-slate-100 space-y-4 animate-in fade-in zoom-in-95 duration-200">
        
        <div class="flex items-center justify-between border-b border-slate-100 pb-3">
            <h3 class="text-sm font-black text-slate-900 flex items-center gap-2">
                <i class="fa-solid fa-triangle-exclamation text-rose-500"></i>
                <span>Reject Certificate Request</span>
            </h3>
            <button onclick="closeRejectModal()" class="w-7 h-7 rounded-lg hover:bg-slate-100 text-slate-400 hover:text-slate-700 flex items-center justify-center cursor-pointer">
                <i class="fa-solid fa-xmark text-sm"></i>
            </button>
        </div>

        <div class="space-y-3 text-xs">
            <p class="text-slate-600 font-medium">Please specify the exact reason for rejecting this certificate request. The requester will be notified via SMS/Email.</p>

            <div>
                <label class="font-bold text-slate-700 block mb-1">Rejection Reason <span class="text-rose-500">*</span></label>
                <textarea id="rejectionReasonInput" rows="3" placeholder="e.g., Incomplete proof of address provided / Pending barangay record settlement required..." class="w-full bg-slate-50 border border-slate-200 text-slate-800 rounded-xl p-3 outline-none font-medium text-xs focus:ring-2 focus:ring-rose-500/30 focus:border-rose-500"></textarea>
            </div>
        </div>

        <div class="flex items-center justify-end gap-2 pt-2 border-t border-slate-100">
            <button onclick="closeRejectModal()" class="px-4 py-2.5 text-xs font-bold text-slate-600 bg-white border border-slate-200 rounded-xl hover:bg-slate-50 transition cursor-pointer">Cancel</button>
            <button onclick="confirmRejection()" class="px-4 py-2.5 text-xs font-bold text-white bg-rose-600 hover:bg-rose-700 rounded-xl transition shadow-xs cursor-pointer">
                Confirm Rejection & Notify
            </button>
        </div>
    </div>
</div>

<script>
const pendingData = <?php echo json_encode(array_column($pendingApprovals, null, 'id')); ?>;
let activeRejectId = null;
let activePreviewId = null;

function previewCertificateDoc(id) {
    activePreviewId = id;
    const data = pendingData[id];
    if (!data) return;

    document.getElementById('previewRefId').innerText = data.id;
    document.getElementById('previewDocTitle').innerText = data.cert_type;
    document.getElementById('previewDocName').innerText = data.requester.toUpperCase();
    document.getElementById('previewDocAddress').innerText = data.address;
    document.getElementById('previewDocPurpose').innerText = data.purpose.toUpperCase();

    document.getElementById('certificatePreviewModal').classList.remove('hidden');
}

function closePreviewModal() {
    document.getElementById('certificatePreviewModal').classList.add('hidden');
}

function approveFromPreview() {
    if (activePreviewId) {
        alert(`Certificate Request ${activePreviewId} APPROVED! Reference Control No. CLR-2025-0891 generated for printing.`);
        closePreviewModal();
    }
}

function approveSingleRequest(btn, id) {
    if (confirm(`Approve certificate request ${id}? Control number will be generated.`)) {
        btn.closest('tr').remove();
    }
}

function openRejectModal(id) {
    activeRejectId = id;
    document.getElementById('rejectionReasonInput').value = '';
    document.getElementById('rejectModal').classList.remove('hidden');
}

function closeRejectModal() {
    document.getElementById('rejectModal').classList.add('hidden');
}

function confirmRejection() {
    const reason = document.getElementById('rejectionReasonInput').value.trim();
    if (!reason) {
        alert('Please enter a rejection reason before confirming.');
        return;
    }
    alert(`Request ${activeRejectId} rejected. Rejection reason notified to requester.`);
    closeRejectModal();
}

function approveAllSelected() {
    if (confirm('Approve all pending certificate requests in the queue?')) {
        alert('All pending requests approved and moved to Issued Certificates ready queue!');
    }
}
</script>

<?php include '../../includes/footer.php'; ?>
