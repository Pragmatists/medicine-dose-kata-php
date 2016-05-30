<?php

namespace medicineDoseKata\Dependencies;


interface MedicinePump
{
    public function dose($medicine);

    public function getTimeSinceLastDoseInMinutes($medicine);
}