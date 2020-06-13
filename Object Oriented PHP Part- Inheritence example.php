


<?php



    class Bp
    {
        public $th =100;
        public $sa=300;
        protected $c =600;

    }

    class Lv extends Bp
    {
        public function getN()
        {
            return $this->c;

        }

    }

 echo (new Lv)->getN();