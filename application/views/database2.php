<?php
 echo '� ������� "text" ���� �������' . '</br></br>';
$fields = $this->db->list_fields('text');

foreach ($fields as $field)
{
   echo $field;
   echo '</br>';
}



