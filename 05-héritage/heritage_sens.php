<?php
// Transivité : si B hérite de A et que C hérite de B alors C hérite de A.
// On utilise la transitivté car une classe ne peut pas hériter de deux classes différentes
// ça veut dire : class C extends B, A est impossible, interdit, verboten, forbiden...

class A
{
    public function test1()
    {
        return 'test1';
    }

    protected function testProtected()
    {
        return "test protected";
    }
}

class B extends A
{
    public function test2()
    {
        return "test2";
    }
}

class C extends B
{
    public function test3()
    {
        return "test3";
    }

    public function test4()
    {
        echo $this->testProtected(); // on peut appler une méthode protected de A qui n'est pourtant pas son parent direct.
    }
}

$c = new C;
echo $c->test1() . "<hr>"; // méthode de A accessible par C (héritage)
echo $c->test2() . "<hr>"; // méthode de B accessible par C (héritage)
echo $c->test3() . "<hr>"; // méthode de C accessible par C
$c->test4(); // méthode de C accessible mais qui utilise une méthode de A accessible par C (héritage)

// Retourne toutes les méthodes
echo "<hr>";
print "<pre>";
print_r(get_class_methods("C"));
print "</pre>";
