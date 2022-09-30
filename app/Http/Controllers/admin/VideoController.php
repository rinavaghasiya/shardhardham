<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class VideoController extends Controller
{

    public function addvideo()
    {
        return view('Admins.addvideo');
    }
    public function insertvideo(Request $request)
    {
        $data = $request->all();
        if ($request->isMethod('get')) {
            return view('Admins.addvideo');
        } else {
            $ans = DB::table('kathavideo')->insert(["videotitle" => $data['videotitle'], "videolink" => $data['videolink'], "status" => $data['status']]);
            return redirect()->back()->with('message', 'Insert Data Sucessfully!');
        }
    }
    public function showvideo(Request $request)
    {
        $data = DB::table('kathavideo')->get();
        return view('Admins.showvideo')->with(['data' => $data]);
    }

    public function update($id)
    {
        $data = DB::table('kathavideo')->where('id', $id)->first();
        return view('Admins.editvideo')->with('data', $data);
    }

    public function updatevideo(Request $request)
    {
        $time = date('Y-m-d H:i:s', time());
        $data = $request->all(); 

            DB::table('kathavideo')->where('id', $data['id'])->update(["videotitle" => $data['videotitle'],"videolink"=>$data['videolink'],'status'=>$data['status'], 'updated_at' => $time]);
            return redirect()->back()->with('message', 'Update Video Sucessfully!');
        
    }

    public function deletevideo($id)
    {
        DB::table('kathavideo')->where("id", $id)->first();
       return redirect()->back();
    }
}
