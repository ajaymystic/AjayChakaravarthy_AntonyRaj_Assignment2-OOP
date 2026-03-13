<?php

namespace MyProject\Characters\Heroes;

use MyProject\Characters\Hero;

/**
 * A mage — a hero who uses elemental magic instead of physical strength.
 *
 * Extends Hero and adds an elemental affinity (e.g. Fire, Ice, Lightning).
 * fight() and levelUp() are both overridden to feel more magic-themed.
 */
class Mage extends Hero {

    /**
     * @param string $name          The mage's name.
     * @param string $anime         The show they come from.
     * @param int    $powerLevel    Their current power level.
     * @param string $signatureMove Their signature spell.
     * @param string $element       The element they specialise in (e.g. Fire, Ice).
     */
    public function __construct(
        string $name,
        string $anime,
        int    $powerLevel,
        string $signatureMove,
        protected string $element
    ) {
        parent::__construct($name, $anime, $powerLevel, $signatureMove);
    }

    /**
     * Overrides the hero introduction to also reveal their element.
     */
    public function introduce(): string {
        return parent::introduce() . " Element: {$this->element}.";
    }

    /**
     * Overrides fight() so the mage blasts the opponent with their element.
     *
     * @param string $opponent Who they are fighting.
     */
    public function fight(string $opponent): string {
        return "{$this->name} raises their hand and blasts {$opponent} with {$this->element}-infused {$this->signatureMove}!";
    }

    /**
     * Overrides levelUp() with a magic-flavoured message instead of the default one.
     *
     * @param int $amount How much to add to the current power level.
     */
    public function levelUp(int $amount): string {
        $this->powerLevel += $amount;
        return "{$this->name}'s magical reserves expand power level now {$this->powerLevel}!";
    }
}