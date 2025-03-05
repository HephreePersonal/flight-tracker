<?php

class Flight {
    private $flightNumber;
    private $departure;
    private $arrival;
    private $date;

    public function __construct($flightNumber, $departure, $arrival, $date) {
        $this->flightNumber = $flightNumber;
        $this->departure = $departure;
        $this->arrival = $arrival;
        $this->date = $date;
    }

    public function getFlightNumber() {
        return $this->flightNumber;
    }

    public function setFlightNumber($flightNumber) {
        $this->flightNumber = $flightNumber;
    }

    public function getDeparture() {
        return $this->departure;
    }

    public function setDeparture($departure) {
        $this->departure = $departure;
    }

    public function getArrival() {
        return $this->arrival;
    }

    public function setArrival($arrival) {
        $this->arrival = $arrival;
    }

    public function getDate() {
        return $this->date;
    }

    public function setDate($date) {
        $this->date = $date;
    }
}