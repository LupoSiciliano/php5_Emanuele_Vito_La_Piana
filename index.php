<?php

// Traccia 2: 
// Crea un nuovo file chiamato index.php e, importando la classe appena creata, crea una classe Post con i seguenti attributi: 
require_once 'class.php';
// Titolo 
// Categoria 
// Tag 
class Post{
    public $titolo;
    public $categoria;
    public $tag;

   // Costruttore della classe Post
    public function __construct($titolo, $categoria, $tag) {
        $this->titolo = $titolo;
        $this->categoria = $categoria;
        $this->tag = $tag;
    }

    // Metodo per visualizzare l'articolo completo
    public function visualizzaArticolo() {
        echo "Titolo: " . $this->titolo . "\n";
        echo "Categoria: " . $this-> categoria ->getMyCategory() . "\n"; // Utilizzo del metodo getMyCategory() della classe Categoria
        echo "Tag: " . $this->tag . "\n";
    }
}
// Crea delle istanze di classe Post, iniettando la dipendenze Categoria all’interno dell’attributo dedicato. 
// Creazione di istanze di classe Post
$attualita = new Attualita(); // Istanza della classe Categoria Attualita'
$post1 = new Post("Le auto volano", $attualita, "Attualita, Tecnologia");

$sport = new Sport(); // Istanza della classe Categoria Sport
$post2 = new Post("Il Milan è una squadra pazzesca", $sport, "Calcio, pallone");

$gossip = new Gossip(); // Istanza della classe Categoria Gossip
$post3 = new Post("Fedez in realtà si chiama Fedex", $gossip, "VIP, Celebrità, Ferragni");

$storia = new Storia(); // Istanza della classe Categoria Storia
$post4 = new Post("Il Papa ha 45 figli sparsi per il mondo", $storia, "Storia Antica, SuperQuark");
// Crea anche dei metodi per visualizzare gli articoli completi.

$post1->visualizzaArticolo();
$post2->visualizzaArticolo();
$post3->visualizzaArticolo();
$post4->visualizzaArticolo();




