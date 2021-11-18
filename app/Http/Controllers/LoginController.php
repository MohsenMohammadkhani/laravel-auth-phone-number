<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function showFormEnterMobileNumber()
    {
        return view('login');
    }

    public function enterMobileNumber(Request $request)
    {
        $mobile = $request->input('mobile');
        if (!$this->checkUserExists($mobile)) {
            $this->registerNewUser($mobile);
        }
        $this->setSmsCodeForLoginUser($mobile);
        return redirect("/check-sms-code?mobile=$mobile");
    }

    private function checkUserExists($mobile)
    {
        $user = User::where('usr_mobile', $mobile)->first();
        return $user == null ? false : true;
    }

    private function registerNewUser($mobile)
    {
        $newUser = User::create([
            'usr_mobile' => $mobile,
        ]);
        return $newUser->usr_id;
    }

    private function setSmsCodeForLoginUser($mobile)
    {
        $user = User::where('usr_mobile', $mobile)->first();
        $user->usr_sms_code_login = rand(1000, 10000);
        $user->save();
    }

    public function showCheckSmsCode()
    {
        return view('enterSmsCode');
    }

    public function checkSmsCode(Request $request)
    {
        $mobile = $request->query('mobile');
        $smsCode = $request->input('sms-code');
        $user = User::where('usr_mobile', $mobile)->first();
        if ($smsCode == $user->usr_sms_code_login) {
            /*
            در اینجا  کاربر با موفقیت لاگین کرده
            چطوری باید به سیستم Auth لاراول گفت که کاربر اینجا لاگین هستش
             */
            return redirect("/user/profile");
        }
        return view('enterSmsCode', ['message' => 'کد وارد شده اشتباه است.']);
    }

    public function profile()
    {
        return view('profile');

    }

}
