<?php

namespace Dhii\Parser\Tokenizer;

/**
 * A tokenizer that provides a stream of XML tokens.
 *
 * @since [*next-version*]
 */
interface XmlTokenizerInterface extends TokenizerInterface
{
    /**
     * {@inheritdoc}
     *
     * @since [*next-version*]
     *
     * @return XmlTokenizerIterationInterface The iteration.
     */
    public function getIteration();
}
