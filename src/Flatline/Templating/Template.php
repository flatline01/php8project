<?php
namespace Flatline\Templating;

class Template
{
    protected $path ="/views";

    public function __construct(){
        
    }

    public function settings($arr_settings){
        $this->$path = $arr_settings['path'];
    }
    public function get_path(){
        return $this->$path;
    }

    public function header(){
        return <<<HEADER
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
        </head>
        <body>
            <header>
                <div class="container">
                </div>
            </header>
            <main>
            <h1>Template stufffff</h1>
        HEADER;
    }
    public function footer(){
        return <<<FOOTER
            </main>
            <footer>
            </footer>
        </body>
        </html>
        FOOTER;
    }
    
}
