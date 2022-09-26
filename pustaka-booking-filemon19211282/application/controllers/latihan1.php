<?php
class Latihan1 extends CI_Controller
{
    public function index()
    {
        echo "<h1>Selamat datang di halaman Web Programming Felix :D</h1>";
        echo "<h2>Ini adalah Tugas 'Contoh 1' di Pertemuan 2 Matkul Web Programming 2 UwU >_<";
        //$this->load->view('view-latihan1');
    }

    public function penjumlahan($n1, $n2)
    {
        $this->load->model('model_latihan1');

        $data['nilai1'] = $n1;
        $data['nilai2'] = $n2;
        $data['hasil'] = $this->model_latihan1->jumlah($n1, $n2);

        $this->load->view('view-latihan', $data);
    }
}