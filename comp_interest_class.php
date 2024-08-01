<?php

    class CompoundInterest{

        /*
          This PHP class calculates the compound interest 
          of a principle sum of money. As well as using a 
          constructor to determine the total, this class can also 
          use getters and setters to calculate the total. 
          
          Written by Paul Coke (c)2024
        */

        private $principleAmount; 
        private $interestRate; 
        private $duration; 

        public function __construct($principle = "", $interest = "", $duration = ""){

                $this->principleAmount = $principle; 
                $this->interestRate = $interest; 
                $this->duration = $duration; 
                

        }

 

        public function setPrinciple($principle){

                $this->principleAmount = $principle;
        }

        
        public function getPrinciple(){

            return $this->principleAmount; 

        }

        public function setInterestRate($interest){

                $this->interestRate = $interest;
        }


        public function getInterestRate(){

            return $this->interestRate; 

        }

        public function setDuration($duration){

                $this->duration= $duration;
        }


        public function getDuration(){

            return $this->duration; 
          
        }


        public function calculation(){


            $total = $this->getPrinciple() * pow(1 + $this->getInterestRate()/100, $this->getDuration());
            return "£" . number_format($total, 2);

        }
    }


    /*Usage - using the constructor to perform the calculation
      $comp = new CompoundInterest(8750.00, 4.25, 6);
      printf("Totat compound interest amount is  %s", $comp->calculation());
    k*/

   /*Usage - using getter and setter methods
     to perform the calculation
    
    $com = new CompoundInterest();

    $com->setPrinciple(8750.00);
    $com->setInterestRate(4.25);
    $com->setDuration(7);

    printf("Totat compound interest amount is  %s", $com->calculation()); 

    */



?>