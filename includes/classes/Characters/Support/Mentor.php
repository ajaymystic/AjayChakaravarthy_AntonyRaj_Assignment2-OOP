<?php

namespace MyProject\Characters\Support;

use MyProject\Characters\SupportCharacter;
use MyProject\Traits\Trainable;

/**
 * A mentor — a wise support character who guides and trains the hero.
 *
 * Extends SupportCharacter and uses the Trainable trait to teach students.
 * This is the second class using Trainable (alongside Swordsman under Hero),
 * showing how the trait works across completely different parts of the hierarchy.
 * fight() is overridden to show the mentor relying on wisdom over brute force.
 */
class Mentor extends SupportCharacter {

    use Trainable;

    /**
     * @param string $name          The mentor's name.
     * @param string $anime         The show they come from.
     * @param int    $powerLevel    Their current power level.
     * @param string $role          Their role (e.g. Sage, Sensei).
     * @param string $wisdomQuote   A famous piece of advice they are known for.
     * @param string $trainingStyle The teaching method they use with students.
     */
    public function __construct(
        string $name,
        string $anime,
        int    $powerLevel,
        string $role,
        protected string $wisdomQuote,
        string $trainingStyle
    ) {
        parent::__construct($name, $anime, $powerLevel, $role);
        $this->trainingStyle = $trainingStyle;
    }

    /**
     * Overrides the support introduction to also share their famous quote.
     */
    public function introduce(): string {
        return parent::introduce() . " They say: \"{$this->wisdomQuote}\"";
    }

    /**
     * Overrides fight() — the mentor stays calm and leans on experience, not power.
     *
     * @param string $opponent Who they are facing.
     */
    public function fight(string $opponent): string {
        return "{$this->name} calmly faces {$opponent}. Experience and patience are their greatest weapons.";
    }

    /** Returns this mentor's signature piece of wisdom. */
    public function getWisdomQuote(): string {
        return $this->wisdomQuote;
    }
}