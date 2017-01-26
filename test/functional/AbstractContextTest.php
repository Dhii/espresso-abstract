<?php

namespace Dhii\Expression\Test;

use Xpmock\TestCase;

/**
 * Tests {@see Dhii\Expression\AbstractContext}.
 *
 * @since [*next-version*]
 */
class AbstractContextTest extends TestCase
{
    /**
     * The name of the test subject.
     */
    const TEST_SUBJECT_CLASSNAME = '\\Dhii\\Expression\\AbstractContext';

    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next=version*]
     *
     * @return Dhii\Expression\AbstractContext
     */
    public function createInstance()
    {
        $mock = $this->mock(static::TEST_SUBJECT_CLASSNAME)
            ->getValue()
            ->new();

        return $mock;
    }

    /**
     * Tests whether a valid instance of the test subject can be created.
     *
     * @covers \Dhii\Expression\AbstractContext
     *
     * @since [*next-version*]
     */
    public function testCanBeCreated()
    {
        $subject = $this->createInstance();

        $this->assertInstanceOf(static::TEST_SUBJECT_CLASSNAME, $subject);
        $this->assertInstanceOf('\\Dhii\\Expression\\ContextInterface', $subject);
        $this->assertInstanceOf('\\Dhii\\Data\\ValueAwareInterface', $subject);
    }
}
