<?php

$this->load->helper('form');
$this->load->helper('path');
$this->load->helper('url');
echo form_checkbox('newsletter', 'accept', TRUE);

echo form_fieldset('��� �����');
echo "<p>���������� ������ �����.</p>\n";
echo form_fieldset_close(); 

echo '</br>';

echo form_input('username', '���������');
echo '<br><br>';
$data = array(
              'name'        => 'username',
              'id'          => 'username',
              'value'       => '���������',
              'maxlength'   => '100',
              'size'        => '50',
              'style'       => 'width:50%',
            );

echo form_input($data);
echo '<br><br>';
echo mailto('me@my-site.com', '����� �� ���� ��� �������� ������!');
echo '<br><br>';
echo anchor('news/local/123', '��� �������', array('title' => '����� ������ �������!'));

echo '<br><br>';

echo anchor_popup('news/local/123', 'ٸ�� ����!', array());
