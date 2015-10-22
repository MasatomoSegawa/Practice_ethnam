<?php
/**
 *  Index.php
 *
 *  @author    {$author}
 *  @package   Tutorial
 */

/**
 *  Index form implementation
 *
 *  @author    {$author}
 *  @access    public
 *  @package   Tutorial
 */

class Tutorial_Form_Index extends Tutorial_ActionForm
{
    /**
     *  @access   protected
     *
     *  @var      array   form definition.
     */
    public $form = array(
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

/**
 *  Index action implementation.
 *
 *  @author     {$author}
 *  @access     public
 *  @package    Tutorial
 */
class Tutorial_Action_Index extends Tutorial_ActionClass
{

    function authenticate(){

        
        if(!$this->session->isStart()){
            print('せっしょんまだ');
            return 'login';
        }

        var_dump($SESSION['hoge']);

        print('せっしょんOK');

    }

    /**
     *  preprocess Index action.
     *
     *  @access    public
     *  @return    string  Forward name (null if no errors.)
     */
    public function prepare()
    {
        return null;
    }

    /**
     *  Index action implementation.
     *
     *  @access    public
     *  @return    string  Forward Name.
     */
    public function perform()
    {
        return 'index';
    }
}
