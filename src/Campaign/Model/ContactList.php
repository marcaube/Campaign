<?php

namespace Campaign\Model;

/**
 * Lists are nestable so you can create subsets of contact lists.
 * e.g. a child list named "FR" could be all contacts from France in a particular list.
 */
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
     * @var array
     */
    protected $children = array();

    /**
     * @var ContactList
     */
    protected $parent = null;

    /**
     * @param Contact $contact
     *
     * @return ContactList
     */
    public function addContact(Contact $contact)
    {
        if ($this->hasContact($contact)) {
            return;
        }

        $this->contacts[] = $contact;

        return $this;
    }

    /**
     * @param Contact $contact
     *
     * @return ContactList
     */
    public function removeContact(Contact $contact)
    {
        $key = array_search($contact, $this->contacts);

        if (false === $key) {
            return;
        }

        unset($this->contacts[$key]);

        return $this;
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

    /**
     * @param ContactList $list
     *
     * @return ContactList
     */
    public function addChild(ContactList $list)
    {
        $list->setParent($this);

        $this->children[] = $list;

        return $this;
    }

    /**
     * @param ContactList $list
     *
     * @return bool
     */
    public function hasChild(ContactList $list)
    {
        return in_array($list, $this->children);
    }

    /**
     * @param ContactList $list
     *
     * @return ContactList
     */
    public function setParent(ContactList $list)
    {
        $this->parent = $list;

        return $this;
    }

    /**
     * @return ContactList|null
     */
    public function getParent()
    {
        return $this->parent;
    }
}
