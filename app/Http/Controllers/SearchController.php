<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke()
    {
        $query = request("q");
        $jobs = Job::where("title","LIKE", "%".$query."%")->with(["employer","tags"])->get();
        return view("search",compact("jobs"));
    }
}
