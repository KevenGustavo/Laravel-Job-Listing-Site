<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function __invoke()
    {
        $searchWord = request("q");
        $jobs = Job::with(["employer", "tags"])->where("title", "LIKE", "%" . $searchWord . "%")->get();

        return view("results", ["searchWord" => $searchWord, "jobs" => $jobs]);
    }
}
