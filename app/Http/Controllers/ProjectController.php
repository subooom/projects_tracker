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

        $projects=Project::latest()->paginate(5);
        return view('pages.projects.index',compact('projects'))
        ->with('i',(request()->input('page',1)-1)*5);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

  

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

        $project->slug = str_slug($request->input('title'));

        $project->title = $request->input('title');

        $project->description = $request->input('description');

        $project->save();

        return redirect('/')
          ->with('success', 'Information has been added');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $project =Project::query()
                  ->where('slug', '=', "%{$slug}%")
                  ->get();

        return view('pages/projects/show', compact('project'));


    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        return view('pages.projects.edit',compact('projects'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {

        $request->validate([
            'title'=> 'required',
            'description'=>'required',
        ]);

        Project::update($request->all());
    return redirect("/")->with('success','project updated successfully');


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
        return redirect('/')->with('success',"projects deleted successfully.");
    }
}
?>