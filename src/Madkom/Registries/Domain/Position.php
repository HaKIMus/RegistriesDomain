<?php

namespace Madkom\Registries\Domain;

/**
 * Class Position
 * @package Madkom\Registries\Domain
 */
abstract class Position
{

    /**
     * @var string
     */
    protected $id;

    /**
     * @var TermCollection
     */
    protected $terms;

    abstract public function addTerm(Term $term);

    abstract public function removeTerm(Term $term);

}
