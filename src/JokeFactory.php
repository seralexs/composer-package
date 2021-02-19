<?php

namespace Seralexs\ComposerPackage;

use phpDocumentor\Reflection\Types\Void_;

class JokeFactory
{
    protected $jokes = [
        'Chuck Norris threw a grenade and killed 50 people, then it exploded.',
        'Chuck Norris can kill your imaginary friends.',
        'Chuck Norris can hear sign language.',
    ];

    public function __construct(array $jokes = null)
    {
        if ($jokes) {
            $this->jokes = $jokes;
        }
    }

    public function getRandomJoke()
    {
        return $this->jokes[array_rand($this->jokes)];
    }
}