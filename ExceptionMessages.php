<?php

/**
 * @file
 * @brief This file contains the class ExceptionMessages.
 */

/**
 * @brief Class containing generic exception messages.
 */
class ExceptionMessages
{
    
    const ArgumentNull = 'Value cannot be null.';
    
    const EmptyArray = 'Array must at least contain one element.';
    
    const InvalidArgumentType = 'Argument must be of type: %s, %s given.';

    const NegativeValue = 'Value may not be negative.';
    
    const LowerOrEqualToZeroValue = 'Value must be greater than zero.';
    
}
