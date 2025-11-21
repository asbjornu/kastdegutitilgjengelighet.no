<?php include("global.php"); ?>

<head>
<title>Dag 16: Ikke åpne nye vinduer - Kast deg ut i tilgjengelighet</title>

<?php include("linkrel.php"); ?>

<?php include("stilcharset.php"); ?>

<link rel="prev" href="dag_15_definere_tastatursnarveier" title="Dag 15: Definere tastatursnarveier" />
<link rel="next" href="dag_17_definere_bokstavord" title="Dag 17: Definere bokstavord" />
</head>
<body>

<?php include("logo.php"); ?>

<p></p>

<div id="main"><div class="inner">
<div class="entry">
<h2 class="entrysubject">Dag 16: Ikke åpne nye vinduer</h2>
<p class="firstparagraph">Er det noe som alle nettbrukere forstår så er det «Tilbake»-knappen. Det er en integral del av å surfe på nettet. Følg en lenke, gå tilbake. Utforsk resultatene i en søkemotor, gå tilbake. Til og med min far klarer dette, og han blir fortsatt begeistret når han vellykket klarer å dobbeltklikke på «Internett»-ikonet på første forsøk.</p>
<p>I alle dominerende nettlesere, så vil bruken av <code class="sgmltag">&lt;a target="_blank"&gt;</code> taggen til å tvinge en lenke til å åpne et nytt vindu <em>ødelegge tilbakeknappen</em>. Det nye vinduet husker ikke surfe-historien til det forrige vinduet, så «Tilbake»-knappen er utkoplet. Dette er fryktelig forvirrende, til og med for meg, og jeg har brukt Internett i 10 år. I 2002, er det overraskende at folk fortsatt gjør dette. Ikke gjør dét. Ikke tving lenker til å åpne seg i nye vinduer.</p>
<p>Vennligst merk deg at dette tipset gjelder deg som webdesigner, ikke deg som nettbruker. Hvis <em>du</em> ønsker å åpne nye vinduer mens <em>du</em> surfer, så gjør det. I Internet Explorer på Windows, hold nede <kbd>Shift</kbd>-tasten mens du klikker på en lenke for å åpne lenken i et nytt vindu. I Netscape 6 og Mozilla, hold nede <kbd>Control</kbd>. I Internet Explorer på Mac, hold nede <kbd>Command</kbd>. (Noen nettlesere, slike som Opera, støtter avanserte kombinasjoner som <kbd>Control</kbd> + <kbd>Shift</kbd> + klikk for å åpne en lenke i et nytt vindu i bakgrunnen.) Poenget er at valget om hvorvidt en lenke skal åpnes i et nytt vindu burde være sluttbrukerens valg, ikke webdesignerens valg.</p>

<h3>Hvem har nytte av det?</h3>

<ol>
<li><p><a href="dag_1_anne">Anne</a> har nytte av det. Skjønt <a href="http://www.freedomscientific.com/fs_products/software_jaws.asp">JAWS</a> melder fra om «Nytt nettleservindu» når en lenke åpner et nytt vindu, er dette lett å overse, fordi den blir lest opp sammenklemt mellom lesingen av lenketeksten og lesingen av den nye siden. <a href="http://www-3.ibm.com/able/hpr.html">Home Page Reader</a> har en bedre løsning; den spiller av en spesiell lyd hver gang et nytt vindu åpnes. Og <a href="http://www.gwmicro.com/products/">Window Eyes</a>, en annen populær skjermleser, gir ingen indikasjon på nye vinduer i det hele tatt.</p>
<p>Og uansett, «Tilbake»-knappen er fortsatt ødelagt. Hvis Anne overser meldingen om «nytt nettleservindu», så kan hun ikke enkelt kaste et blikk på sin verktøylinje og se at to vinduer er åpne. Hun vil måtte lese gjennom hele sin liste med åpne vinduer, enten ved å bruke den JAWS-spesifikke snarveien <kbd>INSERT+F10</kbd> for å få opp vindulisten, eller ved standarden <kbd>ALT+TAB</kbd>.</p>
</li>
<li><a href="dag_4_lillian">Lillian</a> har nytte av det. Hennes vindu i Internet Explorer er alltid maksimert (så hun kan se det), og nye vinduer åpner seg også maksimert som standard. Dessuten, Windows XP grupperer flere vinduer fra samme program i verktøylinjen, så visuelt er det ingen synlig indikasjon på at et nytt vindu i det hele tatt er blitt åpnet. Plutselig, er «Tilbake»-knappen utkoplet tilsynelatende uten noen grunn, og Lillian aner ikke hvorfor. Hvis du forventet at hun skulle lese resten av nettstedet ditt etter å ha fulgt den lenken, kan du glemme dét.</li>
<li><a href="dag_3_knut">Knut</a> har nytte av det. Hans søster har satt Mozilla til å bruke faner til surfing, slik at Knut kan se på arkfanene og raskt bli påminnet om hvilke vinduer han har åpnet, og han kan også enkelt bytte mellom dem (ved å bruke <kbd><acronym title="control">CTRL</acronym>+<acronym title="page up">PAGEUP</acronym></kbd> og <kbd><acronym title="control">CTRL</acronym>+<acronym title="page down">PAGEDOWN</acronym></kbd> på sitt tastatur som har slike hendige utvidelser). Lenker som tvinges til å åpnes i nye vinduer vil åpne et helt nytt Mozilla-vindu. Ikke bare vil dette forbigå hans preferanser for surfing med faner, men det vil forårsake at alle hans åpne vinduer forsvinner, fordi det nye nettleservinduet ikke viser arkfaner som er åpnet i det forrige vinduet.</li>
</ol>

<h3>Hvordan gjøre det</h3>

<ol>
<li>Ikke bruk <code class="sgmltag">&lt;a target="_blank"&gt;</code> for å tvinge lenker til å åpnes i et nytt vindu.</li>
<li>Hvis du absolutt må åpne en lenke i et nytt vindu, advar leseren tydelig. Dette er en ikke-optimal, kompromiss-løsning, vanligvis brukt av bedrifter fordi deres retningslinjer er «ikke kunne tilknyttes» med eksternt innhold. For eksempel, <a href="http://www.cnn.com/US/sites.html">CNNs «relaterte nettsteder»-side</a> gjør dette.</li>
<li>Hvis du har en «Lenker åpner nye vinduer»-avmerkingsboks, forsikre deg om at den er <em>avslått</em> som standard.</li>
</ol>

<h3>Les mer</h3>

<ul>
<li><cite title="Useit.com">Jakob Nielsen</cite>: <a href="http://www.useit.com/alertbox/990530.html">The Top Ten <em>New</em> Mistakes of Web Design</a>. «#1: Ødelegge eller forsinke tilbakeknappen. #2: Åpne nye nettleservinduer.»</li>
<li><cite>W3C Web Accessibility Initiative</cite>: <a href="http://www.w3.org/WAI/wcag-curric/sam77-0.htm">Example for Checkpoint 10.1</a> gir et eksempel på hvordan du advarer brukere hvis du har én lenke som du absolutt må åpne i et nytt vindu.</li>
<li><cite>W3C Validator mailing list</cite>: <a href="http://lists.w3.org/Archives/Public/www-validator/2002Apr/0100.html">Re: opening a link in a new window</a>. Hvis du bryr deg om slikt som dette, burde du vite at <code>target</code>-atributtet til <code>&lt;a&gt;</code>-taggen er frarådet, og vil hindre at sidene dine validerer som <acronym title="hypertext markup language">HTML</acronym> 4.01 Strict, <acronym title="extensible hypertext markup language">XHTML</acronym> 1.0 Strict, eller hvilke som helst andre fremtidige versjoner.</li>
<li><cite><acronym title="Web Accessibility In Mind">WebAIM</acronym> mailing list</cite>: <a href="http://www.webaim.org/discussion/mail_thread.php?thread=432"><code>mailto:</code> links open new windows</a>. Det er enighet om at <code>mailto:</code>-lenker ikke er et tilgjengelighetsproblem, på tross av at de vanligvis åpner din e-postleser i et nytt vindu, fordi denne oppførselen fullstendig bestemmes på klientsiden. Et nettbasert e-postskjema (lik det Radio bruker) kan kanskje samlet sett være en bedre løsning, forutsatt at skjemaet er tilgjengelig. Et nettbasert skjema vil fungere for besøkende som ikke har integrerte e-postlesere (på grunn av feilkonfigurasjon eller andre omstendigheter, som det å være på et offentlig sted), og det beskytter din e-postadresse for spam-sankere uten å ty til utilgjengelige Javascript-triks. På den annen side, noen folk <em>liker veldig</em> godt sin e-postleser på grunn av fortrolighet, funksjonalitet (slikt som innebygd stavekontrollsjekking), og muligheten til å arkivere utgående meldinger. Jeg anbefaler ikke den ene metoden fremfor den andre.</li>
</ul>

<p></p>
<span class="divider">&nbsp;</span>
</div> <!--entry-->

<div class="pageturn"><div class="inner">
<a href="dag_15_definere_tastatursnarveier">&lt;&lt; Dag 15: Definere tastatursnarveier</a> |
<a href="innholdsfortegnelse">Innholdsfortegnelse</a>
| <a href="dag_17_definere_bokstavord">Dag 17: Definere bokstavord &gt;&gt;</a>
<span class="divider">&nbsp;</span>
</div></div> <!--pageturn-->

</div></div> <!--main-->

<?php include("meny.php"); ?>

<?php include("menyfot.php"); ?>

</div><!--menu-->

<div id="navigation">
<p class="breadcrumb">Du er her:
<a href="/">Forsiden</a> >
<a href="innholdsfortegnelse">Innholdsfortegnelse</a> >
<span class="currentpage">Dag 16: Ikke åpne nye vinduer</span></p>
</div><!--navigation-->

<?php include("stats.php"); ?>
</body>
</html>