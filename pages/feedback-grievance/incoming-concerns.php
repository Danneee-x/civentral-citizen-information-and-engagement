<?php
$basePath = '../../';
require_once __DIR__ . '/../../src/bootstrap.php';

include '../../includes/header.php';
include '../../includes/sidebar.php';
?>

<main class="flex-1 p-6 md:p-8 w-full space-y-6 overflow-y-auto bg-slate-50">
  <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-4 border-b border-slate-200/80 dark:border-slate-700/80 pb-5">
    <div class="space-y-1.5">
      <h1 class="text-2xl font-black text-slate-950 dark:text-white tracking-tight flex items-center gap-2.5 mt-4">
        <span>Incoming Concerns</span>
      </h1>
      <p class="text-xs text-slate-500 dark:text-slate-400 max-w-3xl leading-relaxed font-medium">
        This is a blank page ready for content.
      </p>
    </div>
  </div>
</main>

<?php include '../../includes/footer.php'; ?>
