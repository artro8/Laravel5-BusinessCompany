<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use App\Offer;
use Session;
use Auth;

class PagesController extends Controller {
    
    public function __construct() {
        $this->middleware('auth', ['only' => ['create', 'store', 'edit', 'delete']]);
    }


    public function index() {
        return view('pages.index');
    }
    
    public function about() {
        return view('pages.about');
    }
    
    public function offers() {
        $offers = Offer::latest()->get();
        
        return view('pages.offers')->with('offers', $offers);
    }
    
    public function contact() {
        return view('pages.contact');
    }
    
    public function show($id) {
        $offer = Offer::findOrFail($id);
        
        return view('pages.offer')->with('offer', $offer);
    }
    
    public function create() {
        
        return view('pages.create');
    }
    
    public function store(Request $request) {
        $input = $request->all();
        
        Offer::create($input);
        Session::flash('create', 'Twój artykuł został zapisany!');
        return redirect('admin/offers');
    }
    
    public function edit($id) {
        $offer = Offer::findOrFail($id);
        
        return view('pages.edit')->with('offer', $offer);
    }
    
    public function update($id, Request $request)
    {
        $input = Offer::find($id);
        
        $input->title = $request->title;
        $input->description = $request->description;
        
        $input->save();
        
        return redirect('admin/offers');
    }
    
    public function delete($id) {
        $offer = Offer::findOrFail($id);
        
        $offer->delete();
        Session::flash('delete', 'Twój artykuł został usunięty!');
        return redirect('admin/offers');
    }
    
    public function adminDashboard() {
        if(Auth::check() && Auth::user()) {
            return view('pages.dashboard');
        }
        
        return redirect('/');
    }
    
    public function adminOffers() {
        if(Auth::check() && Auth::user()) {
            $offers = Offer::latest()->get();
            return view('pages.admin_offers')->with('offers', $offers);
        }
        return redirect('/');
    }
    
    public function adminProfile() {
        if(Auth::check() && Auth::user()) {
            return view('pages.profile');
        }
        return redirect('/');
    }
    
    public function adminLogout() {
        Auth::logout();
        return view('pages.index');
    }
}
