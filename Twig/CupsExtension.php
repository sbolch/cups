<?php

namespace d3vy\Cups\Twig;

use d3vy\Cups\Cups;
use Twig_SimpleFunction;

class CupsExtension extends \Twig_Extension {

    /**
     * @return [Twig_SimpleFunction]
     */
    public function getFunctions() {
        return array(
            new Twig_SimpleFunction('cups', function($startDate, $endDate, $dailyCups, $projectWeight = 100, $excludedDays = [0, 6]) {
                return Cups::calculate($startDate, $endDate, $dailyCups, $projectWeight, $excludedDays);
            })
        );
    }

    public function getName() {
        return 'd3vy_twig_cups_extension';
    }
}