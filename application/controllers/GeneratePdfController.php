<?php
defined('BASEPATH') or exit('No direct script access allowed');

class GeneratePdfController extends CI_Controller
{

    function index()
    {
        $this->load->library('pdf');
        $table = $this->load->view('kasir/laporan', [], true);
        $this->pdf->createPDF($table, 'mypdf', false);
    }
}
