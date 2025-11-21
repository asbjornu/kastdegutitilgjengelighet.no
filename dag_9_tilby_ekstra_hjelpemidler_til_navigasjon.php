<?php include("global.php"); ?>

<head>
<title>Dag 9: Tilby ekstra hjelpemidler til navigasjon - Kast deg ut i tilgjengelighet</title>

<?php include("linkrel.php"); ?>

<?php include("stilcharset.php"); ?>

<link rel="prev" href="dag_8_a_lage_meningsfylte_titler" title="Dag 8: Å lage meningsfylte titler" />
<link rel="next" href="dag_10_presentere_ditt_viktigste_innhold_forst" title="Dag 10: Presentere ditt viktigste innhold først" />
</head>
<body>

<?php include("logo.php"); ?>

<p></p>

<div id="main"><div class="inner">
<div class="entry">
<h2 class="entrysubject">Dag 9: Tilby ekstra hjelpemidler til navigasjon</h2>
<p class="firstparagraph">Du er kanskje kjent med <code class="sgmltag">&lt;link&gt;</code>-taggen i forbindelse med eksterne stilark. Men visste du at du også kan bruke en lignende syntaks til å peke til hjemmesiden din, og til de forrige og neste sidene i en rekke? For eksempel kan du i dagsarkivsider peke til sidene for dagen før og etter (dersom de fins). Hvis du har individuelle sider for hvert innlegg, kan du peke til det forrige og det neste innlegget.</p>

<blockquote>
<p><code>&lt;link rel="home" title="Hjem" href="http://url/of/home/page" /&gt;<br />
&lt;link rel="prev" title="Tittel til forrige side" href="http://url/of/previous/page" /&gt;<br />
&lt;link rel="next" title="Tittel til neste side" href="http://url/of/next/page" /&gt;<br /></code></p>
</blockquote>

<p>Disse lenkene, normalt usynlige for visuelle nettlesere som Internet Explorer, kan bli vist i alternative nettlesere og hjelpe brukere til å navigere på din hjemmeside. Du tilbyr sannsynligvis allerede flere måter å navigere på: Ukentlige eller månedlige arkiver, lenker til nyeste postinger, en månedlig kalender med daglige postinger. Kanskje du til og med allerede har synlige lenker på dine arkivsider som peker til forrige og neste dagers innlegg. De er alle flotte; behold dem, og legg til disse også.</p>

<h3>Hvem har nytte av det?</h3>

<ol>
<li><p><a href="dag_5_marius">Marius</a> har nytte av det. Hans tekstbaserte nettleser <a href="http://www.fdisk.com/doslynx/lynxport.htm">Lynx</a> viser ekstra hjelpemidler til navigasjon på toppen av siden, med tittelen som vi spesifiserte i <code>title</code>-atributtet. Når Marius leser den daglige arkivsiden fra 18. juni, så ser han dette:</p>

<blockquote>
<pre><code>#<a href="#" title="lenke til forsiden som vi definerte">Hjem</a>&nbsp;<a href="#" title="lenke til den forrige siden, med tittelen vi definerte">17. juni 2002</a>&nbsp;<a href="#" title="lenke til den neste siden, med tittelen vi definerte">19 juni. 2002</a></code></pre>
</blockquote>

<p>(#-tegnet forteller Marius at dette er metadata, ikke sideinnhold. Lynx gjør den samme tingen på linjen med din <a href="dag_8_a_lage_meningsfylte_titler">meningsfylte sidetittel</a>.)</p>
</li>

<li><p><a href="dag_2_jorgen">Jørgen</a> har nytte av det. Opera viser hjelpemidler til navigasjon i en verktøylinje (velg Vis/Verktøylinjer/Navigeringslinje for å se det. Og hans tekstbaserte nettleser <a href="http://links.sourceforge.net/">Links</a> (må ikke forveksles med Marius' nettleser, <a href="http://www.fdisk.com/doslynx/lynxport.htm">Lynx</a>) viser også de ekstra navigasjons-hjelpemidlene på toppen av siden, slik som dette:</p>

<blockquote>
<pre><code>Link: <a href="#" title="lenke til forsiden som vi definerte">hjem</a>
Link: <a href="#" title="lenke til den forrige siden som vi definerte">forrige</a>
Link: <a href="#" title="lenke til den neste siden som vi definerte">neste</a></code></pre>
</blockquote>
</li>

<li><p><a href="dag_3_knut">Knut</a> har nytte av det. Mozilla viser ekstra navigasjonslenker i verktøylinjen for sidenavigasjon. Typen lenke («hjem», «forrige», «neste») vises på verktøylinje-knappen, og tittelen til lenken vises som et verktøytips. Velg Vis-menyen, Vis/Skjul, Navigasjonslinje, Vis alltid.</p></li>

<li><p><a href="http://www.icab.de/">iCab</a> brukere har nytte av det. iCab viser navigasjonslenkene i en nedtrekksmeny i verktøy, og bruker tittelen definert i hver lenke.</p></li>

<li><p><a href="http://www.mozilla.org/products/firebird/">Firebird</a>-brukere kan ha nytte av det, hvis de <a href="http://cdn.mozdev.org/linkToolbar/">installerer en lenke-verktøylinje</a> som viser disse ekstra hjelpemidlene for navigasjon.</p></li>
</ol>

<h3>Hvordan gjøre det</h3>

<p>I Movable Type, legg disse linjene til i din datobaserte arkiv mal, umiddelbart etter <code class="sgmltag">&lt;head&gt;</code>-taggen:</p>

<blockquote>
<p><code>&lt;link rel="home" href="&lt;$MTBlogURL$&gt;" title="Hjem" /&gt;<br />
&lt;MTArchivePrevious&gt;<br />
&lt;link rel="prev" href="&lt;$MTArchiveLink$&gt;" title="&lt;$MTArchiveTitle$&gt;" /&gt;<br />
&lt;/MTArchivePrevious&gt;<br />
&lt;MTArchiveNext&gt;<br />
&lt;link rel="next" href="&lt;$MTArchiveLink$&gt;" title="&lt;$MTArchiveTitle$&gt;" /&gt;<br />
&lt;/MTArchiveNext&gt;</code></p>
</blockquote>

<p>Og legg dette til i din mal for arkiv for enkeltinnlegg, igjen umiddelbart etter <code class="sgmltag">&lt;head&gt;</code>-taggen:</p>

<blockquote>
<p><code>&lt;link rel="home" href="&lt;$MTBlogURL$&gt;" title="Hjem" /&gt;<br />
&lt;MTEntryPrevious&gt;<br />
&lt;link rel="prev" href="&lt;$MTEntryLink$&gt;" title="&lt;$MTEntryTitle$&gt;" /&gt;<br />
&lt;/MTEntryPrevious&gt;<br />
&lt;MTEntryNext&gt;<br />
&lt;link rel="next" href="&lt;$MTEntryLink$&gt;" title="&lt;$MTEntryTitle$&gt;" /&gt;<br />
&lt;/MTEntryNext&gt;</code></p>
</blockquote>

<p>I Greymatter, legg dette til umiddelbart etter <code class="sgmltag">&lt;head&gt;</code>-taggen i din 4 innleggside mal:</p>

<blockquote>
<p><code>&lt;link rel="home" title="Hjem" href="{{pageindexlink}}"&gt;<br />
&lt;link rel="prev" title="{{previousentrysubject}}" href="{{entrieswebpath}}/{{previousentrynumberpadded}}.html"&gt;<br />
&lt;link rel="next" title="{{nextentrysubject}}" href="{{entrieswebpath}}/{{nextentrynumberpadded}}.html"&gt;</code></p>
</blockquote>

<p>I Radio, er hele formålet forenklet av <a href="http://w3future.com/weblog/">Sjoerd Visscher</a>s navigasjonslenker for Radio, et sett med makroer for å gjøre nøyaktig dette.</p>

<ol>
<li><p><a href="http://w3future.com/weblog/gems/navigationLinks.zip">Last ned navigasjonslenker-makroer</a>.</p></li>

<li><p>Pakk ut nedlastingen og kopier de 4 filene (navigationLinks.txt, nextDayLink.txt, prevDayLink.txt, permalinkUrl.txt) til makro-mappen din. I standard installasjon på Windows, skulle dette bli <code class="filename">C:\Program Files\Radio UserLand\Macros</code>.</p></li>

<li><p>Sett denne koden inn i din hovedmal, umiddelbart etter <code class="sgmltag">&lt;head&gt;</code>;-taggen din:</p>

<blockquote>
<p><code>&lt;%navigationLinks()%&gt;</code></p>
</blockquote>
</li>
</ol>

<p>Jeg kjenner dessverre ikke noen tilfredsstillende måte å implementere forrige- og neste-lenker i Manila eller Blogger på, men du kan i det minste legge til lenken til din hjemmeside, umiddelbart etter <code class="sgmltag">&lt;head&gt;</code>-taggen din:</p>

<blockquote>
<p><code>&lt;link rel="home" title="Hjem" href="http://url/of/your/home/page"&gt;</code></p>
</blockquote>

<h3>Les mer</h3>

<ul>
<li><cite>Sjoerd Visscher</cite>: <a href="http://w3future.com/weblog/2002/06/20.html#a110">Navigasjonslenker i din Radio Userland weblogg</a>.</li>
</ul>
<p></p>
<span class="divider">&nbsp;</span>
</div> <!--entry-->

<div class="pageturn"><div class="inner">
<a href="dag_8_a_lage_meningsfylte_titler">&lt;&lt; Dag 8: Å lage meningsfylte titler</a> |
<a href="innholdsfortegnelse">Innholdsfortegnelse</a>
| <a href="dag_10_presentere_ditt_viktigste_innhold_forst">Dag 10: Presentere ditt viktigste innhold først &gt;&gt;</a>
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
<span class="currentpage">Dag 9: Tilby ekstra hjelpemidler til navigasjon</span></p>
</div><!--navigation-->

<?php include("stats.php"); ?>
</body>
</html>