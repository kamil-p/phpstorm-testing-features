<?php

namespace Phpstorm\BaseBundle\Service;
use Symfony\Component\Translation\TranslatorInterface;

/**
 *
 * @author Kamil Purzynski
 */
abstract class BaseService
{
    /**
     *
     * @var TranslatorInterface
     */
    protected $translator;


    /**
     * @param TranslatorInterface $translator
     */
    public function __construct(TranslatorInterface $translator)
    {
        $this->translator = $translator;
    }

    /**
     * @return TranslatorInterface
     */
    public function getTranslator()
    {
        return $this->translator;
    }

    /**
     * @param TranslatorInterface $translator
     */
    public function setTranslator($translator)
    {
        $this->translator = $translator;
    }


    /**
     * @return string
     */
    public function getServiceName()
    {
        return __CLASS__;
    }


} 