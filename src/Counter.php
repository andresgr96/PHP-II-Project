<?php
    class Counter
    {
      private $count = 0;

      function getCount()
      {
        return $this->count;
      }

        function count_word($word_input, $sentence)
        {
            $sentence_lower = strtolower($sentence);

            $sentence_words = explode(" ", $sentence_lower);

            foreach($sentence_words as $word)
            {
                if($word === $word_input)
                {
                    $this->count++;
                }

            }
            return $this->count;

        }
    }
?>
