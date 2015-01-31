<?php
/**
 * @property CI_DB_query_builder $db
 * @property CI_DB_forge $dbforge
 * @property CI_DB_utility $dbutil
 * 
 * @property CI_Benchmark $benchmark
 * @property CI_Config $config
 * @property CI_Controller $controller
 * @property CI_Exceptions $exceptions
 * @property CI_Hooks $hooks
 * @property CI_Input $input
 * @property CI_Lang $lang
 * @property CI_Log $log
 * @property CI_Model $model
 * @property CI_Output $output
 * @property CI_Security $security
 * @property CI_URI $uri
 * @property CI_Utf8 $utf8
 * 
 * @property CI_Cache $cache
 * @property CI_Calendar $calendar
 * @property CI_Cart $cart
 * @property CI_Email $email
 * @property CI_Encrypt $encrypt
 * @property CI_Encryption $encryption
 * @property CI_Form_validation $form_validation
 * @property CI_Ftp $ftp
 * @property CI_Image_lib $image_lib
 * @property CI_Javascript $javascript
 * @property CI_Jquery $jquery
 * @property CI_Migration $migration
 * @property CI_Pagination $pagination
 * @property CI_Parser $parser
 * @property CI_Profiler $profiler
 * @property CI_Session $session
 * @property CI_Table $table
 * @property CI_Trackback $trackback
 * @property CI_Typography $typography
 * @property CI_Unit_test $unit
 * @property CI_Upload $upload
 * @property CI_User_agent $agent
 * @property CI_Xmlrpc $xmlrpc
 * @property CI_Xmlrpcs $xmlrpcs
 * @property CI_Zip $zip
 */
class CI_Controller{}

class CI_DB_Driver {

    /**
     * Execute the query
     *
     * Accepts an SQL string as input and returns a result object upon
     * successful execution of a "read" type query.  Returns boolean TRUE
     * upon successful execution of a "write" type query. Returns boolean
     * FALSE upon failure, and if the $db_debug variable is set to TRUE
     * will raise an error.
     *
     * @param   string      $sql            An SQL query string.
     * @param   array       $binds          An array of binding data.
     * @param   boolean     $$return_object Default NULL
     * 
     * @return  \CI_DB_result    
     */
    function query(){}
}

/**
 * @property CI_DB_query_builder $db
 * @property CI_DB_forge $dbforge
 * @property CI_DB_utility $dbutil
 * 
 * @property CI_Benchmark $benchmark
 * @property CI_Config $config
 * @property CI_Controller $controller
 * @property CI_Exceptions $exceptions
 * @property CI_Hooks $hooks
 * @property CI_Input $input
 * @property CI_Lang $lang
 * @property CI_Log $log
 * @property CI_Model $model
 * @property CI_Output $output
 * @property CI_Security $security
 * @property CI_URI $uri
 * @property CI_Utf8 $utf8
 * 
 * @property CI_Cache $cache
 * @property CI_Calendar $calendar
 * @property CI_Cart $cart
 * @property CI_Email $email
 * @property CI_Encrypt $encrypt
 * @property CI_Encryption $encryption
 * @property CI_Form_validation $form_validation
 * @property CI_Ftp $ftp
 * @property CI_Image_lib $image_lib
 * @property CI_Javascript $javascript
 * @property CI_Jquery $jquery
 * @property CI_Migration $migration
 * @property CI_Pagination $pagination
 * @property CI_Parser $parser
 * @property CI_Profiler $profiler
 * @property CI_Session $session
 * @property CI_Table $table
 * @property CI_Trackback $trackback
 * @property CI_Typography $typography
 * @property CI_Unit_test $unit
 * @property CI_Upload $upload
 * @property CI_User_agent $agent
 * @property CI_Xmlrpc $xmlrpc
 * @property CI_Xmlrpcs $xmlrpcs
 * @property CI_Zip $zip
 */
class CI_Model{}

/**
 * Reference to the CI_Controller method.
 * 
 * Returns current CI instance object
 * 
 * @return \CI_Controller
 */
function get_instance(){}
