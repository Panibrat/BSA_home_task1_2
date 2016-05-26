<?php

class Greeting {
        use RandomQuote;
        public function say($name)
    {
      shuffle($this->quotes);  
      echo 'Hi, '.$name. "! There is a new quote for you: ".$this->quotes[0];
    }
}