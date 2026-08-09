<?php
$basePath = '../../';
require_once __DIR__ . '/../../src/bootstrap.php';

include '../../includes/header.php';
include '../../includes/sidebar.php';

// Resolved Concerns Archive Dataset
$resolvedConcerns = [
    [
        'id' => 'TCK-2025-0240',
        'title' => 'Clogged drainage canal overflow along 10th Avenue',
        'requester' => 'Roderick Lim',
        'category' => 'Infrastructure',
        'location' => '10th Avenue Corner 4th St, Barangay 88, Caloocan City',
        'action_taken' => 'Dispatched DRRM de-clogging truck & vacuum team. Removed plastic debris and cleared 250m drainage pipe.',
        'resolved_by' => 'Engr. Mark Santos (DRRM / Works)',
        'date_resolved' => 'Jun 7, 2025 • 04:30 PM',
        'resolution_time' => '1.2 Days',
        'rating' => 5,
        'rating_text' => '★★★★★ 5.0 (Very Satisfied)',
        'citizen_comment' => '"Thank you barangay team! The drainage flows smoothly now even during heavy rain."'
    ],
    [
        'id' => 'TCK-2025-0238',
        'title' => 'Streetlight fixture replacement near Bagong Silang Health Center',
        'requester' => 'Maria Santos',
        'category' => 'Infrastructure',
        'location' => 'Market Alleyway, Barangay 176, Caloocan City',
        'action_taken' => 'Replaced burnt-out sodium lamp bulb with new 100W Solar LED street fixture.',
        'resolved_by' => 'Electrician Team B (Engr. Santos)',
        'date_resolved' => 'Jun 6, 2025 • 02:15 PM',
        'resolution_time' => '0.8 Days',
        'rating' => 5,
        'rating_text' => '★★★★★ 5.0 (Very Satisfied)',
        'citizen_comment' => '"Brighter street at night! Much safer for seniors walking home."'
    ],
    [
        'id' => 'TCK-2025-0222',
        'title' => 'Illegal parking blocking fire hydrant along Camarin Road',
        'requester' => 'Pedro Reyes',
        'category' => 'Peace & Order',
        'location' => 'Camarin Road, Barangay 178, Caloocan City',
        'action_taken' => 'Barangay Tanod unit issued warning ticket and towed obstructing vehicle.',
        'resolved_by' => 'Chief Tanod Roberto Ramos',
        'date_resolved' => 'Jun 5, 2025 • 11:20 AM',
        'resolution_time' => '0.4 Days',
        'rating' => 4,
        'rating_text' => '★★★★☆ 4.0 (Satisfied)',
        'citizen_comment' => '"Quick response by Tanod officers."'
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
                <i class="fa-solid fa-circle-check"></i>
            </div>
            <div>
                <h1 class="text-xl md:text-2xl font-black text-slate-900 tracking-tight">3.4 Resolved Concerns</h1>
                <p class="text-xs text-slate-500 font-medium mt-0.5">Archive, Accountability Metrics, Resolution Turnaround & Citizen Satisfaction Scores</p>
            </div>
        </div>

        <div class="flex items-center gap-2.5 flex-wrap">
            <button onclick="exportResolvedArchive()" class="px-4.5 py-2.5 bg-[#0f53d1] hover:bg-[#0d46b0] text-white font-bold text-xs rounded-xl shadow-xs transition flex items-center gap-2 cursor-pointer">
                <i class="fa-solid fa-file-csv text-xs"></i>
                <span>Export Resolved Archive</span>
            </button>
        </div>
    </div>

    <!-- Accountability Stat Summary Cards (4 Cards) -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
        
        <!-- Card 1: Total Resolved -->
        <div class="bg-white rounded-2xl border border-slate-200 shadow-sm p-5 space-y-3">
            <div class="flex items-center justify-between">
                <span class="text-xs font-bold text-slate-400 uppercase tracking-wider">Total Resolved Cases</span>
                <div class="w-10 h-10 rounded-xl bg-emerald-50 text-emerald-600 flex items-center justify-center text-base border border-emerald-100">
                    <i class="fa-solid fa-box-archive"></i>
                </div>
            </div>
            <div>
                <h3 class="text-2xl font-black text-slate-900 tracking-tight">240 Tickets</h3>
                <p class="text-[11px] font-semibold text-emerald-600 flex items-center gap-1 mt-1">
                    <i class="fa-solid fa-check"></i>
                    <span>93% Resolution rate</span>
                </p>
            </div>
        </div>

        <!-- Card 2: Avg Time to Resolution -->
        <div class="bg-white rounded-2xl border border-slate-200 shadow-sm p-5 space-y-3">
            <div class="flex items-center justify-between">
                <span class="text-xs font-bold text-slate-400 uppercase tracking-wider">Avg Resolution Time</span>
                <div class="w-10 h-10 rounded-xl bg-blue-50 text-[#0f53d1] flex items-center justify-center text-base border border-blue-100">
                    <i class="fa-solid fa-stopwatch"></i>
                </div>
            </div>
            <div>
                <h3 class="text-2xl font-black text-slate-900 tracking-tight">1.4 Days</h3>
                <p class="text-[11px] font-semibold text-emerald-600 flex items-center gap-1 mt-1">
                    <i class="fa-solid fa-bolt"></i>
                    <span>Within 3-Day SLA Target</span>
                </p>
            </div>
        </div>

        <!-- Card 3: Citizen Satisfaction Score -->
        <div class="bg-white rounded-2xl border border-slate-200 shadow-sm p-5 space-y-3">
            <div class="flex items-center justify-between">
                <span class="text-xs font-bold text-slate-400 uppercase tracking-wider">Citizen CSAT Rating</span>
                <div class="w-10 h-10 rounded-xl bg-amber-50 text-amber-600 flex items-center justify-center text-base border border-amber-100">
                    <i class="fa-solid fa-star"></i>
                </div>
            </div>
            <div>
                <h3 class="text-2xl font-black text-slate-900 tracking-tight">4.8 / 5.0</h3>
                <p class="text-[11px] font-semibold text-amber-600 flex items-center gap-1 mt-1">
                    <i class="fa-solid fa-thumbs-up"></i>
                    <span>96% Positive feedback</span>
                </p>
            </div>
        </div>

        <!-- Card 4: SLA Compliance Rate -->
        <div class="bg-white rounded-2xl border border-slate-200 shadow-sm p-5 space-y-3">
            <div class="flex items-center justify-between">
                <span class="text-xs font-bold text-slate-400 uppercase tracking-wider">SLA Compliance Rate</span>
                <div class="w-10 h-10 rounded-xl bg-purple-50 text-purple-600 flex items-center justify-center text-base border border-purple-100">
                    <i class="fa-solid fa-shield-check"></i>
                </div>
            </div>
            <div>
                <h3 class="text-2xl font-black text-slate-900 tracking-tight">98.2%</h3>
                <p class="text-[11px] font-semibold text-purple-600 flex items-center gap-1 mt-1">
                    <i class="fa-solid fa-clock"></i>
                    <span>Resolved before deadline</span>
                </p>
            </div>
        </div>

    </div>

    <!-- Resolved Archive Table & Filter -->
    <div class="bg-white rounded-2xl border border-slate-200 shadow-sm overflow-hidden space-y-4">
        
        <div class="p-4 border-b border-slate-100 flex flex-col md:flex-row items-stretch md:items-center justify-between gap-3">
            <h3 class="text-xs font-black text-slate-900 uppercase tracking-wider">Resolved Tickets Archive Log</h3>

            <div class="relative w-full md:w-80">
                <i class="fa-solid fa-search absolute left-3.5 top-1/2 -translate-y-1/2 text-slate-400 text-xs"></i>
                <input type="text" id="resolvedSearchInput" oninput="filterResolvedTable()" placeholder="Search resolved tickets, action taken, staff..." class="w-full pl-9 pr-3 py-2 bg-slate-50 border border-slate-200 text-slate-800 font-medium rounded-xl text-xs outline-none focus:ring-2 focus:ring-[#0f53d1]/40 focus:border-[#0f53d1]">
            </div>
        </div>

        <div class="overflow-x-auto custom-scrollbar">
            <table class="w-full text-left border-collapse min-w-[950px]">
                <thead>
                    <tr class="bg-slate-50/80 border-b border-slate-200 text-[10px] font-bold text-slate-400 uppercase tracking-wider">
                        <th class="py-3.5 px-4">Ticket ID & Title</th>
                        <th class="py-3.5 px-3">Resolution Summary & Action Taken</th>
                        <th class="py-3.5 px-3">Resolved By & Date</th>
                        <th class="py-3.5 px-3 text-center">Time-to-Resolution</th>
                        <th class="py-3.5 px-3 text-center">Citizen Satisfaction (CSAT)</th>
                        <th class="py-3.5 px-3 text-center">Actions</th>
                    </tr>
                </thead>
                <tbody id="resolvedTableBody" class="divide-y divide-slate-100 text-xs font-medium text-slate-700">
                    <?php foreach ($resolvedConcerns as $res): ?>
                    <tr class="resolved-row hover:bg-slate-50 transition cursor-pointer select-none">
                        <td class="py-3.5 px-4">
                            <span class="text-[10px] font-bold text-[#0f53d1] block"><?php echo $res['id']; ?></span>
                            <p class="font-bold text-slate-900 text-xs truncate max-w-xs"><?php echo htmlspecialchars($res['title']); ?></p>
                            <span class="text-[10px] text-slate-400 font-semibold"><?php echo htmlspecialchars($res['requester']); ?></span>
                        </td>
                        <td class="py-3.5 px-3">
                            <p class="text-slate-800 font-medium text-[11px] max-w-sm"><?php echo htmlspecialchars($res['action_taken']); ?></p>
                        </td>
                        <td class="py-3.5 px-3 whitespace-nowrap">
                            <p class="font-bold text-slate-900 text-[11px]"><?php echo htmlspecialchars($res['resolved_by']); ?></p>
                            <p class="text-[10px] text-slate-400 font-semibold"><?php echo $res['date_resolved']; ?></p>
                        </td>
                        <td class="py-3.5 px-3 text-center whitespace-nowrap">
                            <span class="px-2.5 py-0.5 rounded-full font-bold text-[10px] bg-blue-50 text-[#0f53d1] border border-blue-200">
                                <i class="fa-solid fa-stopwatch text-[9px] mr-1"></i><?php echo $res['resolution_time']; ?>
                            </span>
                        </td>
                        <td class="py-3.5 px-3 text-center">
                            <span class="font-bold text-amber-600 text-xs block"><?php echo $res['rating_text']; ?></span>
                            <span class="text-[9px] text-slate-500 italic block max-w-xs mx-auto"><?php echo htmlspecialchars($res['citizen_comment']); ?></span>
                        </td>
                        <td class="py-3.5 px-3 text-center">
                            <button onclick="viewResolutionDetails('<?php echo $res['id']; ?>')" class="w-7 h-7 rounded-lg hover:bg-slate-100 text-slate-400 hover:text-emerald-600 flex items-center justify-center transition mx-auto cursor-pointer" title="View Full Archive File"><i class="fa-solid fa-file-invoice text-xs"></i></button>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

    </div>

</main>

<script>
function filterResolvedTable() {
    const searchVal = document.getElementById('resolvedSearchInput').value.toLowerCase();
    const rows = document.querySelectorAll('.resolved-row');

    rows.forEach(r => {
        const text = r.innerText.toLowerCase();
        r.style.display = (!searchVal || text.includes(searchVal)) ? '' : 'none';
    });
}

function viewResolutionDetails(id) {
    alert(`Viewing official Resolution Archive & Case Report for ${id}.`);
}

function exportResolvedArchive() {
    alert('Exporting Resolved Grievance Tickets Archive (CSV)...');
}
</script>

<?php include '../../includes/footer.php'; ?>
