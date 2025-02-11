<?php

namespace Meklis\Network\Console\Helpers;

class HuaweiMA extends DefaultHelper
{
    protected $prompt = '^[^{}].*?[>#]$';
    protected $userPrompt = 'ame:';
    protected $passwordPrompt = 'ord:';
    protected $afterLoginCommands = [
        "enable",
        "scroll\r\n\r\n"
    ];
    protected $beforeLogoutCommands = [
        ['command'=>'quit','no_wait'=>true,'usleep'=>1000],
        ['command'=>'y','no_wait'=>true],
    ];
    protected $eol = "\r\n";
    protected $doubleLoginPrompt = false;
    protected $enableMagicControl = false;
    protected $windowSize = [
        1024,
        1024
    ];
}