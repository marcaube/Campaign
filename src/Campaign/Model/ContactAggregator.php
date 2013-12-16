<?php

namespace Campaign\Model;

class ContactAggregator
{
    /**
     * @var array
     */
    protected $contacts = array();

    /**
     * @param Contact $contact
     */
    public function addContact(Contact $contact)
    {
        if (array_key_exists($contact, $this->contacts)) {
            return;
        }

        $this->contacts[] = $contact;
    }

    /**
     * @param Contact $contact
     */
    public function removeContact(Contact $contact)
    {
        $key = array_search($contact, $this->contacts);

        if (false === $key) {
            return;
        }

        unset($this->contacts[$key]);
    }
}