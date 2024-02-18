<?php

namespace Tairocruiz\Urimocker;

use VCR\VCR as VCRCore;
use VCR\Util\Assertion;
use VCR\Util\CurlException;
use VCR\Util\HttpUtil;
use VCR\Util\SoapClient;
use VCR\Util\StreamProcessor;
use VCR\Videorecorder;

class TairoURIMocker extends VCRCore
{
    /**
     * Enables the VCR library hooks.
     *
     * @param array $libraryHooks Library hooks to enable.
     */
    public static function enableLibraryHooks(array $libraryHooks = array())
    {
        parent::configure()->enableLibraryHooks($libraryHooks);
    }

    /**
     * Disables the VCR library hooks.
     */
    public static function disableLibraryHooks()
    {
        parent::configure()->disableLibraryHooks();
       $e = new Videorecorder();
       $e->disableLibraryHooks();
        // parent::configure()->
    }

    /**
     * Adds a cassette for recording or replaying requests.
     *
     * @param string $cassetteName Name of the cassette.
     *
     * @return \VCR\Videorecorder
     */
    public static function insertCassette($cassetteName)
    {
        return parent::insertCassette($cassetteName);
    }

    /**
     * Ejects the currently inserted cassette.
     *
     * @return \VCR\Videorecorder
     */
    public static function eject()
    {
        return parent::eject();
    }

    /**
     * Turns off VCR library, effectively disabling the request interception.
     */
    public static function turnOff()
    {
        parent::turnOff();
    }

    /**
     * Turns on VCR library, enabling the request interception.
     */
    public static function turnOn()
    {
        parent::turnOn();
    }

    /**
     * Registers a filter with the VCR instance.
     *
     * @param callable $filter Filter callback.
     */
    public static function registerFilter($filter)
    {
        parent::registerFilter($filter);
    }

    /**
     * Registers a before playback request callback.
     *
     * @param callable $callback Callback to be executed before playback.
     */
    public static function registerBeforePlaybackCallback($callback)
    {
        parent::registerBeforePlaybackCallback($callback);
    }

    /**
     * Registers an after playback request callback.
     *
     * @param callable $callback Callback to be executed after playback.
     */
    public static function registerAfterPlaybackCallback($callback)
    {
        parent::registerAfterPlaybackCallback($callback);
    }

    /**
     * Returns the list of all available cassette names.
     *
     * @return array
     */
    public static function getCassetteNames()
    {
        return parent::getCassetteNames();
    }

    /**
     * Determines if a cassette with the given name exists.
     *
     * @param string $cassetteName Name of the cassette.
     *
     * @return bool
     */
    public static function hasCassette($cassetteName)
    {
        return parent::hasCassette($cassetteName);
    }

    /**
     * Adds a before playback listener.
     *
     * @param callable $callback Callback to be executed before playback.
     */
    public static function beforePlayback($callback)
    {
        parent::beforePlayback($callback);
    }

    /**
     * Adds an after playback listener.
     *
     * @param callable $callback Callback to be executed after playback.
     */
    public static function afterPlayback($callback)
    {
        parent::afterPlayback($callback);
    }
}

