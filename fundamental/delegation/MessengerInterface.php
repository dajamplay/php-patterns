<?php

/**
 * Interface MessengerInterface
 */
interface MessengerInterface
{

    /**
     * @param string $sender
     * @return MessengerInterface
     */
    public function setSender($sender): MessengerInterface;

    /**
     * @param string $recipient
     * @return MessengerInterface
     */
    public function setRecipient($recipient): MessengerInterface;

    /**
     * @param string $message
     * @return MessengerInterface
     */
    public function setMessage($message): MessengerInterface;

    /**
     * @return bool
     */
    public function send(): bool;

}