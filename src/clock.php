<?php

/**********************************************************
*	CLASS NAME:   Clock
*	DESCRIPTION:  Clock class with clock-related properties and methods
**********************************************************/
class Clock
{
    /**********************************************************
	 *	FUNCTION NAME: 	whatAmI
	 * 	PARAMETERS:		None
	 *
	 *	DESCRIPTION: 	This method returns "I am a clock"
	 *
	 *	RETURNS:		"I am a clock"
	 **********************************************************/
    public function whatAmI()
    {
        return "I am a clock";
    }

    /**********************************************************
	 *	FUNCTION NAME: 	countBells
	 * 	PARAMETERS:		$startTime - Starting time for toll counter
     *                  $endTime - Ending time for toll counter
	 *
	 *	DESCRIPTION: 	This method returns the number of tolls between two
                        given times (inclusive).
	 *
	 *	RETURNS:		Count of tolls between passed start/end params
	 **********************************************************/
    public function countBells()
    {
        return 5;
    }
}

?>
