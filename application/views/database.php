<?php

echo '� ���� ������ gaz ���������� �������: </br></br>';
$tables = $this->db->list_tables();

foreach ($tables as $table)
{
   echo $table;
   echo '</br>';
}
echo '</br>';
echo '������ ' . $this->db->platform() . ' ';
echo '  ---' . $this->db->version() . '</br></br>';

