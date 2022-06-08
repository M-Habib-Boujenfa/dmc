<?php

namespace App\Service;

use Dompdf\Dompdf;
use Dompdf\Options;
use Symfony\Component\HttpFoundation\Response;

class PdfService
{

    private $domPdf;

    public function __construct()
    {
        $this->domPdf = new Dompdf();
        $this->domPdf->setPaper("A4", "portrait");
        $optionsPdf = new Options();
        $optionsPdf->set('defaultFont', 'Garamond');
        $this->domPdf->setOptions($optionsPdf);
    }

    public function showPdfFile($html)
    {

        $this->domPdf->loadHtml($html);
        $this->domPdf->render();
        $this->domPdf->stream("monPdf.pdf", [
            "Attachement" => 0
        ]);
        return new Response('', 200, [
            'Content-Type' => 'text/pdf',
        ]);
    }


    public function genPdfFile($html)
    {
        $this->domPdf->loadHtml($html);
        $this->domPdf->render();
        return $this->domPdf->output();
    }
}
