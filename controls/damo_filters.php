<?php function damo_validate($data)
{ $data=trim($data); $data=stripslashes($data); $data=htmlspecialchars($data); return $data;}