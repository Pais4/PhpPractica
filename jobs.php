<?php

//Clase Job
class Job{
    private $title;
    private $description;
    public $visible;
    public $months;

    public function setTitle($title){
        $this->title = $title;
    }

    public function getTitle(){
        return $this->title;
    }

    public function setDescription($description){
        $this->description = $description;
    }

    public function getDescription(){
        return $this->description;
    }

    //Metodo que obtiene la duracion 
    function getDuration($months) {
        $years = floor($this->months / 12);
        $extraMonths = $months % 12;
      
        return "$years years $extraMonths months";
      }
}

//Instancia de la clase Job
$job1 = new Job();
$job1 -> setTitle('PHP Developer');
$job1 -> setDescription('This is an awesome job!');
$job1 -> visible = true;
$job1 -> months = 16;

$jobs = [
    $job1
  ];

      
function getDuration($months) {
    $years = floor($months / 12);
    $extraMonths = $months % 12;
  
    return "$years years $extraMonths months";
  }
  
  function printJob($job) {
    if($job->visible == false) {
      return;
    }
  
    echo '<li class="work-position">';
    echo '<h5>' . $job->getTitle() . '</h5>';
    echo '<p>' . $job->getDescription() . '</p>';
    echo '<p>' . getDuration($job->months) . '</p>';
    echo '<strong>Achievements:</strong>';
    echo '<ul>';
    echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo '</ul>';
    echo '</li>';
  }