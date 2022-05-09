<?php
class Mahasiswa extends CI_Controller
{
    public function index()
    {
        $this->load->view('view-form-mahasiswa');
    }

    public function cetak()
    {
        $data = [
            'nama' => $this->input->post('nama'),
            'nim' => $this->input->post('nim'),
            'ttl' => $this->input->post('ttl'),
            'alamat' => $this->input->post('alamat'),
            'kelamin' => $this->input->post('kelamin'),
            'agama' => $this->input->post('agama')
        ];
        $this->load->view('view-data-mahasiswa', $data);
    }
}