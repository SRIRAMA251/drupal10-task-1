<?php
namespace Drupal\custom_form\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class CustomUserDetails extends FormBase{
    public function getFormId(){
        return "custom_user_details_form";
    }

    public function buildForm(array $form,FormStateInterface $formstate){
        $form['username']=[
            '#type' => 'textfield',
            '#title' => 'User name',
            '#required' => true,
        ];
        $form['useremail']=[
            '#type' => 'email',
            '#title' => 'Email',
            '#required' => true,
        ];
        $form['usergender']=[
            '#type' => 'select',
            '#title' => 'Gender',
            '#options' => [
                'male'=>'Male',
                'female'=>'Female',
                'others'=>'Others'
            ],
            '#required' => true,
        ];
        $form['usermobile']=[
            '#type' => 'number',
            '#title' => 'MobileNo',
            '#required' => true,
        ];
        $form['submit']=[
            '#type' => 'submit',
            '#value' => 'submit',          
        ];
        return $form;
    }
    public function validationForm(array &$form,FormStateInterface $formstate){
        if(strlen($formstate->getValue('username'))<5){
            $formstate->setErrorByName('username',"please enter the username greater than length 5");
        }
    }
    public function submitForm(array &$form,FormStateInterface $formstate){
        \Drupal::messenger()->addMessage("User Details submitted Successfully");
    }
}

?>