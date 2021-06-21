<?php
namespace Screen;

class Screen
{
    public $screenName;
    const QUALITY = "HD";
    public function setScreen($screenName)
    {
        $this->screenName = $screenName;
    }
    protected function getScreenInfo()
    {
        echo "Screen Name  :" . $this->screenName . " <br> Quality is : " . self::QUALITY . " ";
    }
}