<?php

namespace App\Http\Controllers;

use App\Models\Password;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $email = Auth::user()->email;

        $passwordModel = new Password(['email' => $email, 'password' => $password]);
        $passwordModel->save();

        return redirect()->route('generated-page')->with('success', 'Пароль успешно сохранен');
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

    function savedPasswords()
    {
        $email = Auth::user()->email;; // Получаем email из запроса
        $passwords = Password::where('email', $email)->get(); // Ищем пароли для данного email

        return view('passwords.saved_passwords', compact('passwords'));
    }

    public function deletePassword($id)
    {
        $password = Password::find($id);

        if ($password) {
            $password->delete();
            return redirect()->back()->with('success', 'Password deleted successfully.');
        }

        return redirect()->back()->with('error', 'Password not found.');
    }
}
