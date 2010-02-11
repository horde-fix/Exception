<?php
/**
 * Exception thrown if any access without sufficient permissions occured.
 *
 * Copyright 2010 The Horde Project (http://www.horde.org/)
 *
 * See the enclosed file COPYING for license information (LGPL). If you
 * did not receive this file, see http://www.fsf.org/copyleft/lgpl.html.
 *
 * @category Horde
 * @package  Horde_Exception
 */
class Horde_Exception_PermissionDenied extends Horde_Exception
{
    /**
     * Constructor.
     *
     * @see Horde_Exception::__construct()
     *
     * @param mixed $message The exception message, a PEAR_Error
     *                       object, or an Exception object.
     * @param int   $code    A numeric error code.
     */
    public function __construct($message = null, $code = null)
    {
        if (is_null($message)) {
            $message = _("Permission Denied");
        }
        parent::__construct($message, $code);
    }
}