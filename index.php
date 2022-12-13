<?php
class avtoSalon
{
    private string $name;
    
    public function __construct($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
}
class avtoMarka
{
    private string $nameBrand;
    private int $maxCountPassanger;
    private float $price;
    private int $countInStock;
    private bool $availability;

    public function __construct()
    {

    }
    public function getNameBrand()
    {
        return $this->nameBrand;
    }
    public function setNameBrand($nameBrand)
    {
        $this->nameBrand = $nameBrand;
    }
    public function getMaxCountPassanger()
    {
        return $this->maxCountPassanger;
    }
    public function setMaxCountPassanger($maxCountPassanger)
    {
        $this->maxCountPassanger = $maxCountPassanger;
    }
    public function getPrice()
    {
        return $this->price;
    }
    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function getCountInStock()
    {
        return $this->countInStock;
    }
    public function setCountInStock($countInStock)
    {
        $this -> countInStock = $countInStock;
    }
    public function getAvailability()
    {
        return $this-> availability;
    }
    public function setAvailability($availability)
    {
        $this -> availability = $availability;
    }
}
class request
{
    private string $nameBuyer;
    private string $surnameBuyer;
    private string $middlenameBuyer;
    private int $phoneBuyer;

    public function __construct()
    {

    }

    public function getNameBuyer()
    {
        return $this-> nameBuyer;
    }
    public function setNameBuyer($nameBuyer)
    {
        $this->nameBuyer = $nameBuyer;
    }
    public function getSurnameBuyer()
    {
        return $this->surnameBuyer;
    }
    public function setSurnameBuyer($surnameBuyer)
    {
        $this->surnameBuyer = $surnameBuyer;
    }
    public function getMiddlenameBuyer()
    {
        return $this->middlenameBuyer;
    }
    public function setMiddlenameBuyer($middlenameBuyer)
    {
        $this->middlenameBuyer = $middlenameBuyer;
    }
    public function getPhoneBuyer()
    {
        return $this->phoneBuyer;
    }
    public function setPhoneBuyer($phoneBuyer)
    {
        $this->phoneBuyer = $phoneBuyer;
    }
}

$avtoSalonObj = new AvtoSalon ("Shapaloq!");

$porsh = new avtoMarka();
$BMV =  new avtoMarka();

$request1 = new request();
$request2 = new request();
$request3 = new request();

$porsh->setNameBrand('Porsh');
$BMV->setNameBrand('BMV');

$request1->setNameBuyer('Ivan');
$request1->setSurnameBuyer('Ivanov');
$request1->setMiddlenameBuyer('Ivanovich');

$request2->setNameBuyer('Hoshim');
$request2->setSurnameBuyer('Yonusov');
$request2->setMiddlenameBuyer('Salimovich');

$request3->setNameBuyer('SHapaloq');
$request3->setSurnameBuyer('Shapaloqov');
$request3->setMiddlenameBuyer('Shapaloqovich');

echo $avtoSalonObj->getName() . "\n";

echo $porsh->getNameBrand() . "\n";
echo $BMV->getNameBrand() . "\n";

echo $request1->getNameBuyer() . "\n";
echo $request2->getNameBuyer() . "\n";
echo $request3->getNameBuyer() . "\n";