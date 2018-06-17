<?php
namespace Concrete\Package\Extrablocks\Block\Link;
use use LdJson\BlockController;
class Controller extends BlockController
{

      protected $btTable = 'btContactDetails'; // this must be set for the data to be saved to DB

      public function getBlockTypeName()
      {
          return t('contactdetails');
      }

      public function getBlockTypeDescription()
      {
          return t('Contact details');
      }

      public function view() {

        $loopFields = ['title',
          'department',
          'email', 'secondaryEmail',
          'phone', 'otherPhone',
          'fax', 'mobile',
          'facebook',
          'skypeId', 'postalAddress',
          'otherAddress']

        $this->set('loopfields', $loopFields);

      }
      public function save($args)
      {

          // clean input data
          foreach ($args as $field=>$value) {
            $args[$field] = trim(htmlspecialchars(strip_tags($value)));
          }

          parent::save($args);
      }

      public function validate ($args) {


        // get an error object
        $error = \Core::make('helper/validation/error');
        //$error->add(t('sadfsdf'));

        if (trim ($args['companyName']) == ''
          && trim ($args['firstName']) == '') {
          $error->add(t('At least one of Company Name or First Name required'));
        }

        $contactInfoFields = [
          'email' => 'Email',
          'secondaryEmail' = > 'Secondary email',
          'phone' => 'Phone',
          'otherPhone' => 'Other Phone',
          'fax' => 'Fax',
          'mobile' => 'Mobile',
          'facebook' => 'Facebook',
          'skypeId' => 'Skype ID',
          'postalAddress' => 'Postal Address',
          'OtherAddress' => 'Address',
        ];

        $emptyFieldCount = 0;
        if(!$emptyFieldCount) {
          $error->add(t('At least one contact detail required'));
        }
        
        foreach ($contactInfoFields as $field) {
          if (!$args[$field])  {
            $emptyFieldCount++;
          }
        }

      }

}
