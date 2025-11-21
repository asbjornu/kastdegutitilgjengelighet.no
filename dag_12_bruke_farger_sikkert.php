<?php include("global.php"); ?>

<head>
<title>Dag 12: Bruke farger sikkert - Kast deg ut i tilgjengelighet</title>

<?php include("linkrel.php"); ?>

<?php include("stilcharset.php"); ?>

<link rel="prev" href="dag_11_hoppe_over_navigasjonslenker" title="Dag 11: Hoppe over navigasjonslenker" />
<link rel="next" href="dag_13_bruke_ekte_lenker" title="Dag 13: Bruke ekte lenker" />
</head>
<body>

<?php include("logo.php"); ?>

<p></p>

<div id="main"><div class="inner">
<div class="entry">
<h2 class="entrysubject">Dag 12: Bruke farger sikkert</h2>
<p class="firstparagraph">Dette tipset er en generell regel som kan anvendes på mange områder innen webdesign, men jeg vil fokusere på ett spesifikt eksempel som er vanlig blant weblogger: Lenketekst.</p>
<p>Det er to potensielle problemer relatert til farge. For det første kan det hende lenketeksten din ikke har tilstrekkelig kontrast til bakgrunnsfargen. Hvilke som helst lyse farger på en hvit bakgrunn er problematisk; lenketeksten kan simpelthen forsvinne inn i bakgrunnen. Tilsvarende er det problematisk med mørke farger på sort bakgrunn. Dette gjelder selvfølgelig all tekst, ikke bare lenketekst, men det er ganske vanlig på weblogger at tekst er leselig og lenker utilsiktet er gjort uleselige, derfor nevner jeg særskilt lenker.</p>
<p>Det andre potensielle problemet er lenkedekorasjonen. Selv om stilsettet ditt gir linkene en annen farge enn resten av teksten må du forsikre deg om at de også kan skjelnes på en annen måte, for eksempel med fet, kursiv eller understreket tekst. Ellers kan lenkene riktignok være fullstendig leselige, men fargeblinde mennesker vil ikke se at de er lenker. Dette er illustrert nedenfor.</p>

<h3>Hvem har nytte av det?</h3>

<ol>
<li><p><a href="dag_5_marius">Marius</a> tjener på det. Her er en prøve med skjermskudd av tre forskjellige dekorasjoner for lenker.</p>
<p><img alt="Picture of three links using various color schemes, description follows" src="images/linkcolor.gif" width="325" height="90" /></p>
<p>Som vist, lenken i den første setningen bruker standard dekorasjon, og vises som blå/purpur og understreket i visuelle nettlesere. På den andre lenken er det anvendt to former til tekstdekorasjon, og vises med fet og rød (men ikke understreket). På den tredje lenken er det kun anvendt én form til tekstdekorasjon, og vises kun som rød.</p>
<p>Her er nå de tre samme lenkene, slik Marius ser dem.</p>
<p><img alt="Picture of same three links as Michael sees them, description follows" src="images/linkcolorblind.gif" width="325" height="90" /></p>
<p>Som vist, den første lenken er fortsatt synlig; Marius' fargeblindhet er ikke påvirket av den blå fargen. I den andre setningen, det rødlige på lenken viskes ut, nesten til sort, men lenken ser fortsatt fet ut, så Marius kan fortsatt skjelne den. Problemet oppstår i den tredje lenken, som før bare kunne skjelnes med dens rødlige farge; nå som det rødlige har blitt visket ut til sort, er det praktisk talt umulig å avgjøre hvilket ord som er en lenke og hvilke ord som er normal tekst.</p>
</li>
</ol>

<h3>Hvordan gjøre det</h3>

<p>For å sjekke for «tilfredsstillende kontrast» mellom din tekstfarge og bakgrunnsfarge, bruk <a href="http://www.vischeck.com/vischeck/">VisCheck</a> for å simulere hvordan nettsiden din ser ut for en fargeblind leser.</p>
<p>For å sjekke for lenkedekorasjons-problemer, se i dine <acronym title="cascading style sheet">CSS</acronym>-regler etter «a» taggen. For eksempel, hvis du har en regel som dette i din <acronym title="cascading style sheet">CSS</acronym>, da er dine lenker kun skilt ut med deres rødhet, noe som ikke er bra:</p>

<blockquote>
<pre><code>a {
  text-decoration: none;
  color: red;
}</code></pre>
</blockquote>

<p>Du kan beholde dine lenker røde, men du trenger å forsikre deg om at lenkene også er fete, eller understreket, eller kursiviserte. For å gjøre dem fete såvel som røde, legg til en linje:</p>

<blockquote>
<pre><code>a {
  text-decoration: none;
  color: red;
  font-weight: bold; /* legg til denne linjen */
}</code></pre>
</blockquote>

<h3>Les mer</h3>

<ul>
<li><a href="http://www.vischeck.com/vischeck/">VisCheck</a> simulerer fargeblindhet og lar deg se hva fargeblinde mennesker ser. Du kan sjekke et enkelt bilde eller en hel nettside.</li>
<li><cite>Cal Henderson</cite>: <a href="http://www.iamcal.com/toys/colors/">Color Vision</a>. Viser fargespektrumet slik som mennesker med forskjellige typer fargeblindhet ser det.</li>
<li><a href="http://www.toledo-bend.com/colorblind/Ishihara.html">Ishihara Test for Color Blindness</a> inneholder en rekke med bilder som mennesker med rød-grønn fargeblindhet ser forskjellig, eller ikke ser i det hele tatt.</li>
</ul>

<p></p>
<span class="divider">&nbsp;</span>
</div> <!--entry-->

<div class="pageturn"><div class="inner">
<a href="dag_11_hoppe_over_navigasjonslenker">&lt;&lt; Dag 11: Hoppe over navigasjonslenker</a> |
<a href="innholdsfortegnelse">Innholdsfortegnelse</a>
| <a href="dag_13_bruke_ekte_lenker">Dag 13: Bruke ekte lenker &gt;&gt;</a>
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
<span class="currentpage">Dag 12: Bruke farger sikkert</span></p>
</div><!--navigation-->

<?php include("stats.php"); ?>
</body>
</html>