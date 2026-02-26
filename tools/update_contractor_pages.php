<?php

$map = [
    'index' => 'contractor-index',
    'damage-map' => 'contractor-damage-map',
    'projects' => 'contractor-projects',
    'about' => 'contractor-about',
    'content' => 'contractor-content',
    'marketplace' => 'contractor-marketplace',
];

$base = __DIR__ . '/../resources/views/Gaza/';
$replacements = [
    "@extends('gaza.parent')" => "@extends('gaza.parent-contractor-control')",
    "@extends('Gaza.parent')" => "@extends('gaza.parent-contractor-control')",
    '@extends("gaza.parent")' => '@extends("gaza.parent-contractor-control")',
    '@extends("Gaza.parent")' => '@extends("gaza.parent-contractor-control")',
    "route('Gaza.index')" => "route('Gaza.contractor-index')",
    "route('Gaza.damage-map')" => "route('Gaza.contractor-damage-map')",
    "route('Gaza.projects')" => "route('Gaza.contractor-projects')",
    "route('Gaza.about')" => "route('Gaza.contractor-about')",
    "route('Gaza.content')" => "route('Gaza.contractor-content')",
    "route('Gaza.marketplace')" => "route('Gaza.contractor-marketplace')",
    'index.html' => "{{ route('Gaza.contractor-index') }}",
    'damage-map.html' => "{{ route('Gaza.contractor-damage-map') }}",
    'projects.html' => "{{ route('Gaza.contractor-projects') }}",
    'about.html' => "{{ route('Gaza.contractor-about') }}",
    'content.html' => "{{ route('Gaza.contractor-content') }}",
    'marketplace.html' => "{{ route('Gaza.contractor-marketplace') }}",
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
