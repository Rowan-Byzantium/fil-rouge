<?php

require 'php/_connection-dtb.php';

$query = $dbCo->prepare("SELECT `id_characters`,`name`,`faceclaim`,`credit`,`age`, `gender`, `faction`, `forum_name`, `status_name`
FROM `characters`
	JOIN `belong` USING (id_characters)
    JOIN `faction` USING (id_faction)
    JOIN `divide` USING (id_faction)
    JOIN `universe` USING (id_universe)
    JOIN `gender` USING (id_gender)
    JOIN `status` USING (id_status)
    
ORDER BY `name`");
$isOk = $query->execute();

$characters = $query->fetchAll();

