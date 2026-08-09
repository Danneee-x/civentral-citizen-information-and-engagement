// CALENDAR/CLOCK FUNCTION
function updateClock() {
  const now = new Date();
  const options = { weekday: 'short', year: 'numeric', month: 'short', day: 'numeric', hour: '2-digit', minute: '2-digit', second: '2-digit' };
  const clockEl = document.getElementById('headerClock');
  if (clockEl) clockEl.innerText = now.toLocaleDateString('en-US', options);
}
setInterval(updateClock, 1000);
updateClock();

// SIDEBAR RESPONSIVE STATE
let isCollapsed = false;

function openSidebar() {
    if (!isCollapsed) return;

    const sidebar = document.getElementById('sidebar');
    const arrow = document.getElementById('toggleArrow');
    if (!sidebar) return;

    const sideLabels = document.querySelectorAll('.sidebar-text');
    const dropdownButtons = document.querySelectorAll('.dropdown-btn');
    const dropdownRights = document.querySelectorAll('.dropdown-right');

    isCollapsed = false;

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

// DROPDOWN TOGGLE FUNCTION
function toggleDropdown(id, chevronId) {
    const wasCollapsed = isCollapsed;

    // If sidebar is collapsed, open sidebar first
    if (wasCollapsed) {
        openSidebar();
    }

    const dropdown = document.getElementById(id);
    const chevron = document.getElementById(chevronId);
    if (!dropdown) return;

    const dropdowns = [
        'userDropdown', 'roleDropdown', 'deptDropdown', 'citizenDropdown', 
        'scholarshipDropdown', 'auditDropdown', 'citizenRegistryDropdown', 
        'feedbackDropdown', 'certificateDropdown', 'surveyDropdown', 'alertDropdown'
    ];
    const chevrons = [
        'userChevron', 'roleChevron', 'deptChevron', 'citizenChevron', 
        'scholarshipChevron', 'auditChevron', 'citizenRegistryChevron', 
        'feedbackChevron', 'certificateChevron', 'surveyChevron', 'alertChevron'
    ];

    // Hide all other dropdown menus
    dropdowns.forEach((d, i) => {
        if (d !== id) {
            const otherEl = document.getElementById(d);
            if (otherEl) otherEl.classList.add('hidden');
            const otherChevron = document.getElementById(chevrons[i]);
            if (otherChevron) otherChevron.classList.remove('rotate-180');
        }
    });

    // If sidebar was collapsed, ALWAYS open the target dropdown
    if (wasCollapsed) {
        dropdown.classList.remove('hidden');
        if (chevron) chevron.classList.add('rotate-180');
    } else {
        // Normal toggle when sidebar is already open
        if (dropdown.classList.contains('hidden')) {
            dropdown.classList.remove('hidden');
            if (chevron) chevron.classList.add('rotate-180');
        } else {
            dropdown.classList.add('hidden');
            if (chevron) chevron.classList.remove('rotate-180');
        }
    }
}

function toggleSidebar() {
    const sidebar = document.getElementById('sidebar');
    const arrow = document.getElementById('toggleArrow');
    if (!sidebar) return;

    const sideLabels = document.querySelectorAll('.sidebar-text');
    const dropdownButtons = document.querySelectorAll('.dropdown-btn');
    const dropdownRights = document.querySelectorAll('.dropdown-right');

    const dropdowns = [
        'userDropdown',
        'roleDropdown',
        'deptDropdown',
        'citizenDropdown',
        'scholarshipDropdown',
        'auditDropdown',
        'citizenRegistryDropdown',
        'feedbackDropdown',
        'certificateDropdown',
        'surveyDropdown',
        'alertDropdown'
    ];

    isCollapsed = !isCollapsed;

    if (isCollapsed) {
        // CLOSE ALL DROPDOWNS WHEN COLLAPSING
        dropdowns.forEach(id => {
            const menu = document.getElementById(id);
            if (menu) {
                menu.classList.add('hidden');
            }
        });

        // COLLAPSE SIDEBAR WIDTH
        sidebar.classList.remove('w-72');
        sidebar.classList.add('w-20');

        if (arrow) arrow.className = "fa-solid fa-chevron-right text-xs";

        // HIDE TEXT LABELS
        sideLabels.forEach(label => {
            label.classList.add('hidden');
        });

        // HIDE CHEVRONS
        dropdownRights.forEach(right => {
            right.classList.add('hidden');
        });

        // CENTER ICONS
        dropdownButtons.forEach(btn => {
            btn.classList.remove('justify-between');
            btn.classList.add('justify-center');
        });

    } else {
        // EXPAND SIDEBAR WIDTH
        openSidebar();

        // RESET CHEVRONS
        document.querySelectorAll('.dropdown-chevron').forEach(chv => {
            chv.classList.remove('rotate-180');
        });
    }
}