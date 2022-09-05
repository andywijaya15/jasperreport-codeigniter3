<?php
defined('BASEPATH') or exit('No direct script access allowed');

/*
Author  : Andy Wijaya
*/

use JasperPHP\JasperPHP;


class Model_JasperReport extends CI_Controller
{

    public function pdfJasperHelloWorld()
    {
        $input = 'report/examples/hello_world.jasper';
        $output =  'report/examples';
        $options = [
            'format' => ['pdf']
        ];

        $jasper = new JasperPHP();

        $jasper->process(
            $input,
            $output,
            $options
        )->execute();
        $filepath = $output . '.pdf';
        if (!file_exists($filepath)) {
            throw new Exception("File $filepath does not exist");
        }
        if (!is_readable($filepath)) {
            throw new Exception("File $filepath is not readable");
        }
        // $outputnameinbrowser = $options['namafile'] . '.pdf';
        http_response_code(200);
        header('Content-Length: ' . filesize($filepath));
        header("Content-Type: application/pdf");
        // header('Content-Disposition: attachment; filename="' . $outputnameinbrowser . '"');
        header('Content-Disposition: inline');
        readfile($filepath);

        exit;
    }
}
