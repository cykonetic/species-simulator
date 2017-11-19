<?php
namespace cykonetic\SpeciesSimulator\Exception;

use Exception;

/**
 * Exception thrown when an animal dies from starvation
 */
class StarvedException extends Exception
{
    public function __construct()
    {
        parent::__construct('not enough food');
    }
}
