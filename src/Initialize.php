<?php
/**
 * Genial Framework.
 *
 * @author    Nicholas English <https://github.com/Nenglish7>
 * @author    Genial Contributors <https://github.com/orgs/Genial-Framework/people>
 *
 * @link      <https://github.com/Genial-Framework/Debug> for the canonical source repository.
 * @copyright Copyright (c) 2017-2018 Genial Framework. <https://github.com/Genial-Framework>
 * @license   <https://github.com/Genial-Framework/Debug/blob/master/LICENSE> New BSD License.
 */

namespace Genial\Debug;

/**
 * Initialize.
 */
class Initialize implements InitializeInterface
{
    
    /**
     * @var int|null $errorReporting The error reporting level the framework should run under.
     */
    protected static $errorReporting;
    
    /**
     * __construct().
     *
     * Initalize the debug dependent.
     *
     * @param int|null $errorReporting The error reporting level the framework should run under.
     * @param bool|null $logging       Should logging be enabled during execution.
     *
     * @return bool|true If the debug dependent was successfully initialized.
     */
    function __construct($errorReporting = null, bool $logging = null)
    {
        $errorReporting = !is_null($errorReporting)
            ? $errorReporting
            : 0;
        $logging = !is_null($logging)
            ? $logging
            : env('application', 'log', true);
        if ($logging && LOGGING_TOOLS_ACTIVE)
        {
            \Genial\Log\Log::enable();
        }
        Debug::enable();
        self::$errorReporting = $errorReporting;
        return true;
    }
  
}
