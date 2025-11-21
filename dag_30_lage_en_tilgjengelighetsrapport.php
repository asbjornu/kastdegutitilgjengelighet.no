<?php include("global.php"); ?>

<head>
<title>Dag 30: Lage en tilgjengelighetsrapport - Kast deg ut i tilgjengelighet</title>

<?php include("linkrel.php"); ?>

<?php include("stilcharset.php"); ?>

<link rel="prev" href="dag_29_gjore_alt_sokbart" title="Dag 29: Gjøre alt søkbart" />
<link rel="next" href="konklusjon" title="Konklusjon" />
</head>
<body>

<?php include("logo.php"); ?>

<p></p>

<div id="main"><div class="inner">
<div class="entry">
<h2 class="entrysubject">Dag 30: Lage en tilgjengelighetsrapport</h2>
<p class="firstparagraph">Hvis du har implementert noen av tipsene i denne serien, lag så en tilgjengelighetsrapport som lister opp egenskapene for tilgjengelighet på nettstedet ditt.</p>

<h3>Hvem har nytte av det?</h3>

<ol>
<li><a href="dag_3_knut">Knut</a> har nytte av det. Han gjør ekstensiv bruk av tastaturet til navigasjon, og han ville brukt dine <a href="dag_15_definere_tastatursnarveier">tastatursnarveier</a> hvis han visste at de fantes. Dessverre sier ikke Mozilla i fra om dem, og gjør de heller ikke synlige på noen som helst måte, så du blir nødt til å liste de opp selv.</li>
<li>Mange andre brukere har nytte av det ved å lære hvordan de bruker programvaren sin bedre. For eksempel, <a href="dag_4_lillian">Lillian</a> visste ikke at hun kunne endre sin standard tekststørrelse i nettleseren inntil noen fortalte henne hvordan hun kunne gjøre det; nå kan hun lettere lese teksten på nettstedet ditt (det til si hvis du <a href="dag_26_bruke_relative_fontstorrelser">bruker relative fontstørrelser</a>). Netscape og Mozilla-brukere vet kanskje ikke at de kan skru på verktøylinjen for navigasjon for å dra nytte av dine <a href="dag_9_tilby_ekstra_hjelpemidler_til_navigasjon">LINK-baserte hjelpemidler</a>. («Vis»-menyen, «Vis/skjul», «Verktøylinje for navigasjon», «Vis kun ved behov». Dessverre ble denne egenskapen fjernet fra Mozilla 1.0 final i siste minutt, men den er tilbake i versjon 1.1.)</li>
<li>Andre webdesignere har nytte av det ved å lære mer om tilgjengelighet og se at du har tatt deg tid til å implementere disse tipsene.</li>
</ol>

<h3>Hvordan gjøre det</h3>

<p>I Radio eller Manila, kan du lage din tilgjengelighetsrapport som en «story» («Stories» i Radio eller Manilla verktøylinje) slik at den har sin egen URL. I motsatt fall lager du bare en ny post. Legg merke til URL-en etter du har lagret; du trenger den senere.</p>
<p>Det første du skulle gjøre er å liste opp <a href="dag_15_definere_tastatursnarveier">tastatursnarveiene</a> du har definert, for de fleste nettlesere annonserer dem ikke og gjør de heller ikke synlige på noen som helst annen måte. List også opp tastatursnarveien for selve tilgjengelighetsrapporten (som skal være <code>accesskey="0"</code>, som vi straks skal se).</p>
<p>Etter det burde du liste opp alle egenskapene for tilgjengelighet som du har implementert gjennom denne serien. Hvis du implementerer noen tips men ikke andre, bare nevn de du faktisk har implementert. Dette vil sannsynligvis bli en opplysende og positiv erfaring, som det å oppdatere ditt resymé for første gang siden sist jobb og bli klar over akkurat hvor mye arbeid du faktisk har gjort. Du har gjort en masse.</p>
<p>Hvis du ønsker det så kan du også kort nevne hvorfor du implementerte hver av disse funksjonene («enklere å bruke med skjermlesere», «for brukere med tekstbaserte nettlesere», «for brukere som ikke kan skille farger fra hverandre», og så videre). Husk at en tilgjengelighetsrapport vil bli lest av flere enn kun funksjonshemmede brukere; den burde være både informativ (for brukere som direkte tjener på det) og pedagogisk (for andre webdesignere som velger å følge ditt eksempel). Eller, i stedet for å forklare dem det selv, så kan du lenke til hver enkelt dag i denne boken, eller bare <a href="/">lenke til bokens hjemmeside</a>.</p>
<p>Til slutt, lenk til din tilgjengelighetsrapport fra hver eneste side på nettstedet ditt, enten i nettstedets navigasjonsmeny eller i dine siders bunntekst. Gi lenken en tittel og en <code>accesskey="0"</code>, slik som dette:</p>

<blockquote>
<p><code>&lt;a href="tilgjengelighetsrapport" title="Dette nettstedets egenskaper for tilgjengelighet" accesskey="0"&gt;Tilgjengelighetsrapport&lt;/a&gt;</code></p>
</blockquote>

<h3>Les mer</h3>

<ul>
<li><a href="http://diveintomark.org/accessibility_statement.html">Accessibility statement for diveintomark.org</a>.</li>
<li><a href="http://diveintoaccessibility.org/accessibility_statement.html">Accessibility statement for diveintoaccessibility.org</a>. Du står fritt til å bruke begge disse som en mal, inkludert struktur, ordlegging, og lenker til videre lesing.</li>
</ul>

<p></p>
<span class="divider">&nbsp;</span>
</div> <!--entry-->

<div class="pageturn"><div class="inner">
<a href="dag_29_gjore_alt_sokbart">&lt;&lt; Dag 29: Gjøre alt søkbart</a> |
<a href="innholdsfortegnelse">Innholdsfortegnelse</a>
| <a href="konklusjon">Konklusjon &gt;&gt;</a>
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
<span class="currentpage">Dag 30: Lage en tilgjengelighetsrapport</span></p>
</div><!--navigation-->

<?php include("stats.php"); ?>
</body>
</html>