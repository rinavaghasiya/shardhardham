<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class SliderController extends Controller
{

    public function addslider()
    {
        return view('Admins.addslider');
    }
    public function insertslider(Request $request)
    {
        if ($request->isMethod('get')) {
            return view('Admins.addslider');
        } else {
           
            if (@$request->file('slider_img') != '') {
                if ($request->hasFile('slider_img')) {
                    $poster = $request->file('slider_img');
               
                    $pname = $poster->getClientOriginalName();
                    $slider_img = time() . $pname;
                    $poster->move(public_path('slider_img'), $slider_img);
                }
              
               $ans= DB::table('addimage')->insert(["image" => $slider_img]);
                return redirect()->back()->with('message', 'Insert Data Sucessfully!');
            } else {
                return redirect()->back()->with('error', 'please select photo');
            }
        }
    }
    public function showslider(Request $request)
    {
        $data = DB::table('addimage')->get();
        return view('Admins.showslider')->with(['data' => $data]);
    }

    public function update($id)
    {
        $data = DB::table('addimage')->where('id', $id)->first();
        return view('Admins.editslider')->with('data', $data);
    }

    public function updateslider(Request $request)
    {
        $time = date('Y-m-d H:i:s', time());
        $data = $request->all();
    
        if (@$request->file('slider_image') != '') {
    
          if ($request->hasFile('slider_image')) {
            $poster = $request->file('slider_image');
            $pname = $poster->getClientOriginalName();
            $slider_image = time() . $pname;
            $poster->move(public_path('slider_img'), $slider_image);
          }
    
          DB::table('addimage')->where('id', $data['id'])->update(["image" => $slider_image,'updated_at' => $time]);
    
          $photo = $request->input('oldimg');
    
          if ($photo != '') {
            if (file_exists('slider_image/' . $photo)) {
              unlink('slider_image/' . $photo);
            } else {
              echo "file not exist";
            }
          }
    
          return redirect()->back()->with('message', 'Update Product Sucessfully!');
        }
    }

    public function deleteslider($id)
    {
        $image = DB::table('addimage')->where("id", $id)->pluck("image")->toArray();
  
      if ($image[0] != '') {
        if (file_exists('slider_image/' . $image[0])) {
          $data = DB::table('addimage')->where('id', $id)->delete();
  
          unlink('slider_image/' . $image[0]);
          return redirect()->back()->with('message', 'Delete Photo Successfully!');
        } else {
          echo "file not exist";
        }
      }

        return redirect()->back();
    }
}
