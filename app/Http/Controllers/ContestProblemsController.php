<?php

namespace App\Http\Controllers;

use App\Problem;
use App\Contest;
use App\Task;
use App\ContestProblems;
use App\Language;
use DeepCopy\Matcher\PropertyNameMatcher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContestProblemsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        abort(404);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        abort(404);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        abort(404);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $languages = Language::all();
        $problem = ContestProblems::find($id);
        return view('contestProblems.detail', compact('problem', 'languages'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        abort(404);
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
        abort(404);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        abort(404);
    }


    public function submit(Request $request, $id)
    {
        $user = Auth::user();
        $problem = ContestProblems::find($id);
        if($user) {
            if($problem){
                $request['user_id'] = $user->id;
                $request['problem_id'] = $problem->problem_id;
                $request['contest_id'] = $problem->contest_id;
                $request['status_id'] = 1;
                Task::create($request->all());
                return redirect(route('tasks.index'));
            }
            abort(404);
        }
        return redirect(route('login'));
    }
}
