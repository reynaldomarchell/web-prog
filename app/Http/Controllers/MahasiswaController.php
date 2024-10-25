<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profil as ProfilModel;
use App\Models\Post as PostModel;
use App\Models\Comment as CommentModel;

class MahasiswaController extends Controller
{
    public function index($nilai){
        $arrMahasiswa = ['Risa Lestari', 'Rudi Hermawan','Bambang Kusumo','Lisa Permata'];
        return view('universitas.mahasiswa', ['mahasiswa'=>$arrMahasiswa, 'jurusan'=>'Teknik Informatika'])
        ->with('nilai',$nilai);
    }

    public function tampil(){
        $data = ProfilModel::all();
        
        return $data;
    }

    public function view(){
        $posts = PostModel::with('comments')->paginate(5);
        return view('post.index', compact('posts'));
    }
}

