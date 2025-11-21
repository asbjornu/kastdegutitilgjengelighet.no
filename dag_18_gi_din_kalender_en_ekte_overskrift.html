<?php include("global.php"); ?>

<head>
<title>Dag 18: Gi din kalender en ekte overskrift</title>

<?php include("linkrel.php"); ?>

<?php include("stilcharset.php"); ?>

<link rel="prev" href="dag_17_definere_bokstavord" title="Dag 17: Definere bokstavord" />
<link rel="next" href="dag_19_bruke_ekte_tabelltitler" title="Dag 19: Bruke ekte tabelltitler" />
</head>
<body>

<?php include("logo.php"); ?>

<p></p>

<div id="main"><div class="inner">
<div class="entry">
<h2 class="entrysubject">Dag 18: Gi din kalender en ekte overskrift</h2>
<p class="firstparagraph">«Men,» hører jeg du roper ut, «kalenderen min <em>har</em> allerede en overskrift. Bare se her, den har måneden og året rett der til høyre på toppen. Til og med i fet skrift.»</p>
<p>Men hvis du dykker inn i <acronym title="hypertext markup language">HTML</acronym>-kilden, så vil du se at kalenderen din ikke har en <em>ekte</em> overskrift. Sannsynligvis har den en enkel <code class="sgmltag">&lt;td&gt;</code> tabellcelle definert til å strekke seg over hele den første raden, med en <acronym title="cascading style sheets">CSS</acronym>-regel som gjør den fet. Dette er veldig mye lettere med en ekte <code class="sgmltag">&lt;caption&gt;</code>-tagg. Det er lettere å lese i malen din, siden din sparer noen byte, ser nøyaktig lik ut i visuelle nettlesere, og er mer tilgjengelig.</p>

<h3>Hvem har nytte av det?</h3>

<ol>
<li><a href="dag_5_marius">Marius</a> har nytte av det. <a href="http://www.fdisk.com/doslynx/lynxport.htm">Lynx</a> viser overskriften i fronten med ordet «OVERSKRIFT:», og gjør det helt tydelig at denne linjen er overskriften og ikke kolonnens tittel eller tabelldata.</li>
<li><a href="dag_1_anne">Anne</a> får indirekte nytte av det. Ved å bruke en ekte <code>&lt;caption&gt;</code>-tagg ryddes veien for bruken av ekte tabelltitler, noe som gagner Anne på en måte som vi skal diskutere i morgen.</li>
</ol>

<h3>Hvordan gjøre det</h3>

<p>Du kan kun gjøre dette i publiseringsverktøy som har støtte for kalendere (noe som utelukker Blogger) og som tillater deg å tilpasse <acronym title="hypertext markup language">HTML</acronym>-en som er generert for kalendere (som utelukker Manilla).</p>
<p>I Movable Type, har du sannsynligvis en tabell til kalenderen i din hovedsidemal som starter slik som dette (du finner den sannsynligvis ved å søke etter «calendarhead»):</p>

<blockquote>
<p><code class="sgmltag">&lt;table border="0" cellspacing="4" cellpadding="0"&gt;<br />
<strong>&lt;tr&gt;<br />
&lt;td colspan="7" align="center"&gt;&lt;span class="calendarhead"&gt;&lt;$MTDate format="%B %Y"$&gt;&lt;/span&gt;&lt;/td&gt;<br />
&lt;/tr&gt;</strong><br />
&lt;tr&gt;<br />
&lt;td align="center"&gt;&lt;span class="calendar"&gt;Søn&lt;/span&gt;&lt;/td&gt;<br />
...</code></p>
</blockquote>

<p>La tabelltaggen være, men bytt ut hele den første <code class="sgmltag">&lt;tr&gt;</code>-tabellraden med en ekte <code class="sgmltag">&lt;caption&gt;</code>-tagg, slik som dette:</p>

<blockquote>
<p><code class="sgmltag">&lt;table border="0" cellspacing="4" cellpadding="0"&gt;<br />
<strong>&lt;caption class="calendarhead"&gt;&lt;$MTDate format="%B %Y"$&gt;&lt;/caption&gt;</strong><br />
&lt;tr&gt;<br />
&lt;td align="center"&gt;&lt;span class="calendar"&gt;Søn&lt;/span&gt;&lt;/td&gt;<br />
...</code></p>
</blockquote>

<p>La resten være; vi fikser det i morgen.</p>
<p><code>class</code>-atributtet til <code class="sgmltag">&lt;caption&gt;</code> er valgfri; jeg lot den være der så dette kunne bli en dropp-inn utskiftning i Movable Type's standardmal, som bruker en <acronym title="cascading style sheets">CSS</acronym>-regel for å gjøre måneden og året i fet skrift. Ved å bruke <code class="sgmltag">&lt;caption&gt;</code>-taggen som vist, burde siden din vises nøyaktig likt som den gjorde før.</p>
<p>I Greymatter, er konseptet det samme men malens tagger er annerledels:</p>

<blockquote>
<p><code class="sgmltag">&lt;caption&gt;{{monthword}} {{yearyear}}&lt;/caption&gt;</code></p>
</blockquote>

<p>Igjen, du kan forandre den visuelle stilen til <code>caption</code> ved å bruke cascading style sheets, hvis du er inne i denslags ting.</p>
<p>I Radio, så er prosessen til en viss grad vanskeligere, men ikke umulig. (Jeg står i gjeld til <a href="http://www.tmtm.com/insanity/">Tony Bowden</a> for disse instruksjonene.)</p>

<ol>
<li>I Radio, åpner du Radio's faktiske applikasjon. I Windows, høyreklikk på det lille Radio-ikonet i systemkurven og velg «Åpne Radio».</li>
<li>I «Verktøy»-menyen, velg «Utviklere», deretter «Hopp ...» (<kbd>Control+J</kbd>). Hopp til «system.verbs.builtins.radio.weblog.drawCalendar» (uten anførselstegn).</li>
<li>Så går du til «Rediger»-menyen, «Finn og erstatt», «Finn ...» (<kbd>Control+F</kbd>) og finn "hCalendarTable". Dette skulle åpenbare datablokken med kode som tegner den innledende <code>&lt;table&gt;</code>-taggen og den falske kalenderoverskriften.</li>
<li><p>Endre den siste linjen av datablokken (som skriver ut <var>monthYearString</var>-en i en <code>&lt;tr&gt;</code>-tagg) til dette:</p>

<blockquote>
<p><code class="sgmltag">add ("&lt;caption&gt;" + monthYearString + "&lt;/caption&gt;")</code></p>
</blockquote>
</li>

<li>Lukk vinduet. Den vil spørre om du ønsker å kompilere endringene, svar ja.</li>
<li><p>Hvis du ønsker det kan du stilsette overskriften. Gå til din hjemmesidemal (i preferanse-siden) og legg stil til <code>caption</code>-overskriften. Dette er det jeg bruker. Hvor min <code>&lt;style&gt;</code>-seksjon før inneholdt dette:</p>

<blockquote>
<pre><code>body, td, p {
  font-family: verdana, sans-serif;
  font-size: 12px;
}</code></pre>
</blockquote>

<p>Nå inneholder den dette:</p>

<blockquote>
<pre><code>body, td, p, <strong>caption</strong> {
    font-family: verdana, sans-serif;
    font-size: 12px;
    }

<strong>caption {
  text-align: center;
  font-weight: bold;
}</strong></code></pre>
</blockquote>
</li>
</ol>

<h3>Les mer</h3>

<ul>
<li><cite>Tony Bowden</cite>: <a href="http://www.tmtm.com/insanity/2002/07/03.html#a180">Changing the Calendar in Radio</a>.</li>
</ul>

<p></p>
<span class="divider">&nbsp;</span>
</div> <!--entry-->

<div class="pageturn"><div class="inner">
<a href="dag_17_definere_bokstavord">&lt;&lt; Dag 17: Definere bokstavord</a> |
<a href="innholdsfortegnelse">Innholdsfortegnelse</a>
| <a href="dag_19_bruke_ekte_tabelltitler">Dag 19: Bruke ekte tabelltitler &gt;&gt;</a>
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
<span class="currentpage">Dag 18: Gi din kalender en ekte overskrift</span></p>
</div><!--navigation-->

<?php include("stats.php"); ?>
</body>
</html>