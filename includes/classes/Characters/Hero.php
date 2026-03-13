<?php

namespace MyProject\Characters;

use MyProject\AnimeCharacter;

/**
 * A hero — the protagonist type who fights for good.
 *
 * Extends AnimeCharacter and adds a signature move.
 * Both introduce() and fight() are overridden to reflect
 * the hero's fighting spirit.
 */
class Hero extends AnimeCharacter {

    /**
     * @param string $name          The hero's name.
     * @param string $anime         The show they come from.
     * @param int    $powerLevel    Their current power level.
     * @param string $signatureMove The name of their signature attack.
     */
    public function __construct(
        string $name,
        string $anime,
        int    $powerLevel,
        protected string $signatureMove
    ) {
        parent::__construct($name, $anime, $powerLevel);
    }

    /**
     * Overrides the base introduction to also mention the hero's signature move.
     */
    public function introduce(): string {
        return parent::introduce() . " Signature move: {$this->signatureMove}!";
    }

    /**
     * Overrides fight() so the hero charges in with their signature move.
     *
     * @param string $opponent Who they are fighting.
     */
    public function fight(string $opponent): string {
        return "{$this->name} charges at {$opponent} and unleashes {$this->signatureMove}!";
    }

    /** Returns the hero's signature move name. */
    public function getSignatureMove(): string {
        return $this->signatureMove;
    }
}
