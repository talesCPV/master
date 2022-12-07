<?php

$query_db = array(
    "0"  => 'SELECT * FROM tb_usuario WHERE (user="x00" OR email="x00") AND hash="x01";',
    "1"  => 'SELECT * FROM tb_usuario WHERE(SELECT U.class FROM tb_usuario AS U WHERE hash="x00") IN (10);',
    "2"  => 'INSERT INTO tb_usuario (id,user,hash,class,nome,email,cel) VALUES (x00,"x01","x02","x03","x04","x05","x06")
       ON DUPLICATE KEY UPDATE user="x01", hash="x02", class="x03", nome="x04", email="x05", cel="x06";',
    "3"  => 'DELETE FROM tb_usuario WHERE id="x00";',
       
 );

?>