<?php

namespace App\Http\Controllers;

use App\Models\Story;
use Illuminate\Http\Request;
use Illuminate\Pagination\CursorPaginator;
use lluminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $stories=Story::with('users')->orderBy('id', 'DESC')->paginate(4);
        return view('home',['stories'=>$stories]);
    }
    public function json($id)
    {
        $stories=Story::where('id',$id)->with('users')->get();
        return $stories;
    }

    public function search(Request $request)
    {
        $searchTerm=$request->search;
        $stories=Story::query()
        ->where('title', 'LIKE', "%{$searchTerm}%")
        ->orWhere('body', 'LIKE', "%{$searchTerm}%")
        ->orWhere('date', 'LIKE', "%{$searchTerm}%")
        ->orderBy('id', 'DESC')
        ->paginate(4);
        return view('search',compact('stories'));
    }
}
