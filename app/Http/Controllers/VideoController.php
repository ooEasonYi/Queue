<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Videos;

class VideoController  extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $videos = Videos::orderBy('beginDate', 'desc')->get();
        return view('videoList',["videos" => $videos]);
    }

    public function edit(Request $request,$id=null){        
        if(isset($id)){
            $video =Videos::find($id);
        }else{
           $video = new Videos();
        }
        return view('videoEdit',['video' => $video ]);
    }

    public function save(Request $request,$id=null)
    {
        if(isset($id)){
           $msg =  Videos::updateOrCreate(['id' => $id], $request->input());
        }else{
           $msg =  Videos::create($request->input());
        }
        return view('notice',['msg' => '更新成功' ]);
    }
    public function delete(Request $request,$id=null){
        if(isset($id)){
            $video = Videos::find($id);
            $video->delete();
            return view('notice',['msg' => '删除成功' ]);
        }else{
            return view('notice',['msg' => '删除失败' ]);
        }

    }
}
