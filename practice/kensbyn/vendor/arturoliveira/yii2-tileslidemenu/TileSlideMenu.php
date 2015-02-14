<?php

/**
 * @name TileSlideMenu
 * @author Artur Oliveira - artur.oliveira@gmail.com - 2014-10-10
 * @version 2.0
 * @see http://arturoliveira.dyndns-web.com/yiidemo/tileSlideMenu/index
 * Based on http://valums.com/scroll-menu-jquery/
 *
 */

namespace arturoliveira;

use yii;
use yii\base\Widget;
use yii\helpers\Html;

class TileSlideMenu extends Widget {

    /**
     * @var string the tag name for the view container. Defaults to 'div'.
     */
    public $tagName = 'div';

    /**
     * @var array menu items configuration. Each array element represents the configuration
     * for one particular item which can be either a string or an array.
     *
     * When an item is specified as a string, it should be in the format of "name:type:header",
     * where "type" and "header" are optional. A {@link CDataColumn} instance will be created in this case,
     * whose {@link CDataColumn::name}, {@link CDataColumn::type} and {@link CDataColumn::header}
     * properties will be initialized accordingly.
     *
     * When an item is specified as an array, it will be used to create an item instance.
     */
    public $items = array();

    /**
     * @var boolean item visible
     * By default all items are visible
     */
    private $itemVisible = true;

    /**
     * @var string the base script URL for all tile slide menu resources (eg javascript, CSS file, images).
     * Defaults to null, meaning using the integrated tile slide menu resources (which are published as assets).
     */
    public $baseScriptUrl;

    /**
     * @var string the URL of the CSS file used by this tile slide menu. Defaults to null, meaning using the integrated
     * CSS file. If this is set false, you are responsible to explicitly include the necessary CSS file in your page.
     */
    public $cssFile;

    /**
     * @var array the HTML options for the view container tag.
     */
    public $htmlOptions = array();

    /**
     * @var string menu title
     * Defaults to null, meaning it will not be displayed.
     */
    public $menuTitle;

    /**
     * @var string image height
     * Defaults to 100
     */
    public $imageHeight = 100;

    /**
     * @var string image width
     * Defaults to 100
     */
    public $imageWidth = 100;

    /**
     * Default image
     */
    public $defaultImage;

    /**
     * Default target for link/href
     * Valid values are (source http://www.w3schools.com/tags/att_a_target.asp):
     * _blank - Opens the linked document in a new window or tab
     * _self - Opens the linked document in the same frame as it was clicked (this is default)
     * _parent - Opens the linked document in the parent frame
     * _top - Opens the linked document in the full body of the window
     * framename - Opens the linked document in a named frame
     * 
     */
    public $defaultUrlTarget = "_self";

    /**
     * @var string menu height
     * Defaults to 150
     */
    public $menuHeight = 150;

    /**
     * Initializes the grid view.
     * This method will initialize required property value.
     */
    public function init() {
        parent::init();

        $this->htmlOptions['class'] = 'tile-slide-menu';

        if ($this->defaultImage === null)
            $this->defaultImage = $this->baseScriptUrl . "/defaultImage.png";

        $this->htmlOptions['id'] = $this->getId();
    }

    /**
     * Renders the view.
     * This is the main entry of the whole view rendering.
     * Child classes should mainly override {@link renderContent} method.
     */
    public function run() {
        $this->registerAssets();

        echo Html::beginTag($this->tagName, $this->htmlOptions) . "\n";
        $this->renderTitle();
        $this->renderItems();
        echo Html::endTag($this->tagName);
    }

    /**
     * Registers necessary client scripts.
     */
    public function registerClientScript() {
        $id = $this->getId();
        $cs = Yii::app()->getClientScript();

        $cs->registerCoreScript('jquery');
        $themeUrl = $cs->getCoreScriptUrl() . '/jui/css';
        $scriptUrl = $cs->getCoreScriptUrl() . '/jui/js';
        $cs->registerCssFile($themeUrl . '/base/jquery-ui.css');
        $cs->registerScriptFile($scriptUrl . '/jquery-ui.min.js', CClientScript::POS_END);
        $cs->registerScriptFile($this->baseScriptUrl . '/TileSlideMenu.js', CClientScript::POS_END);
        $cs->registerScript(__CLASS__ . '#' . $id, "jQuery('#$id').TileSlideMenu();");
    }

    /**
     * Registers the needed client assets
     */
    public function registerAssets()
    {
        $view = $this->getView();
        TileSlideMenuAsset::register($view);
        $view->registerJs("jQuery('#$this->id').TileSlideMenu();");

    }
    protected function renderTitle() {
        if ($this->menuTitle) {
            echo Html::tag($this->tagName, $this->menuTitle, ['class' => 'tile-slide-menu-title']);
        }
    }

    protected function renderItems() {
        $id = $this->getId();
        echo Html::beginTag($this->tagName, array('class' => 'tile-slide-menu-items', 'id' => $id . '_items'));
        echo Html::beginTag('ul', array('class' => 'tile-slide-menu-item', 'style' => 'height:' . $this->menuHeight . 'px'));
        foreach ($this->items as $key => $value) {
            if (!array_key_exists('visible', $value))
                $value['visible'] = $this->itemVisible;
            if ($value['visible']) {
                if (!array_key_exists('imagePath', $value)) {
                    $value['imagePath'] = $this->defaultImage;
                }
                if (!array_key_exists('url', $value)) {
                    $value['url'] = '#';
                }
                if (!array_key_exists('urlTarget', $value)) {
                    $value['urlTarget'] = $this->defaultUrlTarget;
                }
                if (!array_key_exists('text', $value)) {
                    $value['text'] = '';
                }
                if (!array_key_exists('tooltip', $value)) {
                    $value['tooltip'] = '';
                }
                echo Html::beginTag('li');
                echo Html::beginTag('a', array('href' => $value['url'], 'target' => $value['urlTarget'], 'title' => $value['tooltip'], 'style' => 'width:' . $this->imageWidth . 'px;height:' . $this->imageHeight . 'px;'));
                echo Html::img($value['imagePath'], array('width' => $this->imageWidth - 5, 'height' => $this->imageHeight - 5, 'style' => 'width:' . ($this->imageWidth - 5) . 'px;height:' . ($this->imageHeight - 5) . 'px;'));
                if ($value['text'] != '')
                    echo Html::tag('span', array(), $value['text']);
                echo Html::endTag('a');
                echo Html::endTag('li');
            }
        }
        echo Html::endTag('ul');
        echo Html::endTag($this->tagName);
    }
}
