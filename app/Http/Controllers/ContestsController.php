<?php

namespace App\Http\Controllers;

use App\Problem;
use App\Contest;
use App\ContestProblems;
use DeepCopy\Matcher\PropertyNameMatcher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContestsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contestProblems = ContestProblems::all();
        $contests = Contest::latest()->paginate(20);
        return view('contests.index', compact('contests', 'contestProblems'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();
        if($user){
            if($user->admin){
                return view('contests.create');
            }
            return abort(503);
        }
        return redirect(route('login'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = Auth::user();
        if($user and $user->admin) {
            $request['user_id'] = $user->id;
            Contest::create($request->all());
            return $this->index();
        }
        return abort(404);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contest = Contest::find($id);
        $contestProblems = ContestProblems::all()->where('contest_id', $id);
        return view('contests.detail', compact('contest', 'contestProblems'));
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
}
