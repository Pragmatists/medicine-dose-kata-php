<?php

namespace medicineDoseKata\Test;
use medicineDoseKata\DoseController;
use \Mockery as m;
use medicineDoseKata\Dependencies\Medicine;
use medicineDoseKata\Dependencies\HealthMonitor;
use medicineDoseKata\Dependencies\MedicinePump;

class DoseControllerTest extends \PHPUnit_Framework_TestCase
{

    public function test___START_HERE() {
        $healthMonitor = m::mock('HealthMonitor', array(
            'getSystolicBloodPressure' => 89
        ));
        $medicinePump = m::mock('MedicinePump')
            ->shouldReceive('dose')->once()->with(Medicine::PRESSURE_LOWERING_MEDICINE)
            ->getMock();
        $alertService = m::mock();
        $doseController = new DoseController($healthMonitor, $medicinePump, $alertService);

        $doseController->checkHealthAndApplyMedicine();
    }

}