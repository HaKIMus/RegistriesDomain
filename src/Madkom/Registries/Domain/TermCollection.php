<?php

namespace Madkom\Registries\Domain;

/**
 * Interface TermCollection
 *
 * @package Madkom\Registries\Domain\Term
 */
interface TermCollection
{

    /**
     * @param Term $term
     *
     * @throws TermNotAllowedException
     * @return mixed
     */
    public function add($term);

    /**
     * @param Term $term
     *
     * @return mixed
     */
    public function remove($term);
}
