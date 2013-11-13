<?php
include_once "Deck.php"; 
include_once "Card.php"; 

class EnglishDeck extends Deck
{
	private $suits = array('Clubs', 'Diamonds', 'Hearts', 'Spades');
	private $cards = array('Ace', 2, 3, 4, 5, 6, 7, 8, 9, 10, 'Jack', 'Queen', 'King');
	
	public function dealCard() {
		return array_pop($this->arrCards);
	}


	public function __construct() {
		$Cards = $this->initEnglishDeck();
		parent::__construct($Cards);
	}

	private function initEnglishDeck() {
		$arrCards = array();
		
		foreach($this->suits as $Suit) {
			foreach ($this->cards as $Card) {
				$arrCards[] = new Card($Suit, $Card);
			}
			
		}
		return $arrCards;
	}

	public function compare($Card1, $Card2) {
		$play1 = array_search($Card1->getFigure(), $this->cards);
		$play2 = array_search($Card2->getFigure(), $this->cards);

		echo "<br />";
		if ($play1 > $play2) {
			echo "Player 1 Won!";
		} elseif ($play2 > $play1) {
			echo "Player 2 Won!";
		} else {
			echo "We have a tie";
		}
		
	}

}


/*
$oBaraja = new EnglishDeck();
$oBaraja->shuffleCards();
$oBaraja->listCards();

$oCarta  = $oBaraja->dealCard();
echo("La carta: " . $oCarta);

echo "<br>que es esto: " . get_class($oCarta);
*/