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
 * Debug.
 */
class Debug extends Formatter
{
    
    /**
     * @var array $levels The defualt error reporting levels supported.
     */
    private static $levels = [
        E_ALL,
        E_DEPRECATED,
        E_RECOVERABLE_ERROR,
        E_STRICT,
        E_COMPILE_WARNING,
        E_COMPILE_ERROR,
        E_CORE_WARNING,
        E_CORE_ERROR,
        E_NOTICE,
        E_PARSE,
        E_WARNING,
        E_ERROR
    ];
  
}
