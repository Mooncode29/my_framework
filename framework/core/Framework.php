<?php

namespace framework\core;

class Framework{


    public static function run(){

        self::init();
        self::autoload();
        self::dispatch();

    }

    private static function init(){
        define("DS", DIRECTORY_SEPARATOR);
        define("ROOT", getcwd().DS);
        define("APP_PATH", ROOT. 'application'.DS);
        define("FRRAMEWORK_PATH ", ROOT."framework".DS);
        define("PUBLIC_PATH", ROOT."public".DS);
        define("CONFIG_PATH", APP_PATH.config);
    }
}