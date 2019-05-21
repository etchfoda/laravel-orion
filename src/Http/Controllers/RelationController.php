<?php

namespace Laralord\Orion\Http\Controllers;

use Laralord\Orion\Traits\HandlesRelationOperations;

class RelationController extends BaseController
{
    use HandlesRelationOperations;

    /**
     * @var string|null $relation
     */
    protected static $relation = null;

    /**
     * @var string|null $relation
     */
    protected static $associatingRelation = null;

    /**
     * The list of pivot fields that can be set upon relation resource creation or update.
     *
     * @var bool
     */
    protected $pivotFillable = [];

    /**
     * The list of pivot json fields that needs to be casted to array.
     *
     * @var array
     */
    protected $pivotJson = [];

    /**
     * Retrieves model related to resource.
     *
     * @return string
     */
    protected function getResourceModel()
    {
        return get_class((new static::$model)->{static::$relation}()->getRelated());
    }
}