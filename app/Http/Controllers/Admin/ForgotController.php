<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ForgotController extends Controller
{
    public function forgot()
    {
        return view('auth.forgot');
    }
    public function password(Request $request )
    {
       
        $user =User::whereEmail($request->email)->first();
        if($user == null){
            return redirect()->back()->with(['errorMsg'=>'Email không tồn tại !']);
        }

        $to_name = $user->full_name;
        $to_email = $user->email;
        $token_random =Str::random(8);
        $data = array('name' => $to_name,'body'=>$token_random);

        Mail::send('emails.reset_password', $data, function ($message) use ($to_name, $to_email) {
            $message->to($to_email, $to_name)
                ->subject('Khai Anh: Reset password');
            $message->from('khaiandanh@gmail.com', 'Khai Anh');
        });
        DB::table('users')->where('email', $request->email)->update(['password' =>  Hash::make($token_random)]);
        return view('auth.delay')->with(['successMsg'=>'Gửi mật khẩu thành công !']);
    }
    public function resetPassAll(Request $request ){
        $ids =$request->get('ids');
        if($ids == null){
            return redirect()->back();
        }
        foreach($ids as $key){
        $user =User::whereEmail($key)->first();
        $to_name = $user->full_name;
        $to_email = $user->email;
        $token_random =Str::random(8);
        $data = array('name' => $to_name,'body'=>$token_random);
        Mail::send('emails.reset_password', $data, function ($message) use ($to_name, $to_email) {
            $message->to($to_email, $to_name)
                ->subject('Khai Anh: Reset password');
            $message->from('khaiandanh@gmail.com', 'Khai Anh');
        });
        DB::table('users')->where('email', $key)->update(['password' =>  Hash::make($token_random)]);
        }
        return redirect()->back()->with(['successMsg'=>'Đặt lại mật khẩu thành công !']);
    }

    }



