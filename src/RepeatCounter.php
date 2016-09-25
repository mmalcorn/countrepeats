<?php

   class RepeatCounter
   {
       private $word;
       private $sentence;
       private $count;

       function __construct($word, $sentence, $count=0)
       {
           $this->word = $word;
           $this->sentence = $sentence;
           $this->count = $count;
       }

       function getWord()
       {
           return $this->word;
       }

       function setWord($input_word)
       {
           $this->word = (string) $input_word;
       }

       function getSentence()
       {
           return $this->sentence;
       }

       function setSentence($input_sentence)
       {
           $this->sentence = (string) $input_sentence;
       }

       function getCount()
       {
           return $this->count;
       }

       function setCount($word_count)
       {
           $this->count = (int) $word_count;
       }

       function countRepeats()
       {
            $input_sentence = explode(" ", $this->getSentence());
            $input_word = $this->getWord();
            $word_count = $this->getCount();

            for ($index = 0; $index < count($input_sentence); $index++)
            {
                if ($input_word === $input_sentence[$index])
                {
                $word_count++;
                }
            }

         return $word_count;

        }
   }

?>
