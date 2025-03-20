<?php

namespace App\Http\Controllers;

use App\Mail\PromoMail;
use App\Models\Subscriber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Inertia\Inertia;

class PromoController extends Controller
{
    public function index() {
        $subscribers = Subscriber::paginate(5);
        return Inertia::render('Admin/Promo/Index', ['subscribers' => $subscribers]);
    }

    public function destroy(string $id) {
        $subscriber = Subscriber::findOrFail($id);
        $subscriber->delete();

        return redirect()->route('admin.promo');
    }

    public function blastPromo(Request $request){
        
        $request->validate([
            'title' => 'required|string',
            'content' => 'required|string',
        ]);

        $subscribers = Subscriber::pluck('email')->toArray();
        
        foreach ($subscribers as $email) {
            Mail::to($email)->send(new PromoMail($request->title, $request->content));
        }

        return redirect()->route('admin.promo');
    }
}
