<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class GallaryController extends Controller
{

    public function addgallary()
    {
        return view('Admins.addgallary');
    }
    public function insertgallary(Request $request)
    {
        if ($request->isMethod('get')) {
            return view('Admins.addgallary');
        } else {
           
            if (@$request->file('gallary_img') != '') {
                if ($request->hasFile('gallary_img')) {
                    $poster = $request->file('gallary_img');
               
                    $pname = $poster->getClientOriginalName();
                    $gallary_img = time() . $pname;
                    $poster->move(public_path('gallary_img'), $gallary_img);
                }
              
               $ans= DB::table('gallary')->insert(["gallaryimg" => $gallary_img]);
                return redirect()->back()->with('message', 'Insert Data Sucessfully!');
            } else {
                return redirect()->back()->with('error', 'please select photo');
            }
        }
    }
    public function showgallary(Request $request)
    {
        $data = DB::table('gallary')->get();
        return view('Admins.showgallary')->with(['data' => $data]);
    }

    public function update($id)
    {
        $data = DB::table('gallary')->where('id', $id)->first();
        return view('Admins.editgallary')->with('data', $data);
    }

    public function updategallary(Request $request)
    {
        $time = date('Y-m-d H:i:s', time());
        $data = $request->all();
    
        if (@$request->file('gallary_img') != '') {
    
          if ($request->hasFile('gallary_img')) {
            $poster = $request->file('gallary_img');
            $pname = $poster->getClientOriginalName();
            $gallary_img = time() . $pname;
            $poster->move(public_path('gallary_img'), $gallary_img);
          }
    
          DB::table('gallary')->where('id', $data['id'])->update(["gallaryimg" => $gallary_img,'updated_at' => $time]);
    
          $photo = $request->input('oldimg');

        //   echo $photo;
        //   die;
    
          if ($photo != '') {
            if (file_exists('gallary_img/' . $photo)) {
              unlink('gallary_img/' . $photo);
            } else {
              echo "file not exist";
            }
          }
    
          return redirect()->back()->with('message', 'Update Gallary Image Sucessfully!');
        }
    }

    public function deletegallary($id)
    {
       $image = DB::table('gallary')->where("id", $id)
       ->pluck("gallaryimg")->toArray();
 
     if ($image[0] != '') {
       if (file_exists('gallary_img/' . $image[0])) {
         $data = DB::table('gallary')->where('id', $id)->delete();
 
         unlink('gallary_img/' . $image[0]);
         return redirect()->back()->with('message', 'Delete Photo Successfully!');
       } else {
         echo "file not exist";
       }
     }



        return redirect()->back();
    }
}
