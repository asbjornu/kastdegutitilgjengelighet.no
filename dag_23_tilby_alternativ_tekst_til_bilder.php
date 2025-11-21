<?php include("global.php"); ?>

<head>
<title>Dag 23: Tilby alternativ tekst til bilder - Kast deg ut i tilgjengelighet</title>

<?php include("linkrel.php"); ?>

<?php include("stilcharset.php"); ?>

<link rel="prev" href="dag_22_bruke_ekte_lister" title="Dag 22: Bruke ekte lister (eller etterlikne dem skikkelig)" />
<link rel="next" href="dag_24_tilby_alternativ_tekst_til_bildekart" title="Dag 24: Tilby alternativ tekst til bildekart" />
</head>
<body>

<?php include("logo.php"); ?>

<p></p>

<div id="main"><div class="inner">
<div class="entry">
<h2 class="entrysubject">Dag 23: Tilby alternativ tekst til bilder</h2>
<p class="firstparagraph">Dette er den viktigste dagen i hele serien, så følg med:</p>

<blockquote>
<p>Hvert eneste bilde på hver eneste side av nettstedet ditt burde ha en alternativ tekst, en såkalt «<code>alt</code>-tekst», spesifisert i <code>alt</code>-attributtet til <code class="sgmltag">&lt;img&gt;</code>-taggen.</p>
</blockquote>

<p>Skjermlesere leser den, tekstbasert nettlesere viser den, Google indekserer den, og visuelle nettlesere kan vise den som et verktøytips eller på statuslinjen (selv om du som designer kan overstyre dette). Vi har allerede sett hvordan man spesifiserer en <a href="dag_21_ignorere_avstandsbilder">tom <code>alt</code>-tekst for avstandsbilder</a>, og flere måter å lage tilgjengelige lister med bilde-kuler. Hva gjenstår?</p>

<ul>
<li>Permalenke-ikoner</li>
<li>«Med kraft fra»-ikoner</li>
<li>Send epost-ikoner</li>
<li>XML-ikoner</li>
<li>Liten grafikk som flyter innenfor meldingenes elementer</li>
<li>Hvilke som helst andre bilder du har lagt til i malen</li>
</ul>

<p>De trenger alle hensiktsmessige <code>alt</code>-tekster.</p>

<h3>Hvem har nytte av det?</h3>

<ol>
<li><a href="dag_1_anne">Anne</a> har nytte av det. <a href="http://www.freedomscientific.com/fs_products/software_jaws.asp">JAWS</a> leser <code>alt</code>-teksten. Uten en gyldig <code>alt</code>-tekst, hører Anne filnavnene i stedet, noe <a href="dag_21_ignorere_avstandsbilder">som høres forferdelig ut</a>.</li>
<li><a href="dag_5_marius">Marius</a> har nytte av det. Som en tekstbasert nettleser viser ikke <a href="http://www.fdisk.com/doslynx/lynxport.htm">Lynx</a> noen bilder, bare alt-tekst. Uten <code>alt</code>-teksten viser Lynx filnavnene, noe som ser like ille ut som det i JAWS høres.</li>
<li><a href="dag_2_jorgen">Jørgen</a> har nytte av det. Som en tekstbasert nettleser viser ikke <a href="http://links.sourceforge.net/">Links</a> noen bilder, bare <code>alt</code>-tekst. Uten noen <code>alt</code>-tekst, viser ikke Links noe for et bilde (medmindre bilde er en lenke, som da Links enkelt viser «<samp>[IMG]</samp>» for). Når han surfer med <a href="http://opera.com/">Opera</a> med bilder avslått, ser Jørgen <code>alt</code>-teksten i plassen til bildet.</li>
<li><a href="dag_4_lillian">Lillian</a> tjener på det. Internet Explorer viser <code>alt</code>-teksten som et verktøytips (selv om du som designer kan overstyre dette).</li>
<li><a href="http://google.no/">Google</a> har nytte av det. Googlebot indekserer <code>alt</code>-tekster, noe som ikke bare brukes til sammenligning av nøkkelord i normale søk, men også i bildesøkene. (Hvordan trodde du det virket?)</li>
</ol>

<h3>Hvordan gjøre det</h3>

<p>Movable Types standardmal inkluderer ikke noen <code class="sgmltag">&lt;img&gt;</code>-tagger. Hvis du bruker et grafisk «Med kraft fra Movable Type»-bilde, burde du forsikre deg om at <code class="sgmltag">&lt;img&gt;</code>-taggen inkluderer attributtet <code>alt="Med kraft fra Movable Type"</code>.</p>

<p>Greymatters standardmal inkluderer bare ett bilde, generert av <code>{{gmicon}}</code>-malvariabelen. Den genererer en <code>&lt;img&gt;</code>-tagg som inkluderer passende <code>alt</code>-tekst, «Med kraft fra Greymatter».</p>

<p>Radio auto-genererer passende <code>alt</code>-tekst for følgende standard-ikoner:</p>

<ul>
<li>XML coffee mug: <code>alt="Abonner på &lt;nettstedets navn&gt; i Radio UserLand"</code>.</li>
<li>XML icon: <code>alt="Klikk for å se XML-versjonen av denne nettsiden"</code>.</li>
<li>Mailto icon: <code>alt="Klikk her for å sende en epost til redaktøren av denne webloggen"</code>.</li>
</ul>

<p>Imidlertid må Radio-brukere manuelt spesifisere <code>alt</code>-tekster for tilpassede bilder. Gå til «<tt>Prefs</tt>», så «<tt>Customized Images</tt>» (<tt>Templates</tt>), og legg til disse <code>alt</code>-attributtene:</p>

<ul>
<li>Day-level permalink: <code>alt="Permanent lenke: &lt;%longDate%&gt;"</code>.</li>
<li>Item-level permalink: <code>alt="Permanent lenke"</code>.</li>
<li>Source link icon: <code>alt="kilde"</code>.</li>
<li>Enclosure link icon: <code>alt="vedlegg"</code>.</li>
</ul>

<p>Du kan også legge til <code>title=""</code> for å skjule verktøytips i visuelle nettlesere.</p>

<p>Selvfølgelig, uavhengig av ditt publiseringsverktøy, hvis du har lagt egne bilder til din mal, eller hvis du har smågrafikk flytende i dine meldingselementer, så trenger de alle en passende alt-tekst. Fordi jeg best lærer av eksempler, så får du her noen eksempler. Flere generelle prinsipper og eksempler er listet i «Les mer»-seksjonen.</p>

<h3>Eksempler på dårlig <code>alt</code>-tekst</h3>

<ul>
<li>Enhver HTML-oppmerking. <code>alt</code>-tekst kan kun inneholde ren tekst og bokstavkoder, ingen tagger.</li>
<li><code>alt="filnavn.jpg"</code>. Dette får vi ingenting ut av. Hva er grafikkens funksjon? Vi bryr oss ikke om hva den kalles.</li>
<li><code>alt="alt-tekst"</code>. Satt inn av noen HTML-editorer som en påminnelse, og latt være der av dumme designere.</li>
<li><code>alt="Klikk her!"</code> Tjener ingen nyttig hensikt (medmindre, selvfølgelig, den er på grafikk som sier «Klikk her!»).</li>
<li><code>alt="Skru på bilder!"</code> Dette er som å bli spurt av en blind person hvor mye klokken er, og svare, «Bare åpne opp øynene dine!» Det kan være en årsak til at bilder er avslått. (Jørgens lave båndbredde), de kan være utilgjengelige (Marius' tekstbaserte nettleser), eller de er kanskje ikke avslått i det hele tatt (Annes skjermleser, som viser bilder men leser opp <code>alt</code>-tekst).</li>
<li><a href="http://ppewww.ph.gla.ac.uk/~flavell/alt/alt-text.html#howlers">Flere eksempler på dårlig <code>alt</code>-tekst</a>.</li>
</ul>

<h3>Eksempler på god <code>alt</code>-tekst</h3>

<ul>
<li><a href="http://weblog.delacour.net/">Jonathon Delacour</a> har grafikk i overskriften på siden sin med et kinesisk symbol. <code>alt="Site logo: xin, the Chinese character for heart"</code>.</li>
<li><a href="http://leslie.harpold.com/">Leslie Harpold</a> har en grafisk sideoverskrift som inneholder nettstedets navn, «The Historical Present», og slagordet, «Hypermodernism has a posse». <code>alt="the historical present: hypermodernism has a posse"</code>.</li>
<li><a href="http://www.bath.ac.uk/~cs1spw/blog/">Simon Willison</a> har et «W3C XHTML 1.0»-merke. <code>alt="Valid XHTML 1.0!"</code></li>
<li><a href="http://www.zeldman.com/">Jeffrey Zeldman</a> har en navigasjonsmeny med tekst-som-grafikk; på rollover, all grafikk får et lite slagord satt inn i statusfeltet med et Javaskript. Selvfølgelig så får ikke blinde brukere med seg dette, så Zeldman har også satt den samme teksten inn i <code>alt</code>-teksten til grafikken. Smart.</li>
<li><a href="http://www.textism.com/">Dean Allen</a> har grafikk i overskriften på nettsiden sin som inkluderer navnet på nettstedet og et slagord. Hans <code>alt</code>-tekst er blant de lange og inkluderer et annet slagord (som er litt forvirrende), men Dean er kul nok til å slippe unna med det. <code>alt="Textism is an ephemeris focused on the composition, design, and reading of text. In addition, there will be pie"</code>. Merk deg: Du er sannsynligvis ikke kul nok til å slippe unna med å gjøre dette. Hold deg til det enkle.</li>
</ul>

<h3>Les mer</h3>

<ul>
<li><cite>A. J. Flavell</cite>: <a href="http://ppewww.ph.gla.ac.uk/~flavell/alt/alt-text.html">ALT texts in IMG</a>.</li>
<li><cite>Jukka Korpela</cite>: <a href="http://www.cs.tut.fi/~jkorpela/html/alt.html">Simple guidelines on using ALT texts in IMG elements</a>.</li>
<li><cite>Ian Hickson</cite>: <a href="http://www.hixie.ch/advocacy/alttext">Mini-FAQ about the alternate text of images</a>.</li>
<li><cite>Watchfire.com</cite>: <a href="http://bobby.watchfire.com/bobby/html/en/gls/g9.html">Provide alternative text for all images</a>.</li>
<li><cite>All My FAQs Wiki</cite>: <a href="http://www.allmyfaqs.com/cgi-bin/wiki.pl?ALT_attribute">ALT attribute</a>.</li>
<li><cite><acronym title="Web Accessibility in Mind">WebAIM</acronym></cite>: <a href="http://www.webaim.org/howto/accessiblegraphics3">How to Create Accessible Graphics</a>.</li>
<li><cite>Martin Schrode</cite>: <a href="http://www.schrode.net/design/alttext.html">On accessible advertising</a>.</li>
<li><cite>Section 508 Federal Accessibility Guidelines</cite>: <a href="http://www.access-board.gov/sec508/guide/1194.22.htm#(a)">What is meant by a text equivalent?</a></li>
</ul>

<p></p>
<span class="divider">&nbsp;</span>
</div> <!--entry-->

<div class="pageturn"><div class="inner">
<a href="dag_22_bruke_ekte_lister">&lt;&lt; Dag 22: Bruke ekte lister (eller etterlikne dem skikkelig)</a> |
<a href="innholdsfortegnelse">Innholdsfortegnelse</a>
| <a href="dag_24_tilby_alternativ_tekst_til_bildekart">Dag 24: Tilby alternativ tekst til bildekart &gt;&gt;</a>
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
<span class="currentpage">Dag 23: Tilby alternativ tekst til bilder</span></p>
</div><!--navigation-->

<?php include("stats.php"); ?>
</body>
</html>