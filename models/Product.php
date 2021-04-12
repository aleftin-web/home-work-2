<?php

namespace models;
use Exception;

class Product{
  
    public function getAll()
    {
        $data = [];
        $columnName = [];
        $filePath = "dbase/products.csv";
        if (!file_exists($filePath)) {
            throw new Exception("нет файла с данными!");
        }
        if (($csvFile = fopen($filePath, "r")) !== FALSE) {
            if (($row = fgetcsv($csvFile, 0, ";")) !== FALSE) {
                $columnName = $row;
            }
            while (($row = fgetcsv($csvFile, 0, ";")) !== FALSE && $row[0] !== NULL) {
                $rowInData = [];
                for ($i = 0; $i < count($row); $i++) {
                    $rowInData[$columnName[$i]] = $row[$i];
                }
                $data[] = $rowInData;
            }
            fclose($csvFile);
        }
        return $data;
    }
}

