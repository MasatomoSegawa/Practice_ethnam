<?php

/**
 *  Login/Do.php
 *
 *  @author     {$author}
 *  @package    Tutorial
 */

/**
 *  login_do Form implementation.
 *
 *  @author     {$author}
 *  @access     public
 *  @package    Tutorial
 */
class Tutorial_Form_Login extends Tutorial_ActionForm
{
    /**
     *  @access protected
     *  @var    array   form definition.
     */
    public $form = array(
        'mailaddress' => [
            'name' => 'メールアドレス',
            'required' => true,
            'type'          => VAR_TYPE_STRING,
       ],
       'password' => [
            'name' => 'パスワード',
            'required' => true,
            'type' => VAR_TYPE_STRING
       ]
       /*
        *  TODO: Write form definition which this action uses.
        *  @see http://ethna.jp/ethna-document-dev_guide-form.html
        *
        *  Example(You can omit all elements except for "type" one) :
        *
        *  'sample' => array(
        *      // Form definition
        *      'type'        => VAR_TYPE_INT,    // Input type
        *      'form_type'   => FORM_TYPE_TEXT,  // Form type
        *      'name'        => 'Sample',        // Display name
        *
        *      //  Validator (executes Validator by written order.)
        *      'required'    => true,            // Required Option(true/false)
        *      'min'         => null,            // Minimum value
        *      'max'         => null,            // Maximum value
        *      'regexp'      => null,            // String by Regexp
        *
        *      //  Filter
        *      'filter'      => 'sample',        // Optional Input filter to convert input
        *      'custom'      => null,            // Optional method name which
        *                                        // is defined in this(parent) class.
        *  ),
        */
    );

    /**
     *  Form input value convert filter : sample
     *
     *  @access protected
     *  @param  mixed   $value  Form Input Value
     *  @return mixed           Converted result.
     */
    /*
    protected function _filter_sample($value)
    {
        //  convert to upper case.
        return strtoupper($value);
    }
    */
}

class Tutorial_Action_Login extends Ethna_ActionClass{


	    /**
     *  preprocess of login_do Action.
     *
     *  @access public
     *  @return string    forward name(null: success.
     *                                false: in case you want to exit.)
     */
    public function prepare()
    {
        if ($this->af->validate() > 0) {
          return 'login';
        }

        return null;
    }


	public function perform()
    {

		$password = $this->config->get('password');
		if($password == $this->af->get('password')){
			$this->session->start();
			print('セッションスタート');
			return 'index';
		}

		return 'login';

    }

}