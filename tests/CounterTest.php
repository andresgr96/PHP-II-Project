<?php
    require_once __DIR__."/../src/Counter.php";

    class word_counterTest extends PHPUnit_Framework_TestCase
    {
        function testcount_single_word()
        {
            //Arrange
            $test_counter = new Counter;
            $test_target = "bruh";
            $test_sentence = "bruh";
            //Act
            $result = $test_counter->count_word($test_target, $test_sentence);
            //Assert
            $this->assertEquals(1, $result);
        }

        function testcount_multiple_words()
        {
            //Arrange
            $test_counter = new Counter;
            $test_target = "brutha";
            $test_sentence = "brutha brutha";
            //Act
            $result = $test_counter->count_word($test_target, $test_sentence);
            //Assert
            $this->assertEquals(2, $result);
        }

        function testcount_sentece_word()
        {
            //Arrange
            $test_counter = new Counter;
            $test_target = "bro";
            $test_sentence = "bro brutha bro";
            //Act
            $result = $test_counter->count_word($test_target, $test_sentence);
            //Assert
            $this->assertEquals(2, $result);
        }

        function testcount_no_match()
        {
            //Arrange
            $test_counter = new Counter;
            $test_target = "cus";
            $test_sentence = "You can only call me bruh, bro.";
            //Act
            $result = $test_counter->count_word($test_target, $test_sentence);
            //Assert
            $this->assertEquals(0, $result);
        }
    }
?>
