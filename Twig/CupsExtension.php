<?php

namespace d3vy\Cups\Twig;

use d3vy\Cups\Cups;
use Twig\TwigFunction;

class CupsExtension extends \Twig\Extension\AbstractExtension; {

    /**
     * @return TwigFunction[]
     */
    public function getFunctions() {
        return array(
            new TwigFunction('cups', function($startDate, $endDate, $dailyCups, $projectWeight = 100, $excludedDays = [0, 6]) {
                return Cups::calculate($startDate, $endDate, $dailyCups, $projectWeight, $excludedDays);
            })
        );
    }

    public function getName() {
        return 'd3vy_twig_cups_extension';
    }
}
