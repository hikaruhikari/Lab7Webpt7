<?php 
 
namespace App\Cells; 
 
use App\Models\ArtikelModel; 
 
class ArtikelTerkini 
{ 
    // Hapus extends Cell, biarkan fungsi render tanpa parameter rumit
    public function render(): string 
    { 
        $model = new ArtikelModel(); 
        $artikel = $model->orderBy('id', 'DESC')->limit(5)->findAll(); 
         
        return view('components/artikel_terkini', ['artikel' => $artikel]); 
    } 
}