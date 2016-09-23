<?php
    class Counter
    {
      private $count = 0;

      function getCount()
      {
        return $this->count;
      }

        function count_word($target, $sentence)
        {
            $sentence_lower = strtolower($sentence);

            $sentence_words = explode(" ", $sentence_lower);

            foreach($sentence_words as $word)
            {
                if($word === $target)
                {
                    $this->count++;
                }

            }
            return $this->count;

        }
    }
?>
