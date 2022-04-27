<?php
defined('BASEPATH') or exit('No direct script access allowed');

require_once(dirname(__FILE__) . '/dompdf/autoload.inc.php');

class Pdf
{
    function createPDF($table, $filename = '', $download = false, $paper = 'A4', $orientation = 'portrait')
    {
        $dompdf = new Dompdf\DOMPDF();
        $dompdf->load_html($table);
        $dompdf->set_paper($paper, $orientation);
        $dompdf->render();
        if ($download)
            $dompdf->stream($filename . '.pdf', array('Attachment' => 1));
        else
            $dompdf->stream($filename . '.pdf', array('Attachment' => 0));
    }
}
