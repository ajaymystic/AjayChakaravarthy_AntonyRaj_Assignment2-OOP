<?php

namespace MyProject\Characters\Villains;

use MyProject\Characters\Villain;

/**
 * A dark lord — the most powerful villain archetype, backed by an army.
 *
 * Extends Villain and adds a minion count to show just how much power
 * they command. Both introduce() and fight() are overridden to make
 * them feel even more unstoppable than a regular villain.
 */
class DarkLord extends Villain {

    /**
     * @param string $name        The dark lord's name.
     * @param string $anime       The show they come from.
     * @param int    $powerLevel  Their current power level.
     * @param string $evilGoal    Their ultimate plan.
     * @param int    $minionCount How many soldiers they command.
     */
    public function __construct(
        string $name,
        string $anime,
        int    $powerLevel,
        string $evilGoal,
        protected int $minionCount
    ) {
        parent::__construct($name, $anime, $powerLevel, $evilGoal);
    }

    /**
     * Overrides the villain introduction to also boast about their army size.
     */
    public function introduce(): string {
        return parent::introduce() . " I command an army of {$this->minionCount} minions. Bow before me.";
    }

    /**
     * Overrides fight() so the dark lord sends their army first instead of fighting directly.
     *
     * @param string $opponent Who they are up against.
     */
    public function fight(string $opponent): string {
        return "{$this->name} raises a hand. \"Minions destroy {$opponent}.\" " .
               "{$this->minionCount} soldiers surge forward!";
    }

    /** Returns how many minions this dark lord commands. */
    public function getMinionCount(): int {
        return $this->minionCount;
    }
}