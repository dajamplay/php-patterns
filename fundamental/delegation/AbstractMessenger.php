<?php

/**
 * Class AbstractMessenger
 *
 */
abstract class AbstractMessenger implements MessengerInterface
{
    /**
     * @var string
     */
    protected $sender;

    /**
     * @var string
     */
    protected $recipient;

    /**
     * @var string
     */
    protected $message;

    /**
     * @param string $sender
     * @return MessengerInterface
     */
    public function setSender($sender): MessengerInterface
    {
        $this->sender = $sender;

        return $this;
    }

    /**
     * @param string $recipient
     * @return MessengerInterface
     */
    public function setRecipient($recipient): MessengerInterface
    {
        $this->recipient = $recipient;

        return $this;
    }

    /**
     * @param string $message
     * @return MessengerInterface
     */
    public function setMessage($message): MessengerInterface
    {
        $this->message = $message;

        return $this;
    }

    /**
     * @return bool
     */
    public function send(): bool
    {
        return true;
    }
}