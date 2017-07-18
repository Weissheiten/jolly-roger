# jolly-roger
Demo showcase for presenting the migration from a plain PHP to techniques a  PHP framework uses

under development...

Notes for Task 3 (german, under development)
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