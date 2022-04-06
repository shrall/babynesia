<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Faktur;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Models\Webconfig;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm()
    {
        //get color webconfig
        $bg_color = Webconfig::where('name', 'bg_color')->get()->last();
        $text_color = Webconfig::where('name', 'text_color')->get()->last();
        $button_color = Webconfig::where('name', 'button_color')->get()->last();
        $color = [$bg_color->content, $text_color->content, $button_color->content];

        return view('auth.login', compact('color'));
    }
    public function login(Request $request)
    {
        $user = User::where('email', $request->email)
            ->where('password', md5($request->password))
            ->first();
        if ($user) {
            Auth::login($user);
        } else {
            return redirect()->route('login');
        }
        if ($user->user_status_id == 1 || $user->user_status_id == 2) {
            //disini nambah hitcount
            return redirect()->route('user.landingpage');
        } else {
            $this->checkOrders();
            return redirect()->route('adminpage.dashboard');
        }
    }

    public function checkOrders()
    {
        $webconfigs = Webconfig::all();

        $fakturs = Faktur::where('status', '1')->get();
        foreach ($fakturs as $faktur) {
            if ((strtotime($faktur->tanggal . ' +' . $webconfigs[30]->content . ' hour') - strtotime(\Carbon\Carbon::now())) < 0) {
                $faktur->update([
                    'status' => '5'
                ]);
            }
        }
    }
}
