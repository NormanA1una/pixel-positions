<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Job;

class SearchController extends Controller
{
    public function __invoke()
    {
        $jobs =  Job::query()
            ->where('title', 'like', '%' . request('q') . '%')
            ->with(['employer', 'tags'])
            ->get();

        return view('results', [
            'jobs' => $jobs,
        ]);
    }
}
