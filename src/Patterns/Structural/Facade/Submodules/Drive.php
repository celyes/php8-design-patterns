<?php

namespace Patterns\Structural\Facade\Submodules;

class Drive
{
   public function getInAndBuckleUp(){
      return $this;
   }
   
   public function insertIgnitionKey(){
      return $this;
   }

   public function shiftToNeutral(){
      return $this;
   }

   public function twistIgnitionKey(){
      return $this;
   }

   public function shiftIntoFirst(){
      return $this;
   }

   public function accelerate(){
      echo "Driving...";
   }

   // stop
   public function FindAParkingSpot(){
      return $this;
   }

   public function ParkIntoSpot(){
      return $this;
   }

   public function reversetwistIgnitionKey(){
      echo "Car is parked now...";
   }
}