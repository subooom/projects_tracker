<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Project;
use App\Http\Resources\Project as ProjectResource;


class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        return view('pages.project_show.details')->with('slug', 'project_one');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function fetchAll()
    {
        $projects=Project::latest()->paginate(5);

        $headers = [
            'headers' => [
                'method' => 'GET',
                'message' => 'All projects fetched!',
                'code' => 200
            ]
        ];

        return ProjectResource::collection($projects)->additional($headers);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */



    public function fetch($slug)
    {
        $project = Project::query()
          ->where('slug', '=', $slug)
          ->get();

        $headers = [
            'headers' => [
                'method' => 'GET',
                'message' => 'project #'.$project[0]->id.' fetched!',
                'code' => 200
            ]
        ];

        $projRes = new ProjectResource($project);

        return $projRes->additional($headers);
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($request);
        $request->validate([
            'title'=> 'required',
            'description'=>'required',
        ]);

        $project = new \App\project;

        $project->slug = str_slug($request->input('title'));

        $project->title = $request->input('title');

        $project->description = $request->input('description');

        $project->git_url = $request->input('git_url');

        $project->timeframe = $request->input('timeframe');

        $project->save();

        return redirect('/')
          ->with('success', 'Information has been added');
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
