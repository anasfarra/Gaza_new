<?php

$directory = __DIR__ . '/resources/views/Gaza';

function processDirectory($dir) {
    $files = scandir($dir);
    foreach ($files as $file) {
        if ($file === '.' || $file === '..') continue;
        
        $path = $dir . '/' . $file;
        if (is_dir($path)) {
            processDirectory($path);
        } elseif (pathinfo($path, PATHINFO_EXTENSION) === 'php') {
            $content = file_get_contents($path);
            $originalContent = $content;
            
            // Fix @extends('gaza.parent-...') to @extends('Gaza.folder.parent-...')
            $content = preg_replace_callback('/@extends\(\'gaza\.(parent-([a-z]+)(?:-control)?)\'\)/i', function($matches) {
                $parentName = $matches[1]; // e.g., parent-donor-control
                $folder = $matches[2]; // e.g., donor
                
                // Handle special cases
                if ($folder === 'beneficiaries') {
                    $folder = 'beneficiary';
                }
                
                return "@extends('Gaza.$folder.$parentName')";
            }, $content);
            
            if ($content !== $originalContent) {
                file_put_contents($path, $content);
                echo "Updated extends in: $path\n";
            }
        }
    }
}

processDirectory($directory);
echo "Done fixing extends.\n";
