<?php
	// constructs a player
	class Player {
		private $player;

		// build a player with given list of information of the player
		function __construct($player) {
			$this->player = $player;
		}

		// returns the name of the player
		public function getName() {
			return "<p class=\"name\">".$this->player['Name']."</p>";
		}

		// returns the team of the player
		public function getTeam() {
			return "<p id=\"name\">".$this->player['Team']."</p>";
		}

		// returns the GP of the player
		public function getGP() {
			return "<p>GP: ".$this->player['GP']."</p>";
		}

		// returns the Min of the player
		public function getMin() {
			return "<p>Min: ".$this->player['Min']."</p>";
		}

		// returns the FG Pct of the player
		public function getFG() {
			return "<p>FG Pct: ".$this->player['Pct-FG']."</p>";
		}

		// returns the 3PT Pct of the player
		public function get3PT() {
			return "<p>3PT Pct: ".$this->player['Pct-3PT']."</p>";
		}

		// returns the FT Pct of the player
		public function getFT() {
			return "<p>FT Pct: ".$this->player['Pct-FT']."</p>";
		}

		// returns the rebounds of the player
		public function getRebound() {
			return "<p>Rebound: ".$this->player['Tot-Rb']."</p>";
		}

		// returns the PPG of the player
		public function getPPG() {
			return "<p>PPG: ".$this->player['PPG']."</p>";
		}

		// returns the Ast of the player
		public function getAst() {
			return "<p>Ast: ".$this->player['Ast']."</p>";
		}

		// returns the information of the player
		public static function player($row) {
			$result = new Player($row);
			return "<div id=\"player\">".$result->getName().$result->getTeam().$result->getGP().$result->getMin().$result->getFG().$result->get3PT().$result->getFT().$result->getRebound().$result->getPPG().$result->getAst()."</div>";
		}
	}
?>