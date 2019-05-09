<?php 

interface Runner
{
    public function run(): String;
}

abstract class Person
{
    protected $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    abstract protected function walk(): string;
}

Class Dad extends Person implements Runner
{
    public function walk(): string
    {
        return 'I am able to walk well<br/>';
    }

    public function run(): string
    {
        return 'I am a runner - it helps me to keep fit<br/>';
    }
}

$dad = new Dad('Christopher');
echo $dad->getName();

echo $dad->walk();
echo $dad->run();
print_r($dad);