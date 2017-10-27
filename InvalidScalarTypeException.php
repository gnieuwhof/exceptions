<?php

/**
 * @file
 * @brief This file contains the class InvalidScalarTypeException.
 */

/**
 * @brief Class for invalid scalar type argument exceptions.
 * 
 * Use type hinting for non scalar types.
 */
class InvalidScalarTypeException extends ArgumentException
{
    
    /**
     * @brief Constructs a new InvalidScalarTypeException.
     * 
     * @param string $expectedType Expected type of the parameter.
     * @param mixed $actualType Actual type of the parameter.
     *   Pass the param as argument, the exception determines the actual type.
     * @param string $paramName Name of the parameter.
     */
    public function __construct( $expectedType, $actualType, $paramName )
    {
        parent::__construct(
            sprintf(
                ExceptionMessages::InvalidArgumentType,
                $expectedType,
                gettype( $actualType )
                ),
            $paramName
            );
    }
    
}
