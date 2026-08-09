function openSidebar() {
    if (typeof isCollapsed !== 'undefined' && !isCollapsed) return;

    const sidebar = document.getElementById('sidebar');
    const arrow = document.getElementById('toggleArrow');
    if (!sidebar) return;

    const sideLabels = document.querySelectorAll('.sidebar-text');
    const dropdownButtons = document.querySelectorAll('.dropdown-btn');
    const dropdownRights = document.querySelectorAll('.dropdown-right');

    if (typeof isCollapsed !== 'undefined') isCollapsed = false;

    // EXPAND SIDEBAR WIDTH
    sidebar.classList.remove('w-20');
    sidebar.classList.add('w-72');

    if (arrow) arrow.className = "fa-solid fa-chevron-left text-xs";

    // SHOW TEXT LABELS
    sideLabels.forEach(label => {
        label.classList.remove('hidden');
    });

    // SHOW CHEVRONS
    dropdownRights.forEach(right => {
        right.classList.remove('hidden');
    });

    // RESTORE BUTTON LAYOUT
    dropdownButtons.forEach(btn => {
        btn.classList.remove('justify-center');
        btn.classList.add('justify-between');
    });
}

function toggleDropdown(id, chevronId) {
    const wasCollapsed = typeof isCollapsed !== 'undefined' ? isCollapsed : false;

    // If sidebar is collapsed, open sidebar first
    if (wasCollapsed && typeof openSidebar === 'function') {
        openSidebar();
    }

    const dropdown = document.getElementById(id);
    const chevron = document.getElementById(chevronId);
    if (!dropdown) return;

    const allDropdowns = [
        'userDropdown', 'roleDropdown', 'deptDropdown', 'citizenDropdown', 
        'scholarshipDropdown', 'auditDropdown', 'citizenRegistryDropdown', 
        'feedbackDropdown', 'certificateDropdown', 'surveyDropdown', 'alertDropdown'
    ];
    const allChevrons = [
        'userChevron', 'roleChevron', 'deptChevron', 'citizenChevron', 
        'scholarshipChevron', 'auditChevron', 'citizenRegistryChevron', 
        'feedbackChevron', 'certificateChevron', 'surveyChevron', 'alertChevron'
    ];

    allDropdowns.forEach((d, i) => {
        if (d !== id) {
            const otherEl = document.getElementById(d);
            if (otherEl) otherEl.classList.add('hidden');
            const otherChev = document.getElementById(allChevrons[i]);
            if (otherChev) otherChev.classList.remove('rotate-180');
        }
    });

    if (wasCollapsed) {
        dropdown.classList.remove('hidden');
        if (chevron) chevron.classList.add('rotate-180');
    } else {
        if (dropdown.classList.contains('hidden')) {
            dropdown.classList.remove('hidden');
            if (chevron) chevron.classList.add('rotate-180');
        } else {
            dropdown.classList.add('hidden');
            if (chevron) chevron.classList.remove('rotate-180');
        }
    }
}
