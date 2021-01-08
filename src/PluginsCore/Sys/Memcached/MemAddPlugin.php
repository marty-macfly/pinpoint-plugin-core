<?php
namespace pinpoint\PluginsCore\Sys\Memcached;


use pinpoint\PluginsCore\Common\Candy;

class MemAddPlugin extends Candy
{

    function onBefore()
    {
        pinpoint_add_clue(PP_SERVER_TYPE,PP_MEMCACHED);
        $key =  $this->args[0];
        $value =  $this->args[1];
        pinpoint_add_clues(PP_PHP_ARGS,"$key:$value");
    }

    function onEnd(&$ret)
    {

    }
}