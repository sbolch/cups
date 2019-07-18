<?php

namespace d3vy\Cups\Twig;

use d3vy\Cups\Cups;

class CupsExtension extends \Twig_Extension {

    /**
     * @return [\Twig_SimpleFunction]
     */
    public function getFunctions() {
        return array(
            new \Twig_SimpleFunction('cups', function($startDate, $endDate, $dailyCups, $projectWeight = 100) {
                return Cups::calculate($startDate, $endDate, $dailyCups, $projectWeight);
            })
        );
    }

    public function getName() {
        return 'd3vy_twig_cups_extension';
    }
}