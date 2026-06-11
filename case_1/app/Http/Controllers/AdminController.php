<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class AdminController extends Controller
{

    public function showLoginForm()
    {
        return view('admin.login');
    }

    public function showList()
    {
        $contacts = Contact::with('contents')->get();

        return view('admin.contactslist',compact('contacts'));
    }

    public function exportcsv()
    {
        $contacts=Contact::with('contents')->get();

        $csvHeader= [
            '問い合わせ日',
            '名前',
            'メールアドレス',
            '電話番号',
            '問い合わせ内容',
            'その他詳細',
        ];

        
    }
}
