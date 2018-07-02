<?php
/**
 * Created by PhpStorm.
 * User: DesktopHome
 * Date: 2018-06-29
 * Time: 20:11
 */

namespace ShortcodeSystem\Registry;


use ShortcodeSystem\Observer\Observer;
use ShortcodeSystem\Shortcode\Shortcode;

interface Registry
{
    /**
     * Method register observer for concrete shortcode ID
     *
     * We can register multiple observers for the same ID
     *
     * @param Observer $observer
     * @param string $ID
     * @return mixed
     */
    public function register(Observer $observer, string $ID);

    /**
     * Return observer for concrete shortcode ID
     *
     * @param string $ID
     * @return array
     */
    public function findObserverByShortcodeID(string $ID): array;

    /**
     * Call handle method on assigned observers and return data to insert into text
     *
     * @param Shortcode $shortcode
     * @return string
     */
    public function notifyObservers(Shortcode $shortcode): string;
}