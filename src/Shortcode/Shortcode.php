<?php
/**
 * Created by PhpStorm.
 * User: DesktopHome
 * Date: 2018-06-29
 * Time: 19:41
 */

namespace ShortcodeSystem\Shortcode;


interface Shortcode
{
    /**
     * Return shortcode content [shortcode] content [/shortcode]
     *
     * @return string
     */
    public function content() : string;

    /**
     * Return unique shortcode ID
     *
     * @return string
     */
    public function ID(): string;

    /**
     * Return value from attribute
     *
     * @param string $kay
     * @param string|null $default
     * @return mixed
     */
    public function attribute(string $kay, string $default = null);
}