<?php


// Utilizza i principi di OOP ed Ereditarieta' per creare una struttura a classi come la seguente:


// crea una struttura a classi sfruttando l’ereditarieta' e seguendo queste semplici regole:

//     le classi non devono avere attributi;
//     ogni classe avra' un metodo specifico protected per stampare la sua specializzazione;
//     non puoi realizzare metodi definiti public per stampare il risultato;
//     l’unico metodo public ammesso e' il costrutture.


// Il risultato atteso sara':

// magikarpkarp = new Fish();
// //Nel terminale visaulizzerete:
// Sono un animale Vertebrato
// Sono un animale a Sangue Freddo
// Splash!



// Spero di aver interpretato bene la traccia


// Classe principale  Vertebrates

class Vertebrates {
    public function __construct() {

        $this->describe();
    }

    protected function describe() {
        echo "Sono un animale Vertebrato\n";

    }
}

// Classe Warm-blooded che estende Vertebrates
class WarmBlooded extends Vertebrates {
    protected function describe() {
        parent::describe();

        echo "Sono un animale a Sangue Caldo\n";
    }
}

// Classe Cold-blooded che estende Vertebrates
class ColdBlooded extends Vertebrates {
    protected function describe() {
        parent::describe();

        echo "Sono un animale a Sangue Freddo\n";
    }
}

// Classe Mammals che estende WarmBlooded
class Mammals extends WarmBlooded {
    protected function describe() {
        parent::describe();
        echo "Sono un Mammifero\n";
    }
}

// Classe Birds che estende WarmBlooded
class Birds extends WarmBlooded {
    protected function describe() {
        parent::describe();
        echo "Sono un Uccello\n";
    }
}

// Classe Fish che estende ColdBlooded
class Fish extends ColdBlooded {
    protected function describe() {
        parent::describe();
        echo "Sono un pesce!\n";
        echo "Splash!\n";  // :-)
    }
}

// Classe Reptiles che estende ColdBlooded
class Reptiles extends ColdBlooded {
    protected function describe() {
        parent::describe();
        echo "Sono un Rettile\n";
    }
}

// Classe Amphibians che estende ColdBlooded
class Amphibians extends ColdBlooded {
    protected function describe() {
        parent::describe();
        echo "Sono un Anfibio\n";
    }
}




// Altri tests
// $rana = new Amphibians();
// $leone = new Mammals();
//$usignolo = new Birds();

// Creazione di un'istanza della classe Fish
 $carpa = new Fish();

?>
