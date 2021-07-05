<?php
namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class ChangePasswordController extends Controller
{
   public function index(){
   
       return view('admin.users.change');
   }
   public function changepassword(Request $request){
        if($request->password !== $request->password_comfirm){
            return redirect()->back()->with('errorMsg',"Nhập lại mật khẩu mới");
        }
        $hashedPassword = Auth::user()->password;
        if(Hash::check($request->oldpassword,$hashedPassword)){
            $user = User::find(Auth::id());
            $user->password = Hash::make($request->password);
            $user->save();
            Auth::logout();

            return redirect()->route('login')->with('successMsg',"Thay đổi mật khẩu thành công");
        }else{
            return redirect()->back()->with('errorMsg',"Nhập lại mật khẩu cũ");
        }
   }
}
