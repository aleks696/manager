<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PasswordController extends Controller
{
     public function generate_passwords()
     {
        return view('passwords.generate_passwords');
    }

    public function generatePassword(Request $request)
    {
        $passwordLength = (int) $request->input('passwordLength');
//        $randomPassword = $this->generateRandomPassword($passwordLength);
        $charset = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
        $randomPassword = "";
        for ($i = 0; $i < $passwordLength; $i++) {
            $randomIndex = random_int(0, strlen($charset) - 1);
            $randomPassword .= $charset[$randomIndex];
        }
        return view('passwords.generated', compact('randomPassword'));
    }

    public function savePassword(Request $request)
    {
        $password = $request->input('password');
        $passwordModel = new Password(['password' => $password]);
        $passwordModel->save();

        return response()->json(['message' => 'Пароль успешно сохранен']);
    }

//    public function generateRandomPassword($length)
//    {
//        $charset = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
//        $password = "";
//        for ($i = 0; $i < $length; $i++) {
//            $randomIndex = random_int(0, strlen($charset) - 1);
//            $password .= $charset[$randomIndex];
//        }
//        return $password;
//    }

}
