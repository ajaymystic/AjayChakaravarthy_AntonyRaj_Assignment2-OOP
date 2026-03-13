<?php

namespace MyProject\Traits;

/**
 * Adds training functionality to any character who can take on a student.
 *
 * This trait is used by Swordsman (under Hero) and Mentor (under SupportCharacter),
 * which are two completely separate branches of the hierarchy — that's exactly
 * what traits are for. No code duplication, no awkward inheritance.
 */
trait Trainable {

    /** @var string The name of the training method this character uses. */
    protected string $trainingStyle;

    /**
     * Returns a message showing this character training a student.
     *
     * @param string $studentName The name of the student being trained.
     */
    public function train(string $studentName): string {
        return "{$this->name} is training {$studentName} using the {$this->trainingStyle} method!";
    }

    /** Returns the name of this character's training style. */
    public function getTrainingStyle(): string {
        return $this->trainingStyle;
    }
}
