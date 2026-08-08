<?php
$basePath = '../../';
require_once __DIR__ . '/../../src/bootstrap.php';

// Dummy Concerns Data matching the combined mockups exactly
$concerns = [
    [
        'id' => 'CG-0258',
        'citizen' => 'Pedro Reyes',
        'user_type' => 'Commonwealth Resident',
        'location' => 'Commonwealth Ave, Brgy. Commonwealth, Quezon City',
        'summary' => 'Large pothole along Commonwealth Ave causing accidents.',
        'full_text' => 'A very large and deep pothole has formed along Commonwealth Avenue near the pedestrian overpass. Multiple motorbikes and vehicles have hit it over the past 48 hours causing minor accidents and tire damage. Immediate asphalt patching or road repair is urgently requested before a major accident occurs.',
        'category' => 'Road Damage',
        'category_type' => 'Infrastructure',
        'category_color' => 'bg-blue-50 text-blue-600 border-blue-200/60',
        'dept' => 'Engineering Office',
        'dept_icon' => 'fa-solid fa-building-user',
        'assigned_team' => 'Road Maintenance Team Alpha',
        'confidence' => 98,
        'confidence_color' => 'text-emerald-600 border-emerald-300 bg-emerald-50/50',
        'status' => 'In Progress',
        'status_badge' => 'bg-emerald-50 text-emerald-600 border-emerald-200',
        'status_type' => 'auto',
        'priority' => 'High',
        'keywords' => ['pothole', 'road damage', 'crack', 'accidents'],
        'reasoning' => 'The report specifies road damage and potholes along a main thoroughfare. Similar reports were routed to Engineering Office.',
        'submitted_date' => 'May 15, 2025',
        'submitted_time' => '10:43 AM',
        'resolution_summary' => 'Dispatched asphalt repair crew to patch main pothole along Commonwealth Ave pedestrian overpass. Cold-mix asphalt applied and compacted.',
        'action_taken' => 'Asphalt Road Patching / Repair',
        'detailed_notes' => '• Inspected location with district engineering officer.\n• Applied asphalt sealant and heavy roller compaction.\n• Traffic flow restored safely.',
        'resolution_date' => 'May 16, 2025',
        'resolution_time' => '02:30 PM'
    ],
    [
        'id' => 'CG-0259',
        'citizen' => 'Maria Santos',
        'user_type' => 'Holy Spirit Resident',
        'location' => 'Zone 4, Brgy. Holy Spirit, Quezon City',
        'summary' => 'Garbage not collected for 3 days already.',
        'full_text' => 'The garbage collection truck has not visited our street (Zone 4, Brgy. Holy Spirit) for 3 consecutive days. Trash bags are piling up along the sidewalk causing foul odor and attracting strays.',
        'category' => 'Waste Management',
        'category_type' => 'Environment',
        'category_color' => 'bg-emerald-50 text-emerald-600 border-emerald-200/60',
        'dept' => 'Sanitation Office',
        'dept_icon' => 'fa-solid fa-trash-can',
        'assigned_team' => 'District 2 Waste Disposal Unit',
        'confidence' => 94,
        'confidence_color' => 'text-emerald-600 border-emerald-300 bg-emerald-50/50',
        'status' => 'Auto Routed',
        'status_badge' => 'bg-emerald-50 text-emerald-600 border-emerald-200',
        'status_type' => 'auto',
        'priority' => 'Medium',
        'keywords' => ['garbage', 'trash', 'waste', 'collection'],
        'reasoning' => 'Issue mentions uncollected waste and garbage accumulation. Matched waste management routing rules.',
        'submitted_date' => 'May 14, 2025',
        'submitted_time' => '10:41 AM',
        'resolution_summary' => 'Coordinated with waste contractor for immediate garbage pickup in Zone 4. Extra dump truck deployed to clear residual waste.',
        'action_taken' => 'Waste Pickup & Cleanup Dispatched',
        'detailed_notes' => '• Garbage contractor notified.\n• Side street cleared completely by 1:00 PM.',
        'resolution_date' => 'May 15, 2025',
        'resolution_time' => '01:15 PM'
    ],
    [
        'id' => 'CG-0260',
        'citizen' => 'John Dela Cruz',
        'user_type' => 'Batasan Hills Resident',
        'location' => 'Batasan Hills Elementary School, Brgy. Batasan Hills',
        'summary' => 'Water leaking near the school building.',
        'full_text' => 'Water leaking near the school building. There is a broken main pipe underneath the pavement near Batasan Hills Elementary School entrance. Clean water has been running continuous on the street since early morning.',
        'category' => 'Water Infrastructure',
        'category_type' => 'Utilities',
        'category_color' => 'bg-sky-50 text-sky-600 border-sky-200/60',
        'dept' => 'Utilities Office',
        'dept_icon' => 'fa-solid fa-droplet',
        'assigned_team' => 'Water Pipeline Repair Crew',
        'confidence' => 81,
        'confidence_color' => 'text-amber-600 border-amber-300 bg-amber-50/50',
        'status' => 'Needs Review',
        'status_badge' => 'bg-amber-50 text-amber-600 border-amber-200',
        'status_type' => 'review',
        'priority' => 'High',
        'keywords' => ['water', 'leaking', 'pipe', 'school'],
        'reasoning' => 'The report is related to water leakage which falls under water infrastructure maintenance. Similar reports were routed to Utilities Office.',
        'submitted_date' => 'May 12, 2025',
        'submitted_time' => '10:38 AM',
        'resolution_summary' => 'Cleared clogged main valve and replaced leaking 4-inch PVC pipe fitting near elementary school entrance.',
        'action_taken' => 'Pipe Leak Repaired & Sealed',
        'detailed_notes' => '• Shut off local water line segment.\n• Replaced cracked pipe coupling.\n• Tested pressure - 0 leaks remaining.',
        'resolution_date' => 'May 13, 2025',
        'resolution_time' => '11:45 AM'
    ],
    [
        'id' => 'CG-0261',
        'citizen' => 'Ana Lim',
        'user_type' => 'Don Antonio Resident',
        'location' => 'Don Antonio Heights Main Rd, Brgy. Don Antonio',
        'summary' => 'Street lights not working for weeks.',
        'full_text' => 'Several street lamps along Don Antonio Heights Main Road have been out of order for two weeks. The dark street poses safety concerns for commuters walking home late at night.',
        'category' => 'Public Utilities',
        'category_type' => 'Infrastructure',
        'category_color' => 'bg-purple-50 text-purple-600 border-purple-200/60',
        'dept' => 'Electrical Maintenance',
        'dept_icon' => 'fa-solid fa-lightbulb',
        'assigned_team' => 'Electrical Maintenance Unit 3',
        'confidence' => 88,
        'confidence_color' => 'text-amber-600 border-amber-300 bg-amber-50/50',
        'status' => 'Needs Review',
        'status_badge' => 'bg-amber-50 text-amber-600 border-amber-200',
        'status_type' => 'review',
        'priority' => 'Medium',
        'keywords' => ['street light', 'electricity', 'dark', 'maintenance'],
        'reasoning' => 'Refers to broken street lighting infrastructure. High probability match for Electrical Maintenance.',
        'submitted_date' => 'May 11, 2025',
        'submitted_time' => '10:37 AM',
        'resolution_summary' => 'Replaced 4 burnt-out LED lamps and repaired faulty ballast transformer on main line.',
        'action_taken' => 'Street Light Fixtures Replaced',
        'detailed_notes' => '• Tested voltage supply line.\n• Installed new 150W LED streetlights.\n• All lamps functioning properly.',
        'resolution_date' => 'May 12, 2025',
        'resolution_time' => '04:20 PM'
    ],
    [
        'id' => 'CG-0262',
        'citizen' => 'Michael Tan',
        'user_type' => 'Fairview Resident',
        'location' => 'Phase 3, Brgy. Fairview, Quezon City',
        'summary' => 'Loud noise and videoke all night.',
        'full_text' => 'Loud videoke and sound systems playing beyond midnight on weekdays at Phase 3 Fairview. Repeated noise disturbance violating local city quiet hours ordinances.',
        'category' => 'Noise Complaint',
        'category_type' => 'Public Safety',
        'category_color' => 'bg-amber-50 text-amber-600 border-amber-200/60',
        'dept' => 'Barangay Office',
        'dept_icon' => 'fa-solid fa-building-flag',
        'assigned_team' => 'Barangay Tanod Patrol',
        'confidence' => 67,
        'confidence_color' => 'text-red-600 border-red-300 bg-red-50/50',
        'status' => 'Needs Review',
        'status_badge' => 'bg-amber-50 text-amber-600 border-amber-200',
        'status_type' => 'review',
        'priority' => 'Low',
        'keywords' => ['noise', 'videoke', 'loud', 'peace'],
        'reasoning' => 'Public disturbance report requiring local barangay enforcement validation.',
        'submitted_date' => 'May 10, 2025',
        'submitted_time' => '10:36 AM',
        'resolution_summary' => 'Barangay Tanod patrol dispatched to issue verbal warning and enforce quiet hour ordinance.',
        'action_taken' => 'Verbal Warning Issued by Patrol',
        'detailed_notes' => '• Spoke with household owner.\n• Sound system shut down at 10:45 PM.',
        'resolution_date' => 'May 10, 2025',
        'resolution_time' => '11:00 PM'
    ],
    [
        'id' => 'CG-0263',
        'citizen' => 'Liza Gomez',
        'user_type' => 'Pasong Putik Resident',
        'location' => 'Intersection, Brgy. Pasong Putik, Quezon City',
        'summary' => 'Flooding every time it rains heavily.',
        'full_text' => 'Severe gutter flooding occurs every heavy rainfall near the corner intersection of Pasong Putik. Clogged drainage culverts prevent water flow, forcing water into residential driveways.',
        'category' => 'Flooding',
        'category_type' => 'Disaster',
        'category_color' => 'bg-rose-50 text-rose-600 border-rose-200/60',
        'dept' => 'DRRM Office',
        'dept_icon' => 'fa-solid fa-cloud-showers-heavy',
        'assigned_team' => 'DRRM Flood Control & De-clogging Team',
        'confidence' => 99,
        'confidence_color' => 'text-emerald-600 border-emerald-300 bg-emerald-50/50',
        'status' => 'Auto Routed',
        'status_badge' => 'bg-emerald-50 text-emerald-600 border-emerald-200',
        'status_type' => 'auto',
        'priority' => 'High',
        'keywords' => ['flood', 'flooding', 'rain water', 'drainage'],
        'reasoning' => 'Flood hazard report routed automatically to Disaster Risk Reduction & Management Office.',
        'submitted_date' => 'May 09, 2025',
        'submitted_time' => '10:30 AM',
        'resolution_summary' => 'Declogged stormwater drainage inlet and removed accumulated silt and plastic debris.',
        'action_taken' => 'Drainage Declogging & Desilting',
        'detailed_notes' => '• Vacuum truck desilted 50m of storm pipe.\n• Water flow capacity restored to 100%.',
        'resolution_date' => 'May 10, 2025',
        'resolution_time' => '09:00 AM'
    ]
];

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
</style>

<main class="flex-1 p-4 md:p-6 lg:p-8 w-full overflow-y-auto bg-slate-50/50 min-h-[calc(100vh-4rem)] space-y-6">

    <!-- VIEW 1: Main Dashboard View (Table, KPI, Drawer, Bottom Cards) -->
    <div id="mainDashboardView" class="space-y-6">

        <!-- Top KPI Cards Row (5 Cards) -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-4">
            
            <!-- Card 1: AI Engine Status -->
            <div class="bg-white rounded-2xl p-4 border border-slate-100 shadow-xs flex items-center gap-3.5 hover:shadow-md transition-all">
                <div class="w-12 h-12 rounded-2xl bg-blue-50 text-[#0f53d1] flex items-center justify-center shrink-0 text-xl border border-blue-100/60">
                    <i class="fa-solid fa-robot"></i>
                </div>
                <div>
                    <p class="text-[10px] font-bold text-slate-400 uppercase tracking-wide">AI Engine Status</p>
                    <h3 class="text-base font-black text-emerald-600 mt-0.5 flex items-center gap-1.5">
                        Online
                    </h3>
                    <p class="text-[10px] font-semibold text-slate-400 mt-1 flex items-center gap-1">
                        <span class="w-1.5 h-1.5 rounded-full bg-emerald-500 inline-block"></span> Last updated: 10:45 AM
                    </p>
                </div>
            </div>

            <!-- Card 2: Reports Today -->
            <div class="bg-white rounded-2xl p-4 border border-slate-100 shadow-xs flex items-center gap-3.5 hover:shadow-md transition-all">
                <div class="w-12 h-12 rounded-2xl bg-blue-50 text-[#0f53d1] flex items-center justify-center shrink-0 text-xl border border-blue-100/60">
                    <i class="fa-solid fa-file-lines"></i>
                </div>
                <div>
                    <p class="text-[10px] font-bold text-slate-400 uppercase tracking-wide">Reports Today</p>
                    <h3 class="text-2xl font-black text-slate-900 mt-0.5">143</h3>
                    <p class="text-[10px] font-bold text-emerald-600 mt-1 flex items-center gap-1">
                        <i class="fa-solid fa-arrow-up text-[9px]"></i> 12.5% <span class="text-slate-400 font-normal">from yesterday</span>
                    </p>
                </div>
            </div>

            <!-- Card 3: Auto Routed -->
            <div class="bg-white rounded-2xl p-4 border border-slate-100 shadow-xs flex items-center gap-3.5 hover:shadow-md transition-all">
                <div class="w-12 h-12 rounded-2xl bg-emerald-50 text-emerald-500 flex items-center justify-center shrink-0 text-xl border border-emerald-100/60">
                    <i class="fa-solid fa-circle-check"></i>
                </div>
                <div>
                    <p class="text-[10px] font-bold text-slate-400 uppercase tracking-wide">Auto Routed</p>
                    <h3 class="text-2xl font-black text-slate-900 mt-0.5">137</h3>
                    <p class="text-[10px] font-bold text-emerald-600 mt-1 flex items-center gap-1">
                        <span class="w-1.5 h-1.5 rounded-full bg-emerald-500 inline-block"></span> 91.6% <span class="text-slate-400 font-normal">of total reports</span>
                    </p>
                </div>
            </div>

            <!-- Card 4: Pending Review -->
            <div class="bg-white rounded-2xl p-4 border border-slate-100 shadow-xs flex items-center gap-3.5 hover:shadow-md transition-all">
                <div class="w-12 h-12 rounded-2xl bg-amber-50 text-amber-500 flex items-center justify-center shrink-0 text-xl border border-amber-100/60">
                    <i class="fa-solid fa-clock"></i>
                </div>
                <div>
                    <p class="text-[10px] font-bold text-slate-400 uppercase tracking-wide">Pending Review</p>
                    <h3 class="text-2xl font-black text-slate-900 mt-0.5">6</h3>
                    <p class="text-[10px] font-bold text-amber-600 mt-1 flex items-center gap-1">
                        <span class="w-1.5 h-1.5 rounded-full bg-amber-500 inline-block"></span> Needs human validation
                    </p>
                </div>
            </div>

            <!-- Card 5: Routing Accuracy -->
            <div class="bg-white rounded-2xl p-4 border border-slate-100 shadow-xs flex items-center gap-3.5 hover:shadow-md transition-all">
                <div class="w-12 h-12 rounded-2xl bg-purple-50 text-purple-600 flex items-center justify-center shrink-0 text-xl border border-purple-100/60">
                    <i class="fa-solid fa-chart-line"></i>
                </div>
                <div>
                    <p class="text-[10px] font-bold text-slate-400 uppercase tracking-wide">Routing Accuracy</p>
                    <h3 class="text-2xl font-black text-slate-900 mt-0.5">96.8%</h3>
                    <p class="text-[10px] font-bold text-emerald-600 mt-1 flex items-center gap-1">
                        <i class="fa-solid fa-arrow-up text-[9px]"></i> 2.4% <span class="text-slate-400 font-normal">this week</span>
                    </p>
                </div>
            </div>

        </div>

        <!-- Main Content Area: AI Decision Queue Table (Left) + AI Analysis Preview Drawer (Right) -->
        <div class="flex flex-col xl:flex-row gap-6 items-start">

            <!-- Left Column: Table -->
            <div class="flex-1 w-full min-w-0 bg-white rounded-2xl border border-slate-200 shadow-sm flex flex-col">
                
                <!-- Table Header Bar -->
                <div class="p-5 border-b border-slate-100 flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                    <div>
                        <div class="flex items-center gap-2.5">
                            <h2 class="text-base font-black text-slate-900 tracking-tight">AI Decision Queue</h2>
                            <span id="queueBadgeCount" class="w-5 h-5 rounded-full bg-blue-100 text-[#0f53d1] text-xs font-bold flex items-center justify-center">6</span>
                        </div>
                        <p class="text-xs text-slate-500 font-medium mt-0.5">Reports that have been analyzed by AI and are awaiting review or confirmation.</p>
                    </div>

                    <div class="flex items-center gap-2 shrink-0">
                        <select id="statusFilterSelect" onchange="filterQueueByStatus(this.value)" class="bg-white border border-slate-200 text-slate-700 text-xs font-semibold rounded-xl px-3 py-2 outline-none cursor-pointer">
                            <option value="all">Filter: All Status</option>
                            <option value="review">Needs Review</option>
                            <option value="auto">Auto Routed</option>
                        </select>

                        <button onclick="location.reload()" title="Refresh Queue" class="w-9 h-9 rounded-xl border border-slate-200 bg-white hover:bg-slate-50 text-slate-500 flex items-center justify-center transition cursor-pointer">
                            <i class="fa-solid fa-rotate-right text-xs"></i>
                        </button>
                    </div>
                </div>

                <!-- Table Wrapper -->
                <div class="overflow-x-auto w-full custom-scrollbar">
                    <table class="w-full text-left border-collapse whitespace-nowrap min-w-[950px]">
                        <thead>
                            <tr class="border-b border-slate-100 bg-slate-50/50 text-[10px] font-bold text-slate-400 uppercase tracking-wider">
                                <th class="p-4 w-10 text-center"><input type="checkbox" class="w-4 h-4 text-[#0f53d1] rounded border-slate-300"></th>
                                <th class="p-4">Concern ID</th>
                                <th class="p-4">Citizen</th>
                                <th class="p-4">Concern Summary</th>
                                <th class="p-4">AI Category</th>
                                <th class="p-4">Suggested Department</th>
                                <th class="p-4">Confidence</th>
                                <th class="p-4">Status</th>
                                <th class="p-4 text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody id="queueTableBody" class="divide-y divide-slate-100 text-xs">
                            <?php foreach ($concerns as $index => $item): ?>
                            <tr onclick="selectConcern('<?php echo $item['id']; ?>')" class="concern-row hover:bg-blue-50/30 transition cursor-pointer select-none <?php echo $item['id'] === 'CG-0260' ? 'bg-blue-50/40 font-medium' : ''; ?>" data-status-type="<?php echo $item['status_type']; ?>" data-id="<?php echo $item['id']; ?>">
                                <td class="p-4 text-center" onclick="event.stopPropagation()"><input type="checkbox" class="w-4 h-4 text-[#0f53d1] rounded border-slate-300"></td>
                                <td class="p-4">
                                    <span class="px-2 py-1 rounded-md bg-blue-50 text-[#0f53d1] font-bold text-[11px] border border-blue-100"><?php echo $item['id']; ?></span>
                                </td>
                                <td class="p-4">
                                    <p class="font-bold text-slate-800"><?php echo $item['citizen']; ?></p>
                                    <p class="text-[10px] text-slate-400 font-medium"><?php echo $item['location']; ?></p>
                                </td>
                                <td class="p-4 max-w-xs truncate text-slate-700 font-medium" title="<?php echo htmlspecialchars($item['summary']); ?>">
                                    <?php echo $item['summary']; ?>
                                </td>
                                <td class="p-4">
                                    <span class="px-2.5 py-1 text-[10px] font-bold rounded-lg border <?php echo $item['category_color']; ?>">
                                        <?php echo $item['category']; ?> <span class="opacity-70 font-normal">( <?php echo $item['category_type']; ?> )</span>
                                    </span>
                                </td>
                                <td class="p-4 font-semibold text-slate-700">
                                    <span class="flex items-center gap-1.5">
                                        <i class="fa-solid fa-building text-slate-400"></i> <?php echo $item['dept']; ?>
                                    </span>
                                </td>
                                <td class="p-4">
                                    <span class="px-2 py-0.5 text-[10px] font-bold rounded-md border <?php echo $item['confidence_color']; ?>">
                                        <?php echo $item['confidence']; ?>%
                                    </span>
                                </td>
                                <td class="p-4">
                                    <?php if ($item['status_type'] === 'auto'): ?>
                                        <span class="text-emerald-600 font-bold flex items-center gap-1 text-[11px]">
                                            <i class="fa-solid fa-check text-[10px]"></i> Auto Routed
                                        </span>
                                    <?php else: ?>
                                        <span class="px-2.5 py-1 text-[10px] font-bold rounded-lg bg-amber-50 text-amber-600 border border-amber-200/80">
                                            Needs Review
                                        </span>
                                    <?php endif; ?>
                                </td>
                                <td class="p-4 text-center" onclick="event.stopPropagation()">
                                    <button onclick="selectConcern('<?php echo $item['id']; ?>')" title="View AI Analysis Preview" class="w-8 h-8 rounded-lg bg-slate-100 hover:bg-blue-100 text-slate-500 hover:text-[#0f53d1] transition flex items-center justify-center mx-auto cursor-pointer">
                                        <i class="fa-solid fa-eye text-xs"></i>
                                    </button>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>

                <!-- Table Footer -->
                <div class="p-4 border-t border-slate-100 flex items-center justify-between text-xs text-slate-500 font-medium">
                    <span id="showingResultsText">Showing 1 to 6 of 6 results</span>
                    <div class="flex items-center gap-1">
                        <button class="w-7 h-7 rounded-lg border border-slate-200 flex items-center justify-center hover:bg-slate-50 text-slate-400"><i class="fa-solid fa-chevron-left text-[9px]"></i></button>
                        <button class="w-7 h-7 rounded-lg bg-[#0f53d1] text-white font-bold flex items-center justify-center">1</button>
                        <button class="w-7 h-7 rounded-lg border border-slate-200 flex items-center justify-center hover:bg-slate-50 text-slate-400"><i class="fa-solid fa-chevron-right text-[9px]"></i></button>
                    </div>
                </div>

            </div>

            <!-- Right Column: AI Analysis Preview Drawer -->
            <div id="previewDrawer" class="w-full xl:w-[400px] bg-white rounded-2xl border border-slate-200 shadow-sm p-5 shrink-0 flex flex-col gap-5">
                
                <!-- Drawer Header -->
                <div class="flex items-center justify-between border-b border-slate-100 pb-3">
                    <h2 class="text-base font-black text-slate-900 tracking-tight">AI Analysis Preview</h2>
                    <button onclick="closePreviewDrawer()" class="text-slate-400 hover:text-slate-700 transition cursor-pointer p-1"><i class="fa-solid fa-xmark text-sm"></i></button>
                </div>

                <!-- Badges Bar -->
                <div class="flex items-center gap-2">
                    <span id="previewId" class="px-2.5 py-1 text-xs font-bold text-[#0f53d1] bg-blue-50 border border-blue-100 rounded-md">CG-0260</span>
                    <span id="previewStatusBadge" class="px-2.5 py-1 text-xs font-bold text-amber-600 bg-amber-50 border border-amber-200/80 rounded-md">Needs Review</span>
                </div>

                <!-- Concern Summary -->
                <div>
                    <span class="text-[10px] font-bold text-slate-400 uppercase tracking-wide block">Concern Summary</span>
                    <p id="previewSummary" class="text-sm font-bold text-slate-900 mt-1 leading-snug">Water leaking near the school building.</p>
                </div>

                <!-- AI Analysis -->
                <div class="space-y-3.5 pt-2 border-t border-slate-100">
                    <h3 class="text-xs font-black text-slate-800 tracking-wide uppercase">AI Analysis</h3>

                    <div class="space-y-2.5 text-xs">
                        <div class="flex items-center justify-between">
                            <span class="text-slate-500 font-medium">Category</span>
                            <span id="previewCategory" class="font-bold text-slate-800 flex items-center gap-1.5">
                                <i class="fa-solid fa-droplet text-blue-500"></i> Water Infrastructure
                            </span>
                        </div>

                        <div class="flex items-center justify-between">
                            <span class="text-slate-500 font-medium">Suggested Department</span>
                            <span id="previewDept" class="font-bold text-slate-800 flex items-center gap-1.5">
                                <i class="fa-solid fa-building text-slate-400"></i> Utilities Office
                            </span>
                        </div>

                        <div class="flex items-center justify-between">
                            <span class="text-slate-500 font-medium">Priority Level</span>
                            <span id="previewPriority" class="px-2 py-0.5 text-[10px] font-bold rounded-md bg-amber-50 text-amber-600 border border-amber-200">High</span>
                        </div>

                        <div class="space-y-1.5 pt-1">
                            <div class="flex items-center justify-between">
                                <span class="text-slate-500 font-medium">Confidence Score</span>
                                <span id="previewConfidence" class="font-bold text-slate-900">81%</span>
                            </div>
                            <div class="w-full bg-slate-100 h-2 rounded-full overflow-hidden">
                                <div id="previewConfidenceBar" class="bg-amber-500 h-full rounded-full transition-all duration-300" style="width: 81%"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- AI Reasoning -->
                <div class="space-y-2 pt-2 border-t border-slate-100">
                    <div class="flex items-center gap-1.5 text-xs font-bold text-slate-800">
                        <span class="text-slate-400">AI Reasoning</span>
                        <i class="fa-regular fa-circle-question text-slate-400 text-xs"></i>
                    </div>
                    <p id="previewReasoning" class="text-xs text-slate-600 font-medium leading-relaxed">
                        The report is related to water leakage which falls under water infrastructure maintenance. Similar reports were routed to Utilities Office.
                    </p>
                </div>

                <!-- Detected Keywords -->
                <div class="space-y-2 pt-2 border-t border-slate-100">
                    <span class="text-[10px] font-bold text-slate-400 uppercase tracking-wide block">Detected Keywords</span>
                    <div id="previewKeywords" class="flex flex-wrap gap-1.5">
                        <span class="px-2.5 py-1 text-[11px] font-medium text-slate-700 bg-slate-100 rounded-md border border-slate-200/60">water</span>
                        <span class="px-2.5 py-1 text-[11px] font-medium text-slate-700 bg-slate-100 rounded-md border border-slate-200/60">leaking</span>
                        <span class="px-2.5 py-1 text-[11px] font-medium text-slate-700 bg-slate-100 rounded-md border border-slate-200/60">pipe</span>
                        <span class="px-2.5 py-1 text-[11px] font-medium text-slate-700 bg-slate-100 rounded-md border border-slate-200/60">school</span>
                    </div>
                </div>

                <!-- Open Main Content View Button -->
                <div class="pt-3 border-t border-slate-100">
                    <button onclick="openFullConcernView()" class="w-full py-2.5 px-4 text-xs font-bold text-[#0f53d1] bg-blue-50/80 hover:bg-blue-100 border border-blue-200/80 rounded-xl transition flex items-center justify-center gap-2 cursor-pointer shadow-xs">
                        <i class="fa-solid fa-expand text-xs"></i>
                        <span>View Concern</span>
                    </button>
                </div>

                <!-- Action Buttons -->
                <div class="space-y-2.5 pt-3 border-t border-slate-100">
                    <button onclick="acceptAIDecision()" class="w-full py-2.5 px-4 text-xs font-bold text-white bg-[#0f53d1] hover:bg-[#0d46b0] rounded-xl shadow-xs transition flex items-center justify-center gap-2 cursor-pointer">
                        <i class="fa-solid fa-circle-check"></i>
                        <span>Accept AI Decision</span>
                    </button>

                    <button onclick="overrideDepartment()" class="w-full py-2.5 px-4 text-xs font-bold text-slate-700 bg-white border border-slate-200 hover:bg-slate-50 rounded-xl transition flex items-center justify-center gap-2 cursor-pointer">
                        <i class="fa-solid fa-pen-to-square"></i>
                        <span>Override Department</span>
                    </button>

                    <button onclick="requestReanalysis()" class="w-full py-2.5 px-4 text-xs font-bold text-slate-700 bg-white border border-slate-200 hover:bg-slate-50 rounded-xl transition flex items-center justify-center gap-2 cursor-pointer">
                        <i class="fa-solid fa-rotate-right"></i>
                        <span>Request Reanalysis</span>
                    </button>
                </div>

            </div>

        </div>

        <!-- Bottom Cards Row (3 Cards) -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

            <!-- Card 1: Routing Activity (Today) -->
            <div class="bg-white rounded-2xl border border-slate-200 shadow-sm p-5 space-y-4 flex flex-col justify-between">
                <div>
                    <div class="flex items-center justify-between mb-3">
                        <h3 class="text-xs font-black text-slate-900 uppercase tracking-wider">Routing Activity <span class="text-slate-400 font-normal">(Today)</span></h3>
                        <a href="#" class="text-[10px] font-bold text-[#0f53d1] hover:underline">View All</a>
                    </div>

                    <div class="space-y-3.5 text-xs">
                        <div class="flex items-start gap-2.5">
                            <span class="text-[10px] font-bold text-slate-400 shrink-0 w-14 mt-0.5">10:43 AM</span>
                            <div class="w-2 h-2 rounded-full bg-emerald-500 shrink-0 mt-1.5"></div>
                            <p class="text-slate-700 font-medium leading-tight">
                                <span class="font-bold text-[#0f53d1]">CG-0258</span> was automatically routed to <span class="font-bold text-slate-900">Engineering Office</span> <span class="text-slate-400">(98% confidence)</span> by AI Engine
                            </p>
                        </div>

                        <div class="flex items-start gap-2.5">
                            <span class="text-[10px] font-bold text-slate-400 shrink-0 w-14 mt-0.5">10:41 AM</span>
                            <div class="w-2 h-2 rounded-full bg-emerald-500 shrink-0 mt-1.5"></div>
                            <p class="text-slate-700 font-medium leading-tight">
                                <span class="font-bold text-[#0f53d1]">CG-0257</span> was automatically routed to <span class="font-bold text-slate-900">Sanitation Office</span> <span class="text-slate-400">(94% confidence)</span> by AI Engine
                            </p>
                        </div>

                        <div class="flex items-start gap-2.5">
                            <span class="text-[10px] font-bold text-slate-400 shrink-0 w-14 mt-0.5">10:38 AM</span>
                            <div class="w-2 h-2 rounded-full bg-amber-500 shrink-0 mt-1.5"></div>
                            <p class="text-slate-700 font-medium leading-tight">
                                <span class="font-bold text-amber-600">CG-0260</span> is pending review <span class="text-slate-400">(81% confidence)</span> by AI Engine
                            </p>
                        </div>

                        <div class="flex items-start gap-2.5">
                            <span class="text-[10px] font-bold text-slate-400 shrink-0 w-14 mt-0.5">10:36 AM</span>
                            <div class="w-2 h-2 rounded-full bg-red-500 shrink-0 mt-1.5"></div>
                            <p class="text-slate-700 font-medium leading-tight">
                                <span class="font-bold text-red-600">CG-0262</span> is pending review <span class="text-slate-400">(67% confidence)</span> by AI Engine
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 2: Routing Rules (Active) -->
            <div class="bg-white rounded-2xl border border-slate-200 shadow-sm p-5 space-y-4 flex flex-col justify-between">
                <div>
                    <div class="flex items-center justify-between mb-3">
                        <h3 class="text-xs font-black text-slate-900 uppercase tracking-wider">Routing Rules <span class="text-emerald-600 text-[10px] font-bold">(Active)</span></h3>
                        <a href="#" class="text-[10px] font-bold text-[#0f53d1] hover:underline">Manage Rules</a>
                    </div>

                    <div class="space-y-2.5 text-xs">
                        <div class="flex items-center justify-between p-2 rounded-xl bg-slate-50 border border-slate-100">
                            <div class="flex items-center gap-1.5 text-slate-700 font-medium">
                                <i class="fa-solid fa-tag text-emerald-500 text-[10px]"></i>
                                <span class="text-[11px]">Keywords: <span class="font-bold">pothole, road damage, crack</span></span>
                            </div>
                            <div class="flex items-center gap-2">
                                <i class="fa-solid fa-arrow-right text-[10px] text-slate-400"></i>
                                <span class="px-2 py-0.5 rounded-md bg-blue-50 text-[#0f53d1] font-bold text-[10px] border border-blue-100 flex items-center gap-1">
                                    <i class="fa-solid fa-building text-[9px]"></i> Engineering Office
                                </span>
                            </div>
                        </div>

                        <div class="flex items-center justify-between p-2 rounded-xl bg-slate-50 border border-slate-100">
                            <div class="flex items-center gap-1.5 text-slate-700 font-medium">
                                <i class="fa-solid fa-tag text-emerald-500 text-[10px]"></i>
                                <span class="text-[11px]">Keywords: <span class="font-bold">garbage, trash, waste</span></span>
                            </div>
                            <div class="flex items-center gap-2">
                                <i class="fa-solid fa-arrow-right text-[10px] text-slate-400"></i>
                                <span class="px-2 py-0.5 rounded-md bg-emerald-50 text-emerald-600 font-bold text-[10px] border border-emerald-100 flex items-center gap-1">
                                    <i class="fa-solid fa-building text-[9px]"></i> Sanitation Office
                                </span>
                            </div>
                        </div>

                        <div class="flex items-center justify-between p-2 rounded-xl bg-slate-50 border border-slate-100">
                            <div class="flex items-center gap-1.5 text-slate-700 font-medium">
                                <i class="fa-solid fa-tag text-blue-500 text-[10px]"></i>
                                <span class="text-[11px]">Keywords: <span class="font-bold">flood, flooding, rain water</span></span>
                            </div>
                            <div class="flex items-center gap-2">
                                <i class="fa-solid fa-arrow-right text-[10px] text-slate-400"></i>
                                <span class="px-2 py-0.5 rounded-md bg-rose-50 text-rose-600 font-bold text-[10px] border border-rose-100 flex items-center gap-1">
                                    <i class="fa-solid fa-building text-[9px]"></i> DRRM Office
                                </span>
                            </div>
                        </div>

                        <div class="flex items-center justify-between p-2 rounded-xl bg-slate-50 border border-slate-100">
                            <div class="flex items-center gap-1.5 text-slate-700 font-medium">
                                <i class="fa-solid fa-tag text-blue-500 text-[10px]"></i>
                                <span class="text-[11px]">Keywords: <span class="font-bold">water leak, pipe, water supply</span></span>
                            </div>
                            <div class="flex items-center gap-2">
                                <i class="fa-solid fa-arrow-right text-[10px] text-slate-400"></i>
                                <span class="px-2 py-0.5 rounded-md bg-sky-50 text-sky-600 font-bold text-[10px] border border-sky-100 flex items-center gap-1">
                                    <i class="fa-solid fa-building text-[9px]"></i> Utilities Office
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="pt-2 border-t border-slate-100">
                    <a href="#" class="text-xs font-bold text-[#0f53d1] hover:underline flex items-center gap-1">
                        <i class="fa-solid fa-plus text-[10px]"></i> 12 more active rules
                    </a>
                </div>
            </div>

            <!-- Card 3: AI Model Performance (This Week) -->
            <div class="bg-white rounded-2xl border border-slate-200 shadow-sm p-5 space-y-4 flex flex-col justify-between">
                <div>
                    <div class="flex items-center justify-between mb-3">
                        <h3 class="text-xs font-black text-slate-900 uppercase tracking-wider">AI Model Performance <span class="text-slate-400 font-normal">(This Week)</span></h3>
                        <a href="#" class="text-[10px] font-bold text-[#0f53d1] hover:underline">View Analytics</a>
                    </div>

                    <div class="grid grid-cols-2 gap-4 pt-1">
                        <!-- Accuracy Sparkline -->
                        <div class="space-y-1">
                            <span class="text-[10px] font-bold text-slate-400 uppercase tracking-wide block">Accuracy</span>
                            <h4 class="text-xl font-black text-slate-900">96.8%</h4>
                            <p class="text-[10px] font-bold text-emerald-600 flex items-center gap-0.5">
                                <i class="fa-solid fa-arrow-up text-[9px]"></i> 2.4% <span class="text-slate-400 font-normal">from last week</span>
                            </p>
                            <!-- Sparkline Chart SVG -->
                            <div class="pt-2">
                                <svg class="w-full h-9 text-[#0f53d1]" viewBox="0 0 100 30" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round">
                                    <path d="M0 25 L20 20 L40 22 L60 12 L80 18 L100 5" />
                                </svg>
                            </div>
                        </div>

                        <!-- Avg Routing Time Sparkline -->
                        <div class="space-y-1">
                            <span class="text-[10px] font-bold text-slate-400 uppercase tracking-wide block">Avg. Routing Time</span>
                            <h4 class="text-xl font-black text-slate-900">2.4 sec</h4>
                            <p class="text-[10px] font-bold text-emerald-600 flex items-center gap-0.5">
                                <i class="fa-solid fa-arrow-down text-[9px]"></i> 0.6 sec <span class="text-slate-400 font-normal">from last week</span>
                            </p>
                            <!-- Sparkline Chart SVG -->
                            <div class="pt-2">
                                <svg class="w-full h-9 text-emerald-500" viewBox="0 0 100 30" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round">
                                    <path d="M0 15 L20 22 L40 18 L60 25 L80 10 L100 8" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Performance Numbers Footer -->
                <div class="pt-3 border-t border-slate-100 grid grid-cols-3 gap-2 text-center">
                    <div>
                        <span class="text-[9px] font-bold text-slate-400 uppercase block">Total Analyzed</span>
                        <span class="text-xs font-black text-slate-900">1,234</span>
                    </div>
                    <div>
                        <span class="text-[9px] font-bold text-slate-400 uppercase block">Auto Routed</span>
                        <span class="text-xs font-black text-emerald-600">1,129 (91.5%)</span>
                    </div>
                    <div>
                        <span class="text-[9px] font-bold text-slate-400 uppercase block">Manual Review</span>
                        <span class="text-xs font-black text-rose-500">105 (8.5%)</span>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <!-- END VIEW 1 -->

    <!-- VIEW 2: UNIFIED FULL CONCERN DETAIL & RESOLUTION VIEW (Combining Mockup 1 & Mockup 2 seamlessly) -->
    <div id="fullConcernDetailView" class="hidden space-y-6">
        
        <!-- Top Navigation & Global Header Actions Bar -->
        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 bg-white p-4 rounded-2xl border border-slate-200 shadow-xs">
            <button onclick="closeFullConcernView()" class="inline-flex items-center gap-2.5 px-4 py-2.5 text-xs font-bold text-[#0f53d1] bg-blue-50/80 hover:bg-blue-100 border border-blue-200/80 rounded-xl transition cursor-pointer shadow-xs">
                <i class="fa-solid fa-arrow-left text-xs"></i>
                <span>Back to Incoming Concerns Queue</span>
            </button>

            <div class="flex items-center gap-2 flex-wrap">
                <button onclick="window.print()" class="px-4 py-2.5 text-xs font-bold text-slate-700 bg-white border border-slate-200 rounded-xl hover:bg-slate-50 transition cursor-pointer shadow-xs flex items-center gap-2">
                    <i class="fa-solid fa-print text-slate-500"></i>
                    <span>Print / Export</span>
                </button>

                <button onclick="saveResolutionDraft()" class="px-4 py-2.5 text-xs font-bold text-[#0f53d1] bg-white border border-blue-200 rounded-xl hover:bg-blue-50 transition cursor-pointer shadow-xs flex items-center gap-2">
                    <i class="fa-solid fa-floppy-disk"></i>
                    <span>Save as Draft</span>
                </button>

                <button onclick="acceptAIDecision()" class="px-4 py-2.5 text-xs font-bold text-white bg-[#0f53d1] hover:bg-[#0d46b0] rounded-xl transition shadow-xs flex items-center gap-2 cursor-pointer">
                    <i class="fa-solid fa-circle-check"></i>
                    <span>Accept AI Decision</span>
                </button>

                <button onclick="markAsResolved()" class="px-4 py-2.5 text-xs font-bold text-white bg-emerald-600 hover:bg-emerald-700 rounded-xl transition shadow-xs flex items-center gap-2 cursor-pointer">
                    <i class="fa-solid fa-circle-check"></i>
                    <span>Mark as Resolved</span>
                </button>
            </div>
        </div>

        <!-- Merged Key Metrics & Header Grid (No Duplication) -->
        <div class="bg-white rounded-2xl border border-slate-200 shadow-sm p-5">
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4 text-xs divide-x-0 md:divide-x divide-slate-100">
                
                <!-- 1: Concern ID & Priority -->
                <div class="pr-3 space-y-1">
                    <span class="text-[10px] font-bold text-slate-400 uppercase tracking-wide">Concern ID</span>
                    <div class="flex items-center gap-2 flex-wrap">
                        <span id="fullDetailId" class="text-base font-black text-slate-900 tracking-tight">CG-0260</span>
                        <span id="fullDetailPriority" class="px-2 py-0.5 text-[9px] font-bold rounded-md bg-amber-50 text-amber-600 border border-amber-200 uppercase">High Priority</span>
                    </div>
                </div>

                <!-- 2: Current Status -->
                <div class="px-0 md:px-4 space-y-1">
                    <span class="text-[10px] font-bold text-slate-400 uppercase tracking-wide">Status</span>
                    <div>
                        <span id="fullDetailStatus" class="inline-block px-2.5 py-1 text-xs font-bold rounded-md bg-blue-50 text-blue-600 border border-blue-200">IN PROGRESS</span>
                    </div>
                </div>

                <!-- 3: Category -->
                <div class="px-0 md:px-4 space-y-1">
                    <span class="text-[10px] font-bold text-slate-400 uppercase tracking-wide">Category</span>
                    <div class="flex items-center gap-2">
                        <div class="w-8 h-8 rounded-lg bg-blue-50 text-[#0f53d1] flex items-center justify-center text-sm shrink-0">
                            <i class="fa-solid fa-road"></i>
                        </div>
                        <div>
                            <p id="fullDetailCategory" class="font-bold text-slate-900 leading-tight">Water Infrastructure</p>
                            <p id="fullDetailCategoryType" class="text-[10px] text-slate-400 font-medium">Utilities</p>
                        </div>
                    </div>
                </div>

                <!-- 4: Submitted Date & Time -->
                <div class="px-0 md:px-4 space-y-1">
                    <span class="text-[10px] font-bold text-slate-400 uppercase tracking-wide">Submitted On</span>
                    <div class="flex items-center gap-2">
                        <i class="fa-regular fa-calendar text-slate-400 text-sm"></i>
                        <div>
                            <p id="fullDetailSubmittedDate" class="font-bold text-slate-900 leading-tight">May 12, 2025</p>
                            <p id="fullDetailSubmittedTime" class="text-[10px] text-slate-400 font-medium">09:15 AM</p>
                        </div>
                    </div>
                </div>

                <!-- 5: Submitted By -->
                <div class="px-0 md:px-4 space-y-1">
                    <span class="text-[10px] font-bold text-slate-400 uppercase tracking-wide">Submitted By</span>
                    <div class="flex items-center gap-2">
                        <i class="fa-regular fa-user text-slate-400 text-sm"></i>
                        <div>
                            <p id="fullDetailCitizen" class="font-bold text-slate-900 leading-tight">John Dela Cruz</p>
                            <p id="fullDetailUserType" class="text-[10px] text-slate-400 font-medium">Quezon City Resident</p>
                        </div>
                    </div>
                </div>

                <!-- 6: Target Department & Assigned Team -->
                <div class="pl-0 md:pl-4 space-y-1">
                    <span class="text-[10px] font-bold text-slate-400 uppercase tracking-wide">Target Department</span>
                    <div>
                        <p id="fullDetailDept" class="font-bold text-[#0f53d1] text-xs flex items-center gap-1.5">
                            <i class="fa-solid fa-building"></i> Utilities Office
                        </p>
                        <p id="fullDetailAssignedTeam" class="text-[10px] text-slate-500 font-semibold truncate">Water Pipeline Repair Crew</p>
                    </div>
                </div>

            </div>
        </div>

        <!-- Unified 3-Column Content & Resolution Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 items-start">
            
            <!-- COLUMN 1: Concern Details & AI Analysis -->
            <div class="space-y-6">
                
                <!-- Concern Details Card -->
                <div class="bg-white rounded-2xl border border-slate-200 shadow-sm p-5 space-y-4">
                    <div class="flex items-center gap-2 border-b border-slate-100 pb-3">
                        <i class="fa-solid fa-file-lines text-[#0f53d1] text-sm"></i>
                        <h3 class="text-xs font-black text-slate-900 uppercase tracking-wider">Concern Details</h3>
                    </div>

                    <div class="space-y-3 text-xs">
                        <div>
                            <span class="text-[10px] font-bold text-slate-400 uppercase block mb-1">Title / Subject</span>
                            <p id="fullDetailSummary" class="font-bold text-slate-900 text-sm leading-snug">Water leaking near the school building.</p>
                        </div>

                        <div>
                            <span class="text-[10px] font-bold text-slate-400 uppercase block mb-1">Description</span>
                            <p id="fullDetailFullText" class="text-slate-700 font-medium leading-relaxed bg-slate-50 p-3.5 rounded-xl border border-slate-100">
                                Water leaking near the school building. There is a broken main pipe underneath the pavement near Batasan Hills Elementary School entrance. Clean water has been running continuous on the street since early morning.
                            </p>
                        </div>

                        <div>
                            <span class="text-[10px] font-bold text-slate-400 uppercase block mb-1">Location</span>
                            <p id="fullDetailLocation" class="font-bold text-slate-800 flex items-center gap-1">
                                <i class="fa-solid fa-location-dot text-rose-500"></i> Batasan Hills Elementary School, Brgy. Batasan Hills
                            </p>
                            <a href="#" onclick="alert('Opening Google Maps location preview...')" class="text-[10px] font-bold text-[#0f53d1] hover:underline mt-0.5 inline-block">View on Map &rarr;</a>
                        </div>

                        <!-- Attachments Grid -->
                        <div class="pt-2">
                            <span class="text-[10px] font-bold text-slate-400 uppercase block mb-2">Attachments (3)</span>
                            <div class="grid grid-cols-3 gap-2">
                                <div class="h-16 bg-slate-100 rounded-lg border border-slate-200 flex flex-col items-center justify-center text-slate-400 hover:border-[#0f53d1] transition cursor-pointer">
                                    <i class="fa-solid fa-image text-lg"></i>
                                    <span class="text-[8px] font-bold truncate max-w-[60px]">photo1.jpg</span>
                                </div>
                                <div class="h-16 bg-slate-100 rounded-lg border border-slate-200 flex flex-col items-center justify-center text-slate-400 hover:border-[#0f53d1] transition cursor-pointer">
                                    <i class="fa-solid fa-image text-lg"></i>
                                    <span class="text-[8px] font-bold truncate max-w-[60px]">photo2.jpg</span>
                                </div>
                                <div class="h-16 bg-slate-100 rounded-lg border border-slate-200 flex items-center justify-center text-slate-600 font-black text-xs hover:border-[#0f53d1] transition cursor-pointer">
                                    +1
                                </div>
                            </div>
                        </div>

                        <!-- AI Metrics Summary inside Column 1 -->
                        <div class="pt-3 border-t border-slate-100 space-y-2">
                            <div class="flex items-center justify-between text-xs">
                                <span class="text-slate-500 font-semibold">AI Confidence Score</span>
                                <span id="fullDetailConfidence" class="font-black text-emerald-600">81%</span>
                            </div>
                            <div class="flex items-center justify-between text-xs">
                                <span class="text-slate-500 font-semibold">AI Suggested Route</span>
                                <span id="fullDetailSuggestedRoute" class="font-bold text-slate-800">Utilities Office</span>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- AI Routing Logic Details Card -->
                <div class="bg-white rounded-2xl border border-slate-200 shadow-sm p-5 space-y-3">
                    <div class="flex items-center gap-2 border-b border-slate-100 pb-3">
                        <i class="fa-solid fa-robot text-[#0f53d1] text-sm"></i>
                        <h3 class="text-xs font-black text-slate-900 uppercase tracking-wider">AI Reasoning & Keywords</h3>
                    </div>

                    <div class="space-y-3 text-xs">
                        <div>
                            <span class="text-[10px] font-bold text-slate-400 uppercase block mb-1">AI Reasoning</span>
                            <p id="fullDetailReasoning" class="text-slate-700 font-medium leading-relaxed bg-blue-50/50 p-3 rounded-xl border border-blue-100/60">
                                The report is related to water leakage which falls under water infrastructure maintenance. Similar reports were routed to Utilities Office.
                            </p>
                        </div>

                        <div>
                            <span class="text-[10px] font-bold text-slate-400 uppercase block mb-1.5">Extracted Keywords</span>
                            <div id="fullDetailKeywords" class="flex flex-wrap gap-1.5">
                                <span class="px-2.5 py-1 text-[11px] font-medium text-slate-700 bg-slate-100 rounded-md border border-slate-200">water</span>
                                <span class="px-2.5 py-1 text-[11px] font-medium text-slate-700 bg-slate-100 rounded-md border border-slate-200">leaking</span>
                                <span class="px-2.5 py-1 text-[11px] font-medium text-slate-700 bg-slate-100 rounded-md border border-slate-200">pipe</span>
                                <span class="px-2.5 py-1 text-[11px] font-medium text-slate-700 bg-slate-100 rounded-md border border-slate-200">school</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- COLUMN 2: Resolution Information & Staff Action Form -->
            <div class="bg-white rounded-2xl border border-slate-200 shadow-sm p-5 space-y-4">
                <div class="flex items-center gap-2 border-b border-slate-100 pb-3">
                    <i class="fa-solid fa-circle-check text-emerald-600 text-sm"></i>
                    <h3 class="text-xs font-black text-slate-900 uppercase tracking-wider">Resolution Information</h3>
                </div>

                <div class="space-y-4 text-xs">
                    
                    <!-- Resolution Summary -->
                    <div>
                        <label class="text-[10px] font-bold text-slate-500 uppercase block mb-1">
                            Resolution Summary <span class="text-red-500">*</span>
                        </label>
                        <textarea id="resolutionSummaryInput" rows="3" placeholder="Describe the resolution actions taken..." class="w-full bg-slate-50 border border-slate-200 text-slate-800 font-medium rounded-xl p-3 outline-none focus:ring-2 focus:ring-[#0f53d1]/40 focus:border-[#0f53d1]">Cleared clogged drainage and removed accumulated trash in the area. Water now flows properly. Will coordinate with barangay for regular clean-up schedule.</textarea>
                        <div class="text-right text-[9px] text-slate-400 mt-1 font-semibold">142/500</div>
                    </div>

                    <!-- Resolution Action Taken -->
                    <div>
                        <label class="text-[10px] font-bold text-slate-500 uppercase block mb-1">
                            Resolution Action Taken <span class="text-red-500">*</span>
                        </label>
                        <select id="actionTakenSelect" class="w-full bg-white border border-slate-200 text-slate-800 font-bold rounded-xl p-3 outline-none cursor-pointer">
                            <option value="Drainage Cleared / Cleaned" selected>Drainage Cleared / Cleaned</option>
                            <option value="Pipe Repair & Sealing">Pipe Repair & Sealing</option>
                            <option value="Asphalt Road Patching / Repair">Asphalt Road Patching / Repair</option>
                            <option value="Waste Pickup & Cleanup Dispatched">Waste Pickup & Cleanup Dispatched</option>
                            <option value="Street Light Fixtures Replaced">Street Light Fixtures Replaced</option>
                            <option value="Verbal Warning Issued by Patrol">Verbal Warning Issued by Patrol</option>
                        </select>
                    </div>

                    <!-- Detailed Action Taken -->
                    <div>
                        <label class="text-[10px] font-bold text-slate-500 uppercase block mb-1">
                            Detailed Action Taken <span class="text-red-500">*</span>
                        </label>
                        <textarea id="detailedNotesInput" rows="4" placeholder="Enter step-by-step action details..." class="w-full bg-slate-50 border border-slate-200 text-slate-800 font-medium rounded-xl p-3 outline-none focus:ring-2 focus:ring-[#0f53d1]/40 focus:border-[#0f53d1]">• Inspected the area and confirmed drainage clogging.
• Cleared accumulated trash and debris.
• Flushed the drainage system.
• Coordinated with Brgy. Commonwealth for regular monitoring.</textarea>
                        <div class="text-right text-[9px] text-slate-400 mt-1 font-semibold">178/500</div>
                    </div>

                    <!-- Resolution Date & Time -->
                    <div class="grid grid-cols-2 gap-3">
                        <div>
                            <label class="text-[10px] font-bold text-slate-500 uppercase block mb-1">Resolution Date <span class="text-red-500">*</span></label>
                            <div class="relative">
                                <input type="date" id="resolutionDateInput" value="2025-05-16" class="w-full bg-white border border-slate-200 text-slate-800 text-xs font-bold rounded-xl p-2.5 outline-none cursor-pointer focus:ring-2 focus:ring-[#0f53d1]/40 focus:border-[#0f53d1]">
                            </div>
                        </div>

                        <div>
                            <label class="text-[10px] font-bold text-slate-500 uppercase block mb-1">Resolution Time</label>
                            <div class="relative">
                                <input type="time" id="resolutionTimeInput" value="10:30" class="w-full bg-white border border-slate-200 text-slate-800 text-xs font-bold rounded-xl p-2.5 outline-none cursor-pointer focus:ring-2 focus:ring-[#0f53d1]/40 focus:border-[#0f53d1]">
                            </div>
                        </div>
                    </div>

                    <!-- Attach Resolution Evidence -->
                    <div>
                        <label class="text-[10px] font-bold text-slate-500 uppercase block mb-1.5">Attach Resolution Evidence</label>
                        <div class="grid grid-cols-4 gap-2">
                            <div class="h-16 bg-slate-100 rounded-lg border border-slate-200 flex flex-col items-center justify-center text-slate-400 hover:border-[#0f53d1] transition cursor-pointer">
                                <i class="fa-solid fa-image text-lg"></i>
                                <span class="text-[8px] font-bold truncate">after_repair1.jpg</span>
                            </div>
                            <div class="h-16 bg-slate-100 rounded-lg border border-slate-200 flex flex-col items-center justify-center text-slate-400 hover:border-[#0f53d1] transition cursor-pointer">
                                <i class="fa-solid fa-image text-lg"></i>
                                <span class="text-[8px] font-bold truncate">after_repair2.jpg</span>
                            </div>
                            <div class="h-16 bg-slate-100 rounded-lg border border-slate-200 flex flex-col items-center justify-center text-slate-400 hover:border-[#0f53d1] transition cursor-pointer">
                                <i class="fa-solid fa-image text-lg"></i>
                                <span class="text-[8px] font-bold truncate">completion.jpg</span>
                            </div>
                            <div onclick="alert('Upload resolution evidence photo')" class="h-16 border-2 border-dashed border-blue-200 bg-blue-50/50 rounded-lg flex flex-col items-center justify-center text-[#0f53d1] hover:bg-blue-100/50 transition cursor-pointer">
                                <i class="fa-solid fa-plus text-sm mb-0.5"></i>
                                <span class="text-[8px] font-bold">Upload More</span>
                            </div>
                        </div>
                    </div>

                    <!-- Staff Internal Notes -->
                    <div>
                        <label class="text-[10px] font-bold text-slate-500 uppercase block mb-1">Staff Notes (Internal)</label>
                        <textarea rows="2" placeholder="Optional internal notes..." class="w-full bg-slate-50 border border-slate-200 text-slate-800 font-medium rounded-xl p-3 outline-none text-xs"></textarea>
                    </div>

                </div>
            </div>

            <!-- COLUMN 3: Workflow Status, Routing Actions & Citizen Notification -->
            <div class="space-y-6">

                <!-- Department Routing Actions Card (From Image 1) -->
                <div class="bg-white rounded-2xl border border-slate-200 shadow-sm p-5 space-y-4">
                    <h3 class="text-xs font-black text-slate-900 uppercase tracking-wider">Department Routing Actions</h3>

                    <div class="space-y-3 text-xs">
                        <div>
                            <label class="text-[10px] font-bold text-slate-400 uppercase block mb-1">Reassign Department</label>
                            <select id="fullReassignSelect" class="w-full bg-slate-50 border border-slate-200 text-slate-800 font-bold rounded-xl p-2.5 outline-none cursor-pointer">
                                <option value="Utilities Office">Utilities Office</option>
                                <option value="Engineering Office">Engineering Office</option>
                                <option value="Sanitation Office">Sanitation Office</option>
                                <option value="Electrical Maintenance">Electrical Maintenance</option>
                                <option value="DRRM Office">DRRM Office</option>
                                <option value="Barangay Office">Barangay Office</option>
                            </select>
                        </div>

                        <div>
                            <label class="text-[10px] font-bold text-slate-400 uppercase block mb-1">Priority Override</label>
                            <select id="fullPrioritySelect" class="w-full bg-slate-50 border border-slate-200 text-slate-800 font-bold rounded-xl p-2.5 outline-none cursor-pointer">
                                <option value="High">High Priority</option>
                                <option value="Medium">Medium Priority</option>
                                <option value="Low">Low Priority</option>
                            </select>
                        </div>

                        <button onclick="acceptAIDecision()" class="w-full py-2.5 px-4 text-xs font-bold text-white bg-[#0f53d1] hover:bg-[#0d46b0] rounded-xl shadow-xs transition flex items-center justify-center gap-2 cursor-pointer mt-1">
                            <i class="fa-solid fa-circle-check"></i>
                            <span>Approve & Dispatch Concern</span>
                        </button>
                    </div>
                </div>

                <!-- Resolution Status Stepper (From Image 2) -->
                <div class="bg-white rounded-2xl border border-slate-200 shadow-sm p-5 space-y-4">
                    <h3 class="text-xs font-black text-slate-900 uppercase tracking-wider">Resolution Status Workflow</h3>

                    <div class="space-y-4 text-xs relative pl-2">
                        <!-- Step 1 -->
                        <div class="flex items-start gap-3">
                            <div class="w-5 h-5 rounded-full bg-emerald-500 text-white flex items-center justify-center text-[10px] shrink-0 mt-0.5">
                                <i class="fa-solid fa-check"></i>
                            </div>
                            <div>
                                <p class="font-bold text-slate-900">Concern Submitted</p>
                                <p class="text-[10px] text-slate-400">May 12, 2025 09:15 AM</p>
                            </div>
                        </div>

                        <!-- Step 2 -->
                        <div class="flex items-start gap-3">
                            <div class="w-5 h-5 rounded-full bg-emerald-500 text-white flex items-center justify-center text-[10px] shrink-0 mt-0.5">
                                <i class="fa-solid fa-check"></i>
                            </div>
                            <div>
                                <p class="font-bold text-slate-900">AI Analysis Completed</p>
                                <p class="text-[10px] text-slate-400">May 12, 2025 09:16 AM</p>
                            </div>
                        </div>

                        <!-- Step 3 -->
                        <div class="flex items-start gap-3">
                            <div class="w-5 h-5 rounded-full bg-emerald-500 text-white flex items-center justify-center text-[10px] shrink-0 mt-0.5">
                                <i class="fa-solid fa-check"></i>
                            </div>
                            <div>
                                <p class="font-bold text-slate-900">Routed to Department</p>
                                <p class="text-[10px] text-slate-400">May 12, 2025 09:20 AM</p>
                            </div>
                        </div>

                        <!-- Step 4 -->
                        <div class="flex items-start gap-3">
                            <div class="w-5 h-5 rounded-full bg-emerald-500 text-white flex items-center justify-center text-[10px] shrink-0 mt-0.5">
                                <i class="fa-solid fa-check"></i>
                            </div>
                            <div>
                                <p class="font-bold text-slate-900">In Progress</p>
                                <p class="text-[10px] text-slate-400">May 13, 2025 02:45 PM</p>
                            </div>
                        </div>

                        <!-- Step 5 (Active) -->
                        <div class="flex items-start gap-3">
                            <div class="w-5 h-5 rounded-full border-2 border-[#0f53d1] bg-blue-50 text-[#0f53d1] flex items-center justify-center text-[8px] shrink-0 mt-0.5">
                                <div class="w-2 h-2 rounded-full bg-[#0f53d1] animate-pulse"></div>
                            </div>
                            <div>
                                <p class="font-bold text-[#0f53d1]">Resolving</p>
                                <span class="px-2 py-0.5 text-[9px] font-bold rounded-md bg-blue-100 text-[#0f53d1]">Current Step</span>
                            </div>
                        </div>

                        <!-- Step 6 -->
                        <div class="flex items-start gap-3 opacity-50">
                            <div class="w-5 h-5 rounded-full border-2 border-slate-300 bg-white shrink-0 mt-0.5"></div>
                            <div>
                                <p class="font-bold text-slate-600">Resolved / Closed</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Notify Citizen Box (From Image 2) -->
                <div class="bg-white rounded-2xl border border-slate-200 shadow-sm p-5 space-y-3">
                    <div class="flex items-center justify-between border-b border-slate-100 pb-2">
                        <h3 class="text-xs font-black text-slate-900 uppercase tracking-wider">Notify Citizen</h3>
                        <span class="text-[10px] text-slate-400 font-semibold">SMS & Email Update</span>
                    </div>

                    <label class="flex items-center gap-2 cursor-pointer text-xs font-bold text-slate-800">
                        <input type="checkbox" id="notifyCitizenCheckbox" checked class="w-4 h-4 text-[#0f53d1] rounded border-slate-300 focus:ring-[#0f53d1]/50 cursor-pointer">
                        <span>Send notification to citizen</span>
                    </label>

                    <div>
                        <span class="text-[9px] font-bold text-slate-400 uppercase block mb-1">Message Preview</span>
                        <div id="notifyMessagePreview" class="bg-slate-50 border border-slate-200 rounded-xl p-3 text-[11px] text-slate-700 font-medium leading-relaxed italic">
                            Magandang araw <span id="notifyCitizenName" class="font-bold not-italic">John Dela Cruz</span>,<br><br>
                            Nais po naming ipaalam na ang inyong concern (<span id="notifyConcernId" class="font-bold not-italic">CG-0260</span>) ay naresolba na. Maraming salamat po sa inyong pagtitiwala.<br><br>
                            <span class="text-slate-400 not-italic font-bold text-[9px]">&mdash; Quezon City LGU</span>
                        </div>
                    </div>
                </div>

            </div>

        </div>



    </div>
    <!-- END VIEW 2 -->

</main>

<script>
const concernsData = <?php echo json_encode($concerns); ?>;
let activeConcernId = 'CG-0260';

function selectConcern(id) {
    activeConcernId = id;
    const item = concernsData.find(c => c.id === id);
    if (!item) return;

    // Update row active state
    document.querySelectorAll('.concern-row').forEach(row => {
        if (row.getAttribute('data-id') === id) {
            row.classList.add('bg-blue-50/40', 'font-medium');
        } else {
            row.classList.remove('bg-blue-50/40', 'font-medium');
        }
    });

    // Update Preview Drawer Details
    document.getElementById('previewId').innerText = item.id;
    document.getElementById('previewSummary').innerText = item.summary;
    
    // Status Badge
    const statusBadge = document.getElementById('previewStatusBadge');
    if (item.status_type === 'auto') {
        statusBadge.className = 'px-2.5 py-1 text-xs font-bold text-emerald-600 bg-emerald-50 border border-emerald-200/80 rounded-md';
        statusBadge.innerText = 'Auto Routed';
    } else {
        statusBadge.className = 'px-2.5 py-1 text-xs font-bold text-amber-600 bg-amber-50 border border-amber-200/80 rounded-md';
        statusBadge.innerText = 'Needs Review';
    }

    // Category
    document.getElementById('previewCategory').innerHTML = `<i class="fa-solid fa-tag text-[#0f53d1]"></i> ${item.category}`;
    
    // Dept
    document.getElementById('previewDept').innerHTML = `<i class="fa-solid fa-building text-slate-400"></i> ${item.dept}`;

    // Priority Badge
    const priorityBadge = document.getElementById('previewPriority');
    if (item.priority === 'High') {
        priorityBadge.className = 'px-2 py-0.5 text-[10px] font-bold rounded-md bg-amber-50 text-amber-600 border border-amber-200';
    } else if (item.priority === 'Medium') {
        priorityBadge.className = 'px-2 py-0.5 text-[10px] font-bold rounded-md bg-blue-50 text-blue-600 border border-blue-200';
    } else {
        priorityBadge.className = 'px-2 py-0.5 text-[10px] font-bold rounded-md bg-slate-100 text-slate-600 border border-slate-200';
    }
    priorityBadge.innerText = item.priority;

    // Confidence
    document.getElementById('previewConfidence').innerText = item.confidence + '%';
    const confBar = document.getElementById('previewConfidenceBar');
    confBar.style.width = item.confidence + '%';
    if (item.confidence >= 90) {
        confBar.className = 'bg-emerald-500 h-full rounded-full transition-all duration-300';
    } else if (item.confidence >= 75) {
        confBar.className = 'bg-amber-500 h-full rounded-full transition-all duration-300';
    } else {
        confBar.className = 'bg-rose-500 h-full rounded-full transition-all duration-300';
    }

    // Reasoning
    document.getElementById('previewReasoning').innerText = item.reasoning;

    // Keywords
    const kwContainer = document.getElementById('previewKeywords');
    kwContainer.innerHTML = item.keywords.map(kw => `<span class="px-2.5 py-1 text-[11px] font-medium text-slate-700 bg-slate-100 rounded-md border border-slate-200/60">${kw}</span>`).join('');
}

function openFullConcernView() {
    const item = concernsData.find(c => c.id === activeConcernId);
    if (!item) return;

    // Populate combined full detail view elements
    document.getElementById('fullDetailId').innerText = item.id;
    document.getElementById('fullDetailCitizen').innerText = item.citizen;
    document.getElementById('fullDetailUserType').innerText = item.user_type || 'Resident';
    document.getElementById('fullDetailLocation').innerText = item.location;
    document.getElementById('fullDetailSummary').innerText = item.summary;
    document.getElementById('fullDetailFullText').innerText = item.full_text;
    document.getElementById('fullDetailDept').innerHTML = `<i class="fa-solid fa-building"></i> ${item.dept}`;
    document.getElementById('fullDetailAssignedTeam').innerText = item.assigned_team || 'Maintenance Team';
    document.getElementById('fullDetailSubmittedDate').innerText = item.submitted_date || 'May 12, 2025';
    document.getElementById('fullDetailSubmittedTime').innerText = item.submitted_time || '09:15 AM';
    document.getElementById('fullDetailCategory').innerText = item.category;
    document.getElementById('fullDetailCategoryType').innerText = item.category_type;
    document.getElementById('fullDetailConfidence').innerText = `${item.confidence}%`;
    document.getElementById('fullDetailSuggestedRoute').innerText = item.dept;
    document.getElementById('fullDetailReasoning').innerText = item.reasoning;

    // Status Badge
    const statusEl = document.getElementById('fullDetailStatus');
    statusEl.className = 'inline-block px-2.5 py-1 text-xs font-bold rounded-md ' + item.status_badge;
    statusEl.innerText = item.status.toUpperCase();

    // Priority Badge
    const priorityEl = document.getElementById('fullDetailPriority');
    priorityEl.innerText = `${item.priority} Priority`;

    // Reassign select box defaults
    document.getElementById('fullReassignSelect').value = item.dept;
    document.getElementById('fullPrioritySelect').value = item.priority;

    // Keywords
    const kwEl = document.getElementById('fullDetailKeywords');
    kwEl.innerHTML = item.keywords.map(kw => `<span class="px-2.5 py-1 text-[11px] font-medium text-slate-700 bg-slate-100 rounded-md border border-slate-200">${kw}</span>`).join('');

    // Resolution Form defaults
    if (item.resolution_summary) {
        document.getElementById('resolutionSummaryInput').value = item.resolution_summary;
    }
    if (item.action_taken) {
        document.getElementById('actionTakenSelect').value = item.action_taken;
    }
    if (item.detailed_notes) {
        document.getElementById('detailedNotesInput').value = item.detailed_notes;
    }
    if (item.resolution_date) {
        document.getElementById('resolutionDateInput').value = item.resolution_date;
    }
    if (item.resolution_time) {
        document.getElementById('resolutionTimeInput').value = item.resolution_time;
    }

    // Notify preview
    document.getElementById('notifyCitizenName').innerText = item.citizen;
    document.getElementById('notifyConcernId').innerText = item.id;

    // Toggle Views
    document.getElementById('mainDashboardView').classList.add('hidden');
    document.getElementById('fullConcernDetailView').classList.remove('hidden');

    window.scrollTo({ top: 0, behavior: 'smooth' });
}

function closeFullConcernView() {
    document.getElementById('fullConcernDetailView').classList.add('hidden');
    document.getElementById('mainDashboardView').classList.remove('hidden');
    window.scrollTo({ top: 0, behavior: 'smooth' });
}

function filterQueueByStatus(type) {
    const rows = document.querySelectorAll('#queueTableBody .concern-row');
    let visibleCount = 0;
    rows.forEach(row => {
        const rowType = row.getAttribute('data-status-type');
        if (type === 'all' || rowType === type) {
            row.style.display = '';
            visibleCount++;
        } else {
            row.style.display = 'none';
        }
    });
    document.getElementById('showingResultsText').innerText = `Showing 1 to ${visibleCount} of ${visibleCount} results`;
}

function acceptAIDecision() {
    const activeId = document.getElementById('previewId').innerText;
    alert(`Successfully accepted AI Decision for ${activeId}. Routing confirmed.`);
}

function overrideDepartment() {
    const activeId = document.getElementById('previewId').innerText;
    const newDept = prompt(`Enter new department for ${activeId}:`, "Engineering Office");
    if (newDept) {
        alert(`Department for ${activeId} overridden to ${newDept}.`);
    }
}

function requestReanalysis() {
    const activeId = document.getElementById('previewId').innerText;
    alert(`Re-analysis request submitted to AI Engine for ${activeId}.`);
}

function saveResolutionDraft() {
    const activeId = document.getElementById('fullDetailId').innerText;
    alert(`Resolution draft saved for ${activeId}.`);
}

function markAsResolved() {
    const activeId = document.getElementById('fullDetailId').innerText;
    alert(`Concern ${activeId} has been successfully resolved and closed.`);
    closeFullConcernView();
}

function closePreviewDrawer() {
    document.getElementById('previewDrawer').classList.add('hidden');
}
</script>

<?php include '../../includes/footer.php'; ?>
