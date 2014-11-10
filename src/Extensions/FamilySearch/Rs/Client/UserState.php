<?php

namespace Gedcomx\Extensions\FamilySearch\Rs\Client;

use Gedcomx\Extensions\FamilySearch\FamilySearchPlatform;
use Gedcomx\Rs\Client\GedcomxApplicationState;
use Guzzle\Http\Message\Request;
use Guzzle\Http\Message\Response;

class UserState extends FamilySearchCollectionState{

    protected function reconstruct(Request $request, Response $response)
    {
        return new UserState($this->client, $request, $response, $this->accessToken, $this->stateFactory);
    }

    protected function getScope()
    {
        return $this->getUser();
    }

    /**
     * @return \Gedcomx\Extensions\FamilySearch\Platform\Users\User.php|null
     */
    public function getUser(){
        if ($this->getEntity() != null && $this->getEntity()->getUsers() != null) {
            $users = $this->getEntity()->getUsers();
            if (count($users) > 0) {
                return $users[0];
            }
        }

        return null;
    }
}