<?php

namespace MyProject\Characters\Heroes;

use MyProject\Characters\Hero;
use MyProject\Traits\Trainable;

/**
 * A swordsman — a hero who fights with a blade and can pass on their skills.
 *
 * Extends Hero and uses the Trainable trait so they can take on students.
 * Both introduce() and fight() are overridden to include their sword.
 */
class Swordsman extends Hero {

    use Trainable;

    /**
     * @param string $name          The swordsman's name.
     * @param string $anime         The show they come from.
     * @param int    $powerLevel    Their current power level.
     * @param string $signatureMove Their signature sword technique.
     * @param string $swordName     The name of their sword.
     * @param string $trainingStyle The training method they teach to students.
     */
    public function __construct(
        string $name,
        string $anime,
        int    $powerLevel,
        string $signatureMove,
        protected string $swordName,
        string $trainingStyle
    ) {
        parent::__construct($name, $anime, $powerLevel, $signatureMove);
        $this->trainingStyle = $trainingStyle;
    }

    /**
     * Overrides the hero introduction to also name the sword they carry.
     */
    public function introduce(): string {
        return parent::introduce() . " Wielding: {$this->swordName}.";
    }

    /**
     * Overrides fight() to have the swordsman draw their blade for the attack.
     *
     * @param string $opponent Who they are fighting.
     */
    public function fight(string $opponent): string {
        return "{$this->name} draws {$this->swordName} and slashes at {$opponent} with {$this->signatureMove}!";
    }
}