<?php
/**
 * Created by PhpStorm.
 * User: DesktopHome
 * Date: 2018-07-02
 * Time: 20:44
 */

namespace ShortcodeSystem\Observer;


use ShortcodeSystem\Shortcode\Shortcode;

class NullObserver implements Observer
{
    public function handle(Shortcode $shortcode): string
    {
        return '';
    }
}