<?php
class Pages extends Controller {
    public function __construct() {
    }

    public function index() {
        $data = [
            'title' => 'Beranda'
        ];
        
        $this->view('pages/index', $data);
    }

    public function produkDanLayanan() {
        $data = [
            'title' => 'Produk dan Layanan',
            'description' => 'Global Investama Financial menyediakan akses ke likuiditas terbaik untuk berbagai instrumen keuangan, termasuk Forex, Komoditi, dan Indeks Saham, semua tersedia dalam satu akun margin yang terintegrasi.'
        ];

        $this->view('pages/produk-dan-layanan', $data);
    }
}