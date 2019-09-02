<?php

namespace App\Http\Controllers;

use App\User;
use App\Setting;
use App\Topic;
use App\Repie;
use App\FAQ;
use App\Category;
use App\Department;
use Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BackEndController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }



    //Start Member Action
        public function profile()
        {
            return view('member.profile');
        }  
        public function settings()
        {
            return view('member.settings');
        }
        public function updateprofile(Request $request)
        {
            
            $this->validate($request,[
                'id' => 'required',
                'name' => 'required',
                'phone_number'=>'required',
                'department'=>'required',
                'biography'=>'required',
                'address'=>'required',
                'email'=>'required',
                'profile_pic'=>'image|nullable|max:1999'
            ]);
            
            $user_id = $request->input('id');
            $user = User::find($user_id);
            
            if($user_id== auth()->user()->id){
                $user = User::find($user_id);
                $user ->name = $request->input('name');
                $user ->phone_number = $request->input('phone_number');
                $user ->email = $request->input('email');
                $user ->department = $request->input('department');
                $user ->biography = $request->input('biography');
                $user ->address = $request->input('address');
                $user ->website = $request->input('website');

                if($request->hasFile('profile_pic')){
                    $profile_pic= $request->file('profile_pic');
                    $filename = $profile_pic->getClientOriginalExtension();

                    $fileNameToStore = time().'.'.$filename;

                    Image::make($profile_pic)->save(public_path('/img/profile_pic/'.$fileNameToStore));

                    $user->profile_pic = $fileNameToStore;
                }

                $user->save();
            }else{
                return redirect('/setting');
            }

            return redirect('/profile');
        }
        public function mytopics()
        {
            $by = auth()->user()->id;
            $topics = DB::table('topics')
                    ->join('categorys', 'categorys.cat_id', 'topics.topic_category')
                    ->where('topics.topic_by', auth()->user()->id)
                    ->orderBy('topics.created_at','DESC')
                    ->paginate(10);
            return view('member.mytopics')->with('topics', $topics);
        }
        public function editmytopics($topic_id)
        {
            $by = auth()->user()->id;
            $topic = Topic::find($topic_id);
            if($topic->topic_by == $by){
                $topic = Topic::find($topic_id);
                return view('member.edit-topic', compact('topic',$topic));
            }else{
                return redirect('/my-topics');
            }
        }
        public function member_edit_topic(Request $request, $id){
            $by = auth()->user()->id;
            $topic = Topic::find($id);
            if($topic->topic_by == $by){
                $this->validate($request,[
                    'topic_title'=>['required'],
                    'topic_slug'=>['required'],
                    'topic_description'=>'required',
                    'topic_rule'=>'required',
                    'topic_category'=>'required',
                    'topic_topic_picture'=>'image|nullable|max:1999',
                ]);
                $topic = Topic::find($id);
                $topic ->topic_title = $request->input('topic_title');
                $topic ->topic_slug = $request->input('topic_slug');
                $topic->topic_description = $request->input('topic_description');
                $topic ->topic_rule = $request->input('topic_rule');
                $topic->topic_category = $request->input('topic_category');
                if($request->hasFile('topic_picture')){
                    $topic_picture= $request->file('topic_picture');
                    $filename = $topic_picture->getClientOriginalExtension();
                    $fileNameToStore = time().'.'.$filename;
                    Image::make($topic_picture)->save(public_path('/img/upload/'.$fileNameToStore));

                    $topic->topic_picture = $fileNameToStore;
                }
                $topic->save();
                return redirect('/my-topics');
            }else{
                return redirect('/my-topics');
            }
        }
        public function member_delete_mytopic($id){
            $by = auth()->user()->id;
            $topic = Topic::find($id);
            if($topic->topic_by == $by){
                $topic = Topic::find($id);
                $replys = Repie::where('topic_id', $topic->topic_id)->get();
                foreach($replys as $reply){
                    $rep=Repie::find($reply->reply_id);
                    $rep->delete();
                }
                $topic->delete();
                return redirect('/my-topics');
            }else{
                return redirect('/my-topics');
            }
        }
        public function new_topics(Request $request)
        {
            $this->validate($request,[
                'topic_title'=>['required', 'unique:topics'],
                'topic_slug'=>['required', 'unique:topics'],
                'topic_description'=>'required',
                'topic_rule'=>'required',
                'topic_category'=>'required',
                'topic_picture'=>'image|nullable|max:1999',
            ]);
            
            $user = auth()->user()->id;
            $topic = new Topic;
            $topic ->topic_title = $request->input('topic_title');
            $topic ->topic_slug = $request->input('topic_slug');
            $topic->topic_description = $request->input('topic_description');
            $topic ->topic_rule = $request->input('topic_rule');
            $topic->topic_category = $request->input('topic_category');
            $topic ->topic_by = $user;
            if($request->hasFile('topic_picture')){
                $topic_picture= $request->file('topic_picture');
                $filename = $topic_picture->getClientOriginalExtension();
                $fileNameToStore = time().'.'.$filename;
                Image::make($topic_picture)->save(public_path('/img/upload/'.$fileNameToStore));

                $topic->topic_picture = $fileNameToStore;
            }else{
                $topic->topic_picture = 'no-img.png';
            }
            
            $topic->save();
            return redirect('/my-topics');
        }
        public function myreplies()
        {
            $by = auth()->user()->id;
            $replies = DB::table('repies')->orderBy('repies.created_at','DESC')
                    ->where('.repies.user_id', auth()->user()->id)
                    ->join('users', 'users.id', 'repies.user_id')
                    ->join('topics', 'topics.topic_id', 'repies.topic_id')
                    ->paginate(10);
            return view('member.forum-replies')->with('replies', $replies);
        }
        public function delete_myreplies($id){
            $by = auth()->user()->id;
            $topic = Repie::find($id);
            if($topic->topic_by == $by){
                $topic = Repie::find($id);
                $topic->delete();
                return redirect('/myreplies');
            }else{
                return redirect('/myreplies');
            }
        }
        public function delete_replies($id){
            $by = auth()->user()->role;
            $topic = Repie::find($id);
            if($by== 'admin'){
                $topic = Repie::find($id);
                $topic->delete();
                return redirect('/admin/replies');
            }else{
                return redirect('/myreplies');
            }
        }
    //End Member Actions


    public function site_settings()
    {
        return view('admin.settings');
    }
    public function updatesiteinfo(Request $request)
    {
        
        $this->validate($request,[
            'id' => 'required',
            'title' => 'required',
            'url'=>'required',
            'banner_text'=>'required',
            'email'=>'required',
            'address'=>'required',
            'telephone'=>'required',
            'about'=>'required',
            'info'=>'required',
            'why_us'=>'required',
            'by'=>'required',
            'banner1'=>'image|nullable|max:1999',
            'banner2'=>'image|nullable|max:1999',
            'banner3'=>'image|nullable|max:1999',
            'image1'=>'image|nullable|max:1999',
            'image2'=>'image|nullable|max:1999',
            'image3'=>'image|nullable|max:1999',
        ]);
        if(auth()->user()->role == "admin"){
            $site = Setting::find(1);
            $site ->title = $request->input('title');
            $site ->url = $request->input('url');
            $site ->email = $request->input('email');
            $site ->banner_text = $request->input('banner_text');
            $site ->about = $request->input('about');
            $site ->address = $request->input('address');
            $site ->telephone = $request->input('telephone');
            $site ->info = $request->input('info');
            $site ->why_us = $request->input('why_us');
            $site ->by = $request->input('by');

            if($request->hasFile('banner1')){
                $banner1= $request->file('banner1');
                $filename = $banner1->getClientOriginalExtension();
                $fileNameToStore = time().'.'.$filename;

                Image::make($banner1)->save(public_path('/img/upload/'.$fileNameToStore));

                $site->banner1 = $fileNameToStore;
            }
            if($request->hasFile('banner2')){
                $banner2= $request->file('banner2');
                $filename = $banner2->getClientOriginalExtension();
                $fileNameToStore = time().'.'.$filename;

                Image::make($banner2)->save(public_path('/img/upload/'.$fileNameToStore));

                $site->banner2 = $fileNameToStore;
            }
            if($request->hasFile('banner3')){
                $banner3= $request->file('babber3');
                $filename = $banner3->getClientOriginalExtension();
                $fileNameToStore = time().'.'.$filename;

                Image::make($banner3)->save(public_path('/img/upload/'.$fileNameToStore));

                $site->banner3 = $fileNameToStore;
            }            
            
            if($request->hasFile('image1')){
                $image1= $request->file('image1');
                $filename = $image1->getClientOriginalExtension();
                $fileNameToStore = time().'.'.$filename;

                Image::make($image1)->save(public_path('/img/upload/'.$fileNameToStore));

                $site->image1 = $fileNameToStore;
            }
            if($request->hasFile('image2')){
                $image2= $request->file('image2');
                $filename = $image2->getClientOriginalExtension();
                $fileNameToStore = time().'.'.$filename;

                Image::make($image2)->save(public_path('/img/upload/'.$fileNameToStore));

                $site->image2 = $fileNameToStore;
            }
            if($request->hasFile('image3')){
                $image3= $request->file('image3');
                $filename = $image3->getClientOriginalExtension();
                $fileNameToStore = time().'.'.$filename;

                Image::make($image3)->save(public_path('/img/upload/'.$fileNameToStore));

                $site->image3 = $fileNameToStore;
            }

            $site->save();
        }else{
            return redirect('/profile');
        }

        return redirect('/admin');
    }
    public function siteinfo(){
        $topics= Topic::all();
        $users= User::all();
        $replies = Repie::all();
        $faqs = FAQ::all();
        $categorys = Category::all();
        $departments = Department::all();

        $all_info = ['users'=>$users, 'topics'=>$topics, 'replies'=>$replies, 'faqs'=>$faqs, 'categorys'=>$categorys, 'departments'=>$departments];

        return view('admin.home')->with($all_info);
    }
    public function admintopics()
    {
        $topices = Topic::orderBy('topics.created_at','DESC')
                ->join('categorys', 'categorys.cat_id', 'topics.topic_category')
                ->join('users', 'users.id', 'topics.topic_by')
                ->paginate(10);
        return view('admin.topics')->with('topices', $topices);
    }

    public function adminreplies()
    {
        $replies = Repie::orderBy('repies.created_at','DESC')
                ->join('topics', 'topics.topic_id', 'repies.topic_id')
                ->join('users', 'users.id', 'repies.user_id')
                ->paginate(10);
        return view('admin.replies')->with('replies', $replies);
    }
    public function admin_delete_topic($id){
        $by = auth()->user()->role;
        $topic = Topic::find($id);
        if($by == 'admin'){
            $topic = Topic::find($id);
            $replys = Repie::where('topic_id', $topic->topic_id)->get();
            foreach($replys as $reply){
                $rep=Repie::find($reply->reply_id);
                $rep->delete();
            }
            $topic->delete();
            return redirect('/admin/topics');
        }else{
            return redirect('/my-topics');
        }
    }
    
    //Manage Members
        public function members()
        {
            $users= User::paginate(10);
            return view('admin.members')->with('users', $users);
        }
        public function delete_members($id){
            $by = auth()->user()->role;
            $user = User::find($id);
            if($by== 'admin'){
                $user = User::find($id);

                $topics= Topic::where('topic_by', $user->id)->get();
                foreach($topics as $topic){
                    $topic = Topic::find($topic->topic_id);
                    $replys = Repie::where('topic_id', $topic->topic_id)->get();
                    foreach($replys as $reply){
                        $rep=Repie::find($reply->reply_id);
                        $rep->delete();
                    }
                    $topic->delete();
                }
                
                $replies= Repie::where('user_id',$user->id)->get();
                foreach($replies as $reply){
                    $rep=Repie::find($reply->reply_id);
                    $rep->delete();
                }
                
                $user->delete();
                return redirect('/admin/members');
            }else{
                return redirect('/profile');
            }
        }
    //

    //Admin FAQs Management
        public function afaqs()
        {
            $afaqs= FAQ::paginate(10);
            return view('admin.faqs')->with('afaqs', $afaqs);
        }
        public function new_afaqs()
        {
            return view('admin.new-faqs');
        }
        public function newafaqs(request $request)
        {
            $slug =$request->path();
            $this->validate($request,[
                'faq_question'=>['required', 'unique:f_a_q_s'],
                'faq_answer'=>['required'],
            ]);
            
            
            $faqs = new FAQ;
            $faqs ->faq_question = $request->input('faq_question');
            $faqs ->faq_answer = $request->input('faq_answer');
            
            $faqs->save();
            return redirect('admin/faqs');
        }
        public function edit_afaqs(Request $request, $id)
        {
            $id =$id;
            $afaqs= FAQ::where('faq_id',$id)->first();
            return view('admin.edit-faqs')->with('afaqs', $afaqs);
        }
        public function editafaqs(Request $request, $id)
        {
            $this->validate($request,[
                'faq_question'=>['required'],
                'faq_answer'=>['required'],
            ]);
            
            $id =$id;
            $faqs= FAQ::find($id);
            $faqs ->faq_question = $request->input('faq_question');
            $faqs ->faq_answer = $request->input('faq_answer');
            
            $faqs->save();
            return redirect('admin/faqs');
        }
        public function delete_afaqs($faq_id)
        {
            $by = auth()->user()->role;
            if($by == 'admin'){
                $faq = FAQ::find($faq_id);
                $faq->delete();
                return redirect('/admin/faqs');
            }else{
                return redirect('/profile');
            }
        }
    //

    //Admin Category Management
        public function cat()
        {
            $cats= Category::paginate(10);
            return view('admin.cat')->with('cats', $cats);
        }
        public function new_cat(Request $request)
        {
            $slug =$request->path();
            $this->validate($request,[
                'cat_title'=>['required', 'unique:categorys'],
                'cat_slug'=>['required', 'unique:categorys'],
            ]);
            
            
            $cat = new Category;
            $cat ->cat_title = $request->input('cat_title');
            $cat ->cat_slug = $request->input('cat_slug');
            
            $cat->save();
            
            return redirect('/admin/cat');
        }
        public function edit_cat(Request $request, $id)
        {
            $id =$id;
            $cat = Category::where('cat_id',$id)->first();
            return view('admin.edit-cat')->with('cat', $cat);
        }
        public function editcat(Request $request, $id)
        {
            $this->validate($request,[
                'cat_title'=>'required',
                'cat_slug'=>'required',
            ]);

            $id =$id;
            $cat = Category::find($id);
            $cat ->cat_title = $request->input('cat_title');
            $cat ->cat_slug = $request->input('cat_slug');
            
            $cat->save();
            return redirect('../admin/cat');
        }
        public function delete_cat($cat_id)
        {
            $by = auth()->user()->role;
            if($by == 'admin'){
                $cat = Category::find($cat_id);
                $cat->delete();
                return redirect('/admin/cat');
            }else{
                return redirect('/profile');
            }
        }
    // 

    //Topic
        public function reply_topic_single(Request $request, $slug)
        {
            $this->validate($request,[
                'reply_body'=>'required',
                'reply_image'=>'image|nullable|max:1999',
            ]);
            
            
            $slug =$request->path();

            $topic = Topic::whereSlug($slug)
                ->first();
            $topic_id = $topic->topic_id;


            $user = auth()->user()->id;
            $reply = new Repie;
            $reply ->reply_body = $request->input('reply_body');
            $reply ->user_id = $user;
            $reply ->topic_id = $topic_id;

            if($request->hasFile('reply_image')){
                $reply_image= $request->file('reply_image');
                $filename = $reply_image->getClientOriginalExtension();
                $fileNameToStore = time().'.'.$filename;
                Image::make($reply_image)->save(public_path('/img/upload/'.$fileNameToStore));

                $reply->reply_image = $fileNameToStore;
            }

            $reply->save();
            return redirect('/'.$slug);
        }
    //Topic Ends


    ///Manage department
        public function department()
        {
            $departmenters=Department::orderBy('department_title', 'ASC')
                    ->paginate(10);
            return view('admin.department')->with('departmenters', $departmenters);
        }
        public function newdepartment(Request $request)
        {
            return view('admin.new-department');
        }
        public function new_department(Request $request)
        {
            $this->validate($request,[
                'department_title'=>['required', 'unique:departments'],
            ]);
            
            
            $cat = new Department;
            $cat ->department_title = $request->input('department_title');
            
            $cat->save();
            return redirect('/admin/department');
        }
        public function edit_department(Request $request, $id)
        {
            $id =$id;
            $dept = Department::where('department_id',$id)->first();
            return view('admin.edit-department')->with('dept', $dept);
        }
        public function editdepartment(Request $request, $id)
        {
            $this->validate($request,[
                'department_title'=>['required'],
            ]);
            
            
            $id =$id;
            $dept = Department::find($id);
            $dept ->department_title = $request->input('department_title');
            
            $dept->save();
            return redirect('/admin/department');
        }
        public function delete_department($id)
        {
            $by = auth()->user()->role;
            if($by == 'admin'){
                $dept = Department::find($id);
                $dept->delete();
                return redirect('/admin/department');
            }else{
                return redirect('/profile');
            }
        }
    //Department Ends Here

}
