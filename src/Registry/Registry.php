<?php
/**
 * Created by PhpStorm.
 * User: DesktopHome
 * Date: 2018-06-29
 * Time: 20:11
 */

namespace ShortcodeSystem\Registry;


use ShortcodeSystem\Shortcode\Shortcode;

interface Registry
{
    public function register(string $ID);
}