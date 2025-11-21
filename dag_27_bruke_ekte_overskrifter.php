<?php include("global.php"); ?>

<head>
<title>Dag 27: Bruke ekte overskrifter - Kast deg ut i tilgjengelighet</title>

<?php include("linkrel.php"); ?>

<?php include("stilcharset.php"); ?>

<link rel="prev" href="dag_26_bruke_relative_fontstorrelser" title="Dag 26: Bruke relative fontstørrelser" />
<link rel="next" href="dag_28_merking_av_skjema-elementer" title="Dag 28: Merking av skjema-elementer" />
</head>
<body>

<?php include("logo.php"); ?>

<p></p>

<div id="main"><div class="inner">
<div class="entry">
<h2 class="entrysubject">Dag 27: Bruke ekte overskrifter</h2>
<p class="firstparagraph">Se for deg hjemmesiden din sine hovedtrekk. Det øverste nivået er merket opp med nettstedets navn. På forsiden din lister du innlegg fra flere dager, så det andre nivået ditt er merket opp med datoenes beskrivelser: «Tirsdag 16. juli 2002», eller noe lignende. Hver dag poster du flere innlegg, og hvert av dem har muligens sine egne titler. Da har du i så fall et tredje nivå også, merket opp med hvert sitt innleggs individuelle titler.</p>
<p>Marker nå opp nettstedet ditt ved å bruke ekte <code>&lt;h1&gt;</code>, <code>&lt;h2&gt;</code>, <code>&lt;h3&gt;</code>-tagger. Skjermlesere er avhengige av disse for å kunne tyde strukturen til sidene dine. Sidene dine <em>har en</em> struktur, men uten passende overskrifts-tagger kan ikke skjermlesere finne den. Jeg vil straks vise deg hvordan du bruker CSS til å få overskriftene dine til å se like ut i visuelle nettlesere som hvilke som helst <code>&lt;font&gt;</code>-basert monstrum du for øyeblikket måtte bruke.</p>

<h3>Hvem har nytte av det?</h3>

<ol>
<li><a href="dag_1_anne">Anne</a> har nytte av det. Straks Anne kommer til siden din sier <a href="http://www.freedomscientific.com/fs_products/software_jaws.asp">JAWS</a> fra om at siden har et visst antall med lenker og overskrifter. Anne kan da trykke <kbd>INSERT+F6</kbd> for å høre alle overskriftene på siden din bli lest opp, eller <kbd>CTRL+INSERT+ENTER</kbd> for å raskt navigere gjennom siden din ved å hoppe til den neste overskriften.</li>
<li><a href="dag_2_jorgen">Jørgen</a> har nytte av det. I <a href="http://www.opera.com/">Opera</a> kan han trykke <kbd>S</kbd> for å hoppe til den neste overskriften, eller <kbd>W</kbd> for å hoppe tilbake til den forrige.</li>
<li><a href="http://www.google.no/">Google</a> har nytte av det. Google setter pris på godt strukturerte sider, og rangerer nøkkelord høyere når de befinner seg i taggene til ekte overskrifter. (Enda en grunn til å bruke ekte overskrifter i postenes titler.)</li>
</ol>

<h3>Hvordan gjøre det: Movable Type</h3>

<ol>
<li><p>Definer stilen til logoen for nettstedet ditt. I malen til stilarket ditt (<code>styles-sites.css</code>), legger du til følgende linjer:</p>

<blockquote>
<pre><code>h1, h2, h3 {
  margin: 0;
  padding: 0;
}

h1 {
  font-size: 20px;
  font-weight: normal;
}

/*/*/a{}
h1 {font-size: 100%}
/* */</code></pre>
</blockquote>
</li>


<li><p>Definer logoen til nettstedet ditt ved å bruke en <code>&lt;h1&gt;</code>-tagg. I dine 4 viktigste maler (Main Index, Category Archive, Date-Based Archive, Individual Entry Archive), søker du så for dette:</p>

<blockquote>
<pre><code>&lt;div id="banner"&gt;
&lt;$MTBlogName$&gt;&lt;br /&gt;</code></pre>
</blockquote>

<p>Og erstatter det med dette:</p>

<blockquote>
<pre><code>&lt;div id="banner"&gt;
<strong>&lt;h1&gt;</strong>&lt;$MTBlogName$&gt;<strong>&lt;/h1&gt;</strong></code></pre>
</blockquote>
</li>

<li><p>Definer dine dato-overskrifter ved å bruke <code>&lt;h2&gt;</code>-tagger. Vi har allerede en klasse (class) definert for disse, så vi burde ikke trenge å gjøre noen endringer i stilarket; vi bare endrer på taggen. I dine 4 viktigste maler, søker du for dette:</p>

<blockquote>
<pre><code>&lt;div class="date"&gt;
&lt;$MTEntryDate format="%B %d, %Y"$&gt;
&lt;/div&gt;</code></pre>
</blockquote>

<p>Og erstatter det med dette:</p>

<blockquote>
<pre><code>&lt;<strong>h2</strong> class="date"&gt;
&lt;$MTEntryDate format="%B %d, %Y"$&gt;
&lt;/<strong>h2</strong>&gt;</code></pre>
</blockquote>
</li>

<li><p>Definer titlene til innleggene dine ved å bruke <code>&lt;h3&gt;</code>-tagger. Igjen, dette innvolverer kun å endre på taggen, ikke på stilarket. I dine 4 viktigste maler søker du for dette:</p>

<blockquote>
<p><code>&lt;span class="title"&gt;&lt;$MTEntryTitle$&gt;&lt;/span&gt;</code></p>
</blockquote>

<p>Og erstatter det med dette:</p>

<blockquote>
<p><code>&lt;<strong>h3</strong> class="title"&gt;&lt;$MTEntryTitle$&gt;&lt;/<strong>h3</strong>&gt;</code></p>
</blockquote>
</li>
</ol>

<h3>Hvordan gjøre det: Radio</h3>

<ol>
<li><p>Definer stilen til overskriftene dine. Standard-temaet til Radio bruker ikke ekte tagger for overskrifter, så vi blir nødt til å definere disse selv. (Skreddersydd til å passe, så disse eksemplene burde gjøre at sidene dine ser like ut som de gjorde før i visuelle nettlesere.)</p>
<p>Dog, før vi starter, søk i ditt Home Page Template etter «<code>h2 {</code>». Hvis du finner en slik regel, fjern den; den er egentlig ikke brukt noen steder, og den kommer bare til å være i veien for deg:</p>

<blockquote>
<p><code>h2 {<br />
font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 24px; font-weight: bold<br />
}</code></p>
</blockquote>
</li>

<li><p>OK, legg nå til disse stilene, hvor som helst i <code>&lt;style&gt;</code>-seksjonen i ditt Home Page Template:</p>

<blockquote>
<pre><code>h1, h2 {
  margin: 0;
  padding: 0;
}

h1 {font-size: 24px}
h2 {font-size: 13px}

/*/*/a{}
h1 {
  font-size: large;
  voice-family: "\"}\"";
  voice-family: inherit;
  font-size: x-large;
}
html>body h1 {
  font-size: x-large;
}
h2 {
  font-size: x-small;
  voice-family: "\"}\"";
  voice-family: inherit;
  font-size: small;
}
html>body h2 {
  font-size: small;
}
/* */</code></pre>
</blockquote>

<p>Legg merke til at vi bruker relative fontstørrelser for våre overskrifter i nettlesere som har støtte for relative fontstørrelser, og absolutte fontstørrelser i Netscape 4. Denne teknikken burde se kjent ut, <a href="dag_26_bruke_relative_fontstorrelser">vi gjorde jo akkurat det samme i går</a>.</p>
</li>

<li><p>Definer overskriften for nettstedet ditt sitt navn. I ditt Home Page Template søker du for «<code>&lt;%siteName%&gt;</code>» og finner en linje som ser slik ut:</p>

<blockquote>
<p><code>&lt;font size="+2"&gt;&lt;b&gt;&lt;a href="&lt;%radio.macros.weblogUrl ()%&gt;" style="color:Black; text-decoration:none"&gt;&lt;%siteName%&gt;&lt;/a&gt;&lt;/b&gt;&lt;/font&gt;</code></p>
</blockquote>

<p>Endre det så til dette:</p>

<blockquote>
<p><code><strong>&lt;h1&gt;</strong>&lt;a href="&lt;%radio.macros.weblogUrl ()%&gt;" style="color:Black; text-decoration:none"&gt;&lt;%siteName%&gt;&lt;/a&gt;<strong>&lt;/h1&gt;</strong></code></p>
</blockquote>
</li>

<li><p>Definer overskriften for dine dato-overskrifter. I ditt Day Template søker du for «<code>&lt;%longDate%&gt;</code>» og finner en linje som ser slik ut:</p>

<blockquote>
<p><code>&lt;b&gt;&lt;%longDate%&gt;&lt;/b&gt;</code></p>
</blockquote>

<p>Endre den så til dette:</p>

<blockquote>
<p><code><strong>&lt;h2&gt;</strong>&lt;%longDate%&gt;<strong>&lt;/h2&gt;</strong></code></p>
</blockquote>
</li>
</ol>

<h3>Les mer</h3>

<ul>
<li><cite>Shirley Kaiser</cite>: <a href="http://www.brainstormsandraves.com/2002_05_12_archive.shtml#76539537">Don't Fake Your Markup</a>: Accessibility Issues for CSS.</li>
</ul>

<p></p>
<span class="divider">&nbsp;</span>
</div> <!--entry-->

<div class="pageturn"><div class="inner">
<a href="dag_26_bruke_relative_fontstorrelser">&lt;&lt; Dag 26: Bruke relative fontstørrelser</a> |
<a href="innholdsfortegnelse">Innholdsfortegnelse</a>
| <a href="dag_28_merking_av_skjema-elementer">Dag 28: Merking av skjema-elementer &gt;&gt;</a>
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
<span class="currentpage">Dag 27: Bruke ekte overskrifter</span></p>
</div><!--navigation-->

<?php include("stats.php"); ?>
</body>
</html>