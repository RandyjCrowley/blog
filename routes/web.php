<?php

use Illuminate\Http\File;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('welcome');
})->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('dashboard', function () {
        return Inertia::render('dashboard');
    })->name('dashboard');
});

Route::get('/blog/{slug}', function ($slug) {
    $content = Storage::get('blog/' . $slug . '.md');
    $lines = explode("\n", $content);
    $title = trim(str_replace('#', '', $lines[0]));
    return view('blog', [
        'title' => $title,
        'content' => $content,
        'author' => 'Jane Stellar', // Replace with dynamic author if needed
        'date' => 'May 9, 2025', // Replace with dynamic date
        'readTime' => 8 // Replace with calculated read time if desired
    ]);
});
require __DIR__ . '/settings.php';
require __DIR__ . '/auth.php';
