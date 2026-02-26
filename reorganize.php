<?php

$baseDir = __DIR__ . '/resources/views/Gaza';

$map = [
    'admin' => [
        'dashboard.blade.php',
        'dashboard-home.blade.php',
        'dashboard-about.blade.php',
        'dashboard-budget.blade.php',
        'dashboard-construction-tracking.blade.php',
        'dashboard-content.blade.php',
        'dashboard-damage-map.blade.php',
        'dashboard-documentation.blade.php',
        'all-requests.blade.php',
        'main-reports.blade.php',
        'projects-management.blade.php',
        'users-management.blade.php',
        'suppliers-management.blade.php',
        'parent-dashboard.blade.php',
    ],
    'beneficiary' => [
        'beneficiaries.blade.php',
        'beneficiaries-home.blade.php',
        'beneficiaries-about.blade.php',
        'beneficiaries-content.blade.php',
        'beneficiaries-damage-map.blade.php',
        'beneficiaries-order-status.blade.php',
        'beneficiaries-projects.blade.php',
        'parent-beneficiaries.blade.php',
    ],
    'contractor' => [
        'Contractor.blade.php',
        'contractor-index.blade.php',
        'contractor-about.blade.php',
        'contractor-content.blade.php',
        'contractor-damage-map.blade.php',
        'contractor-marketplace.blade.php',
        'contractor-projects.blade.php',
        'parent-contractor-control.blade.php',
    ],
    'donor' => [
        'DonorControl-Panel.blade.php',
        'donor-index.blade.php',
        'donor-about.blade.php',
        'donor-content.blade.php',
        'donor-damage-map.blade.php',
        'donor-projects.blade.php',
        'parent-donor-control.blade.php',
    ],
    'supplier' => [
        'Supplier.blade.php',
        'supplier-index.blade.php',
        'supplier-about.blade.php',
        'supplier-content.blade.php',
        'supplier-damage-map.blade.php',
        'supplier-marketplace.blade.php',
        'supplier-projects.blade.php',
        'parent-supplier-control.blade.php',
    ],
    'auth' => [
        'login.blade.php',
        'login-admin.blade.php',
        'login-beneficiaris.blade.php',
        'login-Contractor.blade.php',
        'login-DonorControl-Panel.blade.php',
        'login-Supplier.blade.php',
    ],
    'front' => [
        'index.blade.php',
        'about.blade.php',
        'budget.blade.php',
        'ConstructionTracking.blade.php',
        'content.blade.php',
        'damage-map.blade.php',
        'documentation.blade.php',
        'donate.blade.php',
        'marketplace.blade.php',
        'Order_status.blade.php',
        'projects.blade.php',
        'reports.blade.php',
        'parent.blade.php',
        'temp.blade.php',
    ]
];

$viewMap = [];

foreach ($map as $folder => $files) {
    $dir = $baseDir . '/' . $folder;
    if (!is_dir($dir)) {
        mkdir($dir, 0777, true);
    }
    foreach ($files as $file) {
        $oldPath = $baseDir . '/' . $file;
        $newPath = $dir . '/' . $file;
        if (file_exists($oldPath)) {
            rename($oldPath, $newPath);
        }
        $viewName = str_replace('.blade.php', '', $file);
        $viewMap["Gaza.$viewName"] = "Gaza.$folder.$viewName";
    }
}

function replaceInDir($dir, $viewMap) {
    $iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($dir));
    foreach ($iterator as $file) {
        if ($file->isFile() && $file->getExtension() === 'php') {
            $content = file_get_contents($file->getPathname());
            $originalContent = $content;

            foreach ($viewMap as $old => $new) {
                // Replace view references: view('Gaza.xxx') -> view('Gaza.folder.xxx')
                $content = str_replace("view('$old'", "view('$new'", $content);
                $content = str_replace("view(\"$old\"", "view(\"$new\"", $content);

                // Replace extends: @extends('Gaza.xxx') -> @extends('Gaza.folder.xxx')
                $content = str_replace("@extends('$old')", "@extends('$new')", $content);
                $content = str_replace("@extends(\"$old\")", "@extends(\"$new\")", $content);

                // Replace includes: @include('Gaza.xxx') -> @include('Gaza.folder.xxx')
                $content = str_replace("@include('$old')", "@include('$new')", $content);
                $content = str_replace("@include(\"$old\")", "@include(\"$new\")", $content);
            }

            if ($content !== $originalContent) {
                file_put_contents($file->getPathname(), $content);
            }
        }
    }
}

replaceInDir(__DIR__ . '/app/Http/Controllers', $viewMap);
replaceInDir(__DIR__ . '/resources/views', $viewMap);

echo "Views reorganized successfully.\n";
