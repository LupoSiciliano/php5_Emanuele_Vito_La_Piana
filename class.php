<?php
// <!-- Crea un file chiamato class.php e crea una classe astratta di tipo Categoria , con i relativi figli (ovvero che estendono Category) seguendo questa struttura: 
// Category 
// -- Attualita' 
// -- Sport 
// -- Gossip 
// -- Storia
// Tutte le classi dovranno avere un metodo astratto chiamato: getMyCategory() che mostri a schermo il valore relativo. -->
// Definizione  classe astratta Categoria
abstract class Category {
// Metodo astratto per ottenere il nome della categoria
    abstract public function getMyCategory();
}


class Attualita extends Category {
    public function getMyCategory() {
        echo "Attualita'\n";
    }
}


class Sport extends Category {
    public function getMyCategory() {
        echo "Sport\n";
    }
}


class Gossip extends Category {
    public function getMyCategory() {
        echo "Gossip\n";
    }
}


class Storia extends Category {
    public function getMyCategory() {
        echo "Storia\n";
    }
}

// stampare
                $attualita = new Attualita();
                $attualita->getMyCategory();

                $sport = new Sport();
                $sport->getMyCategory();

                $gossip = new Gossip();
                $gossip->getMyCategory();

                $storia = new Storia();
                $storia->getMyCategory();



                // _______________________________________________FINE ESERCIZIO UNO_____________________________________





