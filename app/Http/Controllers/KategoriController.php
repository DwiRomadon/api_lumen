<?php

namespace App\Http\Controllers;
use App\Models\KategoriBarang;
use App\Helpers\Response;

class KategoriController extends Controller{
    
    public function index() {
        $kategori = KategoriBarang::all();
        return $this->successWithData($kategori);
    }
}