<?php

$map = [
    'index' => 'donor-index',
    'damage-map' => 'donor-damage-map',
    'projects' => 'donor-projects',
    'about' => 'donor-about',
    'content' => 'donor-content',
];

$base = __DIR__ . '/../resources/views/Gaza/';
$replacements = [
    "@extends('gaza.parent')" => "@extends('gaza.parent-donor-control')",
    "@extends('Gaza.parent')" => "@extends('gaza.parent-donor-control')",
    '@extends("gaza.parent")' => '@extends("gaza.parent-donor-control")',
    '@extends("Gaza.parent")' => '@extends("gaza.parent-donor-control")',
    "route('Gaza.index')" => "route('Gaza.donor-index')",
    "route('Gaza.damage-map')" => "route('Gaza.donor-damage-map')",
    "route('Gaza.projects')" => "route('Gaza.donor-projects')",
    "route('Gaza.about')" => "route('Gaza.donor-about')",
    "route('Gaza.content')" => "route('Gaza.donor-content')",
    'index.html' => "{{ route('Gaza.donor-index') }}",
    'damage-map.html' => "{{ route('Gaza.donor-damage-map') }}",
    'projects.html' => "{{ route('Gaza.donor-projects') }}",
    'ConstructionTracking.html' => "{{ route('Gaza.ConstructionTracking') }}",
    'about.html' => "{{ route('Gaza.donor-about') }}",
    'content.html' => "{{ route('Gaza.donor-content') }}",
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
