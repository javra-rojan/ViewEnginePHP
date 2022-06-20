<?php

namespace ViewEnginePHP\APP;

include_once __DIR__ .DIRECTORY_SEPARATOR. 'Template.php';

    $view = new Template();
    $view->assign('view.php', [
        'name' => 'Rojan',
        'position' => 'intern'
    ]);        
    $view->render();

?>