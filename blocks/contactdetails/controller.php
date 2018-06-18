<?php
namespace Concrete\Package\Extrablocks\Block\Contactdetails;
use Helper\LdJson\LDJsonBlockController;
use Concrete\Core\Block\BlockController;
class Controller extends LDJsonBlockController
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

      protected function schemaType() : string {
        return "ContactPoint";
      }

      protected function schemaProperties($fieldData) : array {


        $name = trim($fieldData['honorific'] . ' ' .
          $fieldData['firstName'] . ' ' . $fieldData['$lastName']);

        $data = array(
          'name' => $name,
          'email' => $fieldData['email'],
          'telephone' => $fieldData['phone'],
          'faxNumber' => $fieldData['fax'],
          // areaServed => ??
        );

        return $data;
      }


      public function view() {

        $loopFields = ['title',
          'department',
          'email', 'secondaryEmail',
          'phone', 'otherPhone',
          'fax', 'mobile',
          'facebook',
          'skypeId', 'postalAddress',
          'otherAddress'];

        $this->set('loopFields', $loopFields);

      }
      public function save($args)
      {

        $myFields = ['honorific', 'companyName', 'firstName',
        'lastName', 'title', 'department', 'image',
        'email', 'secondaryEmail', 'phone',
        'otherPhone', 'fax', 'mobile', 'facebook',
        'skypeId', 'postalAddress', 'otherAddress'];

        // clean input data
        foreach ($myFields as $field) {
          $args[$fields] = trim(htmlspecialchars(strip_tags($args[$field])));
        }

          //die(implode (', ', array_values($args)));
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
          'secondaryEmail' => 'Secondary email',
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
