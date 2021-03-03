<?php

/*# Verificação de controle por rota
/## Caso a view não seja encontrada retorna para index por padrão
*/
if(isset($_GET['view'])){
    //para evitar erro por despadronização de case sensitive nas rotas utilizarei a função php strTolower
    if(file_exists('core/controles/'.strtolower($_GET['view'].'Controler.php'))){
        /*a variavel "views" sendo varida incluirá o contrle equivalente 
        (exemplo: ?view=autores => /autoresControler.php será apresentado)
        */
        include('core/controles/'.strtolower($_GET['view'].'Controler.php'));
    }else{
         //Rota padrão para erro de rota
    include('core/controles/erroControler.php');
    }
        
    

}else{
    //Rota padrão
    include('core/controles/indexControler.php');
} 