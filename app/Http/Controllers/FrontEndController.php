<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Topic;
use App\Repie;
use App\FAQ;
use App\Category;

class FrontEndController extends Controller
{
    public function home()
    {
        return view('page.index');
    }
    public function faq()
    {
        //$topics = Topic::orderBy('created_at','DESC')
        $faqs = DB::table('f_a_q_s')
            ->orderBy('created_at','DESC')
            ->paginate(10);
        return view('page.faq')->with('faqs', $faqs);
    }
    
    public function about()
    {
        return view('page.about');
    }
    
    public function contact()
    {
        return view('page.contact');
    }

    public function topic_single(Request $request, $slug)
    {
        $slug =$request->path();
        $topic = Topic::where('topic_slug', $slug)->get();
        if(count($topic)>0){
            $topic = Topic::where('topic_slug', $slug)
                ->join('users', 'users.id', 'topics.topic_by')
                ->join('categorys', 'categorys.cat_id', 'topics.topic_category')->first();

            $top = Topic::where('topic_slug', $slug)->first();
            $topic_id = $top->topic_id;
            $repies = DB::table('repies')
                    ->where('topic_id', $topic_id)
                    ->join('users', 'users.id', 'repies.user_id')
                    ->orderBy('repies.created_at','DESC')
                    ->paginate(10);
            return view('page.topic-replies', compact('topic'))->with('repies', $repies);
        }
        else{
            return view('errors.404');
        }
    }

    public function member(Request $request, $reg_no)
    {
        $user = User::where('reg_no', $reg_no)->get();
        if(count($user)>0){
            $user = User::where('reg_no', $reg_no)->first();
            $topics = Topic::where('topic_by', $user->id)->get();
            $repies = Repie::where('user_id', $user->id)->get();

            return view('page.member', compact('user'))->with(['repies'=>$repies, 'topics'=>$topics]);
        }
        else{
            return view('errors.404');
        }
    }
    public function search_cat(Request $request, $slug)
    {

        $cat = Category::where('cat_slug', $slug)
            ->get();
        
        if(count($cat)>0){
            $cat = Category::where('cat_slug', $slug)
            ->first();
            $cat_id = $cat->cat_id;
            $cattopics = DB::table('topics')
                    ->orderBy('topics.created_at','DESC')
                    ->join('users', 'users.id', 'topics.topic_by')
                    ->join('categorys', 'categorys.cat_id', 'topics.topic_category')
                    ->where('topic_category', $cat_id)
                    ->paginate(10);
            return view('page.search_category', compact('cat'))->with('cattopics', $cattopics);
        }
        else{
            return view('errors.404');
        }
    }
    
    
    public function topics()
    {
        //$topics = Topic::orderBy('created_at','DESC')
        $topics = DB::table('topics')
            ->orderBy('topics.created_at','DESC')
            ->join('users', 'users.id', 'topics.topic_by')
            ->join('categorys', 'categorys.cat_id', 'topics.topic_category')
            ->paginate(10);
        return view('page.topics')->with('topics', $topics);
    }
}
