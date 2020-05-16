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
        ]);

    }

    public function task($slug)
    {
      // ! FIRST THING TODO:

      // ! 1. Press 'cntrl + shift + p' and type in extensions and select 'install extensions' 💓

      // ! 2. Search for 'Emoji' by 'perkovec' and install it. 💓💓

      // ! 3. Search for 'Better Comments' by 'Aaron Bond' and install it.

      // !

      //

      // ? We need to send the slug to the frontend because of the following, ani plus remember instead of 'id' we are

      // ? fetching the database with `slug` instead (see details()). 💓 💓

      // ? And the slug is available in task function

      // ? from the URL you're currently in, in your web browser. Remember :

      // ? You have done this in routes/web.php:

      // ! Route::get('/{slug}/task','ProjectShowController@task');`

      // ? It means that whatever is in the curly braces in the first argument will be the parameter of the

      // ? controller function that's being called 😏 💓 💓

      // ? And ta kun URL ma chas vanney chai generally <a></a> tags haru leh nai define garcha,

      // ? when you click on a '<a></a>' tag with some `href` attribute 🌲 🌲

      // ? then you're gonna go to that link, ani in our case,  tyo `<a></a>` tag maa we are gonna need the slug data, right?

      // ! So we need to pass the `slug` data temporarily through the `return` statement with the with statement

      // ? IDEA: Although, now I'm thinking we should have started with the making the ERD for the `task` table then the view

      // ? IDEA: The view could define what entries we have, I'll work on the erd soon and you make the migrations based on

      // ? IDEA: the erd la..😍 😍

      // TODO ⚠ ↙

      // TODO - Future implementations would be to fetch the project as well as the tasks because I assume we're gonna

      // TODO - need both of them in the frontend. And since the 'projects' database already has the 'slug' data,

      // TODO - we can just pass the `$project` we fetched from the db to the `return` statement's `with` parameter

      // TODO DONE: `Task::kehikura()` garera task list haru database bata retreive garera tala return statement ko

      // TODO `with` ma pathaidiney, because we need the data in the frontend

      // TODO

      // ! TEMPORARY MIND FUCK 😱 😨 😨 ⚠ ⚠

      // ! TEMPORARY MIND FUCK: Send the slug to the view, remember we also got the slug from

      // ! the view when the <a></a> tag was clicked

      // ? We are doing this because the sidenav isn't working properly

      // * Sending good vibes your way 😍 😍 😍 😍

      // * Hope you fix other functions as well :P just get the slug and send the slug 😃 😁

        return view('pages/project_show/task')->with([
          'slug' => $slug
        ]);
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

    public function vision()
    {

        return view('/pages/project_show/vision');
    }
}
