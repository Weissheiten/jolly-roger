<?php

namespace Weissheiten\JollyRoger;

require('./vendor/autoload.php');

use TYPO3Fluid\Fluid\View\TemplateView;
use Weissheiten\JollyRoger;

/**
 * Weissheiten Adventure Path: JollyRoger
 */

/*
 * @return \TYPO3Fluid\Fluid\View\TemplateView
 */
function initializeFluid(){
    // Initializing the View: rendering in Fluid takes place through a View instance
    // which contains a RenderingContext that in turn contains things like definitions
    // of template paths, instances of variable containers and similar.
    $view = new \TYPO3Fluid\Fluid\View\TemplateView();

    // TemplatePaths object: a subclass can be used if custom resolving is wanted.
    $paths = $view->getTemplatePaths();

    $paths->setTemplatePathAndFilename(__DIR__ . '/Resources/Private/Templates/index.html');

    return $view;
}

// store the greeting in a variable
$greeting = "Crows nest built successfully Mr. Mac Mugmasher!";

$flags[] = new RectangularFlag("JollyRoger","#000", 20, 10);
$flags[] = new TriangleFlag("Merchantflag","#00F", 20);
$flags[] = new SquareFlag('CountryFlag', "#F00", 20);

// get a new Fluid View
$fluidView = initializeFluid();
// assign the greeting
$fluidView->assignMultiple(
    array(
        'greeting' => $greeting,
        'flags' => $flags
    )
);

// output the rendered view
echo $fluidView->render();
