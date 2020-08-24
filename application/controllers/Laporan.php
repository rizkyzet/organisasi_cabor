<?php

class Laporan extends CI_Controller
{
    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['title'] = 'Laporan Masa Bakti';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('laporan/index');
        $this->load->view('templates/footer');
    }

    public function cetak()
    {
        $data['tes'] = '';
        $mpdf = new \Mpdf\Mpdf();
        $mpdf->AddPage(
            'L' // L - landscape, P - portrait

        );
        $html = $this->load->view('laporan/laporan_masa_bakti', $data, true);

        $mpdf->WriteHTML($html);
        $mpdf->Output();
    }
}
