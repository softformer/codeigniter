<?php
class Database extends CI_Controller {

	public function index()
	{

//���������� ��������� ���� ������ ������ 'default'
$this->load->database('default');
//�������� ���������� ����� database.php � views
$this->load->view('database');

//���������� ���������� �� ������ � ������ ������ dbforge
$this->load->dbforge();
//�������� ���������� ����� database2.php � views
$this->load->view('database2');
	}
        
       
}