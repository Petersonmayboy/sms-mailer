<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\TwiML\Voice;

use Twilio\TwiML\TwiML;

class Gather extends TwiML {
    /**
     * Gather constructor.
     *
     * @param array $attributes Optional attributes
     */
    public function __construct($attributes = []) {
        parent::__construct('Gather', null, $attributes);
    }

    /**
     * Add Say child.
     *
     * @param string $message Message to say
     * @param array $attributes Optional attributes
     * @return Say Child element.
     */
    public function say($message, $attributes = []): Say {
        return $this->nest(new Say($message, $attributes));
    }

    /**
     * Add Pause child.
     *
     * @param array $attributes Optional attributes
     * @return Pause Child element.
     */
    public function pause($attributes = []): Pause {
        return $this->nest(new Pause($attributes));
    }

    /**
     * Add Play child.
     *
     * @param string $url Media URL
     * @param array $attributes Optional attributes
     * @return Play Child element.
     */
    public function play($url = null, $attributes = []): Play {
        return $this->nest(new Play($url, $attributes));
    }

    /**
     * Add Input attribute.
     *
     * @param string[] $input Input type Twilio should accept
     */
    public function setInput($input): self {
        return $this->setAttribute('input', $input);
    }

    /**
     * Add Action attribute.
     *
     * @param string $action Action URL
     */
    public function setAction($action): self {
        return $this->setAttribute('action', $action);
    }

    /**
     * Add Method attribute.
     *
     * @param string $method Action URL method
     */
    public function setMethod($method): self {
        return $this->setAttribute('method', $method);
    }

    /**
     * Add Timeout attribute.
     *
     * @param int $timeout Time to wait to gather input
     */
    public function setTimeout($timeout): self {
        return $this->setAttribute('timeout', $timeout);
    }

    /**
     * Add SpeechTimeout attribute.
     *
     * @param string $speechTimeout Time to wait to gather speech input and it
     *                              should be either auto or a positive integer.
     */
    public function setSpeechTimeout($speechTimeout): self {
        return $this->setAttribute('speechTimeout', $speechTimeout);
    }

    /**
     * Add MaxSpeechTime attribute.
     *
     * @param int $maxSpeechTime Max allowed time for speech input
     */
    public function setMaxSpeechTime($maxSpeechTime): self {
        return $this->setAttribute('maxSpeechTime', $maxSpeechTime);
    }

    /**
     * Add ProfanityFilter attribute.
     *
     * @param bool $profanityFilter Profanity Filter on speech
     */
    public function setProfanityFilter($profanityFilter): self {
        return $this->setAttribute('profanityFilter', $profanityFilter);
    }

    /**
     * Add FinishOnKey attribute.
     *
     * @param string $finishOnKey Finish gather on key
     */
    public function setFinishOnKey($finishOnKey): self {
        return $this->setAttribute('finishOnKey', $finishOnKey);
    }

    /**
     * Add NumDigits attribute.
     *
     * @param int $numDigits Number of digits to collect
     */
    public function setNumDigits($numDigits): self {
        return $this->setAttribute('numDigits', $numDigits);
    }

    /**
     * Add PartialResultCallback attribute.
     *
     * @param string $partialResultCallback Partial result callback URL
     */
    public function setPartialResultCallback($partialResultCallback): self {
        return $this->setAttribute('partialResultCallback', $partialResultCallback);
    }

    /**
     * Add PartialResultCallbackMethod attribute.
     *
     * @param string $partialResultCallbackMethod Partial result callback URL method
     */
    public function setPartialResultCallbackMethod($partialResultCallbackMethod): self {
        return $this->setAttribute('partialResultCallbackMethod', $partialResultCallbackMethod);
    }

    /**
     * Add Language attribute.
     *
     * @param string $language Language to use
     */
    public function setLanguage($language): self {
        return $this->setAttribute('language', $language);
    }

    /**
     * Add Hints attribute.
     *
     * @param string $hints Speech recognition hints
     */
    public function setHints($hints): self {
        return $this->setAttribute('hints', $hints);
    }

    /**
     * Add BargeIn attribute.
     *
     * @param bool $bargeIn Stop playing media upon speech
     */
    public function setBargeIn($bargeIn): self {
        return $this->setAttribute('bargeIn', $bargeIn);
    }

    /**
     * Add Debug attribute.
     *
     * @param bool $debug Allow debug for gather
     */
    public function setDebug($debug): self {
        return $this->setAttribute('debug', $debug);
    }

    /**
     * Add ActionOnEmptyResult attribute.
     *
     * @param bool $actionOnEmptyResult Force webhook to the action URL event if
     *                                  there is no input
     */
    public function setActionOnEmptyResult($actionOnEmptyResult): self {
        return $this->setAttribute('actionOnEmptyResult', $actionOnEmptyResult);
    }

    /**
     * Add SpeechModel attribute.
     *
     * @param string $speechModel Specify the model that is best suited for your
     *                            use case
     */
    public function setSpeechModel($speechModel): self {
        return $this->setAttribute('speechModel', $speechModel);
    }

    /**
     * Add Enhanced attribute.
     *
     * @param bool $enhanced Use enhanced speech model
     */
    public function setEnhanced($enhanced): self {
        return $this->setAttribute('enhanced', $enhanced);
    }
}