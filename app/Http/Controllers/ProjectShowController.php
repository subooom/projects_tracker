<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Project;

class ProjectShowController extends Controller
{
    public function details($slug)
    {
        $project = Project::query()
        ->where('slug', '=', $slug)
        ->get();

        return view('pages/project_show/details')->with([
            'project' => $project[0],
            'slug' => $slug
        ]);;

    }

    public function task($id)
    {
        return view('pages/project_show/task');
    }

    public function settings()
    {
        return view('/pages/project_show/settings');
    }
   
    public function erd()
    {
        return view('/pages/project_show/erd');
    }
 
    public function progress()
    {
        
        return view('/pages/project_show/progress');
    }
}
