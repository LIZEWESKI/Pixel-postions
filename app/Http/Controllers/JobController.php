<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\UpdateJobRequest;
use Illuminate\Support\Arr;

class JobController extends Controller
{
    /** 
     * Display a listing of the resource.
     */
    public function index()
    {
        $featured_jobs = Job::latest()->where("featured","=",1)->with(["employer","tags"])->get();
        $jobs = Job::with("employer")->get();
        $tags = Tag::all();
        return view("jobs.index",compact("jobs","tags","featured_jobs"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("jobs.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $attributes =  $request->validate([
            "title" => ["required","max:25"],
            "salary" => ["required"],
            "schedule" => ["required", Rule::in(["Full-Time","Part-Time"])],
            "location" => ["required", Rule::in(["OnSite","Remote","Hybrid"])],
            "tags" => ["nullable"]
        ]);
        // This will returns a bool
        $attributes["featured"] = $request->has("featured");
        $jobs = Auth::user()->employer->jobs()->create(Arr::except($attributes,"tags"));
        if($attributes["tags"] ?? false) {
            // "stones,witch-craft,cards" => ["stones",""witch-craft,"cards"];
           foreach(explode(",",$attributes["tags"]) as $tag) {
                $jobs->tag($tag);
           }
        }
        return redirect("/");
    }

    /**
     * Display the specified resource.
     */
    public function show(Job $job)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Job $job)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateJobRequest $request, Job $job)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Job $job)
    {
        //
    }
}
