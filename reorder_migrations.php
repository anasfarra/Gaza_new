<?php

$migrationsPath = __DIR__ . '/database/migrations';
$files = scandir($migrationsPath);

// The exact order we want (table names)
// Note: Thsi script assumes the file format is YYYY_MM_DD_HHMMSS_create_TABLENAME_table.php
$desiredOrder = [
    'roles',
    'countries',
    'cities',           // Depends on countries
    'categories',
    'user_profiles',    // Depends on roles, countries, cities
    'admins',           // Depends on user_profiles (if using foreign key)
    'beneficiaries',    // Depends on user_profiles
    'contractors',      // Depends on user_profiles
    'suppliers',        // Depends on user_profiles
    'donors',           // Depends on user_profiles
    'attachments',
    'ratings',
    'contacts',
    'login_logs',
    'damage_areas',     // Depends on beneficiaries (maybe), cities
    'damage_reports',   // Depends on damage_areas
    'projects',         // Depends on damage_reports
    'budgets',          // Depends on projects
    'construction_phases', // Depends on projects
    'products',         // Depends on suppliers, categories
    'payments',
    'orders',           // Depends on projects
    'order_items',      // Depends on orders, products
    'donations',        // Depends on donors, projects
    'compensation_requests' // Depends on beneficiaries, projects
];

// Start time: 2026_02_23_210000 (just to be safe and in the future relative to existing ones)
$startTime = strtotime('2026-02-23 21:00:00');

foreach ($desiredOrder as $index => $tableName) {
    // Find the file that matches the table name
    $foundFile = null;
    foreach ($files as $file) {
        if (str_contains($file, "_create_{$tableName}_table.php")) {
            $foundFile = $file;
            break;
        }
    }

    if ($foundFile) {
        $oldPath = $migrationsPath . '/' . $foundFile;

        // Create new timestamp
        $newTime = $startTime + ($index * 10); // Add 10 seconds for each to keep them distinct
        $newTimestamp = date('Y_m_d_His', $newTime);

        // Extract the suffix (create_xyz_table.php)
        // The timestamp is the first 17 chars + 1 underscore
        $suffix = substr($foundFile, 17); // 2026_02_23_204150 is 17 chars.

        $newFileName = $newTimestamp . $suffix;
        $newPath = $migrationsPath . '/' . $newFileName;

        if ($oldPath !== $newPath) {
            rename($oldPath, $newPath);
            echo "Renamed $foundFile to $newFileName\n";
        }
    } else {
        echo "Warning: Could not find migration for table '$tableName'\n";
    }
}
