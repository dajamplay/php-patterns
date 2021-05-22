<?php


/**
 * Class AppMessenger
 */
class AppMessenger implements MessengerInterface
{

    /**
     * @var MessengerInterface
     */
    private $messenger;

    /**
     * AppMessenger constructor.
     */
    public function __construct()
    {
        $this->toEmail();
    }

    /**
     * @param string $sender
     * @return MessengerInterface
     */
    public function setSender($sender): MessengerInterface
    {
        $this->messenger->setSender($sender);

        return $this->messenger;
    }

    /**
     * @param string $recipient
     * @return MessengerInterface
     */
    public function setRecipient($recipient): MessengerInterface
    {
        $this->messenger->setRecipient($recipient);

        return $this->messenger;
    }

    /**
     * @param string $message
     * @return MessengerInterface
     */
    public function setMessage($message): MessengerInterface
    {
        $this->messenger->setMessage($message);

        return $this->messenger;
    }

    /**
     * @return bool
     */
    public function send(): bool
    {
        return $this->messenger->send();
    }

    /**
     * @return MessengerInterface
     */
    public function toEmail()
    {
        $this->messenger = new EmailMessenger();

        return $this;
    }

    /**
     * @return MessengerInterface
     */
    public function toSMS()
    {
        $this->messenger = new SMSMessenger();

        return $this;
    }

}