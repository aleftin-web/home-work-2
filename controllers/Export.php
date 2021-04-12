<?php
namespace controllers;
use \Logger as Logger;

class Export extends Controller{
     public function __construct()
    {
        parent::__construct();
    }
               
    public function csvExport(){
        $logger = new Logger();
        $exportCSV = 'data_export.csv'; 
        header("Content-Type: application/download");
        header('Content-Disposition: inline;filename="'.$exportCSV.'"');
        header('Cache-Control: max-age=0');
        header('Content-Transfer-Encoding: binary');
        $this->loadModel("product", "Product");
        $products = $this->product->getAll();
        $titles = ["name","price","count"];
        ob_start();
        $df = fopen("php://output", 'w');
        fputcsv($df, $titles, ';');
        foreach ($products as $row) {
        fputcsv($df, $row, ';');
        }
        fclose($df);
        echo ob_get_clean();
        $logger->info('csvExport прошел успешно', $exportCSV, '0');
        die;
    }   
    
    public function jsonExport(){
        $logger = new Logger();
        $exportJSON = 'data_export.json';
        header("Content-Type: application/download");
        header('Content-Disposition: inline;filename="'.$exportJSON.'"');
        header('Cache-Control: max-age=0');
        header('Content-Transfer-Encoding: binary');
        $this->loadModel("product", "Product");
        $products = $this->product->getAll();
        echo json_encode($products);
        $logger->info('jsonExport прошел успешно', $exportJSON, '0');
        die;
    }  
    
    function xmlExport() { 
        $logger = new Logger();
        $this->loadModel("product", "Product");
        $products = $this->product->getAll();
        $xml = new \DomDocument('1.0', 'utf-8');
        $main_title = $xml->appendChild($xml->createElement('title'));
        $main_title->appendChild($xml->createTextNode('Export XML'));
        $products_list = $xml->appendChild($xml->createElement('products'));
        foreach ($products as $item) {
            $product = $products_list->appendChild($xml->createElement('product'));
            foreach ($item as $key=>$val) {
                $product->appendChild($xml->createElement($key, $val));
            }
        }
        $xml->formatOutput = true;
        $xml->save('data_export.xml');
        $exportXml = 'data_export.xml';            
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="'.basename($exportXml).'"');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($exportXml));
        readfile($exportXml);
        $logger->info('xmlExport прошел успешно', $exportXml, '0');
        die;
    }
    
    
    
}   