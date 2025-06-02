<?php

require_once 'panel.php';
require_once 'contestant.php';

class Game
{
    private $panel;
    private $participants;
    private $saidLetters;

    public function __construct($panel, $participants)
    {
        $this->panel = $panel;
        $this->participants = $participants;
        $this->saidLetters = array();
    }

    public function startGame()
    {
        echo "The hint is: " . $this->panel->getPista() . " and the panel is <br>";
        echo $this->panel->hideText() . "<br>";
    }
}

//We initialize the panel with the text to guess and the hint
$panel = new Panel("La Casa de Bernarda Alba", "Lorca");
$saidLetters = array();

//We initialize the participants
$participants = array(new Participant("Lorenzo"), new Participant("Diana"), new Participant("Alejandra"));

//We hide the text to guess
$hiddenText = $panel->hideText();

echo "The hint is: " . $panel->getPista() . " and the panel is <br>";
echo $hiddenText . "<br>";