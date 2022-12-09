<?php

    $query_db = array(
        "0"  => 'SELECT * FROM tb_usuario  WHERE (user="x00" OR email="x00") AND hash="x01";',
        "1"  => 'SELECT * FROM tb_clientes WHERE id=x00 ;',    
        "2"  => 'SELECT * FROM tb_sistemas WHERE id=x00 ;',
        
    );

?>