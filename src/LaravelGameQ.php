<?php

namespace IchBin\GameQ;

class LaravelGameQ
{
public function info($type, $ip, $port)
{
    $GameQ = new \GameQ\GameQ();
    $GameQ->addServer([
        'type' => $type,
        'host' => $ip . ':' . $port,
    ]);
    $GameQ->addFilter('secondstohuman');
    $results = $GameQ->process();
    foreach ($results as $id => $var) {
        $players = $var['players'];
        $players = collect($var['players'])->sortBy('score')->reverse()->toArray();
        unset(
            $var['players'],
        );
        $var['ip'] = $ip;
        return array([
            'id' => $id,
            'var' => $var,
            'players' => $players,
    ]);

    }
}
}
