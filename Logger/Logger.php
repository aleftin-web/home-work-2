<?php
namespace Logger;

use Exception;

class Logger
{
    private static $pathToLog;
    private static $classLoader = NULL;
    private static $listLogLevels = ["TRACE", "DEBUG", "INFO", "WARN", "ERROR", "FATAL"];
    private static $defaulLevel = "INFO";

    private function __construct(){
    }

    public static function getInstance(String $pathToLog)
    {
        if (!self::verifyPathToLog($pathToLog)) {
            throw new Exception("Ошибка открытия файла! Проверьте путь к файлу");
        }
        if (self::$classLoader === null) {
            self::$classLoader = new self();
            self::$pathToLog = $pathToLog;
        }

        return self::$classLoader;
    }

    private static function verifyPathToLog($pathToLog)
    {
        $file = fopen($pathToLog, "a+");
        if ($file) {
            fclose($file);
            return true;
        } else {
            return false;
        }
    }

    public static function createLog(String $textLog, String $logLevel = "INFO")
    {
        $timeNow = date("d-m-Y H:m:s");
        $file = fopen(self::$pathToLog, "a+");
        $realLoglevel = self::$defaulLevel;
        foreach (self::$listLogLevels as $logFromList) {
            if ($logFromList == $logLevel) {
                $realLoglevel = $logLevel;
                break;
            }
        }
        fwrite($file, $realLoglevel . " -- " . $timeNow . " -- " . $textLog . "\n");
        fclose($file);
    }
}
