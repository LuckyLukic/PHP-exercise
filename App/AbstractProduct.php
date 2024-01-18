<?PHP

namespace App;

abstract class AbstractProduct
{

    //possiamo avere un mix di metodi implementati e non. devono essere tutti metodi pubblici o protected, mai private
    public function turnOn()
    {
        echo "turning on Product";
    }

    abstract public function setup();  //possiamo fare override del metodo nel le child classes. 


}