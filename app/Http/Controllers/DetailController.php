<?php

namespace App\Http\Controllers;
use App\TravelPackage;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function index(Request $request, $slug)
    {
        //mengambil data travel package dengan gallery dengan slug, firstorfail berguna untuk mencari data
        //pertama jika tidak ada maka fail, bisa memanggil travel package dengan galeri karena sudah hasmany
        //di model TravelPackage
        $item = TravelPackage::with(['galleries'])->where('slug', $slug)->firstOrFail();
        return view('pages.detail',[
            'item' => $item
        ]);
    }
}
