# jolly-roger
Demo showcase for presenting the migration from a plain PHP to techniques a  PHP framework uses

under development...

### Notes for Task 1
Get a local development server up and running. (e.g.: XAMPP) 
Required Server Properties: 
* A webserver (e.g. Apache or nginx) 
* PHP 7.1 
* A database (preferably MySQL) 
* Be able to execute PHP from the command line that outputs “Crows nest built successfully Mr. Mac Mugmasher!” on the console 
* Be able to call a PHP webpage (index.php) on your local server that outputs the text “Crows nest built successfully Mr. Mac Mugmasher!” on a well formed HTML5 page inside a headline tag. 

Extra Aufgaben
* Change the port on which the webserver is listening from 80 to 87
* Increase the maximum execution time for a PHP script on your server from 30 to 60 seconds (Test it with an infinite loop or non-infinite loop that takes longer than the allowed execution time) 
* Install a PHP Codesniffer with pear and check the well-formedness of your code. 
* Alter your setup in order to be directed to the main file (index.php) on your localhost when inputting http://crowsnest.local/index.php in your browser. 

### Notes for Task 2
Task
Use the Fluid templating engine PHP package to output the sentence “Crows nest built successfully Mr. Mac Mugmasher!”
The template must be available as HTML File, so even people not proficient in PHP have an easy way of editing them.

Steps
* Check out what composer is (if you don’t already know it) and how it works (https://getcomposer.org/)
* Go to your XAMPP directory with the index.php file and initialise a new composer project
* Require the package https://github.com/TYPO3/Fluid for your composer project
* Install all dependencies
* Use the composer autoloading file to allow the use of namespaces and use namespaces in your index.php file for including classes
* Create a new instance of \TYPO3Fluid\Fluid\View\TemplateView and assign a new HTML template to it
* Introduce a variable (e.g.: “greeting”) in your View and render it by assigning the greeting to the view

A good example can be found at:
https://github.com/TYPO3/Fluid/blob/master/examples/example_variables.php
(mind that you only need one variable assigned and not multiples)


### Notes for Task 3 (german, under development)
* Stellen Sie über das Composer file sicher, dass PHP in der Version 7 verwendet wird
* Fügen Sie in Ihrem Composer File die notwendigen Einträge hinzu, damit Sie autoloading für ihre eigenen Klassen verwenden können (Beispiel: https://github.com/Weissheiten/PHPGrundlagenMitschrift/blob/master/composer.json)
   (vergessen Sie nicht den Composer update Befehl danach, damit die Autoload Klassen neu geschrieben werden)
* Erstellen Sie eine neue Klasse in PHP die eine "Fahne" repräsentiert
* eine Fahne soll eine Bezeichnung, eine Breite (Ganzzahl in cm), eine Höhe (Ganzzahl in cm) und eine Farbe (HexCode) haben
* für jede erstellte Fahne muss die Farbe ausgelesen werden können
* für jede erstellte Fahne muss die Bezeichnung ausgelesen werden können
* für jede erstellte Fahne muss die Größe (Fläche) der Fahne ausgelesen werden können
* wenn eine Fahne einmal erstellt wurde, darf die Bezeichnung nicht mehr geändert werden (zB von der erstellenden Klasse)
* wenn eine Fahne einmal erstellt wurde, darf die Farbe nicht mehr geändert werden (zB von der erstellenden Klasse)
* wenn eine Fahne einmal erstellt wurde, dürfen Breite und Höhe nicht mehr geändert werden (zB von der erstellenden Klasse)
* Stellen Sie mittels "use" und entsprechender namespace Verwendung sicher, dass Sie Ihre neue Fahnenklasse in der index.php verwenden können
* Erstellen Sie 2 neue Fahnen (eine Piratenflagge und eine Handelsflagge) und speichern Sie diese in einem Array
* Geben Sie alle Informationen zu den Fahnen mit Hilfe von Fluid aus. Hinterlegen Sie die Bezeichnung der Flagge mit der Flaggenfarbe. (TIP: Fluid kann auf getter von Objekten zugreifen - zB getSomething() kann in Fluid mit .something aufgerufen werden)

### Notes for Task 4 (german, under development)
Derzeit können Sie Flaggen einer einzelnen Form anlegen und ausgeben - es wird jedoch die Möglichkeit benötigt, Flaggen in den Formen eines Quadrats, eines Rechtecks und eines gleichseitigen Dreiecks anzulegen.
Stellen Sie für Ihr Programm die folgenden Funktionalitäten sicher:
* Jede Flagge verfügt weiterhin über einen Namen und eine Farbe (verwenden Sie eine geeignete Methode um sicherzustellen, dass der Name und die Farbe der Flagge nicht in mehreren Klassen definiert werden muss)
* Es muss programmiertechnisch sichergestellt werden, dass alle Flaggen aller Formen über eine Funktion verfügen, die den korrekten Flächeninhalt berechnet
* Die Funktionsaufrufe für das Auslesen des Flächeninhalts und des Namens der Flaggen muss gleich bleiben
* An den View sollen eine rechteckige Piratenflagge, eine dreieckige Handelsflagge und eine quadratische Landesflagge übergeben werden

Beispiel:
Folgender Beispielcode könnte bis jetzt verwendet worden sein um alle Flaggen auszugeben:
```
        <f:for each="{flags}" as="flag">
            <li style="background-color:{flag.color};color: white">{flag.name} - {flag.area}cm²</li>
        </f:for> 
``` 
Dieser Code soll sich nicht ändern - verwenden Sie abstrakte Klasssen und Interfaces um sicherzustellen, dass die Funktionen in den jeweiligen Flaggenklassen für Dreieck, Quadrad und Rechteck richtig implementiert sind.

