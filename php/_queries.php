<?php

require '_connection-dtb.php';
require '_functions.php';

if (array_key_exists('sorter', $_GET)){
    sortCharacters(strip_tags($_GET['sorter']));
    return $characters;
}
else {
    sortCharacters('name');
    return $characters;
}


// $query = $dbCo->prepare("SELECT `id_characters`,`name`,`faceclaim`,`credit`,`age`, `gender`, `faction`, `forum_name`, `status_name`
//     FROM `characters`
// 	JOIN `belong` USING (id_characters)
//     JOIN `faction` USING (id_faction)
//     JOIN `divide` USING (id_faction)
//     JOIN `universe` USING (id_universe)
//     JOIN `gender` USING (id_gender)
//     JOIN `status` USING (id_status)
    
// ORDER BY `name`");
// $isOk = $query->execute();

