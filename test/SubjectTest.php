<?php

require_once 'JsonLoader.php';

use Mikron\Asesor\Domain\Entity\Subject;

class SubjectTest extends PHPUnit_Framework_TestCase
{
    use JsonLoader;

    private function loadSubject($name)
    {
        $data = $this->loadJSON($name);
        $subject = new Subject($data);

        return $subject;
    }

    /**
     * @test
     */
    public function isShortCorrect()
    {
        $subject = $this->loadSubject('subjectCorrect');
        $this->assertEquals("Test subject short description", $subject->getShort());
    }

    /**
     * @test
     */
    public function isLongCorrect()
    {
        $subject = $this->loadSubject('subjectCorrect');
        $this->assertEquals("Bacon ipsum dolor amet spare ribs t-bone turducken porchetta shoulder kielbasa pig jerky beef rump. Fatback sausage chuck drumstick, ribeye chicken kielbasa jerky frankfurter short loin landjaeger jowl beef ribs tongue. Kielbasa sirloin pastrami jerky doner sausage. Pancetta spare ribs strip steak beef ribs filet mignon pork belly picanha leberkas chicken cupim capicola cow porchetta short ribs ground round. Sausage ribeye beef sirloin shankle cow fatback frankfurter strip steak kielbasa. Venison sirloin biltong salami pastrami.\n\nPig bresaola turkey pancetta kielbasa capicola drumstick biltong. Brisket kielbasa cow shank andouille ground round porchetta jerky ham. Biltong pork loin pork belly rump. Ham pork belly short loin salami biltong pork spare ribs cow sausage. Corned beef jowl chuck, boudin venison rump andouille pig. Pig ball tip landjaeger short loin sirloin, brisket tongue tri-tip prosciutto pork chop doner. Bacon fatback corned beef ham hock jowl cow kielbasa, pig doner landjaeger rump turkey porchetta hamburger cupim.", $subject->getLong());
    }

    /**
     * @test
     */
    public function isCategoryCorrect()
    {
        $subject = $this->loadSubject('subjectCorrect');
        $this->assertEquals("category", $subject->getCategory());
    }

    /**
     * @test
     */
    public function isIdCorrect()
    {
        $subject = $this->loadSubject('subjectCorrect');
        $this->assertEquals(1, $subject->getId());
    }

    /**
     * @test
     */
    public function isShortDefaulted()
    {
        $subject = $this->loadSubject('empty');
        $this->assertEquals("[short description has not been provided]", $subject->getShort());
    }

    /**
     * @test
     */
    public function isLongDefaulted()
    {
        $subject = $this->loadSubject('empty');
        $this->assertEquals("[long description has not been provided]", $subject->getLong());
    }

    /**
     * @test
     */
    public function isCategoryDefaulted()
    {
        $subject = $this->loadSubject('empty');
        $this->assertEquals("[unknown category]", $subject->getCategory());
    }

    /**
     * @test
     */
    public function isIdDefaulted()
    {
        $subject = $this->loadSubject('empty');
        $this->assertNull($subject->getId());
    }

}