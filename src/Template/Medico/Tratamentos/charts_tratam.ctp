<?php
/**
 * Function structure for multi series charts
 *
 * @param array $series Multi-dimensional array of series
 *    $series = [
 *       [
 *          (array) X values,
 *          (array) Y values,
 *          (opt. string) Name of the series,
 *          (opt. string) Line type ("markers", "lines" or "markers+line")
 *       ], [...], [...]
 *    ]
 * @param array $layout Any layout option accepted by Plotly.js
 * @see https://plot.ly/javascript/#layout-options for possible values
 * @param array $configuration Any configuration option accepted by Plotly.js
 * @see https://plot.ly/javascript/configuration-options for possible values and examples
 * @param string|null $id HTML identifier of div where chart will be drawed
 * @return string The generated chart
 */
$this->DrawChart->simpleBarChart(
    ['Apples', 'Tomatoes', 'Bananas', 'Cherries'],
    [38, 22, 55, 96]
);

// $series multi-dimensional array example
$series = [
  [
    ['Apples', 'Tomatoes', 'Bananas', 'Cherries'],
    [38, 22, 55, 96],
    'Ripes',
    'markers'
  ]
];