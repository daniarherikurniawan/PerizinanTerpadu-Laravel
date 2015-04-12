<?php namespace App\Http\Controllers;
use App\User;
use DB;
class PerizinanController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function showListPerizinan()
	{

		return view('listperizinan');
	}

	public function showDetailPerizinan($str)
	{
		return view('detailperizinan.'.$str);
	}

	public function showFormulir($str)
	{
		return view('isiform.'.$str);
	}













	// ===============================================
	public function home()
	{
		\Session::put('bg_home', 1);
		return view('home');
	}

	public function login()
	{
		return view('login');
	}

	public function signup()
	{
		return view('signup');
	}
	
	public function editAkun()
	{
		$user = User::find(\Session::get('id'));
		return view('editakun',compact('user'));
	}

	public function updateAkun()
	{
		 DB::table('users')
            ->where('id', \Session::get('id'))
            ->update(array('nama' => (\Request::get('nama')), 'email' => (\Request::get('email')),'password'=>(\Request::get('password')), 'nama_gambar'=>(\Request::get('nama_gambar'))));

        $user = User::find(\Session::get('id'));
		\Session::forget('nama');
    	\Session::put('nama', $user->nama);

		$str = "Berhasil Mengedit Akun";
		$url = "home";
		return view("status.success",compact("str"),compact('url'));
	}
	
	public function checkSignup()
	{
		try{
			$user = new User;
			$user->nama = (\Request::get('nama'));
			$user->email = (\Request::get('email'));
			$user->password = (\Request::get('password'));
			$user->save();


	    	\Session::put('id', $user->id);
	    	\Session::put('peran', $user->peran);
	    	\Session::put('nama', $user->nama);

			$str = "Berhasil Mendaftarkan Akun";
			$url = "home";
			return view("status.success",compact("str"),compact('url'));
		}catch (\Exception $e) {
        	$str = "Maaf, akun baru harus menggunakan email yang berbeda";
        	$url = "signup";
        	return view("status.failed",compact("str"),compact('url'));
		}
	}

	public function checkLogin()
	{
		try{
			$user = DB::table('users')
	                    ->where('email', (\Request::get('email')))
	                    ->first();
	        $result =  strcmp($user->password,(\Request::get('password')));
	       
	        if($result===0){

	        	\Session::put('id', $user->id);
	        	\Session::put('peran', $user->peran);
	        	\Session::put('nama', $user->nama);

	        	$str = "Selamat, ".$user->nama.". Anda berhasil login";

	        	if($user->peran == 1){
	        		$str = $str." sebagai administrator.";
	        	}
				$url = "home";
				return view("status.success",compact("str"),compact('url'));
	        }else{
	        	$str = "Anda tidak berhasil login. Cek kembali email dan password Anda!";
	        	$url = "login";
	        	return view("status.failed",compact("str"),compact('url'));
		    }
		}catch (\Exception $e) {
        	$str = "Anda tidak berhasil login. Cek kembali email dan password Anda!";
        	$url = "login";
        	return view("status.failed",compact("str"),compact('url'));
		}
	}

	public function logout()
	{
		return view('logout');
	}

	public function clean()
	{
		\Session::flush();
		$str = "Anda berhasil keluar";
		$url = "home";
		return view("status.success",compact("str"),compact('url'));
	}

	public function profil()
	{
		return view('profil');
	}
}
