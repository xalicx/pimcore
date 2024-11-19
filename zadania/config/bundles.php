<?php
use Pimcore\Bundle\DataHubBundle\PimcoreDataHubBundle;
use Pimcore\Bundle\DataImporterBundle\PimcoreDataImporterBundle;
// ...

return [
    // ...
    // make sure PimcoreDataHubBundle is added before to that list
    PimcoreDataHubBundle::class => ['all' => true],
    // ...
    PimcoreDataImporterBundle::class => ['all' => true],
    // ...
];
// return [
//     //Twig\Extra\TwigExtraBundle\TwigExtraBundle::class => ['all' => true],
// ];
