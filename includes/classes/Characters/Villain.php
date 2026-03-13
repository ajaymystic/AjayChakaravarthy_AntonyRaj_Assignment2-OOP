<?php

namespace MyProject\Characters;

use MyProject\AnimeCharacter;

/**
 * A villain — the antagonist with a sinister plan.
 *
 * Extends AnimeCharacter and adds an evil goal.
 * Both introduce() and fight() are overridden to give
 * the villain their signature menacing attitude.
 */
class Villain extends AnimeCharacter {

    /**
     * @param string $name       The villain's name.
     * @param string $anime      The show they come from.
     * @param int    $powerLevel Their current power level.
     * @param string $evilGoal   What they are trying to achieve.
     */
    public function __construct(
        string $name,
        string $anime,
        int    $powerLevel,
        protected string $evilGoal
    ) {
        parent::__construct($name, $anime, $powerLevel);
    }

    /**
     * Overrides the base introduction to reveal the villain's evil goal.
     */
    public function introduce(): string {
        return parent::introduce() . " My goal: {$this->evilGoal}. Nothing will stop me.";
    }

    /**
     * Overrides fight() with a cold, threatening taunt instead of a battle cry.
     *
     * @param string $opponent Who they are facing.
     */
    public function fight(string $opponent): string {
        return "{$this->name} laughs coldly. \"You dare challenge me, {$opponent}? How amusing.\"";
    }

    /** Returns what this villain is trying to accomplish. */
    public function getEvilGoal(): string {
        return $this->evilGoal;
    }
}
