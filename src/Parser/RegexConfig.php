<?php
/**
 * Created by PhpStorm.
 * User: DesktopHome
 * Date: 2018-06-30
 * Time: 15:59
 */

namespace ShortcodeSystem\Parser;


interface RegexConfig
{
    public function openCharacter():string;
    public function closeCharacter():string;
    public function assignCharacter():string;
    public function endCharacter():string;
}