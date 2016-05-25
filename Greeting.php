<?php
/**
 * Description of Greeting
 * http://www.quotationspage.com/
 * @author cpaniba
 */
class Greeting {
    public $quotes = [
       "Love all, trust a few. Do wrong to none." ,
       "There cannot be a crisis next week. My schedule is already full." ,
       "I do not fear computers. I fear the lack of them." ,
       "There is no wisdom without love." ,
       "Genius begins great works; labor alone finishes them." ,
       "Time has a wonderful way of showing us what really matters." ,
       "Cherish each hour of this day for it can never return." ,
       "It's kind of fun to do the impossible." 
    ];
    public function say($name)
    {
      shuffle($this->quotes);  
      echo 'Hi, '.$name. "! There is a new quote for you: ".$this->quotes[0];
    }
}