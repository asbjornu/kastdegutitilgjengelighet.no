<?php include("global.php"); ?>

<head>
<title>Dag 29: Gjøre alt søkbart - Kast deg ut i tilgjengelighet</title>

<?php include("linkrel.php"); ?>

<?php include("stilcharset.php"); ?>

<link rel="prev" href="dag_28_merking_av_skjema-elementer" title="Dag 28: Merking av skjema-elementer" />
<link rel="next" href="dag_30_lage_en_tilgjengelighetsrapport" title="Dag 30: Lage en tilgjengelighetsrapport" />
</head>
<body>

<?php include("logo.php"); ?>

<p></p>

<div id="main"><div class="inner">
<div class="entry">
<h2 class="entrysubject">Dag 29: Gjøre alt søkbart</h2>
<p class="firstparagraph">Alle nettsteder trenger et nettstedsøk. Punktum.</p>
<p>Regler for et godt nettstedsøk:</p>

<ol>
<li>Plasser søkeboksen på hver eneste side, helst «ovenfor hovedinnholdet» (synlig uten å måtte skrolle).</li>
<li>Søker i alt innholdet som standard. Hvis du har et valg for å søke i innlegg, kommentarer, eller begge deler, gjør «begge deler» til standard.</li>
<li>Ikke fyll opp søkeboksen din med avanserte valg, som boolsk logikk, sensitivitet for store og små bokstaver, eller regulære uttrykk. Velg som standard å etterligne Googles måte å gjøre det på (passe til alle ord, ikke passe til partielle ord, ikke passe til om det er store eller små bokstaver, ikke bruke regulære uttrykk) og gjør så valgene synlige på en egen separat «Avansert søk»-side.</li>
<li>Gi søkeboksen din <a href="dag_28_merking_av_skjema-elementer">en skikkelig «label»</a> og <a href="dag_15_definere_tastatursnarveier">en tastatursnarvei</a>. Jeg anbefaler <code>accesskey="4"</code>. (Merk: <a href="dag_15_definere_tastatursnarveier">På dag 15</a> ga jeg et eksempel på hvordan man definere tastatursnarveier til et søkeskjema, men jeg fikk gjort det feil. For å oppnå maksimum kompabilitet på tvers av nettlesere, så trenger du å definere tastatursnarveien på <code>&lt;label&gt;</code>, og ikke på <code>&lt;input&gt;</code>. Se eksempelet nedenfor for den korrekte syntaksen.)</li>
</ol>

<h3>Hvem har nytte av det?</h3>

<p><a href="dag_1_anne">Anne</a>, <a href="dag_2_jorgen">Jørgen</a>, <a href="dag_3_knut">Knut</a>, <a href="dag_4_lillian">Lillian</a>, <a href="dag_5_marius">Marius</a>, og stort sett alle andre i verden har nytte av et godt implementert nettstedsøk. Spesielt i en weblogg eller et nyhetsorientert nettsted hvor innholdet primært er organisert kronologisk, det er veldig frustrerende å prøve å finne et bestemt innlegg som ikke lenger ligger på forsiden. Det er ikke mange som vet om «site:domainname.com»-syntaksen til Google (for å begrense søkeresultatene til et bestemt domene), men Google reindekserer uansett bare én gang i måneden. Tilby ditt eget nettstedsøk.</p>

<h3>Hvordan gjøre det</h3>

<p>Greymatter har innebygd søkefunksjonalitet, men du kommer til å måtte tilpasse malen en smule for å tilby en tastatursnarvei til søkeboksen. Gå til «Edit Templates», «Miscellaneous Templates», «Search Form Template», og finn et skjema som dette:</p>

<blockquote>
<p><code>&lt;FORM ACTION="{{cgiwebpath}}/gm-comments.cgi" METHOD=POST&gt;<br />
&lt;INPUT TYPE=TEXT NAME="gmsearch" SIZE=20&gt;<br />
&lt;INPUT TYPE=SUBMIT VALUE="Search"&gt;<br />
&lt;/FORM&gt;</code></p>
</blockquote>

<p>Og endre det til dette:</p>

<blockquote>
<p><code>&lt;FORM ACTION="{{cgiwebpath}}/gm-comments.cgi" METHOD=POST&gt;<br />
<strong>&lt;label for="gmsearch" accesskey="4"&gt;Search for:&lt;/label&gt;</strong><br />
&lt;INPUT TYPE=TEXT <strong>id="gmsearch"</strong> NAME="gmsearch" SIZE=20&gt;<br />
&lt;INPUT TYPE=SUBMIT VALUE="Search"&gt;<br />
&lt;/FORM&gt;</code></p>
</blockquote>

<p>Movable Type-brukere kan prøve ut <a href="http://www.jayallen.org/mt-search/">MT-Search</a> tillegget. Jeg bruker dette på et kommende <acronym title="Movable Type">MT</acronym>-drevet nettsted. Jeg prøvde det på min hoved-weblogg (900+ innlegg) og den var forholdsvis langsom, men den ser ut til å fungere greit på mindre nettsteder. Den blir ikke lenger aktivt utviklet, men den virker greit, til og med i den siste versjonen av Movable Type. (Merk: Hvis du bruker MySQL-versjonen av Movable Type 2.2 <a href="http://philringnalda.com/archives/002257.php">så trenger du å modifisere mt-search.cgi en smule</a>.)</p>
<p>Hvis du har webloggen din på ditt eget domenenavn kan du bruke en tredjeparts søketjeneste som indekserer innholdet ditt og tilbyr søkeresultater etter etterspørsel. Populære alternativer på denne fronten inkluderer <a href="http://www.atomz.com/search/trial_account.htm">Atomz Express Search</a> som Blogger.com anbefaler, og <a href="http://www.google.com/services/free.html">Google Free Web Search</a> som jeg bruker på min egen weblogg. Begge kan tilpasses til en viss grad, og ganske fort også, selv om deres indeksering av innholdet ditt ikke er oppdatert umiddelbart. Begge tillater deg å modifisere utseende på søkeboksen din; mitt Google-drevne søkeskjema ser ut som dette (legg merke til bruken av <code>&lt;label&gt;</code> og <code>accesskey</code>):</p>

<blockquote>
<p><code>&lt;form id="searchform" method="get" action="http://www.google.com/custom"&gt;<br />
&lt;p id="searchlabel"&gt;<strong>&lt;label for="q" accesskey="4"&gt;Search this site:&lt;/label&gt;</strong>&lt;/p&gt;<br />
&lt;p id="searchinput"&gt;&lt;input type="text" <strong>id="q"</strong> name="q" size="18" maxlength="255" value=" " /&gt;&lt;/p&gt;<br />
&lt;p id="searchsubmit"&gt;&lt;input type="submit" value="Search" /&gt;<br />
&lt;input type="hidden" name="cof" value="LW:116;L:http://diveintomark.org/images/eyes.jpg;LH:68;AH:left;GL:0;S:http://diveintomark.org/;AWFID:0d8ffcebe359c844;" /&gt;<br />
&lt;input type="hidden" name="domains" value="diveintomark.org" /&gt;<br />
&lt;input type="hidden" name="sitesearch" value="diveintomark.org" /&gt;<br />
&lt;/p&gt;<br />
&lt;/form&gt;</code></p>
</blockquote>

<p>Merk: Du kan ikke klippe og lime dette inn i din egen weblogg. Hvis du ønsker å bruke Google Free Web Search så må du registrere deg og få din egen kode til det skjulte <code>cof</code>-feltet.</p>

<h3>Les mer</h3>

<ul>
<li><cite>Jay Allen</cite>: <a href="http://www.jayallen.org/mt-search/">MT-Search</a>, et søketillegg til Movable Type.</li>
<li><cite>Phil Ringnalda</cite>: <a href="http://philringnalda.com/archives/002257.php">mt-search.cgi and MySQL</a>. Viktig informasjon om å få MT-Search til å fungere med Movable Type 2.2 og MySQL.</li>
<li><a href="http://www.atomz.com/search/trial_account.htm">Atomz Express Search</a>.</li>
<li><a href="http://www.google.com/services/free.html">Google Free Web Search</a>.</li>
<li><cite>Blogger.com</cite>: <a href="http://publicmind.blogger.com/enduser/group.jsp?node=185">How do I add a search engine to my blog?</a> Anbefaler Atomz, men lenker til andre som ikke er listet her.</li>
<li><cite>Jukka Korpela</cite>: <a href="http://www.cs.tut.fi/~jkorpela/forms/accesskey.html">Improving accessibility with <code>accesskey</code> in HTML forms and links</a>. Detaljert forklaring på hvorfor man burde bruke «4» som tastatursnarvei til ens nettstedsøk.</li>
<li><cite>Jakob Nielsen</cite>: <a href="http://www.useit.com/alertbox/20000109.html">Is Navigation Useful?</a> <q>Users often rely on search as their main hunting strategy.</q></li>
<li><cite>Jakob Nielsen</cite>: <a href="http://www.useit.com/alertbox/9707b.html">Search Usability</a>. Fem år gammel og fortsatt veldig relevant.</li>
<li><cite>PHP.net</cite>: <a href="http://www.php.net/urlhowto.php">URL HOWTO</a>. PHP.net har det mest forbløffende nettstedsøket jeg noensinne har sett. Hinsides en standard søkeboks bruker de et egendefinert 404 feilmeldingsdokument (som vanligvis bare ville vise en «Siden ikke funnet»-feilmelding) for å intelligent søke i nettstedet basert på URL-er. Så du kan skrive en adresse som <a href="http://php.net/phpinfo">php.net/phpinfo</a> inn i din nettlesers adressefelt, og php.net vil så videresende deg til <a href="http://www.php.net/manual/en/function.phpinfo.php">the reference page on the phpinfo function</a>.</li>
</ul>

<p></p>
<span class="divider">&nbsp;</span>
</div> <!--entry-->

<div class="pageturn"><div class="inner">
<a href="dag_28_merking_av_skjema-elementer">&lt;&lt; Dag 28: Merking av skjema-elementer</a> |
<a href="innholdsfortegnelse">Innholdsfortegnelse</a>
| <a href="dag_30_lage_en_tilgjengelighetsrapport">Dag 30: Lage en tilgjengelighetsrapport &gt;&gt;</a>
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
<span class="currentpage">Dag 29: Gjøre alt søkbart</span></p>
</div><!--navigation-->

<?php include("stats.php"); ?>
</body>
</html>