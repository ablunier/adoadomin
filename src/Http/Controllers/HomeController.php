<?php
namespace ANavallaSuiza\Adoadomin\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        return view('adoadomin::pages.index');
    }
}
