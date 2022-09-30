<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class DailyDarshanController extends Controller
{

  public function adddailydarshan()
  {
    return view('Admins.adddailydarshan');
  }
  public function insertdailydarshan(Request $request)
  {
    if ($request->isMethod('get')) {
      return view('Admins.adddailydarshan');
    } else {
      if (@$request->file('dailyimg') != '') {
        if ($request->hasFile('dailyimg')) {
          $poster = $request->file('dailyimg');

          $pname = $poster->getClientOriginalName();
          $dailyimg = time() . $pname;
          $poster->move(public_path('dailydarshan_img'), $dailyimg);
        }

        $ans = DB::table('dailydarshan')->insert(["dailyimg" => $dailyimg]);
        return redirect()->back()->with('message', 'Insert Data Sucessfully!');
      } else {
        return redirect()->back()->with('error', 'please select photo');
      }
    }
  }
  public function showdailydarshan(Request $request)
  {
    $data = DB::table('dailydarshan')->get();
    return view('Admins.showdailydarshan')->with(['data' => $data]);
  }

  public function update($id)
  {
    $data = DB::table('dailydarshan')->where('id', $id)->first();
    return view('Admins.editdailydarshan')->with('data', $data);
  }

  public function updatedailydarshan(Request $request)
  {
    $time = date('Y-m-d H:i:s', time());
    $data = $request->all();

    if (@$request->file('dailyimg') != '') {

      if ($request->hasFile('dailyimg')) {
        $poster = $request->file('dailyimg');
        $pname = $poster->getClientOriginalName();
        $dailyimg = time() . $pname;
        $poster->move(public_path('dailydarshan_img'), $dailyimg);
      }

      DB::table('dailydarshan')->where('id', $data['id'])->update(["dailyimg" => $dailyimg, 'updated_at' => $time]);

      $photo = $request->input('oldimg');

      if ($photo != '') {
        if (file_exists('dailydarshan_img/' . $photo)) {
          unlink('dailydarshan_img/' . $photo);
        } else {
          echo "file not exist";
        }
      }

      return redirect()->back()->with('message', 'Update Gallary Image Sucessfully!');
    }
  }

  public function deletedailydarshan($id)
  {
    $image = DB::table('dailydarshan')->where("id", $id)->pluck("dailyimg")->toArray();

    if ($image[0] != '') {
      if (file_exists('dailydarshan_img/' . $image[0])) {
        $data = DB::table('dailydarshan')->where('id', $id)->delete();

        unlink('dailydarshan_img/' . $image[0]);
        return redirect()->back()->with('message', 'Delete Photo Successfully!');
      } else {
        echo "file not exist";
      }
    }
    return redirect()->back();
  }
}
