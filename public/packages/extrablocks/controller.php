<?php

namespace Concrete\Package\Extrablocks; //<--must match package name
use Concrete\Package\Extrablocks\Block\Link;
use Concrete\Core\Block\BlockType\BlockType;
use Page;

class Controller extends \Package
{
    protected $pkgHandle = 'extrablocks'; //<--must match package name
    protected $appVersionRequired = '8.3.2';
    protected $pkgVersion = '0.1.9';



    public function getPackageDescription()
    {
        return t('Jack\'s Extra Blocks');
    }

    public function getPackageName()
    {
        return t('Extrablocks');
    }

    public function install() {

  		$pkg = parent::install();
  		$this->installBlocks($pkg);
    }

    public function upgrade() {
      $this->installBlocks($pkg);
      parent::upgrade();
    }

    private function installBlocks(&$pkg) {
      $bt = BlockType::getByHandle('link');
      if (!is_object($bt)) {
        $bt = BlockType::installBlockType('link', $pkg);
      }
    }


  }
