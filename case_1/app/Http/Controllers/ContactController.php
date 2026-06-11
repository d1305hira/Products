<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Content;
use App\Http\Requests\ContactRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactCompleteMail;
use App\Mail\ContactAdminMail;

class ContactController extends Controller
{
    public function contact()
    {
        $contents = Content::all();

        return view('contact',compact('contents'));
    }

    public function confirm(ContactRequest $request)
    {
        if($request->method() ==='GET'){
            return redirect()->route('contact');
        }

        $email = $request->email_domain . '@' . $request->email_tld;
        $request->merge(['email'=>$email]);

        $tel = $request->tel1. $request->tel2 . $request->tel3;
        $request->merge(['tel' =>$tel]);

        $contents = [];
        $content_ids = [];

            if($request->filled('content_id')){
                $content_ids = $request->content_id;
                $contents = Content::whereIn('id',$content_ids)->pluck('content')->toArray();
            }

            if($request->filled('other_content')){
                $contents[] = $request->other_content;
            }

        $contact = (object)[
            'name'=> $request->name,
            'email'=>$email,
            'tel1'=>$request->tel1,
            'tel2'=>$request->tel2,
            'tel3'=>$request->tel3,
            'tel' => $request->tel,
            'contents' => $contents,
            'content_ids' => $content_ids,
            'other_content' => $request->other_content,
        ];

        return view('confirm',compact('contact'));
    }

    public function store(ContactRequest $request)
    {
        \Log::info('STORE CALLED', $request->all());

        $contact = Contact::create([
            'name' => $request->name,
            'email' =>$request->email,
            'tel' => $request->tel,
            'other_content' =>$request->other_content,
        ]);

        if($request->filled('content_id')){
            $contact->contents()->sync($request->content_id);
        }

        // 問い合わせ者へ
        Mail::to($contact->email)->queue(new ContactCompleteMail($contact));

        // 管理者へ
        Mail::to('admin@example.com')->queue(new ContactAdminMail($contact));

        return view('thanks');
    }
}
