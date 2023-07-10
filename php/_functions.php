<?php

function getCharacterName(array $array)
{
    foreach ($array as $character) {
        $characterName[] = $character['name'];
    }

    return $characterName;
}


function getCharacterId(array $array)
{
    foreach ($array as $character) {
        $characterId[] = $character['id'];
    }

    return $characterId;
}

function getAge(array $array)
{
    foreach ($array as $character) {
        $characterAge[] = $character['age'];
    }

    return $characterAge;
}

function getCredit(array $array)
{
    foreach ($array as $character) {
        $characterCredit[] = $character['credit'];
    }

    return $characterCredit;
}

function getStatus(array $array)
{
    foreach ($array as $character) {
        $characterStatus[] = $character['status_name'];
    }

    return $characterStatus;
}

function getFaceclaim(array $array)
{
    foreach ($array as $character) {
        $characterFaceclaim[] = $character['faceclaim'];
    }

    return $characterFaceclaim;
}

function getGender(array $array)
{
    foreach ($array as $character) {
        $characterGender[] = $character['gender'];
    }

    return $characterGender;
}

function getFaction(array $array)
{
    foreach ($array as $character) {
        $characterFaction[] = $character['faction'];
    }

    return $characterFaction;
}

function getForum(array $array)
{
    foreach ($array as $character) {
        $characterForum[] = $character['forum_name'];
    }

    return $characterForum;
}

function getListofCharacters(array $array){
    $li = '';
    foreach($array as $character){
    $li .= 
    ' <li class="repertory__cont">
    <div class="character-card character-card--' . $character['status_name']. '">
        <img class="character-card__img" src="http://via.placeholder.com/200x320" alt="ava">
        <div class="character-card__txt--img-right">
            <p class="character-card__txt--name">' . $character['name'] . '</p>
            <ul class="character-card__lst">
                <li class="character-card__itm repertory__txt">' . $character['gender'] . '</li>
                <li class="character-card__itm repertory__txt">' . $character['age'] . '</li>
                <li class="character-card__itm repertory__txt">' . $character['faction'] . '</li>
            </ul>
            <p class="character-card__txt--credit">' . $character['credit'] . '</p>
        </div>
        <p class="character-card__txt">' . $character['faceclaim'] . '</p>
        <p class="character-card__txt--bottom">' . $character['forum_name'] . '</p>
    </div>
    </li>';
    };
    return $li;
}