<?php
namespace ViewEnginePHP\APP;

class Template{
    public $variables = [];
    public $path = "";

    public function assign($path, $data){
        $this->variables = $data;
        $this->location = $path;
        // print_r($this->variables);
    }

    public function render(){
        // full path
        // echo $this->location;
        if(file_exists($this->location)){
            $contents = file_get_contents($this->location);

            foreach($this->variables as $key => $value){
                $contents = preg_replace('/\[' .$key. '\]/', $value, $contents);
            }
            eval('?>' .$contents. '<?php');
            // echo $contents;
        }
    }
}


?>