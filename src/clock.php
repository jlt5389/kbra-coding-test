<?php

/**********************************************************
*	CLASS NAME:   Clock
*	DESCRIPTION:  Clock class with clock-related properties and methods
**********************************************************/
class Clock
{
    public $hours = 12;
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
    public function countBells($startTime, $endTime)
    {
        // Initialize
        $tollCount = 0;
        $startTime = new DateTime($startTime);
        $endTime = new DateTime($endTime);
        $startMin = $startTime->format("i");
        $startHour = intval($startTime->format("H"));
        $endHour = intval($endTime->format("H"));

        // Determine first bell toll within the defined limits
        if ($startMin > 0)
        {
            $startHour += 1;
        }

        // If endTime is the next day adjust for time discrepency
        if ($endTime <= $startTime)
        {
            $endHour += $this->hours * 2;
        }

        // Create an array of times at which the bell tolls
        $tolls = range($startHour, $endHour);
        // For each toll add the tolls to the total count
        foreach ($tolls as $toll) {
            $tollCount += $toll % $this->hours;
            // If it is 12:00 add 12 tolls
            if ($toll % $this->hours == 0) {
                $tollCount += $this->hours;
            }
        }
        // Return a count of tolls (bells)
        return $tollCount;
    }
}

?>
