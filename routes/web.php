<?php

use App\Livewire\ChatPage;
use App\Livewire\JoinPage;
use Illuminate\Support\Facades\Route;

Route::get('/', ChatPage::class)
    ->middleware('auth')
    ->name('chat');

Route::get('/join', JoinPage::class)
    ->middleware('guest') 
    ->name('join');