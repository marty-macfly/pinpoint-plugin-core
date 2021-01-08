<?php
/*
 * User: eeliu
 * Date: 11/5/20
 * Time: 3:05 PM
 */

namespace pinpoint\PluginsCore\Sys\Memcached;


use pinpoint\PluginsCore\Common\Candy;

class MemAddServerPlugin extends Candy
{

    function onBefore()
    {

        $host = $this->args[0];
        $port = $this->args[1];
        pinpoint_add_clue(PP_SERVER_TYPE,PP_MEMCACHED);
        pinpoint_add_clue(PP_DESTINATION,"$host:$port");
    }

    function onEnd(&$ret)
    {
        // TODO: Implement onEnd() method.
    }
}
