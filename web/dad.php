<?php

Class Dad
{
    protected $name;
    protected $surname;

    public function __construct(string $name, string $surname)
    {
        $this->name = $name;
        $this->surname = $surname;
    }

    public function run()
    {
        echo 'I can run fast';
    }

    private function drive()
    {
        echo 'I am allowed to drive a car';
    }
}

Class Son extends Dad
{
    public function goToSchool()
    {
        echo 'I have to go to school';
    }

    public function whatIsMyName()
    {
        echo "My name is " . $this->name;
    }
}

$son = new Son('David', 'Lamb');
$son->run();
$son->goToSchool();
$son->whatIsMyName();
$son->drive();