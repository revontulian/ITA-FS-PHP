<?php

declare(strict_types=1);

class Panel
{
    protected $hiddenText;
    private $posicion_espacios = array();
    protected $charArray = array();

    const HIDDEN_CHAR = '_';

    public function __construct(private string $texto_a_adivinar, private string $pista)
    {
        $this->texto_a_adivinar = $texto_a_adivinar;
        $this->pista = $pista;
    }

    public function hideText(): string
    {
        $charArray = str_split($this->texto_a_adivinar);
        for ($i=0; $i < count($charArray); $i++) {
            if ($charArray[$i] == " ") {
                $this->posicion_espacios[] = $i;
                $this->hiddenText .= " ";
            } else {
                $this->hiddenText .= self::HIDDEN_CHAR;
            }
        }
        return $this->hiddenText;
    }

    public function getPista(): string
    {
        return $this->pista;
    }
}
