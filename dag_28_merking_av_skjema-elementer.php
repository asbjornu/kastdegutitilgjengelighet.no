<?php include("global.php"); ?>

<head>
<title>Dag 28: Merking av skjema-elementer - Kast deg ut i tilgjengelighet</title>

<?php include("linkrel.php"); ?>

<?php include("stilcharset.php"); ?>

<link rel="prev" href="dag_27_bruke_ekte_overskrifter" title="Dag 27: Bruke ekte overskrifter" />
<link rel="next" href="dag_29_gjore_alt_sokbart" title="Dag 29: Gjøre alt søkbart" />
</head>
<body>

<?php include("logo.php"); ?>

<p></p>

<div id="main"><div class="inner">
<div class="entry">
<h2 class="entrysubject">Dag 28: Merking av skjema-elementer</h2>
<p class="firstparagraph">Har det noen ganger plaget deg at webskjemaer er så vanskelige å bruke. For eksempel, i regulære <acronym title="graphical user interface">GUI</acronym>-applikasjoner kan du klikke hvor som helst på en avmerkingsboks for å merke av eller avmerke boksen, men i webbaserte applikasjoner kan du kun klikke på den lille avmerkingsboksens kvadrat. Dette er irriterende men ikke fatalt. Men for blinde brukere er situasjonen enda verre. Til og med enkle skjemaer, som kommentarskjemaer, kan være vanskelige å bruke hvis du ikke kan se alle på én gang. (Vi har lagt merke til <a href="dag_19_bruke_ekte_tabelltitler">et tilsvarende problem med tabeller</a>; en weblogg-kalender er enkel å bruke hvis du kan se alt på én gang, men vanskelig hvis du kun kan se én dag om gangen.)</p>
<p>Det finnes HTML-tagger som kan hjelpe til med å gjøre skjemaer enklere å bruke. Jeg skal snakke om én, <code>&lt;label&gt;</code>-taggen; du kan lese om de andre i «Les mer»-seksjonen.</p>
<p><code>&lt;label&gt;</code>-taggen lar deg assosiere skjemaers «label» med hvilke som helst skjemaers input-elementer: Tekstbokser, flerlinje-tekstområder, avmerkingsbokser, radioknapper, hva som helst. Dette lar skjermlesere tydelig kunne lese opp hva et bestemt input-element er ved å lese «labelen». Videre, hvis du bruker en <code>&lt;label&gt;</code>-tagg til å assosiere en avmerkingsboks (<code>&lt;input type="checkbox"&gt;</code>) med dens etterfølgende tekst, så vil ditt webbaserte skjema fungere som en <acronym title="graphical user interface">GUI</acronym>-applikasjon: Da kan man klikke hvor som helst i teksten til «labelet» for å trigge avmerkingsboksen.</p>

<h3>Hvem har nytte av det?</h3>

<ol>
<li><a href="dag_1_anne">Anne</a> har nytte av det. Når Anne bruker TAB-knappen på tastaturet til å navigere gjennom et skjema, så leser <a href="http://www.freedomscientific.com/fs_products/software_jaws.asp">JAWS</a> opp navnene til hvert element (med dets <code>name</code>-egenskap), noe som både kan være forståelig og ikke være det. Men hvis skjemaets element er assosiert med en «label», så vil JAWS lese «label»-teksten i stedet. «Tekst: Navn.» (<kbd>TAB</kbd>) «Tekst: Epostadresse.» (<kbd>TAB</kbd>) «Tekst: URL.» (<kbd>TAB</kbd>) «Tekstområde: Kommentar.», og så videre.</li>
<li><a href="dag_4_lillian">Lillian</a> har nytte av det. Straks et skjema-element er assosiert med «labels», så kan Lillian klikke hvor som helst på teksten som er rett etter avmerkingsboksen, og det vil trigge avmerkingsboksen. Dette gir et mye større rom for feilgrep når hun skal trigge avmerkingsboksen ved å bruke en mus, og med hennes begrensede synsevne så trenger hun det.</li>
<li><a href="dag_3_knut">Knut</a> skal også ha nytte av dette, men bare ikke riktig enda. Han navigerer for det meste med tastaturet, noe som for det meste betyr <kbd>TAB</kbd>-knappen. Når han bruker TAB-knappen for å komme seg til en avmerkingsboks i et skjema så burde Mozilla sette fokus rundt hele «labelen», men det gjør den ikke; den setter kun fokus på selve avmerkingsboksen. (Internet Explorer gjør faktisk dette riktig. Til og med Netscape 4 gjør det riktig. Dette er ille, Mozilla.)</li>
</ol>

<h3>Hvordan gjøre det: Movable Type</h3>

<p>I Movable Type redigerer du ditt Comment Listing Template. Nær bunnen skal du se et skjema som inneholder elementer som dette:</p>

<blockquote>
<p><code>Navn:&lt;br /&gt;<br />
&lt;input name="author" /&gt;&lt;br /&gt;&lt;br /&gt;<br />
<br />
Epostadresse:&lt;br /&gt;<br />
&lt;input name="email" /&gt;&lt;br /&gt;&lt;br /&gt;<br />
<br />
URL:&lt;br /&gt;<br />
&lt;input name="url" /&gt;&lt;br /&gt;&lt;br /&gt;<br />
<br />
Kommentar:&lt;br /&gt;<br />
&lt;textarea name="text" rows="10" cols="50"&gt;&lt;/textarea&gt;&lt;br /&gt;&lt;br /&gt;<br />
<br />
&lt;input type="checkbox" name="bakecookie" /&gt;Remember info?&lt;br /&gt;&lt;br /&gt;</code></p>
</blockquote>

<p>Hvert av disse nakne «labels» trenger å bli pakket inn i <code>&lt;label&gt;</code>-tagger. Fordi <code>&lt;label&gt;</code>-taggen peker til et skjema-element med ID (ikke navn), så trenger hver <code>&lt;input&gt;</code>-tagg et ID-attributt. Alt i alt så vil det ende opp med å se ut som dette:</p>

<blockquote>
<p><code><strong>&lt;label for="author"&gt;Navn:&lt;/label&gt;</strong>&lt;br /&gt;<br />
&lt;input <strong>id="author"</strong> name="author" /&gt;&lt;br /&gt;&lt;br /&gt;<br />
<br />
<strong>&lt;label for="email"&gt;Epostadresse:&lt;/label&gt;</strong>&lt;br /&gt;<br />
&lt;input <strong>id="email"</strong> name="email" /&gt;&lt;br /&gt;&lt;br /&gt;<br />
<br />
<strong>&lt;label for="url"&gt;URL:&lt;/label&gt;</strong>&lt;br /&gt;<br />
&lt;input <strong>id="url"</strong> name="url" /&gt;&lt;br /&gt;&lt;br /&gt;<br />
<br />
<strong>&lt;label for="text"&gt;Kommentar:&lt;/label&gt;</strong>&lt;br /&gt;<br />
&lt;textarea <strong>id="text"</strong> name="text" rows="10" cols="50"&gt;&lt;/textarea&gt;&lt;br /&gt;&lt;br /&gt;<br />
<br />
&lt;input type="checkbox" <strong>id="bakecookie"</strong> name="bakecookie" /&gt;<strong>&lt;label for="bakecookie"&gt;Husk meg?&lt;/label&gt;</strong>&lt;br /&gt;&lt;br /&gt;</code></p>
</blockquote>

<p>Vær nøye med å gjøre de samme endringene i ditt Comment Preview template, ditt Comment Error template, og i Individual Entry Archive.</p>

<h3>Hvordan gjøre det: Greymatter</h3>

<p>Under «Rediger Karma &amp; Comments-Related Templates», skal du se en mal som kalles «{{entrycommentsform}} Posting form» som inkluderer dette:</p>

<blockquote>
<p><code>Navn<br />
&lt;BR&gt;<br />
&lt;INPUT TYPE=TEXT NAME="newcommentauthor" SIZE=40&gt;<br />
&lt;P&gt;<br />
Epostadresse (valgfri)<br />
&lt;BR&gt;<br />
&lt;INPUT TYPE=TEXT NAME="newcommentemail" SIZE=40&gt;<br />
&lt;P&gt;<br />
Hjemmeside (valgfri)<br />
&lt;BR&gt;<br />
&lt;INPUT TYPE=TEXT NAME="newcommenthomepage" SIZE=40&gt;<br />
&lt;P&gt;<br />
Kommentar<br />
&lt;BR&gt;<br />
&lt;TEXTAREA NAME="newcommentbody" COLS=35 ROWS=10 WRAP=VIRTUAL&gt;&lt;/TEXTAREA&gt;</code></p>
</blockquote>

<p>Endre det til dette:</p>

<blockquote>
<p><code><strong>&lt;label for="newcommentauthor"&gt;Navn&lt;/label&gt;</strong><br />
&lt;BR&gt;<br />
&lt;INPUT TYPE=TEXT <strong>id="newcommentauthor"</strong> NAME="newcommentauthor" SIZE=40&gt;<br />
&lt;P&gt;<br />
<strong>&lt;label for="newcommentemail"&gt;Epostadresse (valgfri)&lt;/label&gt;</strong><br />
&lt;BR&gt;<br />
&lt;INPUT TYPE=TEXT <strong>id="newcommentemail"</strong> NAME="newcommentemail" SIZE=40&gt;<br />
&lt;P&gt;<br />
<strong>&lt;label for="newcommenthomepage"&gt;Hjemmeside (valgfri)&lt;/label&gt;</strong><br />
&lt;BR&gt;<br />
&lt;INPUT TYPE=TEXT <strong>id="newcommenthomepage"</strong> NAME="newcommenthomepage" SIZE=40&gt;<br />
&lt;P&gt;<br />
<strong>&lt;label for="newcommentbody"&gt;Kommentar&lt;/label&gt;</strong><br />
&lt;BR&gt;<br />
&lt;TEXTAREA <strong>id="newcommentbody"</strong> NAME="newcommentbody" COLS=35 ROWS=10 WRAP=VIRTUAL&gt;&lt;/TEXTAREA&gt;</code></p>
</blockquote>

<h3>Les mer</h3>

<ul>
<li><cite title="Web Accessibility In Mind">WebAIM</cite>: <a href="http://www.webaim.org/howto/forms">How to Create Accessible Forms</a>. For mer avanserte skjemaer, ytterligere tilgjengelighetsrelaterte tagger hvor &lt;legend&gt; og &lt;fieldset&gt; kan være nødvendige. Denne veiviseren viser deg hva de er og hvordan de brukes.</li>
<li><cite title="World Wide Web Consortium">W3C</cite>: <a href="http://www.w3.org/TR/REC-html40/interact/forms.html#h-17.9.1">Forms in HTML Documents: The LABEL element</a>.</li>
</ul>

<p></p>
<span class="divider">&nbsp;</span>
</div> <!--entry-->

<div class="pageturn"><div class="inner">
<a href="dag_27_bruke_ekte_overskrifter">&lt;&lt; Dag 27: Bruke ekte overskrifter</a> |
<a href="innholdsfortegnelse">Innholdsfortegnelse</a>
| <a href="dag_29_gjore_alt_sokbart">Dag 29: Gjøre alt søkbart &gt;&gt;</a>
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
<span class="currentpage">Dag 28: Merking av skjema-elementer</span></p>
</div><!--navigation-->

<?php include("stats.php"); ?>
</body>
</html>