<?php
namespace Concrete\Package\Extrablocks\Block\Link;
use Concrete\Core\Block\BlockController;
class Controller extends BlockController
{

      protected $btTable = 'btLink'; // this must be set for the data to be saved to DB

      public function getBlockTypeName()
      {
          return t('link');
      }

      public function getBlockTypeDescription()
      {
          return t('Link');
      }

      public function view() {

          if ($this->option == 'internal') {
            $targetPage = \Page::getbyID($this->internalPage);
            if ($targetPage) {
              $this->set('linkhref', $targetPage->getCollectionPath());
            }
            else {
              $this->set('linkhref', '');
            }
          }

          elseif ($this->option == 'external') {
            $this->set('linkhref',  $externalLink);
          }

      }
      public function save($args)
      {

          // needed for checkboxes
          $args['caption'] = trim(htmlspecialchars(strip_tags($args['caption'])));
          $args['externalLink'] = strip_tags($args['externalLink']);
          $args['openNewTab'] = isset($args['openNewTab']) ? 1 : 0;
          $args['internalPage'] = (int)$args['internalPage'];

          parent::save($args);
        }

      public function validate ($args) {


        // get an error object
        $error = \Core::make('helper/validation/error');
        //$error->add(t('sadfsdf'));

        if (trim ($args['caption']) == '') {
          $error->add(t('Caption is required'));
        }

        if ($args['option'] == 'external') {
          $UrlResult = false;

          // @operator suppresses error if get_headers fails
          $UrlResult = @get_headers(trim($args['externalLink']));

          if ($UrlResult === false ){
            $error->add(t('External link fails to load or has not been set'));
          }
        }

        if ($args['option'] == 'internal' &&   (int)$args['internalPage'] == 0 ) {
          $error->add(t('CMS page not selected'));
        }
        return $error;
      }

}
