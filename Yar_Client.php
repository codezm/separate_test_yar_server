<?php

/**
 *      [CodeZm!] Author CodeZm[codezm@163.com].
 *
 *      Yar_client test
 *      $Id: Yar_client.php 2017-04-20 10:45:36 codezm $
 */

$client = new Yar_Client('http://www.local7.com/separate_test_yar_server/Yar_server.php');

echo '<pre>'; var_dump($client->get('codezm')); echo '</pre>'; die();;
