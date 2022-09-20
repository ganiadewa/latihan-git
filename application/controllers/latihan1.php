<?php
class Latihan1 extends CI_Controller
{
    public function index()
    {
        echo "<h1>Selamat Datang.........<br></h1>
        <h2>selamat belajar Web Programming";
    }
    public function penjumlahan($n1, $n2)
    {
        $this->load->model('Model_latihan1');
        $data['nilai1'] = $n1;
        $data['nilai2'] = $n2;
        $data['hasil'] = $this->Model_latihan1->jumlah($n1, $n2);

        $this->load->view('view-latihan', $data);
    }
}