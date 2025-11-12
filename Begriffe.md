***Welche Informationen liefert die Funktion phpinfo()?***  
phpinfo() gibt Informationen zum PHP selbst, Server konfiguration, Apache Umgebung, HTTP Header Informationen und alles andere was in der PHP Umgebung liegt.

***PHP.ini Einstellungen:***  
PHP-Fehler. In der PHP.ini Datei gibts den Feld `display_errors` welches man auf `on` oder `off` setzen kann. Waährend der Entwicklung ist es am besten auf `on` zu haben und wenn man es veröffentlichen will sollte man es auf `off` aus Sicherheitsgründen.

***Speichernutzung und die Laufzeit deiner Skripte limitieren***  
Es gibts die Felder `memory_limit` und `max_execution_time`.
`memory_limit` gibt an, wie viel Speichermenge ein Skript verbrauchen darf.
`max_execution_time` gibt an, wie viele Sekunden das Skript maximal ausgeführt werden darf.

***allow_url_fopen = off***  
Dieser Option erlaubt es mit PHP, Dateien von andere Websiten zu fetchen. Dies kann zur [Code Injection](https://de.wikipedia.org/wiki/Code-Injektion) führen und ist daher ein hoher Sicherheitsrisiko es an zu haben.

***session.auto_start = off***  
Wenn man den Session verwenden will, muss immer `session_start()` aufgerufen werden bevor jede andere Session-Befehl oder $_SESSION Variable referenzierung. Um das zu umgehen, kann man `session.auto_start` auf `on` setzen.
