<?php
    $title = "Error 404";
    $keywords = "404, sivua, ei, löydy";
    $description = "Virhe! Sivua ei löytynyt! (En kyllä tajua miksi tämä on hakukoneessasi? o.o)";
    $lisakoodi = '<meta name="robots" content="noindex,nofollow" />';

    include_once "includes/top.php";

    $sivuurl = htmlspecialchars($_SERVER['REQUEST_URI']);
    $sivuurl = str_replace("/", "", $sivuurl);
?>

<h1>Virhe! (404)</h1>

<p>
	Olen pahoillani, mutta sivua <strong><?php echo $sivuurl; ?></strong> ei löytynyt!
</p>

<?php
    include_once "includes/bottom.php";
?>
