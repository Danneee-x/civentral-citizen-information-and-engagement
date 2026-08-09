<?php
$basePath = '../../';
require_once __DIR__ . '/../../src/bootstrap.php';

include '../../includes/header.php';
include '../../includes/sidebar.php';

// Dataset of Incoming Concerns for Caloocan City
$concerns = [
    [
        'id' => 'TCK-2025-0258',
        'title' => 'Large pothole along Camarin Road causing motor accidents',
        'full_text' => 'A very large and deep pothole has formed along Camarin Road near the pedestrian overpass in Barangay 178. Multiple motorbikes and tricycles have hit it over the past 48 hours causing minor accidents and tire damage. Immediate asphalt patching or road repair is urgently requested.',
        'category' => 'Infrastructure',
        'sub_category' => 'Road Damage / Pothole',
        'category_color' => 'bg-blue-50 text-[#0f53d1] border-blue-200',
        'submitted_by' => 'Pedro Reyes',
        'is_anonymous' => false,
        'citizen_id' => 'CTZ-2025-0142',
        'date_filed' => 'Jun 8, 2025 • 09:30 AM',
        'attachments' => ['pothole_photo_1.jpg', 'road_damage_2.jpg'],
        'location' => 'Camarin Road, Barangay 178, District 3, Caloocan City',
        'status' => 'In Progress',
        'status_badge' => 'bg-indigo-50 text-indigo-600 border-indigo-200',
        'priority' => 'Urgent',
        'priority_badge' => 'bg-rose-50 text-rose-600 border-rose-200',
        'assigned_dept' => 'Engineering & Public Works',
        'updates_count' => 3
    ],
    [
        'id' => 'TCK-2025-0259',
        'title' => 'Uncollected garbage bags piling up at Market Alleyway',
        'full_text' => 'Garbage collection truck has missed our alley for 3 consecutive days in Bagong Silang. Trash bags are spilling over into the street, creating severe foul odor and health risks for nearby residents.',
        'category' => 'Sanitation',
        'sub_category' => 'Waste Collection',
        'category_color' => 'bg-emerald-50 text-emerald-600 border-emerald-200',
        'submitted_by' => 'Anonymous Resident',
        'is_anonymous' => true,
        'citizen_id' => 'ANON-8841',
        'date_filed' => 'Jun 8, 2025 • 10:15 AM',
        'attachments' => ['uncollected_trash.jpg'],
        'location' => 'Phase 1 Market Alleyway, Barangay 176, District 1, Caloocan City',
        'status' => 'New',
        'status_badge' => 'bg-blue-50 text-[#0f53d1] border-blue-200',
        'priority' => 'High',
        'priority_badge' => 'bg-amber-50 text-amber-600 border-amber-200',
        'assigned_dept' => 'Sanitation & Environment Office',
        'updates_count' => 1
    ],
    [
        'id' => 'TCK-2025-0260',
        'title' => 'Loud videoke disturbance past midnight',
        'full_text' => 'Repeated loud videoke noise past 12:00 midnight along 5th Avenue. Neighborhood senior citizens and students cannot sleep. Requesting Tanod patrol dispatch to enforce quiet hour ordinance.',
        'category' => 'Noise Complaint',
        'sub_category' => 'Ordinance Violation',
        'category_color' => 'bg-purple-50 text-purple-600 border-purple-200',
        'submitted_by' => 'Ana Marie Reyes',
        'is_anonymous' => false,
        'citizen_id' => 'CTZ-2025-0210',
        'date_filed' => 'Jun 7, 2025 • 11:45 PM',
        'attachments' => ['audio_recording.mp3'],
        'location' => '5th Avenue Street, Barangay 12, District 2, Caloocan City',
        'status' => 'Under Review',
        'status_badge' => 'bg-amber-50 text-amber-600 border-amber-200',
        'priority' => 'Medium',
        'priority_badge' => 'bg-slate-100 text-slate-700 border-slate-200',
        'assigned_dept' => 'Barangay Peacekeeping Action Team (Tanod)',
        'updates_count' => 2
    ],
    [
        'id' => 'TCK-2025-0261',
        'title' => 'Clogged drainage causing street flooding during rain',
        'full_text' => 'Canal drainage along 10th Avenue is clogged with plastic debris. Even light rain causes water level to overflow onto sidewalks.',
        'category' => 'Infrastructure',
        'sub_category' => 'Drainage De-clogging',
        'category_color' => 'bg-blue-50 text-[#0f53d1] border-blue-200',
        'submitted_by' => 'Roderick Lim',
        'is_anonymous' => false,
        'citizen_id' => 'CTZ-2025-0412',
        'date_filed' => 'Jun 6, 2025 • 02:30 PM',
        'attachments' => ['clogged_drain.jpg'],
        'location' => '10th Avenue Corner 4th St, Barangay 88, Caloocan City',
        'status' => 'Routed',
        'status_badge' => 'bg-purple-50 text-purple-600 border-purple-200',
        'priority' => 'High',
        'priority_badge' => 'bg-amber-50 text-amber-600 border-amber-200',
        'assigned_dept' => 'Disaster Risk Reduction Management (DRRM)',
        'updates_count' => 4
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
                <i class="fa-solid fa-inbox"></i>
            </div>
            <div>
                <h1 class="text-xl md:text-2xl font-black text-slate-900 tracking-tight">Incoming Concerns</h1>
            </div>
        </div>

        <div class="flex items-center gap-2.5 flex-wrap">
            <button onclick="exportConcernsReport()" class="px-4 py-2.5 bg-white border border-slate-200 text-slate-700 hover:bg-slate-50 font-bold text-xs rounded-xl shadow-xs transition flex items-center gap-2 cursor-pointer">
                <i class="fa-solid fa-download text-slate-400"></i>
                <span>Export Tickets</span>
            </button>

            <button onclick="openSubmitConcernModal()" class="px-4.5 py-2.5 bg-[#0f53d1] hover:bg-[#0d46b0] text-white font-bold text-xs rounded-xl shadow-xs transition flex items-center gap-2 cursor-pointer">
                <i class="fa-solid fa-plus text-xs"></i>
                <span>Submit New Concern</span>
            </button>
        </div>
    </div>

    <!-- KPI Summary Cards Row (4 Cards) -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
        
        <!-- Card 1: Total Concerns -->
        <div class="bg-white rounded-2xl border border-slate-200 shadow-sm p-5 space-y-3">
            <div class="flex items-center justify-between">
                <span class="text-xs font-bold text-slate-400 uppercase tracking-wider">Total Filed Tickets</span>
                <div class="w-10 h-10 rounded-xl bg-blue-50 text-[#0f53d1] flex items-center justify-center text-base border border-blue-100">
                    <i class="fa-solid fa-comments"></i>
                </div>
            </div>
            <div>
                <h3 class="text-2xl font-black text-slate-900 tracking-tight">258</h3>
                <p class="text-[11px] font-semibold text-emerald-600 flex items-center gap-1 mt-1">
                    <i class="fa-solid fa-arrow-trend-up"></i>
                    <span>+14% vs last week</span>
                </p>
            </div>
        </div>

        <!-- Card 2: New Unrouted -->
        <div class="bg-white rounded-2xl border border-slate-200 shadow-sm p-5 space-y-3">
            <div class="flex items-center justify-between">
                <span class="text-xs font-bold text-slate-400 uppercase tracking-wider">New & Unrouted</span>
                <div class="w-10 h-10 rounded-xl bg-amber-50 text-amber-600 flex items-center justify-center text-base border border-amber-100">
                    <i class="fa-solid fa-envelope-open-text"></i>
                </div>
            </div>
            <div>
                <h3 class="text-2xl font-black text-slate-900 tracking-tight">18 Tickets</h3>
                <p class="text-[11px] font-semibold text-amber-600 flex items-center gap-1 mt-1">
                    <i class="fa-solid fa-clock"></i>
                    <span>Requires AI / Staff routing</span>
                </p>
            </div>
        </div>

        <!-- Card 3: Urgent Priority -->
        <div class="bg-white rounded-2xl border border-slate-200 shadow-sm p-5 space-y-3">
            <div class="flex items-center justify-between">
                <span class="text-xs font-bold text-slate-400 uppercase tracking-wider">Urgent Safety Tickets</span>
                <div class="w-10 h-10 rounded-xl bg-rose-50 text-rose-600 flex items-center justify-center text-base border border-rose-100">
                    <i class="fa-solid fa-triangle-exclamation"></i>
                </div>
            </div>
            <div>
                <h3 class="text-2xl font-black text-slate-900 tracking-tight">4 High Priority</h3>
                <p class="text-[11px] font-semibold text-rose-600 flex items-center gap-1 mt-1">
                    <i class="fa-solid fa-bolt"></i>
                    <span>Fast-track SLA dispatch</span>
                </p>
            </div>
        </div>

        <!-- Card 4: Anonymous Submissions -->
        <div class="bg-white rounded-2xl border border-slate-200 shadow-sm p-5 space-y-3">
            <div class="flex items-center justify-between">
                <span class="text-xs font-bold text-slate-400 uppercase tracking-wider">Anonymous Submissions</span>
                <div class="w-10 h-10 rounded-xl bg-purple-50 text-purple-600 flex items-center justify-center text-base border border-purple-100">
                    <i class="fa-solid fa-user-secret"></i>
                </div>
            </div>
            <div>
                <h3 class="text-2xl font-black text-slate-900 tracking-tight">32 (12.4%)</h3>
                <p class="text-[11px] font-semibold text-purple-600 flex items-center gap-1 mt-1">
                    <i class="fa-solid fa-shield"></i>
                    <span>Protected citizen identity</span>
                </p>
            </div>
        </div>

    </div>

    <!-- Main Grid Layout (Filter & Table Container + Right Drawer Inspector) -->
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 items-start">

        <!-- Table Column -->
        <div id="concernsTableContainer" class="lg:col-span-12 space-y-4 transition-all duration-300">

            <!-- Multi-Filter & Search Bar Card -->
            <div class="bg-white rounded-2xl border border-slate-200 shadow-sm p-4 space-y-3">
                <div class="flex flex-col md:flex-row items-stretch md:items-center justify-between gap-3">
                    
                    <!-- Search Input -->
                    <div class="relative flex-1">
                        <i class="fa-solid fa-search absolute left-3.5 top-1/2 -translate-y-1/2 text-slate-400 text-xs"></i>
                        <input type="text" id="concernSearchInput" oninput="filterConcernsTable()" placeholder="Search ticket ID, title, keywords, or location..." class="w-full pl-9 pr-3 py-2.5 bg-slate-50 border border-slate-200 text-slate-800 font-medium rounded-xl text-xs outline-none focus:ring-2 focus:ring-[#0f53d1]/40 focus:border-[#0f53d1]">
                    </div>

                    <!-- Category Filter -->
                    <select id="concernCategoryFilter" onchange="filterConcernsTable()" class="bg-slate-50 border border-slate-200 text-slate-800 font-semibold rounded-xl py-2.5 px-3 text-xs outline-none cursor-pointer">
                        <option value="">All Categories</option>
                        <option value="Infrastructure">Infrastructure</option>
                        <option value="Sanitation">Sanitation</option>
                        <option value="Peace & Order">Peace & Order</option>
                        <option value="Noise Complaint">Noise Complaint</option>
                        <option value="Utilities">Utilities</option>
                    </select>

                    <!-- Status Filter -->
                    <select id="concernStatusFilter" onchange="filterConcernsTable()" class="bg-slate-50 border border-slate-200 text-slate-800 font-semibold rounded-xl py-2.5 px-3 text-xs outline-none cursor-pointer">
                        <option value="">All Statuses</option>
                        <option value="New">New</option>
                        <option value="Under Review">Under Review</option>
                        <option value="Routed">Routed</option>
                        <option value="In Progress">In Progress</option>
                    </select>

                    <!-- Priority Filter -->
                    <select id="concernPriorityFilter" onchange="filterConcernsTable()" class="bg-slate-50 border border-slate-200 text-slate-800 font-semibold rounded-xl py-2.5 px-3 text-xs outline-none cursor-pointer">
                        <option value="">All Priorities</option>
                        <option value="Urgent">Urgent</option>
                        <option value="High">High</option>
                        <option value="Medium">Medium</option>
                        <option value="Low">Low</option>
                    </select>
                </div>
            </div>

            <!-- Table Card -->
            <div class="bg-white rounded-2xl border border-slate-200 shadow-sm overflow-hidden">
                <div class="p-4 border-b border-slate-100 flex items-center justify-between">
                    <h3 class="text-xs font-black text-slate-900 uppercase tracking-wider">Incoming Grievance Tickets</h3>
                    <span class="text-xs text-slate-400 font-medium">Click row to open details thread</span>
                </div>

                <div class="overflow-x-auto custom-scrollbar">
                    <table class="w-full text-left border-collapse min-w-[950px]">
                        <thead>
                            <tr class="bg-slate-50/80 border-b border-slate-200 text-[10px] font-bold text-slate-400 uppercase tracking-wider">
                                <th class="py-3.5 px-4">Ticket ID & Subject</th>
                                <th class="py-3.5 px-3">Category</th>
                                <th class="py-3.5 px-3">Submitted By</th>
                                <th class="py-3.5 px-3">Location Tag</th>
                                <th class="py-3.5 px-3">Date Filed</th>
                                <th class="py-3.5 px-3 text-center">Priority</th>
                                <th class="py-3.5 px-3 text-center">Status</th>
                                <th class="py-3.5 px-3 text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody id="concernsTableBody" class="divide-y divide-slate-100 text-xs font-medium text-slate-700">
                            <?php foreach ($concerns as $item): ?>
                            <tr onclick="selectConcernRow(this, '<?php echo $item['id']; ?>')" class="concern-row hover:bg-slate-50 transition cursor-pointer select-none" data-id="<?php echo $item['id']; ?>" data-cat="<?php echo htmlspecialchars($item['category']); ?>" data-status="<?php echo htmlspecialchars($item['status']); ?>" data-priority="<?php echo htmlspecialchars($item['priority']); ?>">
                                <td class="py-3.5 px-4">
                                    <div class="flex items-center gap-3">
                                        <div class="w-9 h-9 rounded-xl bg-blue-50 text-[#0f53d1] flex items-center justify-center shrink-0 font-black text-xs border border-blue-100">
                                            <i class="fa-solid fa-ticket"></i>
                                        </div>
                                        <div class="min-w-0">
                                            <p class="font-bold text-slate-900 text-xs truncate max-w-xs"><?php echo htmlspecialchars($item['title']); ?></p>
                                            <span class="text-[10px] font-bold text-[#0f53d1]"><?php echo $item['id']; ?></span>
                                        </div>
                                    </div>
                                </td>
                                <td class="py-3.5 px-3">
                                    <span class="px-2.5 py-0.5 rounded-full text-[10px] font-bold border <?php echo $item['category_color']; ?>">
                                        <?php echo htmlspecialchars($item['category']); ?>
                                    </span>
                                </td>
                                <td class="py-3.5 px-3">
                                    <p class="font-bold text-slate-900 flex items-center gap-1">
                                        <?php if ($item['is_anonymous']): ?>
                                            <i class="fa-solid fa-user-secret text-purple-500 text-[10px]"></i>
                                        <?php endif; ?>
                                        <?php echo htmlspecialchars($item['submitted_by']); ?>
                                    </p>
                                    <span class="text-[10px] text-slate-400 font-semibold"><?php echo $item['citizen_id']; ?></span>
                                </td>
                                <td class="py-3.5 px-3 text-slate-600 font-medium">
                                    <span class="truncate block max-w-xs"><i class="fa-solid fa-location-dot text-rose-500 mr-1 text-[10px]"></i><?php echo htmlspecialchars($item['location']); ?></span>
                                </td>
                                <td class="py-3.5 px-3 whitespace-nowrap text-[11px] font-bold text-slate-800">
                                    <?php echo $item['date_filed']; ?>
                                </td>
                                <td class="py-3.5 px-3 text-center">
                                    <span class="px-2 py-0.5 rounded-full text-[10px] font-bold border <?php echo $item['priority_badge']; ?>">
                                        <?php echo $item['priority']; ?>
                                    </span>
                                </td>
                                <td class="py-3.5 px-3 text-center">
                                    <span class="px-2.5 py-0.5 rounded-full text-[10px] font-bold border <?php echo $item['status_badge']; ?>">
                                        <?php echo $item['status']; ?>
                                    </span>
                                </td>
                                <td class="py-3.5 px-3 text-center">
                                    <button onclick="event.stopPropagation(); selectConcernRow(this.closest('tr'), '<?php echo $item['id']; ?>');" class="w-7 h-7 rounded-lg hover:bg-slate-100 text-slate-400 hover:text-[#0f53d1] flex items-center justify-center transition cursor-pointer mx-auto" title="View Full Thread"><i class="fa-regular fa-eye text-xs"></i></button>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>

        <!-- Right Side Drawer: Detailed Thread View & Activity Stream (Hidden by default) -->
        <div id="concernDetailsDrawer" class="hidden lg:col-span-4 bg-white rounded-2xl border border-slate-200 shadow-sm p-5 space-y-5 sticky top-6">
            
            <div class="flex items-center justify-between border-b border-slate-100 pb-3">
                <div class="flex items-center gap-2">
                    <span id="drawerTicketId" class="text-xs font-bold text-[#0f53d1]">TCK-2025-0258</span>
                    <span id="drawerPriorityBadge" class="px-2 py-0.5 text-[10px] font-bold rounded-full bg-rose-50 text-rose-600 border border-rose-200">Urgent</span>
                </div>
                <button onclick="closeConcernDrawer()" class="w-7 h-7 rounded-lg hover:bg-slate-100 text-slate-400 hover:text-slate-700 flex items-center justify-center transition cursor-pointer text-xs">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>

            <!-- Subject & Description -->
            <div class="space-y-2">
                <h3 id="drawerTitle" class="text-sm font-black text-slate-900 leading-snug">Large pothole along Camarin Road</h3>
                <p id="drawerFullText" class="text-xs text-slate-600 font-medium leading-relaxed p-3 bg-slate-50 border border-slate-200 rounded-xl">
                    A very large and deep pothole has formed along Camarin Road near the pedestrian overpass in Barangay 178...
                </p>
            </div>

            <!-- Details Table -->
            <div class="p-3 bg-slate-50 border border-slate-200 rounded-xl space-y-1.5 text-xs">
                <div class="flex items-center justify-between text-[11px]">
                    <span class="text-slate-400 font-medium">Submitted By</span>
                    <span id="drawerSubmittedBy" class="font-bold text-slate-800">Pedro Reyes</span>
                </div>
                <div class="flex items-center justify-between text-[11px]">
                    <span class="text-slate-400 font-medium">Category</span>
                    <span id="drawerCategory" class="font-bold text-[#0f53d1]">Infrastructure</span>
                </div>
                <div class="flex items-center justify-between text-[11px]">
                    <span class="text-slate-400 font-medium">Location</span>
                    <span id="drawerLocation" class="font-bold text-slate-800 truncate max-w-[160px]">Barangay 178, Caloocan</span>
                </div>
                <div class="flex items-center justify-between text-[11px]">
                    <span class="text-slate-400 font-medium">Assigned Department</span>
                    <span id="drawerDept" class="font-bold text-slate-800">Engineering & Works</span>
                </div>
            </div>

            <!-- Attachments Preview -->
            <div class="space-y-2">
                <span class="text-[10px] font-bold text-slate-400 uppercase tracking-wider block">Attached Photo/Video Evidence</span>
                <div class="flex items-center gap-2">
                    <div class="w-16 h-16 rounded-xl bg-slate-100 border border-slate-200 flex flex-col items-center justify-center text-slate-400 cursor-pointer hover:bg-slate-200 transition">
                        <i class="fa-solid fa-image text-sm"></i>
                        <span class="text-[8px] font-bold mt-1">Photo_1.jpg</span>
                    </div>
                    <div class="w-16 h-16 rounded-xl bg-slate-100 border border-slate-200 flex flex-col items-center justify-center text-slate-400 cursor-pointer hover:bg-slate-200 transition">
                        <i class="fa-solid fa-film text-sm"></i>
                        <span class="text-[8px] font-bold mt-1">Video_2.mp4</span>
                    </div>
                </div>
            </div>

            <!-- Action Buttons -->
            <div class="flex items-center gap-2 border-t border-slate-100 pt-4">
                <a href="ai-analysis-results.php" class="flex-1 py-2.5 bg-[#0f53d1] hover:bg-[#0d46b0] text-white font-bold text-xs rounded-xl shadow-xs transition flex items-center justify-center gap-1.5 cursor-pointer">
                    <i class="fa-solid fa-robot text-xs"></i>
                    <span>Run AI Analysis</span>
                </a>
                <a href="concern-routing.php" class="flex-1 py-2.5 bg-white border border-slate-200 text-slate-700 hover:bg-slate-50 font-bold text-xs rounded-xl shadow-xs transition flex items-center justify-center gap-1.5 cursor-pointer">
                    <i class="fa-solid fa-route text-xs"></i>
                    <span>Route Ticket</span>
                </a>
            </div>

        </div>

    </div>

</main>

<!-- SUBMIT CONCERN MODAL (With Anonymous Option & Thesis Abuse-Prevention Notice) -->
<div id="submitConcernModal" class="hidden fixed inset-0 z-50 bg-slate-900/60 backdrop-blur-xs flex items-center justify-center p-4">
    <div class="bg-white rounded-2xl max-w-xl w-full p-6 shadow-2xl border border-slate-100 space-y-5 animate-in fade-in zoom-in-95 duration-200 max-h-[90vh] overflow-y-auto custom-scrollbar">
        
        <div class="flex items-center justify-between border-b border-slate-100 pb-3">
            <div class="flex items-center gap-2.5">
                <div class="w-9 h-9 rounded-xl bg-blue-50 text-[#0f53d1] flex items-center justify-center text-base border border-blue-100">
                    <i class="fa-solid fa-pen-to-square"></i>
                </div>
                <h3 class="text-base font-black text-slate-900">File New Grievance / Concern</h3>
            </div>
            <button onclick="closeSubmitConcernModal()" class="w-8 h-8 rounded-lg hover:bg-slate-100 text-slate-400 hover:text-slate-700 transition flex items-center justify-center cursor-pointer">
                <i class="fa-solid fa-xmark text-sm"></i>
            </button>
        </div>

        <div class="space-y-4 text-xs">
            <!-- Anonymous Toggle Switch -->
            <div class="p-3.5 bg-purple-50/60 border border-purple-100 rounded-xl space-y-2">
                <div class="flex items-center justify-between">
                    <label class="font-black text-purple-900 text-xs flex items-center gap-1.5">
                        <i class="fa-solid fa-user-secret text-purple-600"></i>
                        <span>Submit Anonymously</span>
                    </label>
                    <input type="checkbox" id="anonymousToggle" onchange="toggleAnonymousNotice(this.checked)" class="w-4 h-4 text-purple-600 rounded cursor-pointer">
                </div>
                <p id="anonymousNotice" class="text-[11px] text-purple-700 font-medium leading-tight hidden">
                    <i class="fa-solid fa-shield-halved mr-1"></i>
                    <strong>Abuse-Prevention Notice:</strong> Anonymous reports hide your name from public view. System IP logging & CAPTCHA validation remain active to prevent spam/false reporting.
                </p>
            </div>

            <!-- Subject & Category -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                <div class="sm:col-span-2">
                    <label class="font-bold text-slate-700 block mb-1">Subject / Title <span class="text-rose-500">*</span></label>
                    <input type="text" id="newTitle" placeholder="e.g., Broken Streetlight along Market Alleyway" class="w-full bg-slate-50 border border-slate-200 text-slate-800 rounded-xl p-2.5 outline-none font-medium text-xs">
                </div>

                <div>
                    <label class="font-bold text-slate-700 block mb-1">Category <span class="text-rose-500">*</span></label>
                    <select id="newCategory" class="w-full bg-slate-50 border border-slate-200 text-slate-800 rounded-xl p-2.5 outline-none font-medium text-xs cursor-pointer">
                        <option value="Infrastructure">Infrastructure (Roads/Lighting)</option>
                        <option value="Sanitation">Sanitation & Garbage</option>
                        <option value="Peace & Order">Peace & Order / Security</option>
                        <option value="Noise Complaint">Noise Complaint / Nuisance</option>
                        <option value="Utilities">Utilities (Water/Electric)</option>
                    </select>
                </div>

                <div>
                    <label class="font-bold text-slate-700 block mb-1">Location Barangay <span class="text-rose-500">*</span></label>
                    <select id="newBarangay" class="w-full bg-slate-50 border border-slate-200 text-slate-800 rounded-xl p-2.5 outline-none font-medium text-xs cursor-pointer">
                        <option value="Barangay 178, Camarin">Barangay 178, Camarin</option>
                        <option value="Barangay 176, Bagong Silang">Barangay 176, Bagong Silang</option>
                        <option value="Barangay 12, Caloocan">Barangay 12, Caloocan</option>
                        <option value="Barangay 88, Caloocan">Barangay 88, Caloocan</option>
                    </select>
                </div>
            </div>

            <!-- Description -->
            <div>
                <label class="font-bold text-slate-700 block mb-1">Full Description <span class="text-rose-500">*</span></label>
                <textarea id="newDescription" rows="4" placeholder="Describe the issue in detail (location landmarks, impact, duration)..." class="w-full bg-slate-50 border border-slate-200 text-slate-800 rounded-xl p-2.5 outline-none font-medium text-xs"></textarea>
            </div>

            <!-- Attachments -->
            <div>
                <label class="font-bold text-slate-700 block mb-1">Upload Evidence (Photos/Videos)</label>
                <input type="file" multiple class="w-full bg-slate-50 border border-slate-200 text-slate-700 rounded-xl p-2 outline-none font-medium text-xs file:mr-3 file:py-1 file:px-3 file:rounded-lg file:border-0 file:text-xs file:font-bold file:bg-[#0f53d1] file:text-white cursor-pointer">
            </div>
        </div>

        <div class="flex items-center justify-end gap-2.5 pt-3 border-t border-slate-100">
            <button onclick="closeSubmitConcernModal()" class="px-4 py-2.5 text-xs font-bold text-slate-600 bg-white border border-slate-200 rounded-xl hover:bg-slate-50 transition cursor-pointer">Cancel</button>
            <button onclick="submitConcernForm()" class="px-5 py-2.5 text-xs font-bold text-white bg-[#0f53d1] hover:bg-[#0d46b0] rounded-xl transition shadow-xs cursor-pointer flex items-center gap-1.5">
                <i class="fa-solid fa-paper-plane text-xs"></i>
                <span>Submit Grievance Ticket</span>
            </button>
        </div>
    </div>
</div>

<script>
const concernsData = <?php echo json_encode(array_column($concerns, null, 'id')); ?>;
let activeConcernId = null;

function selectConcernRow(rowElement, id) {
    const drawer = document.getElementById('concernDetailsDrawer');
    const tableContainer = document.getElementById('concernsTableContainer');

    if (activeConcernId === id && drawer && !drawer.classList.contains('hidden')) {
        closeConcernDrawer();
        return;
    }

    activeConcernId = id;
    document.querySelectorAll('.concern-row').forEach(r => {
        r.classList.remove('bg-blue-50/40');
    });
    rowElement.classList.add('bg-blue-50/40');

    const data = concernsData[id];
    if (!data) return;

    document.getElementById('drawerTicketId').innerText = data.id;
    document.getElementById('drawerTitle').innerText = data.title;
    document.getElementById('drawerFullText').innerText = data.full_text;
    document.getElementById('drawerSubmittedBy').innerText = data.submitted_by;
    document.getElementById('drawerCategory').innerText = data.category;
    document.getElementById('drawerLocation').innerText = data.location;
    document.getElementById('drawerDept').innerText = data.assigned_dept;

    if (drawer) {
        drawer.classList.remove('hidden');
        tableContainer.className = "lg:col-span-8 space-y-4 transition-all duration-300";
    }
}

function closeConcernDrawer() {
    activeConcernId = null;
    document.querySelectorAll('.concern-row').forEach(r => {
        r.classList.remove('bg-blue-50/40');
    });
    const drawer = document.getElementById('concernDetailsDrawer');
    const tableContainer = document.getElementById('concernsTableContainer');
    if (drawer) drawer.classList.add('hidden');
    if (tableContainer) tableContainer.className = "lg:col-span-12 space-y-4 transition-all duration-300";
}

function filterConcernsTable() {
    const searchVal = document.getElementById('concernSearchInput').value.toLowerCase();
    const catVal = document.getElementById('concernCategoryFilter').value.toLowerCase();
    const statusVal = document.getElementById('concernStatusFilter').value.toLowerCase();
    const priorityVal = document.getElementById('concernPriorityFilter').value.toLowerCase();

    const rows = document.querySelectorAll('.concern-row');

    rows.forEach(r => {
        const text = r.innerText.toLowerCase();
        const cat = (r.getAttribute('data-cat') || '').toLowerCase();
        const status = (r.getAttribute('data-status') || '').toLowerCase();
        const priority = (r.getAttribute('data-priority') || '').toLowerCase();

        const matchesSearch = !searchVal || text.includes(searchVal);
        const matchesCat = !catVal || cat.includes(catVal);
        const matchesStatus = !statusVal || status.includes(statusVal);
        const matchesPriority = !priorityVal || priority.includes(priorityVal);

        r.style.display = (matchesSearch && matchesCat && matchesStatus && matchesPriority) ? '' : 'none';
    });
}

function openSubmitConcernModal() {
    document.getElementById('submitConcernModal').classList.remove('hidden');
}

function closeSubmitConcernModal() {
    document.getElementById('submitConcernModal').classList.add('hidden');
}

function toggleAnonymousNotice(checked) {
    const notice = document.getElementById('anonymousNotice');
    if (checked) notice.classList.remove('hidden');
    else notice.classList.add('hidden');
}

function submitConcernForm() {
    const title = document.getElementById('newTitle').value.trim();
    if (!title) {
        alert('Please enter a ticket subject/title.');
        return;
    }
    const newId = `TCK-2025-0${Math.floor(Math.random() * 900) + 100}`;
    alert(`Ticket ${newId} submitted successfully! Auto-routing to AI classification engine.`);
    closeSubmitConcernModal();
}

function exportConcernsReport() {
    alert('Exporting Grievance Tickets List (CSV)...');
}
</script>

<?php include '../../includes/footer.php'; ?>
