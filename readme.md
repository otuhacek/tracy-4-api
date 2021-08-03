# Tracy s Nette API # 


Přepoklad je **stejný origin pro HTTP** protokol nebo i **rozdílný origin pro HTTPS** protokol (kvůli session cookie - taková je politika cookies pro třetí strany)
Proto toto demo má stejný origin (pouze podadresář app).

## Jak to spustit: ##

- **composer install**
- Spustit **run.bat** (předpokládá, že je php v PATH) 
- na **http://localhost:9000/app** klikat na "Call api" a sledovat, jak se plní Tracy
	- volá se **http://localhost:9000** - endpoint s aktuálním serverovým časem

Pokud však dáme někam, kde můžeme použít https, bude to fungovat i na rozdílných originech.
