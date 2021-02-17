<?php


namespace Serjik94\ComposerPackage\Tests;

use PHPUnit\Framework\TestCase;
use Serjik94\ComposerPackage\JokeFactory;

class JokeFactoryTest extends TestCase
{
    public function test_it_returns_a_random_joke()
    {
        $jokes = new JokeFactory([
            'This is a joke',
        ]);

        $joke = $jokes->getRandomJoke();

        $this->assertSame('This is a joke', $joke);
    }

    public function test_it_returns_predefined_joke()
    {
        $chuckJokes = [
            'Chuck Norris threw a grenade and killed 50 people, then it exploded.',
            'Chuck Norris can kill your imaginary friends.',
            'Chuck Norris can hear sign language.',
        ];

        $jokes = new JokeFactory();

        $joke = $jokes->getRandomJoke();

        $this->assertContains($joke, $chuckJokes);
    }
}