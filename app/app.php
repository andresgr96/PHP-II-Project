<?php

    require_once __DIR__."/../vendor/autoload.php";

    require_once __DIR__."/../src/Counter.php";

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__."/../views"));

    $app->get('/', function() use($app)
    {
        return $app['twig']->render('form.html.twig');
    });

    $app->post('/result', function() use ($app)
    {
        $new_counter = new Counter();
        $target_word = $_POST['word_input'];
        $sentence = $_POST['sentence'];
        $new_counter->count_word($target_word, $sentence);

        return $app['twig']->render('form.html.twig', array('count'=>$new_counter, 'word'=>$target_word));
    });

    return $app;
?>
