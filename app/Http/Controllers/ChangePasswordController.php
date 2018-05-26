<?php namespace heide\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use Hash;
use Auth;
use Illuminate\Support\Facades\Validator;
use heide\User;
class ChangePasswordController extends Controller {
	public function getIndex(Request $request)
	{
		return view('admin.changepassword',['pn'=>'ChangePassword']);
	}
	public function postIndex(Request $request)
	{
		$ar = [
	        'old_password' => 'required',
            'new_password' => 'required|confirmed|min:6',
	    ];
	    $v = Validator::make($request->all(),$ar);
		if ($v->fails())
	    {
	        return redirect()->back()->withErrors($v->errors());
	    }
	    if (Hash::check($request->old_password,Auth::user()->password))
		{
		    $data =  User::find(Auth::user()->id);
			$data->password = Hash::make($request->new_password);
			$data->save();
			return redirect('admin');
		}
		else{
			return redirect()->back()->withErrors(['Incorrect password']);
		}
	}
}
