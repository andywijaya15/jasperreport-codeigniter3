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
        $input = 'hello_world.jasper'; // input path
        $output =  'examples'; // output path
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
        http_response_code(200);
        header('Content-Length: ' . filesize($filepath));
        header("Content-Type: application/pdf");
        header('Content-Disposition: inline');
        readfile($filepath);

        exit;
    }
}
