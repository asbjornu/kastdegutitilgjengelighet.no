<?php include("global.php"); ?>

<head>
<title>Dag 7: Å fastsette språket ditt - Kast deg ut i tilgjengelighet</title>

<?php include("linkrel.php"); ?>

<?php include("stilcharset.php"); ?>

<link rel="prev" href="dag_6_a_velge_en_doctype" title="Dag 6: Å velge en DOCTYPE" />
<link rel="next" href="dag_8_a_lage_meningsfylte_titler" title="Dag 8: Å lage meningsfylte titler" />
</head>
<body>

<?php include("logo.php"); ?>

<p></p>

<div id="main"><div class="inner">
<div class="entry">
<h2 class="entrysubject">Dag 7: Å fastsette språket ditt</h2>
<p class="firstparagraph">Du vet hvilket språk du skriver med, så fortell det til brukerne dine ... og programvaren deres.</p>

<h3>Hvem har nytte av det?</h3>

<ol>
<li><a href="dag_1_anne">Anne</a> har nytte av det. Skjermleserprogrammet hennes (<a href="http://www.freedomscientific.com/fs_products/software_jaws.asp">JAWS</a>) må vite hvilket språk sidene dine er skrevet i for å kunne uttale ordene riktig når den leser opp teksten på sidene. Hvis du ikke opplyser om hvilket språk du bruker vil JAWS prøve å gjette, og den kan gjette feil, særlig hvis du siterer kildekode eller annet ikke-språklig innhold.</li>
<li><a href="http://google.no/">Google</a> har nytte av det, selv om du skriver på engelsk, men spesielt hvis du bruker et annet språk. Ifølge <a href="http://www.google.com/press/zeitgeist.html">Google Zeitgeist</a> søker 50% av Google-brukerne på andre språk enn engelsk, og mange av disse setter <a href="http://www.google.com/preferences">Google-innstillingene</a> sine slik at det bare søkes etter sider med bestemte språk. Googles algoritmer for å gjette språk er bedre enn de fleste, men hvorfor gjøre jobben til Google vanskeligere enn nødvendig?</li>
</ol>

<h3>Hvordan gjøre det</h3>

<p>Først må du finne den riktige to-bokstavskoden for språket du bruker. Koden for norsk er «<code>no</code>», koden for engelsk er «<code>en</code>», fransk er «<code>fr</code>» og koden for tysk er «<code>de</code>». Bruker du et annet språk kan du <a href="http://www.loc.gov/standards/iso639-2/englangn.html">finne språkkoden din her</a>. Kodene skiller ikke mellom små og store bokstaver.</p>

<p>Nå kan du sette inn språkkoden din i <code class="sgmltag">&lt;html&gt;</code>-taggen. Nøyaktig hvordan dette gjøres er avhengig av hvilken HTML-versjon du bruker. <a href="dag_6_a_velge_en_doctype">Se på <code class="sgmltag">DOCTYPE</code>-en din</a> og gjør deretter en av de følgende:</p>

<ol>
<li><p>Hvis du bruker en (hvilken som helst) variant av HTML 4, endre <code class="sgmltag">&lt;html&gt;</code>-taggen din til dette (bytt ut koden med den riktige for språket du skriver dersom det ikke er norsk):</p>

<blockquote>
<p><code class="sgmltag">&lt;html lang="no"&gt;</code></p>
</blockquote>
</li>

<li><p>Hvis du bruker en variant av <code class="sgmltag">XHTML 1.0</code>, endre <code class="sgmltag">&lt;html&gt;</code>-taggen til dette (endre om nødvendig språkkoden begge stedene):</p>

<blockquote>
<p><code class="sgmltag">&lt;html xmlns="http://www.w3.org/1999/xhtml" lang="no" xml:lang="no"&gt;</code></p>
</blockquote>
</li>

<li><p>Hvis du bruker <code class="sgmltag">XHTML 1.1</code>, <code class="sgmltag">&lt;html&gt;</code>-taggen til dette (igjen, endre språkkoden hvis du ikke skriver på norsk):</p>

<blockquote>
<p><code class="sgmltag">&lt;html xmlns="http://www.w3.org/1999/xhtml" xml:lang="no"&gt;</code></p>
</blockquote>
</li>
</ol>

<p>Som med <code class="sgmltag">DOCTYPE</code>, bør du oppgi hvilket språk du bruker på hver side i nettstedet ditt.</p>

<p>En liten tilleggsopplysning: Hvis du bruker mer enn ett språk på en side, kan du spesifisere språket for enkelte elementer. Hvis du for eksempel har en webside som bruker HTML 4 og hovedsaklig er skrevet på norsk, men siterer en engelsk artikkel, kan du merke det opp slik:</p>

<blockquote>
<pre><code class="sgmltag">&lt;html lang="no"&gt;
  ...
  &lt;blockquote lang="en"&gt;
    ...
  &lt;/blockquote&gt;</code>
</pre>
</blockquote>

<h3>Les mer</h3>

<ul>
<li><a href="http://www.loc.gov/standards/iso639-2/englangn.html">Oversikt over språkkoder</a>.</li>
<li><a href="http://www.w3.org/TR/REC-html40/struct/dirlang.html#h-8.1">lang-attributtet i <acronym title="hypertext markup language">HTML</acronym>-spesifikasjonen</a>.</li>
<li><a href="http://lists.w3.org/Archives/Public/w3c-wai-ig/2001AprJun/0713.html">Jim Thatcher om støtte for <code class="sgmltag">lang</code>-attributtet i skjermlesere</a>. Han beskriver algoritmene deres for å automatisk finne ut hvilket språk som er brukt som «svært mangelfull». Og han burde vite hva han snakker om, siden han har skrevet algoritmen for <a href="http://www-3.ibm.com/able/hpr.html">Home Page Reader</a>. Andre skjermlesere har lagt til støtte for lang-attributtet siden han skrev denne kommentaren, men språkgjettingsalgoritmene deres er fremdeles svært mangelfulle, noe som gjør det enda viktigere og nyttigere å oppgi språket.</li>
</ul>

<p></p>
<span class="divider">&nbsp;</span>
</div> <!--entry-->

<div class="pageturn"><div class="inner">
<a href="dag_6_a_velge_en_doctype">&lt;&lt; Dag 6: Å velge en DOCTYPE</a> |
<a href="innholdsfortegnelse">Innholdsfortegnelse</a>
| <a href="dag_8_a_lage_meningsfylte_titler">Dag 8: Å lage meningsfylte titler &gt;&gt;</a>
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
<span class="currentpage">Dag 7: Å fastsette språket ditt</span></p>
</div><!--navigation-->

<?php include("stats.php"); ?>
</body>
</html>