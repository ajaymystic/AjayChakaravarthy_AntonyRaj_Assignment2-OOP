<?php

namespace MyProject;

/**
 * The base class for every anime character in this project.
 *
 * Every character has a name, an anime they come from, and a power level.
 * The three core actions — introduce(), fight(), and levelUp() — live here
 * and get overridden by subclasses whenever the behaviour needs to change.
 */
abstract class AnimeCharacter {

    /**
     * @param string $name       The character's name.
     * @param string $anime      The show this character comes from.
     * @param int    $powerLevel How strong they currently are.
     */
    public function __construct(
        protected string $name,
        protected string $anime,
        protected int    $powerLevel
    ) {}

    /**
     * Returns a basic self-introduction for the character.
     */
    public function introduce(): string {
        return "I am {$this->name} from {$this->anime}! My power level is {$this->powerLevel}.";
    }

    /**
     * Returns a message when this character enters a fight.
     *
     * @param string $opponent The name of who they are fighting.
     */
    public function fight(string $opponent): string {
        return "{$this->name} steps up to face {$opponent}!";
    }

    /**
     * Raises the character's power level and confirms the increase.
     *
     * @param int $amount How much to add to the current power level.
     */
    public function levelUp(int $amount): string {
        $this->powerLevel += $amount;
        return "{$this->name}'s power level rose to {$this->powerLevel}!";
    }

    /** Returns the character's name. */
    public function getName(): string {
        return $this->name;
    }

    /** Returns the anime show this character is from. */
    public function getAnime(): string {
        return $this->anime;
    }

    /** Returns the character's current power level. */
    public function getPowerLevel(): int {
        return $this->powerLevel;
    }
}