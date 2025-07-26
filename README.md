# Geburtsstatistiken – PHP‑Projekt

Dieses Repository enthält eine kleine PHP‑Webanwendung zur Darstellung von US‑Geburtsstatistiken nach Namen.
Auf der Startseite können Besucherinnen und Besucher zunächst einen Anfangsbuchstaben auswählen. Danach erscheinen alle Namen, die mit diesem Buchstaben beginnen.
Wählt man einen Namen, zeigt die Website eine Zeitreihe mit der Anzahl der Geburten pro Jahr sowie eine Tabelle.

## Funktionsweise der Website

- **Startseite (index.php)**: Beim Aufruf liest die Anwendung alle Namen aus der CSV‑Datei ein und extrahiert die Anfangsbuchstaben. Die Buchstaben werden als Navigation angezeigt.
  Wenn eine Besucherin oder ein Besucher einen Buchstaben auswählt, filtert die Seite die Namen nach diesem Buchstaben und listet sie in einer ungeordneten Liste auf.
- **Detailseite (name.php)**: Ruft man einen konkreten Namen auf, filtert die Anwendung alle Datensätze für diesen Namen und bereitet zwei Arrays vor, eines für die Jahre und eines für die Geburtenzahlen.
  Mit Hilfe von Chart.js wird daraus ein Liniendiagramm im `<canvas>`‑Element erzeugt.
  Unterhalb des Diagramms wird zusätzlich eine Tabelle mit Jahr und Geburtenanzahl ausgegeben.

## Projektstruktur

Die Anwendung ist bewusst einfach gehalten. Wichtige Dateien:

| Pfad/Datei             | Zweck                                                                 |
|------------------------|------------------------------------------------------------------------|
| `index.php`            | Startseite mit Navigation über die Anfangsbuchstaben und Liste der Namen |
| `name.php`             | Detailseite für einen ausgewählten Namen; zeigt Diagramm und Tabelle     |
| `inc/names.php`        | Liest die CSV‑Datei `names.filtered.csv` ein und speichert jeden Datensatz als Array mit den Schlüsseln `name`, `year` und `count` |
| `inc/functions.php`    | Stellt die Hilfsfunktion `e()` bereit, um Ausgaben als HTML zu maskieren |
| `views/header.php`     | Gemeinsamer HTML‑Kopf (Doctype, Stylesheets) und Überschrift der Seite   |
| `views/footer.php`     | Schließt den `<body>` und das `<html>`‑Element                          |
| `names.filtered.csv`   | Datensatz der US‑Sozialversicherungsbehörde: Spalten Name, Year und Count |

## Datenquelle

Die Datei `names.filtered.csv` basiert auf öffentlichen Statistiken der US‑Sozialversicherungsbehörde.  
Sie enthält für jeden Namen die Anzahl der Geburten pro Jahr zwischen 1880 und 2014.

## Hinweise

- **Sicherheit**: Alle Benutzereingaben werden mit der Funktion `e()` in `inc/functions.php` gefiltert, um XSS‑Angriffe zu verhindern.
