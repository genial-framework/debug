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
 * InitializeInterface.
 */
interface InitializeInterface
{
    
    /**
     * __construct().
     *
     * Iniialize the debug dependent.
     *
     * @param int|null $errorReporting The error reporting level the framework should run under.
     * @param bool|null $logging   Should logging be enabled during execution.
     *
     * @return bool|true If the debug dependent was successfully initialized.
     */
    function __construct($errorReporting = null, bool $logging = null);
    
    /**
     * keyGeneration().
     *
     * Generate a key for the framework enviroment(dev).
     *
     * @return string The generated key
     */
    public function keyGeneration();
  
}
