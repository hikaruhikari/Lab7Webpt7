<?php 
 
namespace App\Cells; 
 
use CodeIgniter\Database\Config;

class DaftarKategori 
{ 
    // Tidak perlu extends Cell, cukup buat method render biasa
    public function render(): string 
    { 
        $db = Config::connect();
        $kategori = $db->table('kategori')->get()->getResultArray();
         
        return view('components/daftar_kategori', ['kategori' => $kategori]); 
    } 
}