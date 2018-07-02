

$registry = new Registry();

$registry->register(new Observer());

$director = new Director($registry);
$text = $director->run(new ArrayShortCode());

$parser = new Parser($director);
$parser->parse($text);
