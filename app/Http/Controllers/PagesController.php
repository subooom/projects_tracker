<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $name ='index';
      return view('pages.index')->with('name', $name);
    }

    public function api()
    {
      $data = [
        'header_tags' => [
          ['URL','Uniform Resource Locator'],
          ['Method','Method'],
          ['Params','Parameters'],
          ['Desc','Description']
        ],
        "data" => [
          "auth" => [
            "name" => 'Authentication',
            "api" => [
              [
                "URL" => '<code>/auth/api/sign-in</code>*',
                "Method" => 'POST',
                "Parameters"=> '<code>username, password</code>',
                "Description" => 'Signs in the user.'
              ],
              [
                "URL" => '<code>/api/auth/is-logged-in</code>',
                "Method" => 'GET',
                "Parameters"=> 'No Params.',
                "Description" => 'Returns <code>true</code> if any user is logged in.'
              ],
              [
                "URL" => '<code>/api/auth/is-new-user/{email}</code>',
                "Method" => 'GET',
                "Parameters"=> '<code>email</code>',
                "Description" => 'Returns <code>true</code> if the user is new.'
              ],
            ]
          ],
          "users" => [
            "name" => 'Users',
            "api" => [
              [
                "URL" => '<code>/api/users/fetch-all</code>',
                "Method" => 'GET',
                "Parameters"=> 'No Params.',
                "Description" => 'Returns a <code>json</code> with all users from the database.'
              ]
            ]
          ],
        ],
      ];
      return view('api')->with('data', $data);
    }

    public function project()
    {
      $name ='project';
      return view('pages.project')->with('name',$name);
    }


    public function task()
    {
      $name ='task';
      return view('pages.task')->with('name',$name);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
