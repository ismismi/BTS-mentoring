<?php
include_once "Card.php"; 
include_once "EnglishDeck.php"; 

class CardGame
{
	public static function highestCard() {
		$oBaraja = new EnglishDeck();
		$oBaraja->shuffleCards();

		$player1Card = $oBaraja->dealCard();
		$player2Card = $oBaraja->dealCard();

		echo "Player 1 has a " . $player1Card . '<br />';
		echo "Player 2 has a " . $player2Card;

		$oBaraja->compare($player1Card, $player2Card);
	}
}

CardGame::highestCard();