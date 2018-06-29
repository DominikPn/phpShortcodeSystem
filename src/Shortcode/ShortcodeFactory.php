<?php
/**
 * Created by PhpStorm.
 * User: DesktopHome
 * Date: 2018-06-29
 * Time: 20:04
 */

namespace ShortcodeSystem\Shortcode;


interface ShortcodeFactory
{
    /**
     * Build shortCode
     *
     * @return Shortcode
     */
    public function build(): Shortcode;
}