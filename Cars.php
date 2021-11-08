<?php

require_once 'Vehicle.php';

class Car extends vehicle
{
    private bool $hasParkBrake = false;

    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
    }

    public function setParkBrake()
    {
        if ($this->hasParkBrake === true) {
            $this->hasParkBrake = false;
            return $this->start();
        } elseif ($this->hasParkBrake === false) {
            return "Frein à main enclenché." . PHP_EOL;
        }
        return $this;
    }

    public function start(): string
    {
        if ($this->hasParkBrake === true) {
            throw new Exception('Impossible d\'avancer, veuillez retirer le frain à main');
        } else {
            return 'Frein à main OFF. C\'est partiiiiii';
        }
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Car
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }

    public function getEnergyLevel(): intdiv
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }
}
