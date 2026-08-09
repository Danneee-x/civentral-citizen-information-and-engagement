// Global Sidebar Responsive State
if (typeof window.isCollapsed === 'undefined') {
    window.isCollapsed = false;
}

function openSidebar() {
    const sidebar = document.getElementById('sidebar');
    const arrow = document.getElementById('toggleArrow');
    if (!sidebar) return;

    window.isCollapsed = false;

    const sideLabels = document.querySelectorAll('.sidebar-text');
    const dropdownButtons = document.querySelectorAll('.dropdown-btn');
    const dropdownRights = document.querySelectorAll('.dropdown-right');

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

function collapseSidebar() {
    const sidebar = document.getElementById('sidebar');
    const arrow = document.getElementById('toggleArrow');
    if (!sidebar) return;

    window.isCollapsed = true;

    const sideLabels = document.querySelectorAll('.sidebar-text');
    const dropdownButtons = document.querySelectorAll('.dropdown-btn');
    const dropdownRights = document.querySelectorAll('.dropdown-right');

    const dropdowns = [
        'userDropdown', 'roleDropdown', 'deptDropdown', 'citizenDropdown', 
        'scholarshipDropdown', 'auditDropdown', 'citizenRegistryDropdown', 
        'feedbackDropdown', 'certificateDropdown', 'surveyDropdown', 'alertDropdown'
    ];

    // CLOSE ALL DROPDOWNS WHEN COLLAPSING
    dropdowns.forEach(id => {
        const menu = document.getElementById(id);
        if (menu) {
            menu.classList.add('hidden');
        }
    });

    // RESET CHEVRON ROTATIONS
    document.querySelectorAll('.dropdown-chevron').forEach(chv => {
        chv.classList.remove('rotate-180');
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
}

function toggleSidebar() {
    const sidebar = document.getElementById('sidebar');
    if (!sidebar) return;

    if (sidebar.classList.contains('w-20') || window.isCollapsed) {
        openSidebar();
    } else {
        collapseSidebar();
    }
}

function toggleDropdown(id, chevronId) {
    const sidebar = document.getElementById('sidebar');
    const wasCollapsed = (sidebar && sidebar.classList.contains('w-20')) || window.isCollapsed;

    // If sidebar is collapsed, open sidebar first
    if (wasCollapsed) {
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

// Automatically close sidebar when main content area (outside sidebar) is clicked or interacted with
document.addEventListener('click', function(event) {
    const sidebar = document.getElementById('sidebar');
    if (!sidebar) return;

    const isExpanded = !sidebar.classList.contains('w-20') && !window.isCollapsed;

    if (isExpanded) {
        if (!sidebar.contains(event.target)) {
            collapseSidebar();
        }
    }
});

// Maintain sidebar scroll position on submodule selection / page navigation
function restoreSidebarScrollPosition() {
    const nav = document.querySelector('#sidebar nav');
    if (!nav) return;

    // Listen to scroll events on sidebar nav and persist scroll position
    nav.addEventListener('scroll', function() {
        sessionStorage.setItem('civentral_sidebar_scroll', nav.scrollTop);
    }, { passive: true });

    // Restore saved scroll position
    const savedScroll = sessionStorage.getItem('civentral_sidebar_scroll');
    if (savedScroll !== null) {
        nav.scrollTop = parseInt(savedScroll, 10);
    }

    // Fallback: Ensure active submodule/link is scrolled into view if out of viewport
    const activeSubmenu = nav.querySelector('a.text-brand-medium, a.font-black, a.bg-white');
    if (activeSubmenu) {
        const navRect = nav.getBoundingClientRect();
        const activeRect = activeSubmenu.getBoundingClientRect();
        if (activeRect.top < navRect.top || activeRect.bottom > navRect.bottom) {
            activeSubmenu.scrollIntoView({ block: 'nearest', behavior: 'instant' });
        }
    }
}

if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', restoreSidebarScrollPosition);
} else {
    setTimeout(restoreSidebarScrollPosition, 50);
}



