<?php

    $query_db = array(
        "0"  => 'SELECT USR.*, SYS.nome AS sistema, SYS.path AS path_system, SYS.db_user, SYS.db_pass, SYS.db_serv, SYS.db_base,  CLI.nome AS cliente, CLI.path AS path_client 
            FROM tb_usuario AS USR 
            INNER JOIN tb_sistemas AS SYS
            INNER JOIN tb_clientes AS CLI
            WHERE USR.id_system = SYS.id
            AND USR.id_client = CLI.id
            AND (user = "x00" OR email = "x00") 
            AND hash = "x01";',

    );

?>