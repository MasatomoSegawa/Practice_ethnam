<?php
/**
 *  DatabaseAccess.php
 *
 *  @author     {$author}
 *  @package    Tutorial
 */

/**
 *  DatabaseAccess Form implementation.
 *
 *  @author     {$author}
 *  @access     public
 *  @package    Tutorial
 */
class Tutorial_Form_DatabaseAccess extends Tutorial_ActionForm
{
    /**
     *  @access protected
     *  @var    array   form definition.
     */
    public $form = array(
        'mailaddress' => [
            'name'     => 'メールアドレス',
            'required' => true,
            'type'     => VAR_TYPE_STRING,
        ],

        'password' => [
            'name'     => 'パスワード',
            'required' => true,
            'type'     => VAR_TYPE_STRING,
        ],
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

/**
 *  DatabaseAccess action implementation.
 *
 *  @author     {$author}
 *  @access     public
 *  @package    Tutorial
 */
class Tutorial_Action_DatabaseAccess extends Tutorial_ActionClass
{

    /**
     *  preprocess of DatabaseAccess Action.
     *
     *  @access public
     *  @return string    forward name(null: success.
     *                                false: in case you want to exit.)
     */
    public function prepare()
    {

        require_once BASE .'/lib/adodb/adodb.inc.php';

        if($this->af->validate() > 0){
          return 'registration';

        }

        return null;
    }

    /**
     *  DatabaseAccess action implementation.
     *
     *  @access public
     *  @return string  forward name.
     */
    public function perform()
    {

        // バリデート通った後にここでDBに接続.
        $db = $this->backend->getDB();

        // DBの接続が出来なかったら. (これprepare()でやるべき？)
        if(!$db){
            return 'registration';
        }

        // フォームに与えられた値の取得.
        $username = $this->af->get('mailaddress');
        $password = $this->af->get('password');

        // データの追加.
        $result =& $db->query("INSERT INTO registereduser(username, password) VALUES ('$username', '$password')");
        if(!$result){
            print("あびゃ〜");
        }

        return 'index';

        //print($this->af->get('mailaddress'));
        //print($this->af->get('password'));

        //return 'index';
    }
}
