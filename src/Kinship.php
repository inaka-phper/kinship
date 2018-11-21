<?php
/**
 * This file is part of the InakaPhper.Kinship
 *
 * @license http://opensource.org/licenses/MIT MIT
 */
namespace InakaPhper\Kinship;

class Kinship
{
    /**
     * @var Female
     */
    private $from;

    /**
     * @var Female
     */
    private $to;

    /**
     * Kinship constructor.
     * @param string $input
     */
    public function __construct(string $input)
    {
        list($from, $to) = explode('->', $input);

        $this->from = new Female($from);
        $this->to = new Female($to);
    }

    private function execute()
    {
        switch (true) {
            case $this->from->getMe() === $this->to->getMe():
                return "me";
                break;
            case $this->from->getMum() === $this->to->getMe():
                return "mo";
                break;
            case $this->from->getMe() === $this->to->getMum():
                return "da";
                break;
            case $this->from->getMum() === $this->to->getMum():
                return "si";
                break;
            case $this->from->getGrandma() === $this->to->getMum():
                return "au";
                break;
            case $this->from->getMum() === $this->to->getGrandma():
                return "ni";
                break;
            case $this->from->getGrandma() === $this->to->getGrandma():
                return "co";
                break;
            default:
                return "-";
        }
    }

    public function __toString()
    {
        return $this->execute();
    }
}
