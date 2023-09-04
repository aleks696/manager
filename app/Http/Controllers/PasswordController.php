<?php

namespace App\Http\Controllers;

use App\Models\Password;
use Illuminate\Http\Request;

class PasswordController extends Controller
{

    public function generatePasswordView()
    {
        return view('passwords.generate_passwords');
    }

    public function generatePassword(Request $request)
    {
        $passwordLength = (int) $request->input('passwordLength');
        $randomPassword = $this->generateRandomPassword($passwordLength);

        return view('passwords.generate_passwords', compact('randomPassword'));
    }

    public function generatedPage()
    {
        return view('passwords.generated');
    }

    public function savePassword(Request $request)
    {
        $password = $request->input('password');
        $passwordModel = new Password(['password' => $password]);
        $passwordModel->save();

        return redirect()->route('generate-password-view')->with('success', 'Пароль успешно сохранен');
    }

    private function generateRandomPassword($length)
    {
        $charset = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_";
        $password = "";

        for ($i = 0; $i < $length; $i++) {
            $randomIndex = random_int(0, strlen($charset) - 1);
            $password .= $charset[$randomIndex];
        }

        return $password;
    }

    function saved_passwords(){
        return view('passwords.saved_passwords');
    }

}
