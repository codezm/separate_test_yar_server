<?php
/**
 *      [CodeZm!] Author CodeZm[codezm@163.com].
 *
 *      Yar_Server.php
 *      $Id: yar.php 2017-03-20 15:31:19 codezm $
 */

class API {
    /**
     * the doc info will be generated automatically into service info page.
     * @params 
     * @return
     */
    public function get($parameter, $option = "foo") {
        return array(
            'parameter' => $parameter, 
            'option' => $option
        );
    }

    protected function client_can_not_see() {
    }
}

file_put_contents('Yar_client_request_header.dump', var_export($_SERVER, true) . "\n" . var_export(@$_POST, true) . "\n" . var_export(@$_GET, true), FILE_APPEND);

file_put_contents('Yar_client_request_post_data.dump', file_get_contents('php://input'), FILE_APPEND);

$service = new Yar_Server(new API());
$service->handle();
