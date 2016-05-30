<?php

namespace medicineDoseKata;


use medicineDoseKata\Dependencies\Medicine;

class DoseController
{

    private $healthMonitor;
    private $medicinePump;
    private $alertService;

    public function __construct($healthMonitor, $medicinePump, $alertService)
    {
        $this->healthMonitor = $healthMonitor;
        $this->medicinePump = $medicinePump;
        $this->alertService = $alertService;
    }

    public function checkHealthAndApplyMedicine()
    {
        
    }
}