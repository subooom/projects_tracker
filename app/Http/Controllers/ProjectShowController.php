<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Project;
use App\Http\Resources\Project as ProjectResource;

class ProjectShowController extends Controller
{
    public function show($slug)
    {
      $project = Project::query()
        ->where('slug', '=', $slug)
        ->get();

      return new ProjectResource($project);
    }

    public function task($slug)
    {

        return view('pages/project_show/task')->with([
          'slug' => $slug
        ]);
    }

    public function settings($slug)
    {
        $project = Project::query()
        ->where('slug', '=', $slug)
        ->get();
        return view('pages/project_show/settings')->with([
            'slug' => $slug
        ]);
    }

    public function erd($slug)
    {
        $project = Project::query()
        ->where('slug', '=', $slug)
        ->get();
         return view('pages/project_show/erd')->with([
            'project' => $project[0],
            'slug' => $slug
        ]);
    }

    public function progress($slug)
    {
        $project = Project::query()
        ->where('slug', '=', $slug)
        ->get();
        return view('pages/project_show/progress')->with([
            'project' => $project[0],
            'slug' => $slug
        ]);
    }

    public function vision($slug)
    {
       $project = Project::query()
        ->where('slug', '=', $slug)
        ->get();
        return view('pages/project_show/vision')->with([
            'project' => $project[0],
            'slug' => $slug
        ]);
    }
}
