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
            
            // Replace href="filename.html" with href="{{ route('Gaza.filename') }}"
            $content = preg_replace_callback('/(href|data-href)="([^"]+)\.html"/', function($matches) {
                $attr = $matches[1];
                $filename = $matches[2];
                
                // Handle special cases if needed, but generally it's Gaza.filename
                return $attr . '="{{ route(\'Gaza.' . $filename . '\') }}"';
            }, $content);
            
            if ($content !== $originalContent) {
                file_put_contents($path, $content);
                echo "Updated: $path\n";
            }
        }
    }
}

processDirectory($directory);
echo "Done fixing .html links.\n";
