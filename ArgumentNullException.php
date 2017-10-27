<?php

/**
 * @file
 * @brief This file contains the class ArgumentNullException.
 */

/**
 * @brief Class for argument exceptions.
 */
class ArgumentNullException extends ArgumentException
{
    
    /**
     * @brief Constructs a new ArgumentException.
     * 
     * @param string $paramName Name of the parameter.
     */
    public function __construct( $paramName )
    {
        parent::__construct( ExceptionMessages::ArgumentNull, $paramName );
    }
    
}
