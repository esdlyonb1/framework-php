<?php

namespace Core\Debugging;

class Debugger
{


    private $error;

    private $exception;


    public function errorHandler($num, $message, $file, $line)
    {
        $this->error = [$num, $message, $file, $line];

        $this->renderDebugger('error',$this->error);
    }

    public function exceptionHandler(\Throwable $exception)
    {
        $this->exception = $exception;
        $this->renderDebugger('exception',$this->exception);
    }




    public function run()
    {
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);

        set_error_handler([$this, "errorHandler"]);
        set_exception_handler([$this, "exceptionHandler"]);


    }

    public function profilerBar()
    {
        ob_start();
        require_once "template/profilerbar.html.php";
        echo ob_get_clean();
    }

    public function renderDebugger(string $template, $data)

    {
        switch($template):
            case "error": $error = $data;
            break;
            case "exception": $exception = $data;
            break;
        endswitch;

        ob_start();


        require_once "template/error.html.php";

        $content = ob_get_clean();

        $pageTitle = "Debugger";

        ob_start();
        require_once "template/debugger.html.php";
        echo ob_get_clean();

        exit();
    }

}