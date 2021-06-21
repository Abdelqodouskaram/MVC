<?php 
namespace Processor;
include('screen.php');
use Screen\Screen;

abstract class Processor extends Screen
{
    public $name;
    public function __construct($name)
    {
        $this->name = $name;
    }
    protected abstract function info(): string;
}
