<?php
class Counter
{
    private $word;
    private $matches;
    private $sentence;

    function getWord()
    {
      return (string) $this->word;
    }

    function getMatches()
    {
      return $this->matches:
    }

    function getSentence()
    {
      return $this->sentence;
    }

    function count($word, $partial_matches, $sentence) {
            $word = chop($word);
            $sentence = chop($sentence);
            $this->word = ucfirst($word);
            $this->sentence = $sentence;
            $word_lowered = strtolower($word);
            $sentence_lowered = strtolower($sentence);
            $words_in_sentence = explode(" ", $sentence_lowered);
            $succesful_matches = 0;
            foreach ($words_in_sentence as $match)
            {
                if ($word_lowered === $match)
                {
                    $succesful_matches++;
                }
                if ($partial_matches == true)
                {
                    $succesful_matches = substr_count($sentence_lowered, $word_lowered);
                }
            }
            $this->matches = $succesful_matches;
            return $succesful_matches;

    }




}




 ?>
