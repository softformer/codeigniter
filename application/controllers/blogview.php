<?php
class Blogview extends CI_Controller {
    
public function index()
	{
		
                $this->load->view('blogview');
                $this->load->helper('array');
                $this->load->helper('date');
                $this->load->helper('download');
                $this->load->helper('form');
                $this->load->view('cod');
 
                
            
//������� ���� � �������                
              $datestring = "���: %Y �����: %m ����: %d - %h:%i %a";
$time = time();

echo mdate($datestring, $time);  
                
echo '</br>';        
                
               $array = array('color' => 'red', 'shape' => 'round', 'size' => '');

// ����� "red"
echo element('color', $array);
echo '</br>';
// ����� NULL
echo element('size', $array, NULL);
echo '</br>';
echo timezone_menu('UM8');
echo '</br>';

$quotes = array(
            "� �����, ��� ��� �������� � �������, ��� ����� � �������. - ����� ����������",
            "�� ��������� � �������, ���� �� �� ������ ��� ������ ������. - ������ �����",
            "�� �� ��������� ����; � ��� ������ ����� �����. - ���� ��������",
            "���� �� ��� ���������, ��������� ����. - ����� ��������",
            "���������� � ������ �������, ���� � ����� �������. - ������� ��������",
            "���� ������ ���� ��������������� ��� - ���� ������"
            );
echo random_element($quotes);
    echo '</br>'; 
    
//form_password()
  
//�������� �������� ����� � ��������� � �����
//$data = file_get_contents("image/heart.PNG"); // ��������� ���������� �����
//$name = 'heart.PNG';
//
//force_download($name, $data);




}
}