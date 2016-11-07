<?php

namespace traits;

// auto loading of classes
use classes\ErrorChecking;

/**
 * Class Eat
 */
trait Eat
{
    /**
     * @param array|null $paramData
     *
     * @return array
     */
    public function eat(array $paramData)
    {
        ErrorChecking::checkRequirements(['quantity', 'type', 'veracity'], $paramData);

        $class = explode('\\', $this::className());
        $class = strtolower(end($class));

        echo  'The ' . $class . ' eats ' . $paramData['quantity'] . ' kilos of  ' . $paramData['type'] . ' with ' . $paramData['veracity'] . ' veracity.';

        return $paramData;
    }
}
