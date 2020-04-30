<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\project;


class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $projects=\App\Project::all();
        return view('pages.projects.index',compact('projects'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
  
    // public function project()
    // {
    //     return view('pages.project');
    // }

    public function create()
    {
        return view('pages.projects.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $request->validate([
            'title'=> 'required',
            'description'=>'required',
        ]);
          
        $project= new \App\project;
        $project->title=$request->input('title');
        $project->description=$request->input('description');
        $project->save();
       return redirect('pages.projects.index')->with('success', 'Information has been added');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $project = \App\Project::find($id);
        return view('pages.projects.edit',compact('project','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $project= \App\Project::find($id);
        $project->title=$request->get('title');
        $project->description=$request->get('description');
        $project->save();
           return redirect('pages.projects.create');
  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        $project->delete();
        return redirect('pages.projects.index')->with('success',"projects deleted successfully.");
    }
}
?>