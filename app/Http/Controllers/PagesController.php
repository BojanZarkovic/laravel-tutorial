<?php

namespace App\Http\Controllers;

use App\Http\Requests\SendContactFormMessage;
use App\Mail\ContactForm;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PagesController extends Controller
{
    public function showHomePage() {
        $posts = Post::with(['user', 'categories'])->latest()->take(3)->get();
        return view('home', ['posts' => $posts]);
    }

    public function showContactPage() {
        return view('contact');
    }

    public function sendContactMessage(SendContactFormMessage $request) {
        $visitorName = $request->visitorName;
        $email = $request->email;
        $message = $request->message;

        Mail::to('bojan@blog.com')->queue(new ContactForm($visitorName, $email, $message));

        return redirect()->back()->with('message', 'Your message was sent successfully. Thank you!');
    }

    public function showAdminPage() {
        $posts = Post::withoutGlobalScopes()->paginate(8);
        return view('admin', ['posts' => $posts]);
    }
}
