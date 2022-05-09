<?php
class Contoh1 extends CI_Controller{
    public function index()
    {
        //echo "<h1>Perkenalkan</h1>";
        //echo "Nama saya irawan orang depok nih";
        $this->load->view('welcome_message2');

    }
}