<?php


function getListofCharacters(array $array)
{
    $li = '';
    foreach ($array as $character) {
        $li .= ' 
    <li class="repertory__cont">
        <div class="character-card character-card--' . $character['status_name'] . '">
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
};

function sortCharacters(string $sorter) : array
{
    require 'php/_connection-dtb.php';
    $sorters = ['name', 'forum_name', 'age', 'id_gender', 'id_characters', 'id_status'];
    if (in_array(strip_tags($sorter), $sorters)) {
        $query = $dbCo->prepare(
            "SELECT `id_characters`,`name`,`faceclaim`,`credit`,`age`, `gender`, `faction`, `forum_name`, `status_name`
            FROM `characters`
            JOIN `belong` USING (id_characters)
            JOIN `faction` USING (id_faction)
            JOIN `divide` USING (id_faction)
            JOIN `universe` USING (id_universe)
            JOIN `gender` USING (id_gender)
            JOIN `status` USING (id_status)
            
            ORDER BY {$sorter}, `name` ASC"
        );
        $isOk = $query->execute();

        $characters = $query->fetchAll();
    }

    return $characters;
}
//faire une variable php à la place du :order, très sécurisé, strip tags and everything
//faire un array des possibilités par lesquelles on peut trier 

        // foreach ($characters as $character){
    // $characterId = $character['id_characters'];
    // $characterName = $character['name'];
    // $faceclaim = $character['name'];
    // $age = $character['age'];
    // $credit = $character['credit'];
    // $status = $character['status_name'];
    // $gender = $character['gender'];
    // $faction = $character['faction'];
    // $forum = $character['forum_name'];
    // }

        // function getCharacterName(array $array)
        // {
        //     foreach ($array as $character) {
        //         $characterName[] = $character['name'];
        //     }
        
        //     return $characterName;
        // }
        
        
        // function getCharacterId(array $array)
        // {
        //     foreach ($array as $character) {
        //         $characterId[] = $character['id'];
        //     }
        
        //     return $characterId;
        // }
        
        // function getAge(array $array)
        // {
        //     foreach ($array as $character) {
        //         $characterAge[] = $character['age'];
        //     }
        
        //     return $characterAge;
        // }
        
        // function getCredit(array $array)
        // {
        //     foreach ($array as $character) {
        //         $characterCredit[] = $character['credit'];
        //     }
        
        //     return $characterCredit;
        // }
        
        // function getStatus(array $array)
        // {
        //     foreach ($array as $character) {
        //         $characterStatus[] = $character['status_name'];
        //     }
        
        //     return $characterStatus;
        // }
        
        // function getFaceclaim(array $array)
        // {
        //     foreach ($array as $character) {
        //         $characterFaceclaim[] = $character['faceclaim'];
        //     }
        
        //     return $characterFaceclaim;
        // }
        
        // function getGender(array $array)
        // {
        //     foreach ($array as $character) {
        //         $characterGender[] = $character['gender'];
        //     }
        
        //     return $characterGender;
        // }
        
        // function getFaction(array $array)
        // {
        //     foreach ($array as $character) {
        //         $characterFaction[] = $character['faction'];
        //     }
        
        //     return $characterFaction;
        // }
        
        // function getForum(array $array)
        // {
        //     foreach ($array as $character) {
        //         $characterForum[] = $character['forum_name'];
        //     }
        
        //     return $characterForum;
        // }