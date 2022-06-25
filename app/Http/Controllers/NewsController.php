<?php
namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Team;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use App\Http\Requests\CreateNewsRequest;

class NewsController extends Controller
{
    public function index()
    {
        $allNews = News::with('user')->orderBy('created_at','desc')->paginate(15);
        return view('news', compact('allNews'));
    }

    public function show(News $news)
    {
    return view('newsshow', compact('news'));
    }

    public function getNewsByTeam($teamName)
    {
        $team = Team::where('name', $teamName)->firstOrFail();
        $news = $team->news()->paginate(10);
        return view('team-news', compact('team', 'news'));
    }

    public function create()
    {
        $teams = Team::all();
        return view('createnews', compact('teams'));
    }

    public function store(CreateNewsRequest $request)
    {
        $data = $request->validated();
        $news = auth()->user()->news()->create($data);
        $news->teams()->attach($data['teams']);
        session()->flash('status_message',"Thank you for publishing the article on www.nba.com");
        return redirect('/news');
    }
}
