<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class PageController extends Controller
{
    public function home()
    {
        return view('Home');
    }

    public function products()
    {
        $products=array("Samsung","Sony","Apple","Asus","Dell");
        return view('product')->with('product', $products);
    }

    public function teams()
    {
        $teams=array("Apurba","Talha","Shifat","Dhruba");
        return view('teams')->with('teams', $teams);
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        $contact=array("Apurba : rajveerdebnath27@gmail.com","Talha : talhajubayer135@gmail.com ","Shifat : hasanshifat93@gmail.com","Dhruba : mddhruba69@gmail.com");
        return view('contact')->with('contact', $contact);
        return view('contact');
    }
}
