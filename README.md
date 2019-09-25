# whatsapp-web-phishing-demo

<strong>Disclaimer:</strong> This repository is for educational/demonstration purpose only. The only intended purpose of creating this repository is to demonstrate how phishing works. Author is not responsible for any misuse carried out by someone else using this codebase.

## Steps to set up:

### On server

1. Clone this repository on your server.

2. Run ```docker-compose up -d``` to start the server.

### On attacker's machine

1. Download <a href="https://addons.mozilla.org/en-US/firefox/addon/greasemonkey/" target="_blank">Greasemonkey</a> extension in Firefox browser.

2. Add <a href="https://gist.github.com/ifaisalalam/7c7e48e2014b2a07acac87756bf4eff5" target="_blank">this</a> JavaScript code in Greasemonkey. Make sure you replace ```http://localhost``` with the actual host/IP of the server.

3. Open ```https://web.whatsapp.com``` in a new tab in Firefox.

4. Open the server link in the other (victim's) tab/browser.
