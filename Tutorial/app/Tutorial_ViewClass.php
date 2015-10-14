<?php
// vim: foldmethod=marker
/**
 *  Tutorial_ViewClass.php
 *
 *  @author     {$author}
 *  @package    Tutorial
 */

// {{{ Tutorial_ViewClass
/**
 *  View class.
 *
 *  @author     {$author}
 *  @package    Tutorial
 *  @access     public
 */
class Tutorial_ViewClass extends Ethna_ViewClass
{
    /**#@+
     *  @access protected
     */

    /** @var  string  set layout template file   */
    protected $_layout_file = 'layout';

    /**#@+
     *  @access public
     */

    /** @var boolean  layout template use flag   */
    public $use_layout = true;

    /**
     *  set common default value.
     *
     *  @access protected
     *  @param  object  Tutorial_Renderer  Renderer object.
     */
    protected function _setDefault($renderer)
    {
    }

}
// }}}

