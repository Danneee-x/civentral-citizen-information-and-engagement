<?php
$basePath = '../../';
require_once __DIR__ . '/../../src/bootstrap.php';

include '../../includes/header.php';
include '../../includes/sidebar.php';

// AI Analysis & Classification Dataset
$aiClassifications = [
    [
        'id' => 'TCK-2025-0258',
        'title' => 'Large pothole along Camarin Road causing motor accidents',
        'text' => 'A very large and deep pothole has formed along Camarin Road near the pedestrian overpass in Barangay 178...',
        'detected_keywords' => ['pothole', 'road damage', 'camarin road', 'accidents', 'asphalt'],
        'ai_category' => 'Infrastructure',
        'sub_category' => 'Road Maintenance',
        'ai_confidence' => 98,
        'sentiment' => 'Urgent / Distressed',
        'sentiment_badge' => 'bg-rose-50 text-rose-600 border-rose-200',
        'suggested_routing' => 'Engineering & Public Works (Road Maintenance Team)',
        'cluster' => [
            'has_duplicates' => true,
            'cluster_count' => 3,
            'cluster_name' => 'Cluster #14: Camarin Road Pothole Reports',
            'duplicate_ids' => ['TCK-2025-0258', 'TCK-2025-0249', 'TCK-2025-0252']
        ],
        'status' => 'Pending Review'
    ],
    [
        'id' => 'TCK-2025-0259',
        'title' => 'Uncollected garbage bags piling up at Market Alleyway',
        'text' => 'Garbage collection truck has missed our alley for 3 consecutive days in Bagong Silang. Trash bags spilling over...',
        'detected_keywords' => ['garbage', 'uncollected', 'basura', 'foul odor', 'bagong silang'],
        'ai_category' => 'Sanitation',
        'sub_category' => 'Waste Disposal',
        'ai_confidence' => 94,
        'sentiment' => 'High Disruption',
        'sentiment_badge' => 'bg-amber-50 text-amber-600 border-amber-200',
        'suggested_routing' => 'Sanitation & Environment Office',
        'cluster' => [
            'has_duplicates' => false,
            'cluster_count' => 1,
            'cluster_name' => 'Standalone Report',
            'duplicate_ids' => ['TCK-2025-0259']
        ],
        'status' => 'Accepted'
    ],
    [
        'id' => 'TCK-2025-0260',
        'title' => 'Loud videoke disturbance past midnight',
        'text' => 'Repeated loud videoke noise past 12:00 midnight along 5th Avenue. Neighborhood senior citizens cannot sleep...',
        'detected_keywords' => ['videoke', 'loud noise', 'ingay', 'midnight', '5th avenue'],
        'ai_category' => 'Noise Complaint',
        'sub_category' => 'Ordinance Enforcement',
        'ai_confidence' => 91,
        'sentiment' => 'Nuisance / Moderate',
        'sentiment_badge' => 'bg-blue-50 text-[#0f53d1] border-blue-200',
        'suggested_routing' => 'Barangay Peacekeeping Action Team (Tanod)',
        'cluster' => [
            'has_duplicates' => true,
            'cluster_count' => 2,
            'cluster_name' => 'Cluster #09: 5th Avenue Midnight Noise',
            'duplicate_ids' => ['TCK-2025-0260', 'TCK-2025-0255']
        ],
        'status' => 'Pending Review'
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
            <div class="w-10 h-10 rounded-xl bg-purple-50 text-purple-600 flex items-center justify-center text-lg border border-purple-100 shadow-xs">
                <i class="fa-solid fa-brain"></i>
            </div>
            <div>
                <h1 class="text-xl md:text-2xl font-black text-slate-900 tracking-tight">AI Analysis Results</h1>
            </div>
        </div>

        <div class="flex items-center gap-2.5 flex-wrap">
            <span class="px-3 py-1.5 rounded-xl bg-emerald-50 text-emerald-600 border border-emerald-200 font-bold text-xs flex items-center gap-1.5">
                <i class="fa-solid fa-circle text-[7px] animate-pulse"></i> AI NLP Engine Active (v3.4)
            </span>

            <button onclick="reRunAiClassification()" class="px-4 py-2.5 bg-[#0f53d1] hover:bg-[#0d46b0] text-white font-bold text-xs rounded-xl shadow-xs transition flex items-center gap-2 cursor-pointer">
                <i class="fa-solid fa-rotate text-xs"></i>
                <span>Re-Analyze All Queue</span>
            </button>
        </div>
    </div>

    <!-- AI Intelligence Stat Cards Row (4 Cards) -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
        
        <!-- Card 1: Auto Categorization Accuracy -->
        <div class="bg-white rounded-2xl border border-slate-200 shadow-sm p-5 space-y-3">
            <div class="flex items-center justify-between">
                <span class="text-xs font-bold text-slate-400 uppercase tracking-wider">AI Model Confidence</span>
                <div class="w-10 h-10 rounded-xl bg-emerald-50 text-emerald-600 flex items-center justify-center text-base border border-emerald-100">
                    <i class="fa-solid fa-bullseye"></i>
                </div>
            </div>
            <div>
                <h3 class="text-2xl font-black text-slate-900 tracking-tight">95.8% Avg</h3>
                <p class="text-[11px] font-semibold text-emerald-600 flex items-center gap-1 mt-1">
                    <i class="fa-solid fa-check-double"></i>
                    <span>High precision keyword matching</span>
                </p>
            </div>
        </div>

        <!-- Card 2: Clustered Duplicates -->
        <div class="bg-white rounded-2xl border border-slate-200 shadow-sm p-5 space-y-3">
            <div class="flex items-center justify-between">
                <span class="text-xs font-bold text-slate-400 uppercase tracking-wider">Duplicate Clusters</span>
                <div class="w-10 h-10 rounded-xl bg-purple-50 text-purple-600 flex items-center justify-center text-base border border-purple-100">
                    <i class="fa-solid fa-object-group"></i>
                </div>
            </div>
            <div>
                <h3 class="text-2xl font-black text-slate-900 tracking-tight">14 Clusters</h3>
                <p class="text-[11px] font-semibold text-purple-600 flex items-center gap-1 mt-1">
                    <i class="fa-solid fa-layer-group"></i>
                    <span>42 similar tickets merged</span>
                </p>
            </div>
        </div>

        <!-- Card 3: Urgent Sentiment Flags -->
        <div class="bg-white rounded-2xl border border-slate-200 shadow-sm p-5 space-y-3">
            <div class="flex items-center justify-between">
                <span class="text-xs font-bold text-slate-400 uppercase tracking-wider">Urgent Sentiment Flags</span>
                <div class="w-10 h-10 rounded-xl bg-rose-50 text-rose-600 flex items-center justify-center text-base border border-rose-100">
                    <i class="fa-solid fa-shield-heart"></i>
                </div>
            </div>
            <div>
                <h3 class="text-2xl font-black text-slate-900 tracking-tight">6 Flagged</h3>
                <p class="text-[11px] font-semibold text-rose-600 flex items-center gap-1 mt-1">
                    <i class="fa-solid fa-bolt"></i>
                    <span>Distressed language detected</span>
                </p>
            </div>
        </div>

        <!-- Card 4: Human Acceptance Rate -->
        <div class="bg-white rounded-2xl border border-slate-200 shadow-sm p-5 space-y-3">
            <div class="flex items-center justify-between">
                <span class="text-xs font-bold text-slate-400 uppercase tracking-wider">Human-in-the-Loop</span>
                <div class="w-10 h-10 rounded-xl bg-blue-50 text-[#0f53d1] flex items-center justify-center text-base border border-blue-100">
                    <i class="fa-solid fa-user-check"></i>
                </div>
            </div>
            <div>
                <h3 class="text-2xl font-black text-slate-900 tracking-tight">92% Accepted</h3>
                <p class="text-[11px] font-semibold text-[#0f53d1] flex items-center gap-1 mt-1">
                    <i class="fa-solid fa-thumbs-up"></i>
                    <span>Staff accepted AI recommendations</span>
                </p>
            </div>
        </div>

    </div>

    <!-- Main AI Analysis Feed Cards -->
    <div class="space-y-4">
        
        <div class="flex items-center justify-between">
            <h3 class="text-xs font-black text-slate-900 uppercase tracking-wider">AI Classification Feed <span class="text-slate-400 font-normal ml-1">(3 tickets analyzed)</span></h3>
            <span class="text-xs text-slate-400 font-medium">Review and Accept or Override AI routing</span>
        </div>

        <div class="grid grid-cols-1 gap-4">
            <?php foreach ($aiClassifications as $ai): ?>
            <div class="bg-white rounded-2xl border border-slate-200 shadow-sm p-5 space-y-4 hover:border-slate-300 transition">
                
                <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-3 border-b border-slate-100 pb-3">
                    <div class="flex items-center gap-2.5">
                        <span class="text-xs font-bold text-[#0f53d1]"><?php echo $ai['id']; ?></span>
                        <h4 class="text-sm font-black text-slate-900 truncate max-w-lg"><?php echo htmlspecialchars($ai['title']); ?></h4>
                    </div>

                    <div class="flex items-center gap-2">
                        <!-- AI Confidence Score Meter -->
                        <span class="px-2.5 py-1 rounded-lg bg-emerald-50 text-emerald-700 font-black text-[11px] border border-emerald-200 flex items-center gap-1">
                            <i class="fa-solid fa-circle-check text-emerald-500"></i>
                            <?php echo $ai['ai_confidence']; ?>% AI Confidence
                        </span>

                        <!-- Sentiment Badge -->
                        <span class="px-2.5 py-1 rounded-lg font-bold text-[11px] border <?php echo $ai['sentiment_badge']; ?>">
                            <?php echo $ai['sentiment']; ?>
                        </span>
                    </div>
                </div>

                <!-- Text & Detected Keywords -->
                <div class="space-y-2 text-xs">
                    <p class="text-slate-600 font-medium leading-relaxed bg-slate-50 border border-slate-200 p-3 rounded-xl">
                        "<?php echo htmlspecialchars($ai['text']); ?>"
                    </p>

                    <div class="flex items-center gap-2 flex-wrap pt-1">
                        <span class="text-[10px] font-bold text-slate-400 uppercase tracking-wider">Detected Keywords:</span>
                        <?php foreach ($ai['detected_keywords'] as $kw): ?>
                        <span class="px-2 py-0.5 rounded-md bg-blue-50 text-[#0f53d1] font-bold text-[10px] border border-blue-100">
                            #<?php echo $kw; ?>
                        </span>
                        <?php endforeach; ?>
                    </div>
                </div>

                <!-- AI Routing & Duplicate Cluster Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-3 text-xs">
                    
                    <!-- AI Category & Routing Recommendation -->
                    <div class="p-3.5 bg-blue-50/50 border border-blue-100 rounded-xl space-y-1.5">
                        <span class="text-[10px] font-bold text-[#0f53d1] uppercase tracking-wider block">AI Suggested Classification & Routing</span>
                        <div class="flex items-center justify-between">
                            <span class="text-slate-500">Suggested Category:</span>
                            <span class="font-bold text-slate-900"><?php echo $ai['ai_category']; ?> (<?php echo $ai['sub_category']; ?>)</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-slate-500">Target Department:</span>
                            <span class="font-bold text-[#0f53d1]"><?php echo $ai['suggested_routing']; ?></span>
                        </div>
                    </div>

                    <!-- Duplicate Concern Cluster Box -->
                    <div class="p-3.5 bg-purple-50/50 border border-purple-100 rounded-xl space-y-1.5">
                        <div class="flex items-center justify-between">
                            <span class="text-[10px] font-bold text-purple-700 uppercase tracking-wider block">Duplicate Cluster Detector</span>
                            <?php if ($ai['cluster']['has_duplicates']): ?>
                            <span class="px-2 py-0.5 rounded-md bg-purple-600 text-white font-bold text-[9px]">
                                <?php echo $ai['cluster']['cluster_count']; ?> Similar Reports
                            </span>
                            <?php endif; ?>
                        </div>

                        <p class="font-bold text-slate-800 text-xs"><?php echo $ai['cluster']['cluster_name']; ?></p>
                        
                        <?php if ($ai['cluster']['has_duplicates']): ?>
                        <p class="text-[10px] text-purple-700">Cluster IDs: <?php echo implode(', ', $ai['cluster']['duplicate_ids']); ?></p>
                        <button onclick="mergeDuplicateCluster('<?php echo $ai['id']; ?>')" class="text-[10px] font-bold text-purple-600 underline hover:text-purple-800 cursor-pointer">Merge Duplicates into 1 Master Case</button>
                        <?php else: ?>
                        <p class="text-[10px] text-slate-400">No duplicate reports detected in system.</p>
                        <?php endif; ?>
                    </div>

                </div>

                <!-- Human-in-the-Loop Accept or Override Actions -->
                <div class="flex items-center justify-end gap-2.5 pt-2 border-t border-slate-100">
                    <button onclick="overrideAiRecommendation('<?php echo $ai['id']; ?>')" class="px-4 py-2 bg-white border border-slate-200 hover:bg-slate-50 text-slate-700 font-bold text-xs rounded-xl transition cursor-pointer flex items-center gap-1.5">
                        <i class="fa-solid fa-sliders text-slate-400"></i>
                        <span>Override AI Category/Routing</span>
                    </button>

                    <button onclick="acceptAiRecommendation(this, '<?php echo $ai['id']; ?>')" class="px-5 py-2 bg-emerald-600 hover:bg-emerald-700 text-white font-bold text-xs rounded-xl transition shadow-xs cursor-pointer flex items-center gap-1.5">
                        <i class="fa-solid fa-check text-xs"></i>
                        <span>Accept AI Recommendation</span>
                    </button>
                </div>

            </div>
            <?php endforeach; ?>
        </div>

    </div>

</main>

<!-- OVERRIDE AI MODAL (Human-in-the-Loop Control) -->
<div id="overrideModal" class="hidden fixed inset-0 z-50 bg-slate-900/60 backdrop-blur-xs flex items-center justify-center p-4">
    <div class="bg-white rounded-2xl max-w-md w-full p-6 shadow-2xl border border-slate-100 space-y-4 animate-in fade-in zoom-in-95 duration-200">
        
        <div class="flex items-center justify-between border-b border-slate-100 pb-3">
            <h3 class="text-sm font-black text-slate-900 flex items-center gap-2">
                <i class="fa-solid fa-user-gear text-[#0f53d1]"></i>
                <span>Override AI Recommendation (Staff Control)</span>
            </h3>
            <button onclick="closeOverrideModal()" class="w-7 h-7 rounded-lg hover:bg-slate-100 text-slate-400 hover:text-slate-700 flex items-center justify-center cursor-pointer">
                <i class="fa-solid fa-xmark text-sm"></i>
            </button>
        </div>

        <div class="space-y-3 text-xs">
            <p class="text-slate-600 font-medium">As part of human-in-the-loop governance, staff can manually override the AI classification and target department.</p>

            <div>
                <label class="font-bold text-slate-700 block mb-1">Manual Category Override</label>
                <select id="overrideCategorySelect" class="w-full bg-slate-50 border border-slate-200 text-slate-800 rounded-xl p-2.5 outline-none font-medium text-xs cursor-pointer">
                    <option value="Infrastructure">Infrastructure</option>
                    <option value="Sanitation">Sanitation</option>
                    <option value="Peace & Order">Peace & Order</option>
                    <option value="Noise Complaint">Noise Complaint</option>
                    <option value="Utilities">Utilities</option>
                </select>
            </div>

            <div>
                <label class="font-bold text-slate-700 block mb-1">Manual Department Routing</label>
                <select id="overrideDeptSelect" class="w-full bg-slate-50 border border-slate-200 text-slate-800 rounded-xl p-2.5 outline-none font-medium text-xs cursor-pointer">
                    <option value="Engineering & Public Works">Engineering & Public Works</option>
                    <option value="Sanitation & Environment Office">Sanitation & Environment Office</option>
                    <option value="Barangay Peacekeeping (Tanod)">Barangay Peacekeeping (Tanod)</option>
                    <option value="Disaster Risk Reduction Management">Disaster Risk Reduction (DRRM)</option>
                </select>
            </div>
        </div>

        <div class="flex items-center justify-end gap-2 pt-2 border-t border-slate-100">
            <button onclick="closeOverrideModal()" class="px-4 py-2 text-xs font-bold text-slate-600 bg-white border border-slate-200 rounded-xl hover:bg-slate-50 transition cursor-pointer">Cancel</button>
            <button onclick="saveOverride()" class="px-5 py-2 text-xs font-bold text-white bg-[#0f53d1] hover:bg-[#0d46b0] rounded-xl transition shadow-xs cursor-pointer">Save Staff Override</button>
        </div>
    </div>
</div>

<script>
let activeOverrideId = null;

function acceptAiRecommendation(btn, id) {
    alert(`AI Recommendation for ${id} ACCEPTED! Ticket moved to Concern Routing queue with suggested parameters.`);
    btn.closest('.bg-white').style.opacity = '0.6';
}

function overrideAiRecommendation(id) {
    activeOverrideId = id;
    document.getElementById('overrideModal').classList.remove('hidden');
}

function closeOverrideModal() {
    document.getElementById('overrideModal').classList.add('hidden');
}

function saveOverride() {
    const cat = document.getElementById('overrideCategorySelect').value;
    const dept = document.getElementById('overrideDeptSelect').value;
    alert(`Staff Override saved for ${activeOverrideId}: Category set to "${cat}" and routed to "${dept}".`);
    closeOverrideModal();
}

function mergeDuplicateCluster(id) {
    alert(`Duplicate reports clustered under ${id} merged into 1 master case to prevent redundant staff handling.`);
}

function reRunAiClassification() {
    alert('Re-running AI NLP classification pipeline on all pending grievance tickets...');
}
</script>

<?php include '../../includes/footer.php'; ?>
