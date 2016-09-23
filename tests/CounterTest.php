<?php
    require_once __DIR__.'/../src/Counter.php';

    class Test_RepeatCounter extends PHPUnit_Framework_TestCase
    {
        function test_single_word()
        {
            // Arrange
            $test_Counter = new Counter();
            $word = "potato";
            $sentence = "potato";
            $partial_matches = false;
            // Act
            $result = $test_RepeatCounter->CountRepeats($word, $sentence, $partial_matches);
            // Assert
            $this->assertEquals(1, $result);
        }
        function test_partial_match_false()
        {
            // Arrange
            $test_RepeatCounter = new RepeatCounter();
            $word = "test";
            $sentence = "testing";
            $partial_matches = false;
            // Act
            $result = $test_RepeatCounter->CountRepeats($word, $sentence, $partial_matches);
            // Assert
            $this->assertEquals(0, $result);
        }
        function test_2_matches()
        {
            // Arrange
            $test_RepeatCounter = new RepeatCounter();
            $word = "test";
            $sentence = "test for test in tests";
            $partial_matches = false;
            // Act
            $result = $test_RepeatCounter->CountRepeats($word, $sentence, $partial_matches);
            // Assert
            $this->assertEquals(2, $result);
        }
        function test_patial_match_true()
        {
            // Arrange
            $test_RepeatCounter = new RepeatCounter();
            $word = "test";
            $sentence = "testing for tests";
            $partial_matches = true;
            // Act
            $result = $test_RepeatCounter->CountRepeats($word, $sentence, $partial_matches);
            // Assert
            $this->assertEquals(2, $result);
        }
        function test_mixed_case()
        {
            // Arrange
            $test_RepeatCounter = new RepeatCounter();
            $word = "test";
            $sentence = "teST";
            $partial_matches = false;
            // Act
            $result = $test_RepeatCounter->CountRepeats($word, $sentence, $partial_matches);
            // Assert
            $this->assertEquals(1, $result);
        }
    }
 ?>
