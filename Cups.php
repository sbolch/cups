<?php

namespace d3vy\Cups;

use DateTime;

class Cups {

    /**
     * @param string $startDate - Project start date in any PHP-valid format
     * @param string $endDate - Project end date in any PHP-valid format
     * @param int $dailyCups - The daily consumed coffee of the team in cups
     * @param int $projectWeight - How many percent of the work time is used for the project, default is 100%
     * @return int - Number of cups calculated
     */
    public static function calculate($startDate, $endDate, $dailyCups, $projectWeight = 100) {
        return round(((new DateTime($endDate))->diff(new DateTime($startDate))->days + 1) * $dailyCups / (100 / $projectWeight));
    }
}