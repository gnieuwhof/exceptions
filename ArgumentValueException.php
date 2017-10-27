<?php

/**
 * @file
 * @brief This file contains the class ArgumentValueException.
 */

/**
 * @brief Class for invalid argument value exceptions.
 */
class ArgumentValueException extends ArgumentException
{
    
    /**
     * @brief Constructs a new ArgumentValueException.
     * 
     * @param string $message
     * @param string $paramName
     */
    public function __construct( $message, $paramName )
    {
        parent::__construct( $message, $paramName );
    }
    
}
