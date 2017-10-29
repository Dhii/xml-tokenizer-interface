<?php

namespace Dhii\Parser\Tokenizer;

use XMLReader as XmlReader;

/**
 * An XML token.
 *
 * @since [*next-version*]
 */
interface XmlTokenInterface extends TokenInterface
{
    /**
     * No node type.
     *
     * @since [*next-version*]
     */
    const T_NONE = XmlReader::NONE;

    /**
     * Start element.
     *
     * @since [*next-version*]
     */
    const T_ELEMENT = XmlReader::ELEMENT;

    /**
     * End Element.
     *
     * @since [*next-version*]
     */
    const T_END_ELEMENT = XmlReader::END_ELEMENT;

    /**
     * Text node.
     *
     * @since [*next-version*]
     */
    const T_TEXT = XmlReader::TEXT;

    /**
     * CDATA node.
     *
     * @since [*next-version*]
     */
    const T_CDATA = XmlReader::CDATA;

    /**
     * Entity Reference node.
     *
     * @since [*next-version*]
     */
    const T_ENTITY_REF = XmlReader::ENTITY_REF;

    /**
     * Entity Declaration node.
     *
     * @since [*next-version*]
     */
    const T_ENTITY = XmlReader::ENTITY;

    /**
     * End Entity.
     *
     * @since [*next-version*]
     */
    const T_END_ENTITY = XmlReader::END_ENTITY;

    /**
     * Processing Instruction node.
     *
     * @since [*next-version*]
     */
    const T_PI = XmlReader::PI;

    /**
     * Comment node.
     *
     * @since [*next-version*]
     */
    const T_COMMENT = XmlReader::COMMENT;

    /**
     * Document node.
     *
     * @since [*next-version*]
     */
    const T_DOC = XmlReader::DOC;

    /**
     * Document Type node.
     *
     * @since [*next-version*]
     */
    const T_DOC_TYPE = XmlReader::DOC_TYPE;

    /**
     * Document Fragment node.
     *
     * @since [*next-version*]
     */
    const T_DOC_FRAGMENT = XmlReader::DOC_FRAGMENT;

    /**
     * Notation node.
     *
     * @since [*next-version*]
     */
    const T_NOTATION = XmlReader::NOTATION;

    /**
     * Whitespace node.
     *
     * @since [*next-version*]
     */
    const T_WHITESPACE = XmlReader::WHITESPACE;

    /**
     * Significant Whitespace node.
     *
     * @since [*next-version*]
     */
    const T_SIGNIFICANT_WHITESPACE = XmlReader::SIGNIFICANT_WHITESPACE;

    /**
     * XML Declaration node.
     *
     * @since [*next-version*]
     */
    const T_XML_DECLARATION = XmlReader::XML_DECLARATION;
}
