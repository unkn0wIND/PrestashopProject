<?php
/**
 * 2011-2017 JUML69
 *
 *  @author    JUML69 <contact@lyondev.fr>
 *  @copyright 2011-2017 JUML69
 *  @license   One Domain Licence
 */

if (! defined('_PS_VERSION_')) {
    exit();
}

class LyoShowVatFree extends Module
{

    public function __construct()
    {
        $this->name = 'lyoshowvatfree';
        $this->tab = 'front_office_features';
        $this->version = '3.1.1';
        $this->author = 'LyonDev';
        $this->need_instance = 0;
        $this->module_key = '422895dce2cfc2fe15245fa74b68887f';
        $this->bootstrap = true;
        
        $this->ps_versions_compliancy = array(
            'min' => '1.7.0.0',
            'max' => _PS_VERSION_
        );
        $this->lyo_module_path = _PS_MODULE_DIR_ . 'lyoshowvatfree' . DS;
        $this->displayName = $this->l('See all taxes');
        $this->description = $this->l('Displays the tax excl. price and the tax incl. price');
        parent::__construct();
        $this->confirmUninstall = $this->l('Are you sure you want to uninstall?');
    }

    public function install()
    {
        Configuration::updateGlobalValue('VAT1_DISPLAY_LIST', '0');
        Configuration::updateGlobalValue('VAT1_DISPLAY_PRODUCT', '0');
        Configuration::updateGlobalValue('VAT1_COLOR_LIST', '#000000');
        Configuration::updateGlobalValue('VAT1_COLOR_PRODUCT', '#000000');
        Configuration::updateGlobalValue('VAT1_DISPLAYLABEL_LIST', '0');
        Configuration::updateGlobalValue('VAT1_DISPLAY_REVERSELABEL_LIST', '0');
        Configuration::updateGlobalValue('VAT1_DISPLAYLABEL_PRODUCT', '0');
        Configuration::updateGlobalValue('VAT1_SIZE_LIST', '15');
        Configuration::updateGlobalValue('VAT1_SIZE_PRODUCT', '15');
        Configuration::updateGlobalValue('VAT1_MARGIN_PRODUCT', '2');
        
        foreach (Language::getLanguages(false) as $value) {
            Configuration::updateGlobalValue('VAT1_LABEL_TTC' . $value['id_lang'], 'Tax incl.');
            Configuration::updateGlobalValue('VAT1_LABEL_HT' . $value['id_lang'], 'Tax excl.');
        }
        
        return parent::install() && parent::enable(true) && $this->registerHook('displayProductPriceBlock');
    }

    public function uninstall()
    {
        Configuration::deleteByName('VAT1_DISPLAY_LIST');
        Configuration::deleteByName('VAT1_DISPLAY_PRODUCT');
        Configuration::deleteByName('VAT1_COLOR_LIST');
        Configuration::deleteByName('VAT1_COLOR_PRODUCT');
        Configuration::deleteByName('VAT1_DISPLAYLABEL_LIST');
        Configuration::deleteByName('VAT1_DISPLAYLABEL_PRODUCT');
        Configuration::deleteByName('VAT1_DISPLAY_REVERSELABEL_LIST');
        Configuration::deleteByName('VAT1_SIZE_LIST');
        Configuration::deleteByName('VAT1_SIZE_PRODUCT');
        Configuration::deleteByName('VAT1_MARGIN_PRODUCT');
        foreach (Language::getLanguages(false) as $value) {
            Configuration::deleteByName('VAT1_LABEL_TTC' . $value['id_lang']);
            Configuration::deleteByName('VAT1_LABEL_HT' . $value['id_lang']);
        }
        return parent::uninstall() && $this->unregisterHook('displayProductPriceBlock');
    }

    public function hookDisplayProductPriceBlock($params)
    {
        if (! Context::getContext()->controller) {
            return false;
        }
        $controller_name = Context::getContext()->controller->php_self;
        if ($controller_name != "category" && $controller_name != "product" && $controller_name != "index") {
            return false;
        }
        $type = ($params['type'] == 'unit_price' ? 'LIST' : ($params['type'] == 'after_price' ? 'PRODUCT' : false));
        if (! $type) {
            return false;
        }
        
        $active = ($type && (Configuration::get('VAT1_DISPLAY_' . $type) == '1' || Configuration::get('VAT1_DISPLAY_REVERSELABEL_' . $type) == '1'));
        
        if ($active) {
            $priceMethod = Product::getTaxCalculationMethod((int) $this->context->cookie->id_customer);
            $method = ($priceMethod ? "TTC" : "HT");
            $idProduct = $params['product']['id_product'];
            $idProductAttribute = $params['product']['id_product_attribute'];
            $price = $this->getPriceWithOrWithoutTax($priceMethod, $idProduct, $idProductAttribute);
            return $this->getTemplatePrice($price, $method, $type);
        }
    }

    public function getPriceWithOrWithoutTax($priceMethod, $idProduct, $idProductAttribute)
    {
        $newPrice = Product::getPriceStatic($idProduct, $priceMethod, $idProductAttribute);
        
        return Tools::displayPrice($newPrice);
    }

    /**
     *
     * @param float $price
     *            : le prix a afficher
     * @param string $tax
     *            : 'TTC' ou 'HT'
     * @param string $type
     *            : 'PRODUCT' ou 'LIST'
     */
    public function getTemplatePrice($price, $tax, $type)
    {
        $reverseTax = ($tax == 'HT' ? 'TTC' : 'HT');
        $lang = $this->context->language->id;
        
        $displayLabel = (Configuration::get('VAT1_DISPLAYLABEL_' . $type) == '1');
        $displayReverseLabel = (Configuration::get('VAT1_DISPLAY_REVERSELABEL_' . $type) == '1');
        
        if ($displayLabel) {
            $label = Configuration::get('VAT1_LABEL_' . $tax . $lang);
        } else {
            $label = '';
        }
        if ($displayReverseLabel) {
            $reverseLabel = Configuration::get('VAT1_LABEL_' . $reverseTax . $lang);
        } else {
            $reverseLabel = '';
        }
        
        $size = Configuration::get('VAT1_SIZE_' . $type);
        $margin = Configuration::get('VAT1_MARGIN_PRODUCT');
        if (! $size || $size == '') {
            $size = '15';
        }
        
        $displayOnlyPreviousLabel = (Configuration::get('VAT1_DISPLAY_' . $type) != '1' && Configuration::get('VAT1_DISPLAY_REVERSELABEL_' . $type) == '1');
        
        $color = Configuration::get('VAT1_COLOR_' . $type);
        
        if ($type == "PRODUCT") {
            return '<br /><div id="lyoshowvatfree" style="margin-top:' . $margin . 'px;"><strong style="color: ' . $color . '; font-size:' . $size . 'px;">' . $price . ' ' . $label . '</strong></div>';
        } else {
            if ($displayOnlyPreviousLabel) {
                return ' <span id="lyoshowvatfree"><strong>' . $reverseLabel . '</strong></span>';
            }
            return ' <span id="lyoshowvatfree"><strong>' . $reverseLabel . '</strong>' . ' - <strong style="color: ' . $color . '; font-size:' . $size . 'px;">' . $price . ' ' . $label . '</strong></span>';
        }
    }

    protected function clearSmartyCache()
    {
        if (version_compare(_PS_VERSION_, '1.5.4', '>=')) {
            Tools::clearSmartyCache();
            if (version_compare(_PS_VERSION_, '1.6', '>=')) {
                Tools::clearXMLCache();
                Media::clearCache();
                PrestaShopAutoload::getInstance()->generateIndex();
            } else {
                Autoload::getInstance()->generateIndex();
            }
        }
    }

    public function getContent()
    {
        $output = null;
        if (Tools::isSubmit('submit' . $this->name)) {
            if (! Validate::isInt(Tools::getValue('VAT1_MARGIN_PRODUCT'))) {
                $this->errors[] = Tools::displayError($this->l('Invalid margin. Must be an integer'));
            }
            
            if (empty($this->errors)) {
                Configuration::updateValue('VAT1_DISPLAY_LIST', (int) Tools::getValue('VAT1_DISPLAY_LIST'));
                Configuration::updateValue('VAT1_DISPLAY_PRODUCT', (int) Tools::getValue('VAT1_DISPLAY_PRODUCT'));
                Configuration::updateValue('VAT1_COLOR_LIST', Tools::getValue('VAT1_COLOR_LIST'));
                Configuration::updateValue('VAT1_COLOR_PRODUCT', Tools::getValue('VAT1_COLOR_PRODUCT'));
                Configuration::updateValue('VAT1_SIZE_LIST', Tools::getValue('VAT1_SIZE_LIST'));
                Configuration::updateValue('VAT1_SIZE_PRODUCT', Tools::getValue('VAT1_SIZE_PRODUCT'));
                Configuration::updateValue('VAT1_MARGIN_PRODUCT', Tools::getValue('VAT1_MARGIN_PRODUCT'));
                
                foreach (Language::getLanguages(false) as $value) {
                    Configuration::updateValue('VAT1_LABEL_TTC' . $value['id_lang'], Tools::getValue('VAT1_LABEL_TTC_' . $value['id_lang']));
                    Configuration::updateValue('VAT1_LABEL_HT' . $value['id_lang'], Tools::getValue('VAT1_LABEL_HT_' . $value['id_lang']));
                }
                
                Configuration::updateValue('VAT1_DISPLAYLABEL_LIST', (int) Tools::getValue('VAT1_DISPLAYLABEL_LIST'));
                Configuration::updateValue('VAT1_DISPLAY_REVERSELABEL_LIST', (int) Tools::getValue('VAT1_DISPLAY_REVERSELABEL_LIST'));
                Configuration::updateValue('VAT1_DISPLAYLABEL_PRODUCT', (int) Tools::getValue('VAT1_DISPLAYLABEL_PRODUCT'));
                
                $output .= $this->displayConfirmation($this->l('Settings updated'));
                
                $this->clearSmartyCache();
            } else {
                foreach ($this->errors as $error) {
                    $output .= $this->displayError($error);
                }
            }
        }
        
        $this->context->smarty->assign('module_dir', $this->_path);
        $readMefileLink = $this->local_path . 'readme/readme_' . $this->context->language->iso_code . '.pdf';
        $readMefileHttpLink = $this->_path . 'readme/readme_' . $this->context->language->iso_code . '.pdf';
        
        $licenceFileLink = $this->local_path . 'licences/licence_' . $this->context->language->iso_code . '.pdf';
        $licenceFileHTTPLink = $this->_path . 'licences/licence_' . $this->context->language->iso_code . '.pdf';
        
        if (is_file($readMefileLink)) {
            $this->context->smarty->assign('readMefileLink', $readMefileHttpLink);
        } else {
            $this->context->smarty->assign('readMefileLink', $this->_path . 'readme/readme_fr.pdf');
        }
        if (is_file($licenceFileLink)) {
            $this->context->smarty->assign('licenceFileLink', $licenceFileHTTPLink);
        } else {
            $this->context->smarty->assign('licenceFileLink', $this->_path . 'licences/licence_en.pdf');
        }
        
        return $output . $this->context->smarty->fetch($this->local_path . 'views/templates/admin/configure_addon.tpl') . $this->displayForm();
    }

    public function displayForm()
    {
        $default_lang = (int) Configuration::get('PS_LANG_DEFAULT');
        
        $minSize = 1;
        $maxSize = 100;
        $sizes = array();
        $fields_form = array();
        for ($i = $minSize; $i <= $maxSize; $i ++) {
            $sizes[] = array(
                'id_option' => $i,
                'name' => $i
            );
        }
        $fields_form[0]['form'] = array(
            'legend' => array(
                'title' => $this->l('Settings of categories of products')
            ),
            'input' => array(
                array(
                    'type' => 'switch',
                    'label' => $this->l('Show in categories of products'),
                    'name' => 'VAT1_DISPLAY_LIST',
                    'values' => array(
                        array(
                            'id' => 'active_on',
                            'value' => '1',
                            'label' => $this->l('Yes')
                        ),
                        array(
                            'id' => 'active_off',
                            'value' => '0',
                            'label' => $this->l('No')
                        )
                    )
                ),
                array(
                    'type' => 'color',
                    'label' => $this->l('Color in categories of products'),
                    'name' => 'VAT1_COLOR_LIST'
                ),
                array(
                    'type' => 'select',
                    'label' => $this->l('Size of the price in categories of products (default : 15)'),
                    'name' => 'VAT1_SIZE_LIST',
                    'options' => array(
                        'query' => $sizes,
                        'id' => 'id_option',
                        'name' => 'name'
                    )
                ),
                array(
                    'type' => 'switch',
                    'label' => $this->l('Display the tax label in products of categories'),
                    'name' => 'VAT1_DISPLAYLABEL_LIST',
                    'values' => array(
                        array(
                            'id' => 'active_on',
                            'value' => '1',
                            'label' => $this->l('Yes')
                        ),
                        array(
                            'id' => 'active_off',
                            'value' => '0',
                            'label' => $this->l('No')
                        )
                    )
                ),
                array(
                    'type' => 'switch',
                    'label' => $this->l('Display the label of the first tax in products of categories'),
                    'name' => 'VAT1_DISPLAY_REVERSELABEL_LIST',
                    'values' => array(
                        array(
                            'id' => 'active_on',
                            'value' => '1',
                            'label' => $this->l('Yes')
                        ),
                        array(
                            'id' => 'active_off',
                            'value' => '0',
                            'label' => $this->l('No')
                        )
                    )
                )
            ),
            'submit' => array(
                'title' => $this->l('Save')
            )
        );
        $fields_form[1]['form'] = array(
            'legend' => array(
                'title' => $this->l('Settings of products details')
            ),
            'input' => array(
                array(
                    'type' => 'switch',
                    'label' => $this->l('Show in products details'),
                    'name' => 'VAT1_DISPLAY_PRODUCT',
                    'style' => 'border-top: 1px solid black;',
                    'values' => array(
                        array(
                            'id' => 'active_on',
                            'value' => '1',
                            'label' => $this->l('Yes')
                        ),
                        array(
                            'id' => 'active_off',
                            'value' => '0',
                            'label' => $this->l('No')
                        )
                    )
                ),
                array(
                    'type' => 'color',
                    'label' => $this->l('Color in products details'),
                    'name' => 'VAT1_COLOR_PRODUCT'
                ),
                array(
                    'type' => 'select',
                    'label' => $this->l('Size of the price in products details (default : 15)'),
                    'name' => 'VAT1_SIZE_PRODUCT',
                    'options' => array(
                        'query' => $sizes,
                        'id' => 'id_option',
                        'name' => 'name'
                    )
                ),
                array(
                    'type' => 'text',
                    'label' => $this->l('Margin with the previous block (must be an integer)'),
                    'name' => 'VAT1_MARGIN_PRODUCT'
                ),
                array(
                    'type' => 'switch',
                    'label' => $this->l('Display the tax label in products details'),
                    'name' => 'VAT1_DISPLAYLABEL_PRODUCT',
                    'values' => array(
                        array(
                            'id' => 'active_on',
                            'value' => '1',
                            'label' => $this->l('Yes')
                        ),
                        array(
                            'id' => 'active_off',
                            'value' => '0',
                            'label' => $this->l('No')
                        )
                    )
                )
            ),
            'submit' => array(
                'title' => $this->l('Save')
            )
        );
        $fields_form[2]['form'] = array(
            'legend' => array(
                'title' => $this->l('Other settings')
            ),
            'input' => array(
                array(
                    'type' => 'text',
                    'lang' => true,
                    'label' => $this->l('Tax included label'),
                    'name' => 'VAT1_LABEL_TTC',
                    'required' => true
                ),
                array(
                    'type' => 'text',
                    'lang' => true,
                    'label' => $this->l('Tax excluded label'),
                    'name' => 'VAT1_LABEL_HT',
                    'required' => true
                )
            ),
            'submit' => array(
                'title' => $this->l('Save')
            )
        );
        $helper = new HelperForm();
        
        $helper->module = $this;
        $helper->name_controller = $this->name;
        $helper->token = Tools::getAdminTokenLite('AdminModules');
        $helper->currentIndex = AdminController::$currentIndex . '&configure=' . $this->name;
        $helper->default_form_language = $default_lang;
        $helper->allow_employee_form_lang = $default_lang;
        $languages = $this->context->controller->getLanguages();
        $helper->languages = $languages;
        $helper->title = $this->displayName;
        $helper->show_toolbar = true;
        $helper->toolbar_scroll = true;
        $helper->submit_action = 'submit' . $this->name;
        $helper->toolbar_btn = array(
            'save' => array(
                'desc' => $this->l('Save'),
                'href' => AdminController::$currentIndex . '&configure=' . $this->name . '&save' . $this->name . '&token=' . Tools::getAdminTokenLite('AdminModules')
            )
        );
        $helper->fields_value = $this->getConfigFieldsValues();
        
        return $helper->generateForm($fields_form);
    }

    public function getConfigFieldsValues()
    {
        $array = array(
            'VAT1_DISPLAY_LIST' => Configuration::get('VAT1_DISPLAY_LIST'),
            'VAT1_DISPLAY_PRODUCT' => Configuration::get('VAT1_DISPLAY_PRODUCT'),
            'VAT1_COLOR_LIST' => Configuration::get('VAT1_COLOR_LIST'),
            'VAT1_COLOR_PRODUCT' => Configuration::get('VAT1_COLOR_PRODUCT'),
            'VAT1_SIZE_LIST' => Configuration::get('VAT1_SIZE_LIST'),
            'VAT1_SIZE_PRODUCT' => Configuration::get('VAT1_SIZE_PRODUCT'),
            'VAT1_DISPLAYLABEL_LIST' => Configuration::get('VAT1_DISPLAYLABEL_LIST'),
            'VAT1_DISPLAYLABEL_PRODUCT' => Configuration::get('VAT1_DISPLAYLABEL_PRODUCT'),
            'VAT1_DISPLAY_REVERSELABEL_LIST' => Configuration::get('VAT1_DISPLAY_REVERSELABEL_LIST'),
            'VAT1_MARGIN_PRODUCT' => Configuration::get('VAT1_MARGIN_PRODUCT')
        );
        foreach (Language::getLanguages(false) as $value) {
            $array['VAT1_LABEL_TTC'][$value['id_lang']] = Configuration::get('VAT1_LABEL_TTC' . $value['id_lang']);
            $array['VAT1_LABEL_HT'][$value['id_lang']] = Configuration::get('VAT1_LABEL_HT' . $value['id_lang']);
        }
        return $array;
    }
}
