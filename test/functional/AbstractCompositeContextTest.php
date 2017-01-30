<?php

namespace Dhii\Expression\Test;

/**
 * Tests {@see \Dhii\Expression\AbstractCompositeContext}.
 *
 * @since 0.1
 */
class AbstractCompositeContextTest extends \Xpmock\TestCase
{
    /**
     * The name of the test subject.
     *
     * @since 0.1
     */
    const TEST_SUBJECT_CLASSNAME = '\\Dhii\\Expression\\AbstractCompositeContext';

    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next=version*]
     *
     * @return Dhii\Expression\AbstractCompositeContext
     */
    public function createInstance()
    {
        $mock = $this->mock(static::TEST_SUBJECT_CLASSNAME)
            ->_getValueOf()
            ->_hasValue()
            ->_setValue()
            ->_removeValue()
            ->_clearValues()
            ->_getValues()
            ->new();

        return $mock;
    }

    /**
     * Tests whether a valid instance of the test subject can be created.
     *
     * @since 0.1
     */
    public function testCanBeCreated()
    {
        $subject = $this->createInstance();

        $this->assertInstanceOf(static::TEST_SUBJECT_CLASSNAME, $subject);
        $this->assertInstanceOf('\\Dhii\\Expression\\AbstractContext', $subject);
    }
}
