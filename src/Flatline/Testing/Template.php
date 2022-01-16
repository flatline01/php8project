<?php
namespace Flatline\Testing;

class Template
{
    public function __construct(){
        
    }

    public function settings(){
        return "ok, this works";
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
