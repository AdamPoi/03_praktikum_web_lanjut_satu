<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
  public function index()
  {
    return view('about-us');
  }


  public function create()
  {
    return view('contact-form');
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    return "<h3>Judul : $request->title</h3>
                  <h3>Deskripsi : $request->description</h3>
";
  }


}