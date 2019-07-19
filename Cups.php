<?php

namespace d3vy\Cups;

use DateTime;

class Cups {

    /**
     * @param string $startDate - Project start date in any PHP-valid format
     * @param string $endDate - Project end date in any PHP-valid format
     * @param int $dailyCups - The daily consumed coffee of the team in cups
     * @param int $projectWeight - How many percent of the work time is used for the project, default is 100%
     * @param array $excludedDays - Days to be skipped on every week, 0 is Sunday, 6 is Saturday, the other days are between these, default is Sunday and Saturday - To include all days, use an empty array
     * @return int - Number of cups calculated
     */
    public static function calculate($startDate, $endDate, $dailyCups, $projectWeight = 100, $excludedDays = [0, 6]) {
        $startDate = new DateTime($startDate);
        $endDate = new DateTime($endDate);

        if(count($excludedDays)) {
            $days = !in_array($startDate->format('w'), $excludedDays) ? 1 : 0;
            while($endDate->diff($startDate)->days > 0) {
                $startDate->modify('+1 day');
                if(!in_array($startDate->format('w'), $excludedDays)) {
                    $days++;
                }
            }
        } else {
            $days = $endDate->diff($startDate)->days + 1;
        }

        return round($days * $dailyCups / (100 / $projectWeight));
    }
}