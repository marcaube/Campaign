<?php

namespace Campaign\Model;

class ContactList
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @var array
     */
    protected $contacts = array();

    /**
     * @param Contact $contact
     */
    public function addContact(Contact $contact)
    {
        if ($this->hasContact($contact)) {
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

    /**
     * @param Contact $contact
     *
     * @return bool
     */
    public function hasContact(Contact $contact)
    {
        return in_array($contact, $this->contacts);
    }
}
