<?php namespace Hamedmehryar\SessionTracker;

/**
 * This file is part of SessionTracker
 *
 * @license MIT
 * @package hamedmehryar\session-tracker
 */

use Illuminate\Support\Facades\Facade;

/**
 * @method static endSession($forgetSession)
 * @method static isSessionBlocked()
 * @method static isSessionLocked()
 * @method static refreshSession(\Illuminate\Http\Request $request)
 * @method static logSession(\Illuminate\Http\Request $request)
 * @method static forgotSession()
 * @method static startSession()
 * @method static renewSession()
 */
class SessionTrackerFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'sessionTracker';
    }
}
