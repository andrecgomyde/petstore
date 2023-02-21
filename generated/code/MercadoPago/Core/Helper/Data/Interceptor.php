<?php
namespace MercadoPago\Core\Helper\Data;

/**
 * Interceptor class for @see \MercadoPago\Core\Helper\Data
 */
class Interceptor extends \MercadoPago\Core\Helper\Data implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\MercadoPago\Core\Helper\Message\MessageInterface $messageInterface, \Magento\Framework\App\Helper\Context $context, \Magento\Framework\View\LayoutFactory $layoutFactory, \Magento\Payment\Model\Method\Factory $paymentMethodFactory, \Magento\Store\Model\App\Emulation $appEmulation, \Magento\Payment\Model\Config $paymentConfig, \Magento\Framework\App\Config\Initial $initialConfig, \MercadoPago\Core\Logger\Logger $logger, \Magento\Sales\Model\ResourceModel\Status\Collection $statusFactory, \Magento\Sales\Model\OrderFactory $orderFactory, \Magento\Backend\Block\Store\Switcher $switcher, \Magento\Framework\Composer\ComposerInformation $composerInformation, \Magento\Framework\Module\ResourceInterface $moduleResource)
    {
        $this->___init();
        parent::__construct($messageInterface, $context, $layoutFactory, $paymentMethodFactory, $appEmulation, $paymentConfig, $initialConfig, $logger, $statusFactory, $orderFactory, $switcher, $composerInformation, $moduleResource);
    }

    /**
     * {@inheritdoc}
     */
    public function log($message, $name = 'mercadopago', $array = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'log');
        if (!$pluginInfo) {
            return parent::log($message, $name, $array);
        } else {
            return $this->___callPlugins('log', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getApiInstance($accessToken = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getApiInstance');
        if (!$pluginInfo) {
            return parent::getApiInstance($accessToken);
        } else {
            return $this->___callPlugins('getApiInstance', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isValidAccessToken($accessToken)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isValidAccessToken');
        if (!$pluginInfo) {
            return parent::isValidAccessToken($accessToken);
        } else {
            return $this->___callPlugins('isValidAccessToken', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isValidClientCredentials($clientId, $clientSecret)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isValidClientCredentials');
        if (!$pluginInfo) {
            return parent::isValidClientCredentials($clientId, $clientSecret);
        } else {
            return $this->___callPlugins('isValidClientCredentials', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getAccessToken($scopeCode = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAccessToken');
        if (!$pluginInfo) {
            return parent::getAccessToken($scopeCode);
        } else {
            return $this->___callPlugins('getAccessToken', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setOrderSubtotals($data, $order)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setOrderSubtotals');
        if (!$pluginInfo) {
            return parent::setOrderSubtotals($data, $order);
        } else {
            return $this->___callPlugins('setOrderSubtotals', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setPayerInfo(&$payment)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setPayerInfo');
        if (!$pluginInfo) {
            return parent::setPayerInfo($payment);
        } else {
            return $this->___callPlugins('setPayerInfo', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getMercadoPagoPaymentMethods($accessToken)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getMercadoPagoPaymentMethods');
        if (!$pluginInfo) {
            return parent::getMercadoPagoPaymentMethods($accessToken);
        } else {
            return $this->___callPlugins('getMercadoPagoPaymentMethods', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getCountryInitial()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCountryInitial');
        if (!$pluginInfo) {
            return parent::getCountryInitial();
        } else {
            return $this->___callPlugins('getCountryInitial', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getUrlStore()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getUrlStore');
        if (!$pluginInfo) {
            return parent::getUrlStore();
        } else {
            return $this->___callPlugins('getUrlStore', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getModuleVersion()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getModuleVersion');
        if (!$pluginInfo) {
            return parent::getModuleVersion();
        } else {
            return $this->___callPlugins('getModuleVersion', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getAnalyticsData($order)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAnalyticsData');
        if (!$pluginInfo) {
            return parent::getAnalyticsData($order);
        } else {
            return $this->___callPlugins('getAnalyticsData', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getMethodInstance($code)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getMethodInstance');
        if (!$pluginInfo) {
            return parent::getMethodInstance($code);
        } else {
            return $this->___callPlugins('getMethodInstance', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getStoreMethods($store = null, $quote = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getStoreMethods');
        if (!$pluginInfo) {
            return parent::getStoreMethods($store, $quote);
        } else {
            return $this->___callPlugins('getStoreMethods', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getMethodFormBlock(\Magento\Payment\Model\MethodInterface $method, \Magento\Framework\View\LayoutInterface $layout)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getMethodFormBlock');
        if (!$pluginInfo) {
            return parent::getMethodFormBlock($method, $layout);
        } else {
            return $this->___callPlugins('getMethodFormBlock', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getInfoBlock(\Magento\Payment\Model\InfoInterface $info, ?\Magento\Framework\View\LayoutInterface $layout = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getInfoBlock');
        if (!$pluginInfo) {
            return parent::getInfoBlock($info, $layout);
        } else {
            return $this->___callPlugins('getInfoBlock', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getInfoBlockHtml(\Magento\Payment\Model\InfoInterface $info, $storeId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getInfoBlockHtml');
        if (!$pluginInfo) {
            return parent::getInfoBlockHtml($info, $storeId);
        } else {
            return $this->___callPlugins('getInfoBlockHtml', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getPaymentMethods()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getPaymentMethods');
        if (!$pluginInfo) {
            return parent::getPaymentMethods();
        } else {
            return $this->___callPlugins('getPaymentMethods', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getPaymentMethodList($sorted = true, $asLabelValue = false, $withGroups = false, $store = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getPaymentMethodList');
        if (!$pluginInfo) {
            return parent::getPaymentMethodList($sorted, $asLabelValue, $withGroups, $store);
        } else {
            return $this->___callPlugins('getPaymentMethodList', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isZeroSubTotal($store = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isZeroSubTotal');
        if (!$pluginInfo) {
            return parent::isZeroSubTotal($store);
        } else {
            return $this->___callPlugins('isZeroSubTotal', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getZeroSubTotalOrderStatus($store = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getZeroSubTotalOrderStatus');
        if (!$pluginInfo) {
            return parent::getZeroSubTotalOrderStatus($store);
        } else {
            return $this->___callPlugins('getZeroSubTotalOrderStatus', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getZeroSubTotalPaymentAutomaticInvoice($store = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getZeroSubTotalPaymentAutomaticInvoice');
        if (!$pluginInfo) {
            return parent::getZeroSubTotalPaymentAutomaticInvoice($store);
        } else {
            return $this->___callPlugins('getZeroSubTotalPaymentAutomaticInvoice', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isModuleOutputEnabled($moduleName = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isModuleOutputEnabled');
        if (!$pluginInfo) {
            return parent::isModuleOutputEnabled($moduleName);
        } else {
            return $this->___callPlugins('isModuleOutputEnabled', func_get_args(), $pluginInfo);
        }
    }
}
