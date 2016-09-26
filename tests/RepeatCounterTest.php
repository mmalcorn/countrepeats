<?php
    require_once "src/RepeatCounter.php";

    class RepeatCounterTest extends PHPUnit_Framework_TestCase
    {
        function testOneCount()
        {
            //Arrange
            $input_word = "cat";
            $input_sentence = "The cat";
            $expected_count = 1;
            $test_instance = new RepeatCounter($input_word, $input_sentence);

            //Act
            $result = $test_instance->countRepeats();

            //Assert
            $this->assertEquals($expected_count, $result);
        }

        function testTwoCount()
        {
            //Arrange
            $input_word = "cat";
            $input_sentence = "The cat is a cat";
            $expected_count = 2;
            $test_instance = new RepeatCounter($input_word, $input_sentence);

            //Act
            $result = $test_instance->countRepeats();

            //Assert
            $this->assertEquals($expected_count, $result);
        }

        function testZeroCount()
        {
            //Arrange
            $input_word = "cat";
            $input_sentence = "The dog is a dog";
            $expected_count = 0;
            $test_instance = new RepeatCounter($input_word, $input_sentence);

            //Act
            $result = $test_instance->countRepeats();

            //Assert
            $this->assertEquals($expected_count, $result);

        }

   }

?>
