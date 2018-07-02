<?php
/**
 * Created by PhpStorm.
 * User: DesktopHome
 * Date: 2018-07-02
 * Time: 20:39
 */

namespace ShortcodeSystem\Registry;


use ShortcodeSystem\Observer\NullObserver;
use ShortcodeSystem\Observer\Observer;

class RegistryImpl implements Registry
{
    protected $observers = [];

    public function register(Observer $observer, string $ID)
    {
        $this->observers[$ID] = $observer;
    }

    public function findObserverByShortcodeID(string $ID): Observer
    {
        if( isset($this->observers[$ID]) ) return $this->observers[$ID];
        return new NullObserver();
    }

}