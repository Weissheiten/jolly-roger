<?php
/**
 * Weissheiten Adventure Path: JollyRoger
 */

/*
 * @param string $greeting the greeting which should be shout from the crows nest *
 * @return string complete HTML template including the greeting
 */
function shout($greeting) : string
{
    /**
     *  use a heredoc to create a multiline HTML template
     *  http://php.net/manual/en/language.types.string.php#language.types.string.syntax.heredoc
     */
    $template = <<<EOT
    <html>
    <head>
        <title>Crowsnest of Captain Whitebeard</title>
    </head>
    <body>
        <h1>###greeting###</h1>
    </body>
    </html>        
EOT;

    return str_replace(
        "###greeting###",
        $greeting,
        $template
    );
}

// store the greeting in a variable
$greeting = "Crows nest built successfully Mr. Mac Mugmasher!";
echo shout($greeting);
