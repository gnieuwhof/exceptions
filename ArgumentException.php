<?php

/**
 * @file
 * @brief This file contains the class ArgumentException.
 */

/**
 * @brief Class for argument exceptions.
 */
class ArgumentException extends Exception
{
    
    /**
     * @brief Constructs a new ArgumentException.
     * 
     * @param string $message Description of the argument error.
     * @param string $paramName Name of the parameter.
     */
    public function __construct( $message, $paramName )
    {
        parent::__construct( $message . PHP_EOL . 'Parameter: ' . $paramName );
    }
    
}
