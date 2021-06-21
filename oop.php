<?php
include('processor.php');
use Processor\Processor;
use Screen\Screen;

trait SamsungSoftware
{
    public function software()
    {
        return "Android";
    }
}
interface Ringtone
{
    public function ringType();
}
class Mobile extends Processor implements Ringtone{
    public $mobileName;
    public $price;
    use SamsungSoftware;
    public function setMobile($mobileName,$price){
        $this->mobileName=$mobileName;
        $this->price=$price;
    }
    public function info() :string{
        return "OCTA CORE";
    }
    public function getMobileInfo(){
        echo $this->getScreenInfo() . "<br> Mobile Name is : " .$this->mobileName . " <br> Price is : " . $this->price;
    }
    public function ringType()
    {
        return "Ringing Bell";
    }
}


$scr = new Screen();
$scr->setScreen('AMOLED');
$samsung=new Mobile("OCTA");
$samsung->setMobile("Samsung",10000);
$samsung->getMobileInfo();
echo "<br>" . $samsung->info();
echo "<br>" . $samsung->ringType();
echo "<br>" . $samsung->software();