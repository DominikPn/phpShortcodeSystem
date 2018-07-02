


$test= 'adad[asdasd]asdasdasdasd';

$parser = new Parser();

$registry = new Registry();

$parser->parse($test, function ($parser, $shortcode) use $registry{
    return $registry->notifyObservers($shortcode);
});