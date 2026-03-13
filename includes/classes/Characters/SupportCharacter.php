<?php

namespace MyProject\Characters;

use MyProject\AnimeCharacter;

/**
 * A support character — someone who helps rather than leads the charge.
 *
 * Extends AnimeCharacter and adds a role (e.g. Healer, Strategist, Navigator).
 * Both introduce() and fight() are overridden to reflect their supportive nature.
 */
class SupportCharacter extends AnimeCharacter {

    /**
     * @param string $name       The character's name.
     * @param string $anime      The show they come from.
     * @param int    $powerLevel Their current power level.
     * @param string $role       What they do for the team (e.g. Healer, Navigator).
     */
    public function __construct(
        string $name,
        string $anime,
        int    $powerLevel,
        protected string $role
    ) {
        parent::__construct($name, $anime, $powerLevel);
    }

    /**
     * Overrides the base introduction to mention their role in the team.
     */
    public function introduce(): string {
        return parent::introduce() . " Role: {$this->role}.";
    }

    /**
     * Overrides fight() to show them backing up the team rather than going solo.
     *
     * @param string $opponent Who the team is up against.
     */
    public function fight(string $opponent): string {
        return "{$this->name} stands firm as {$this->role} and supports the team against {$opponent}!";
    }

    /** Returns this character's role in the team. */
    public function getRole(): string {
        return $this->role;
    }
}