<?php

namespace StraTDeS\VO\Single;

class Coordinates
{
    private CoordinatesLongitude $longitude;
    private CoordinatesLatitude $latitude;

    private function __construct(CoordinatesLongitude $longitude, CoordinatesLatitude $latitude)
    {
        $this->longitude = $longitude;
        $this->latitude = $latitude;
    }

    public static function fromValues(float $longitude, float $latitude): Coordinates
    {
        return new self(
            CoordinatesLongitude::fromValue($longitude),
            CoordinatesLatitude::fromValue($latitude)
        );
    }

    public function longitude(): CoordinatesLongitude
    {
        return $this->longitude;
    }

    public function latitude(): CoordinatesLatitude
    {
        return $this->latitude;
    }
}
