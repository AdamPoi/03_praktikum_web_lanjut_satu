<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
  public function index(int $id)
  {
    return "Ini merupakan halaman artikel dengan id $id";
  }
}
