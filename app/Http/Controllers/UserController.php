<?php namespace heide\Http\Controllers;
use Illuminate\Http\Request;
use heide\Http\Requests\UserRequest;
use heide\User;
use Hash;
use Illuminate\Support\Facades\Validator;
class UserController extends Controller {
	public function __construct()
	{
		$this->middleware('auth');
	}
	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function getIndex()
	{	
		$data = User::whereNotIn('username',['popfanta'])->get();
		return view('admin.user',['pn' => 'User'])->with('data',$data);
	}
	public function getCreate()
	{
		return view('admin.user-create',['pn' => 'User']);
	}
	public function getEdit($id)
	{
		$data = User::find($id);
		return view('admin.user-create',['pn' => 'Executive'])->with('data',$data);
	}
	public function postCreate(UserRequest $request)
	{
		$data = new User;
		$data->username = $request->username;
		$data->name = $request->name;
		$data->email = $request->email;
		$data->password = Hash::make($request->password);
		$data->save();
		return redirect('admin/User');
	}
	public function postEdit(Request $request,$id)
	{
		$ar = [
	        'username' => 'required',
            'name' => 'required',
            'email' => 'required',
	    ];
	    if($request->has('password')){
	    	$ar['password'] = 'required|confirmed|min:6';
	    }
		$v = Validator::make($request->all(),$ar);
		if ($v->fails())
	    {
	        return redirect()->back()->withErrors($v->errors());
	    }
		$data =  User::find($id);
		$data->username = $request->username;
		$data->name = $request->name;
		$data->email = $request->email;
		$data->password = Hash::make($request->password);
		$data->save();
		return redirect('admin/User');
	}
}
