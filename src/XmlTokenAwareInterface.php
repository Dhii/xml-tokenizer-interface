<?php

namespace Dhii\Parser\Tokenizer;

/**
 * Something that is aware of an XML token.
 *
 * @since [*next-version*]
 */
interface XmlTokenAwareInterface extends TokenAwareInterface
{
    /**
     * {@inheritdoc}
     *
     * @since [*next-version*]
     *
     * @return XmlTokenInterface The token.
     */
    public function getToken();
}
