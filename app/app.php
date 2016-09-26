<?php

    require_once(__DIR__ . "/../vendor/autoload.php");
    require_once(__DIR__ . "/../src/RepeatCounter.php");

    $app = new Silex\Application();
    $app->register(new Silex\Provider\TwigServiceProvider(), array("twig.path" => __DIR__ . "/../views"));

    $app->get("/", function() use($app) {
        return $app["twig"]->render("word_count.html.twig");
    });

    $app->get("/word_count", function() use($app){
        $word = $_GET["word"];
        $sentence = $_GET["sentence"];
        $repeat_counter_instance = new RepeatCounter($word, $sentence);
        $word_count = $repeat_counter_instance->countRepeats();

        return $app["twig"]->render("word_count_result.html.twig", array("inputted_word" => $word, "inputted_sentence" => $sentence, "word_count" => $word_count));
    });

    return $app;
?>
