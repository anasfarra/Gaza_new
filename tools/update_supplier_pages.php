<?php

$map = [
    'index' => 'supplier-index',
    'damage-map' => 'supplier-damage-map',
    'projects' => 'supplier-projects',
    'about' => 'supplier-about',
    'content' => 'supplier-content',
    'marketplace' => 'supplier-marketplace',
];

$base = __DIR__ . '/../resources/views/Gaza/';
$replacements = [
    "@extends('gaza.parent')" => "@extends('gaza.parent-supplier-control')",
    "@extends('Gaza.parent')" => "@extends('gaza.parent-supplier-control')",
    '@extends("gaza.parent")' => '@extends("gaza.parent-supplier-control")',
    '@extends("Gaza.parent")' => '@extends("gaza.parent-supplier-control")',
    "route('Gaza.index')" => "route('Gaza.supplier-index')",
    "route('Gaza.damage-map')" => "route('Gaza.supplier-damage-map')",
    "route('Gaza.projects')" => "route('Gaza.supplier-projects')",
    "route('Gaza.about')" => "route('Gaza.supplier-about')",
    "route('Gaza.content')" => "route('Gaza.supplier-content')",
    "route('Gaza.marketplace')" => "route('Gaza.supplier-marketplace')",
    'index.html' => "{{ route('Gaza.supplier-index') }}",
    'damage-map.html' => "{{ route('Gaza.supplier-damage-map') }}",
    'projects.html' => "{{ route('Gaza.supplier-projects') }}",
    'about.html' => "{{ route('Gaza.supplier-about') }}",
    'content.html' => "{{ route('Gaza.supplier-content') }}",
    'marketplace.html' => "{{ route('Gaza.supplier-marketplace') }}",
    'ConstructionTracking.html' => "{{ route('Gaza.ConstructionTracking') }}",
];

foreach ($map as $src => $dst) {
    $srcPath = $base . $src . '.blade.php';
    $dstPath = $base . $dst . '.blade.php';

    if (!file_exists($srcPath)) {
        fwrite(STDERR, "Missing source: $srcPath" . PHP_EOL);
        continue;
    }

    $content = file_get_contents($srcPath);
    $content = str_replace(array_keys($replacements), array_values($replacements), $content);
    file_put_contents($dstPath, $content);

    echo "Wrote $dstPath" . PHP_EOL;
}
