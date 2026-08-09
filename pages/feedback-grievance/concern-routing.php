<?php
$basePath = '../../';
require_once __DIR__ . '/../../src/bootstrap.php';

include '../../includes/header.php';
include '../../includes/sidebar.php';

// Kanban Board Concerns Dataset
$kanbanColumns = [
    'unassigned' => [
        'title' => 'Unassigned Queue',
        'badge' => '2 Tickets',
        'color' => 'bg-slate-100 text-slate-700 border-slate-200',
        'items' => [
            [
                'id' => 'TCK-2025-0261',
                'title' => 'Clogged drainage causing street flooding during rain',
                'category' => 'Infrastructure',
                'category_badge' => 'bg-blue-50 text-[#0f53d1] border-blue-200',
                'location' => '10th Avenue Corner 4th St, Barangay 88',
                'priority' => 'High',
                'priority_badge' => 'bg-amber-50 text-amber-600 border-amber-200',
                'date_filed' => 'Jun 8 • 11:30 AM',
                'assigned_to' => 'Unassigned',
                'sla' => '3 Days SLA'
            ],
            [
                'id' => 'TCK-2025-0262',
                'title' => 'Broken street lamp creating dark alley hazard',
                'category' => 'Infrastructure',
                'category_badge' => 'bg-blue-50 text-[#0f53d1] border-blue-200',
                'location' => 'Phase 2 Alley, Barangay 176',
                'priority' => 'Medium',
                'priority_badge' => 'bg-slate-100 text-slate-700 border-slate-200',
                'date_filed' => 'Jun 8 • 10:45 AM',
                'assigned_to' => 'Unassigned',
                'sla' => '3 Days SLA'
            ]
        ]
    ],
    'dispatched' => [
        'title' => 'Dispatched to Committee / Tanod',
        'badge' => '3 Tickets',
        'color' => 'bg-blue-50 text-[#0f53d1] border-blue-200',
        'items' => [
            [
                'id' => 'TCK-2025-0259',
                'title' => 'Uncollected garbage bags piling up at Market Alleyway',
                'category' => 'Sanitation',
                'category_badge' => 'bg-emerald-50 text-emerald-600 border-emerald-200',
                'location' => 'Market Alleyway, Barangay 176',
                'priority' => 'High',
                'priority_badge' => 'bg-amber-50 text-amber-600 border-amber-200',
                'date_filed' => 'Jun 8 • 10:15 AM',
                'assigned_to' => 'Kagawad Liza Dy (Health & Sanitation)',
                'sla' => '18h remaining'
            ],
            [
                'id' => 'TCK-2025-0260',
                'title' => 'Loud videoke disturbance past midnight',
                'category' => 'Noise Complaint',
                'category_badge' => 'bg-purple-50 text-purple-600 border-purple-200',
                'location' => '5th Avenue Street, Barangay 12',
                'priority' => 'Medium',
                'priority_badge' => 'bg-slate-100 text-slate-700 border-slate-200',
                'date_filed' => 'Jun 7 • 11:45 PM',
                'assigned_to' => 'Chief Tanod Roberto Ramos (Peacekeeping)',
                'sla' => '1d remaining'
            ]
        ]
    ],
    'in_inspection' => [
        'title' => 'In-Field Inspection & Action',
        'badge' => '2 Tickets',
        'color' => 'bg-amber-50 text-amber-600 border-amber-200',
        'items' => [
            [
                'id' => 'TCK-2025-0258',
                'title' => 'Large pothole along Camarin Road causing motor accidents',
                'category' => 'Infrastructure',
                'category_badge' => 'bg-blue-50 text-[#0f53d1] border-blue-200',
                'location' => 'Camarin Road, Barangay 178',
                'priority' => 'Urgent',
                'priority_badge' => 'bg-rose-50 text-rose-600 border-rose-200',
                'date_filed' => 'Jun 8 • 09:30 AM',
                'assigned_to' => 'Kagawad Mark Santos (Infrastructure)',
                'sla' => '2d remaining'
            ]
        ]
    ],
    'pending_verification' => [
        'title' => 'Pending Resolution Verification',
        'badge' => '1 Ticket',
        'color' => 'bg-purple-50 text-purple-600 border-purple-200',
        'items' => [
            [
                'id' => 'TCK-2025-0255',
                'title' => 'Water pipe leak flooding Barangay Hall entrance',
                'category' => 'Utilities',
                'category_badge' => 'bg-indigo-50 text-indigo-600 border-indigo-200',
                'location' => 'Main Gate, Barangay 178',
                'priority' => 'High',
                'priority_badge' => 'bg-amber-50 text-amber-600 border-amber-200',
                'date_filed' => 'Jun 7 • 08:00 AM',
                'assigned_to' => 'Engr. Mark Santos (Engineering Office)',
                'sla' => 'Completed • Awaiting Captain Sign-off'
            ]
        ]
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
                <i class="fa-solid fa-route"></i>
            </div>
            <div>
                <h1 class="text-xl md:text-2xl font-black text-slate-900 tracking-tight">Concern Routing & Dispatch Board</h1>
            </div>
        </div>

        <div class="flex items-center gap-2.5 flex-wrap">
            <button onclick="exportKanbanDispatchCSV()" class="px-4 py-2.5 bg-white border border-slate-200 text-slate-700 hover:bg-slate-50 font-bold text-xs rounded-xl shadow-xs transition flex items-center gap-2 cursor-pointer">
                <i class="fa-solid fa-download text-slate-400"></i>
                <span>Export Dispatch Log</span>
            </button>
        </div>
    </div>

    <!-- Department & Committee Dispatch Summary KPI Row (4 Cards) -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
        
        <!-- Card 1: Active Dispatches -->
        <div class="bg-white rounded-2xl border border-slate-200 shadow-sm p-4 flex items-center justify-between">
            <div>
                <span class="text-[10px] font-bold text-slate-400 uppercase tracking-wider block">Active Dispatches</span>
                <h3 class="text-xl font-black text-slate-900 mt-0.5">8 Concerns</h3>
            </div>
            <div class="w-10 h-10 rounded-xl bg-blue-50 text-[#0f53d1] flex items-center justify-center text-base border border-blue-100">
                <i class="fa-solid fa-route"></i>
            </div>
        </div>

        <!-- Card 2: Unassigned Queue -->
        <div class="bg-white rounded-2xl border border-slate-200 shadow-sm p-4 flex items-center justify-between">
            <div>
                <span class="text-[10px] font-bold text-slate-400 uppercase tracking-wider block">Awaiting Assignment</span>
                <h3 class="text-xl font-black text-amber-600 mt-0.5">2 Unassigned</h3>
            </div>
            <div class="w-10 h-10 rounded-xl bg-amber-50 text-amber-600 flex items-center justify-center text-base border border-amber-100">
                <i class="fa-solid fa-user-clock"></i>
            </div>
        </div>

        <!-- Card 3: In-Field Inspection -->
        <div class="bg-white rounded-2xl border border-slate-200 shadow-sm p-4 flex items-center justify-between">
            <div>
                <span class="text-[10px] font-bold text-slate-400 uppercase tracking-wider block">In-Field Teams</span>
                <h3 class="text-xl font-black text-indigo-600 mt-0.5">2 Teams On-Site</h3>
            </div>
            <div class="w-10 h-10 rounded-xl bg-indigo-50 text-indigo-600 flex items-center justify-center text-base border border-indigo-100">
                <i class="fa-solid fa-person-digging"></i>
            </div>
        </div>

        <!-- Card 4: Pending Verification -->
        <div class="bg-white rounded-2xl border border-slate-200 shadow-sm p-4 flex items-center justify-between">
            <div>
                <span class="text-[10px] font-bold text-slate-400 uppercase tracking-wider block">Pending Verification</span>
                <h3 class="text-xl font-black text-purple-600 mt-0.5">1 For Sign-off</h3>
            </div>
            <div class="w-10 h-10 rounded-xl bg-purple-50 text-purple-600 flex items-center justify-center text-base border border-purple-100">
                <i class="fa-solid fa-stamp"></i>
            </div>
        </div>

    </div>

    <!-- KANBAN BOARD CONTAINER (4 COLUMNS) -->
    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-5 items-start">
        
        <?php foreach ($kanbanColumns as $colKey => $col): ?>
        <!-- Column Card -->
        <div class="bg-slate-100/60 rounded-2xl border border-slate-200/80 p-4 space-y-3 flex flex-col min-h-[520px]">
            
            <!-- Column Header -->
            <div class="flex items-center justify-between border-b border-slate-200/80 pb-3">
                <h3 class="text-xs font-black text-slate-900 uppercase tracking-wider flex items-center gap-2">
                    <span class="w-2 h-2 rounded-full bg-[#0f53d1]"></span>
                    <span><?php echo $col['title']; ?></span>
                </h3>
                <span class="px-2 py-0.5 rounded-full text-[10px] font-bold border <?php echo $col['color']; ?>">
                    <?php echo $col['badge']; ?>
                </span>
            </div>

            <!-- Kanban Column Cards List -->
            <div class="space-y-3 flex-1 overflow-y-auto custom-scrollbar max-h-[620px]">
                
                <?php foreach ($col['items'] as $item): ?>
                <div class="bg-white rounded-xl border border-slate-200 shadow-xs p-4 space-y-3 hover:border-blue-300 transition cursor-pointer" onclick="openInspectionLogModal('<?php echo $item['id']; ?>')">
                    
                    <div class="flex items-center justify-between text-[10px]">
                        <span class="font-bold text-[#0f53d1]"><?php echo $item['id']; ?></span>
                        <span class="px-2 py-0.5 rounded-full font-bold border <?php echo $item['priority_badge']; ?>"><?php echo $item['priority']; ?></span>
                    </div>

                    <div>
                        <h4 class="text-xs font-black text-slate-900 leading-snug"><?php echo htmlspecialchars($item['title']); ?></h4>
                        <p class="text-[10px] text-slate-500 font-medium mt-1 flex items-center gap-1">
                            <i class="fa-solid fa-location-dot text-rose-500 text-[9px]"></i>
                            <?php echo htmlspecialchars($item['location']); ?>
                        </p>
                    </div>

                    <!-- Category & SLA -->
                    <div class="flex items-center justify-between text-[10px] pt-1">
                        <span class="px-2 py-0.5 rounded-md font-bold border <?php echo $item['category_badge']; ?>"><?php echo $item['category']; ?></span>
                        <span class="text-slate-400 font-semibold"><?php echo $item['sla']; ?></span>
                    </div>

                    <!-- Officer Assigned Badge -->
                    <div class="p-2 bg-slate-50 border border-slate-200 rounded-lg flex items-center justify-between text-[10px]">
                        <span class="text-slate-400 font-medium">Assigned:</span>
                        <span class="font-bold text-slate-800 truncate max-w-[130px]"><?php echo htmlspecialchars($item['assigned_to']); ?></span>
                    </div>

                    <!-- Column Actions -->
                    <div class="flex items-center justify-between gap-1.5 pt-2 border-t border-slate-100" onclick="event.stopPropagation()">
                        <button onclick="openAssignOfficerModal('<?php echo $item['id']; ?>')" class="flex-1 py-1.5 bg-slate-100 hover:bg-slate-200 text-slate-700 font-bold text-[10px] rounded-lg transition flex items-center justify-center gap-1 cursor-pointer">
                            <i class="fa-solid fa-user-pen text-[9px]"></i> Assign
                        </button>

                        <?php if ($colKey == 'unassigned'): ?>
                        <button onclick="moveKanbanStage('<?php echo $item['id']; ?>', 'dispatched')" class="flex-1 py-1.5 bg-[#0f53d1] hover:bg-[#0d46b0] text-white font-bold text-[10px] rounded-lg transition shadow-xs flex items-center justify-center gap-1 cursor-pointer">
                            <span>Dispatch</span> <i class="fa-solid fa-arrow-right text-[9px]"></i>
                        </button>
                        <?php elseif ($colKey == 'dispatched'): ?>
                        <button onclick="moveKanbanStage('<?php echo $item['id']; ?>', 'in_inspection')" class="flex-1 py-1.5 bg-amber-600 hover:bg-amber-700 text-white font-bold text-[10px] rounded-lg transition shadow-xs flex items-center justify-center gap-1 cursor-pointer">
                            <span>Start Field</span> <i class="fa-solid fa-arrow-right text-[9px]"></i>
                        </button>
                        <?php elseif ($colKey == 'in_inspection'): ?>
                        <button onclick="moveKanbanStage('<?php echo $item['id']; ?>', 'pending_verification')" class="flex-1 py-1.5 bg-purple-600 hover:bg-purple-700 text-white font-bold text-[10px] rounded-lg transition shadow-xs flex items-center justify-center gap-1 cursor-pointer">
                            <span>Verify Work</span> <i class="fa-solid fa-arrow-right text-[9px]"></i>
                        </button>
                        <?php elseif ($colKey == 'pending_verification'): ?>
                        <button onclick="approveResolution('<?php echo $item['id']; ?>')" class="flex-1 py-1.5 bg-emerald-600 hover:bg-emerald-700 text-white font-bold text-[10px] rounded-lg transition shadow-xs flex items-center justify-center gap-1 cursor-pointer">
                            <i class="fa-solid fa-check text-[9px]"></i> Approve & Archive
                        </button>
                        <?php endif; ?>
                    </div>

                </div>
                <?php endforeach; ?>

            </div>

        </div>
        <?php endforeach; ?>

    </div>

</main>

<!-- ASSIGN COMMITTEE / OFFICER MODAL -->
<div id="assignOfficerModal" class="hidden fixed inset-0 z-50 bg-slate-900/60 backdrop-blur-xs flex items-center justify-center p-4">
    <div class="bg-white rounded-2xl max-w-md w-full p-6 shadow-2xl border border-slate-100 space-y-4 animate-in fade-in zoom-in-95 duration-200">
        
        <div class="flex items-center justify-between border-b border-slate-100 pb-3">
            <h3 class="text-sm font-black text-slate-900 flex items-center gap-2">
                <i class="fa-solid fa-user-plus text-[#0f53d1]"></i>
                <span>Assign Ticket to Committee / Officer</span>
            </h3>
            <button onclick="closeAssignModal()" class="w-7 h-7 rounded-lg hover:bg-slate-100 text-slate-400 hover:text-slate-700 flex items-center justify-center cursor-pointer">
                <i class="fa-solid fa-xmark text-sm"></i>
            </button>
        </div>

        <div class="space-y-3 text-xs">
            <span id="assignModalTicketId" class="text-xs font-bold text-[#0f53d1]">TCK-2025-0261</span>

            <div>
                <label class="font-bold text-slate-700 block mb-1">Select Barangay Committee / Official</label>
                <select id="committeeOfficerSelect" class="w-full bg-slate-50 border border-slate-200 text-slate-800 rounded-xl p-2.5 outline-none font-medium text-xs cursor-pointer">
                    <option value="Kagawad Mark Santos (Infrastructure Committee)">Kagawad Mark Santos (Infrastructure Committee)</option>
                    <option value="Kagawad Liza Dy (Health & Sanitation Committee)">Kagawad Liza Dy (Health & Sanitation Committee)</option>
                    <option value="Chief Tanod Roberto Ramos (Peacekeeping Unit)">Chief Tanod Roberto Ramos (Peacekeeping Unit)</option>
                    <option value="Engr. Mark Santos (Engineering Office)">Engr. Mark Santos (Engineering Office)</option>
                </select>
            </div>

            <div class="p-3 bg-blue-50 border border-blue-100 rounded-xl space-y-1">
                <span class="font-bold text-[#0f53d1] block text-[11px]">Dispatch Alert Trigger</span>
                <p class="text-[10px] text-slate-600 font-medium">Assigning an officer will automatically trigger an instant SMS & System alert notification to their mobile number.</p>
            </div>
        </div>

        <div class="flex items-center justify-end gap-2 pt-2 border-t border-slate-100">
            <button onclick="closeAssignModal()" class="px-4 py-2 text-xs font-bold text-slate-600 bg-white border border-slate-200 rounded-xl hover:bg-slate-50 transition cursor-pointer">Cancel</button>
            <button onclick="confirmAssignment()" class="px-5 py-2 text-xs font-bold text-white bg-[#0f53d1] hover:bg-[#0d46b0] rounded-xl transition shadow-xs cursor-pointer flex items-center gap-1">
                <i class="fa-solid fa-paper-plane text-xs"></i>
                <span>Assign & Send Dispatch SMS</span>
            </button>
        </div>
    </div>
</div>

<script>
let activeAssignTicketId = null;

function openAssignOfficerModal(id) {
    activeAssignTicketId = id;
    document.getElementById('assignModalTicketId').innerText = id;
    document.getElementById('assignOfficerModal').classList.remove('hidden');
}

function closeAssignModal() {
    document.getElementById('assignOfficerModal').classList.add('hidden');
}

function confirmAssignment() {
    const selected = document.getElementById('committeeOfficerSelect').value;
    alert(`Ticket ${activeAssignTicketId} assigned to "${selected}". Dispatch SMS alert triggered!`);
    closeAssignModal();
}

function moveKanbanStage(id, targetStage) {
    alert(`Ticket ${id} moved to "${targetStage.replace('_', ' ').toUpperCase()}" stage on Dispatch Board!`);
}

function approveResolution(id) {
    if (confirm(`Approve on-site work for ticket ${id} and archive to 3.4 Resolved Concerns?`)) {
        alert(`Ticket ${id} approved by Barangay Captain and archived as RESOLVED!`);
    }
}

function openInspectionLogModal(id) {
    alert(`Opening Field Inspection & Progress log drawer for ${id}...`);
}

function exportKanbanDispatchCSV() {
    alert('Exporting Concern Routing Kanban Dispatch Log (CSV)...');
}
</script>

<?php include '../../includes/footer.php'; ?>
