<?php

use Illuminate\Support\Facades\Log;

try {
    Log::debug('Tes log');
} catch (\Exception $e) {
    dd($e->getMessage());
}

