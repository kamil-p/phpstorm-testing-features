<?php

namespace Phpstorm\AnnotationBundle\Service;

use JMS\DiExtraBundle\Annotation\Inject;
use JMS\DiExtraBundle\Annotation\InjectParams;
use Phpstorm\BaseBundle\Service\BaseService;
use JMS\DiExtraBundle\Annotation\Service;
use Symfony\Component\Translation\TranslatorInterface;

/**
 * @Service("phpstorm.annotation_service")
 *
 * @author Kamil Purzynski
 */
class AnnotationService extends BaseService
{

    /**
     * @param TranslatorInterface $translator
     * @InjectParams({
     *      "translator"         = @Inject("translator")
     * })
     */
    public function __construct(TranslatorInterface $translator)
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