<?php

    class FootBallPlayer
    {
        public $name;
        public $position;

        public function _construct($name,$position)
        {
            $this->name=$name;
            $this->position=$position;
        }
    }

    $playerA=new FootBallPlayer("Mario Jake",'RersBall');
    $playerB=new FootBallPlayer('Raw Meat','Gold Keeper');

    var_dump($playerA->name);
    var_dump($playerB);

