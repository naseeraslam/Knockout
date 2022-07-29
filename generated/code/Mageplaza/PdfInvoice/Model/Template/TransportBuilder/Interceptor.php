<?php
namespace Mageplaza\PdfInvoice\Model\Template\TransportBuilder;

/**
 * Interceptor class for @see \Mageplaza\PdfInvoice\Model\Template\TransportBuilder
 */
class Interceptor extends \Mageplaza\PdfInvoice\Model\Template\TransportBuilder implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Mail\Template\FactoryInterface $templateFactory, \Magento\Framework\Mail\MessageInterface $message, \Magento\Framework\Mail\Template\SenderResolverInterface $senderResolver, \Magento\Framework\ObjectManagerInterface $objectManager, \Magento\Framework\Mail\TransportInterfaceFactory $mailTransportFactory, \Magento\Framework\Filesystem $filesystem, \Magento\Framework\UrlInterface $urlBuilder, \Mageplaza\Core\Helper\AbstractData $helperData, \Mageplaza\PdfInvoice\Helper\Data $helperPdf)
    {
        $this->___init();
        parent::__construct($templateFactory, $message, $senderResolver, $objectManager, $mailTransportFactory, $filesystem, $urlBuilder, $helperData, $helperPdf);
    }

    /**
     * {@inheritdoc}
     */
    public function addAttachment($content, $mimeType = 'application/octet-stream', $disposition = 'attachment', $encoding = 'base64', $filename = 'pdf_invoice.pdf')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addAttachment');
        return $pluginInfo ? $this->___callPlugins('addAttachment', func_get_args(), $pluginInfo) : parent::addAttachment($content, $mimeType, $disposition, $encoding, $filename);
    }

    /**
     * {@inheritdoc}
     */
    public function addTo($address, $name = '')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addTo');
        return $pluginInfo ? $this->___callPlugins('addTo', func_get_args(), $pluginInfo) : parent::addTo($address, $name);
    }

    /**
     * {@inheritdoc}
     */
    public function addCc($address, $name = '')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addCc');
        return $pluginInfo ? $this->___callPlugins('addCc', func_get_args(), $pluginInfo) : parent::addCc($address, $name);
    }

    /**
     * {@inheritdoc}
     */
    public function addBcc($address)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addBcc');
        return $pluginInfo ? $this->___callPlugins('addBcc', func_get_args(), $pluginInfo) : parent::addBcc($address);
    }

    /**
     * {@inheritdoc}
     */
    public function setFromByScope($from, $scopeId = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setFromByScope');
        return $pluginInfo ? $this->___callPlugins('setFromByScope', func_get_args(), $pluginInfo) : parent::setFromByScope($from, $scopeId);
    }

    /**
     * {@inheritdoc}
     */
    public function prepareMessage()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'prepareMessage');
        return $pluginInfo ? $this->___callPlugins('prepareMessage', func_get_args(), $pluginInfo) : parent::prepareMessage();
    }

    /**
     * {@inheritdoc}
     */
    public function setReplyTo($email, $name = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setReplyTo');
        return $pluginInfo ? $this->___callPlugins('setReplyTo', func_get_args(), $pluginInfo) : parent::setReplyTo($email, $name);
    }

    /**
     * {@inheritdoc}
     */
    public function setFrom($from)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setFrom');
        return $pluginInfo ? $this->___callPlugins('setFrom', func_get_args(), $pluginInfo) : parent::setFrom($from);
    }

    /**
     * {@inheritdoc}
     */
    public function setTemplateIdentifier($templateIdentifier)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setTemplateIdentifier');
        return $pluginInfo ? $this->___callPlugins('setTemplateIdentifier', func_get_args(), $pluginInfo) : parent::setTemplateIdentifier($templateIdentifier);
    }

    /**
     * {@inheritdoc}
     */
    public function setTemplateModel($templateModel)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setTemplateModel');
        return $pluginInfo ? $this->___callPlugins('setTemplateModel', func_get_args(), $pluginInfo) : parent::setTemplateModel($templateModel);
    }

    /**
     * {@inheritdoc}
     */
    public function setTemplateVars($templateVars)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setTemplateVars');
        return $pluginInfo ? $this->___callPlugins('setTemplateVars', func_get_args(), $pluginInfo) : parent::setTemplateVars($templateVars);
    }

    /**
     * {@inheritdoc}
     */
    public function setTemplateOptions($templateOptions)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setTemplateOptions');
        return $pluginInfo ? $this->___callPlugins('setTemplateOptions', func_get_args(), $pluginInfo) : parent::setTemplateOptions($templateOptions);
    }

    /**
     * {@inheritdoc}
     */
    public function getTransport()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getTransport');
        return $pluginInfo ? $this->___callPlugins('getTransport', func_get_args(), $pluginInfo) : parent::getTransport();
    }
}
