<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\image;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Validator;
class homecontroller extends Controller
{
    public function index()
    {
        return view('client.index');
    }
    public function img()
    {
        return view('client.image');
    }
    //    public function insertimg(Request $request)
    //    {
    //        $category = new image;
    //        if ($request->hasFile('img')) {
    //            $file = $request->file('img');
    //            $extension = $file->getClientOriginalExtension();
    //            $filename = time() . '.' . $extension;
    //            $file->move('item_img', $filename);
    //            $category->image = $filename;
    //        }
    //        $category->save();
    //
    //        return redirect()->back()->with('message', 'Image added successfully');
    //    }


    
    // public function insertimg(Request $request)
    // {
    //     if ($request->isMethod('get')) {
    //         return view('client.image');
    //     } else {
    //         $data = $request->all();
    //         $img = array();
    //         if ($files = $request->file('img')) {
    //             foreach ($files as $file) {
    //                 $name = $file->getClientOriginalName();
    //                 $t = time() . $name;
    //                 $img = explode(".", $t);
    //                 $file->move(public_path('item_img'), $t);
    //                 $image[] = $t;

    //             }
    //         }
    //         if ($img[1] == 'png' ||  $img[1] == "jpg" ||  $img[1] == "jpeg" ||  $img[1] == "mp4") {
    //             $ans = DB::table('addimage')->insert(["image" => implode(",", $image)]);
    //             return redirect()->back()->with("message", "Insert Sucessfully...");
    //         }
    //         else
    //         {
    //             return redirect()->back()->with('error', 'Invalid Image Type');
    //         }
    //     }
    // }
}

