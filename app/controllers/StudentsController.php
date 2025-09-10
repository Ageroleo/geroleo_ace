<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');


class StudentsController extends Controller {
    public function __construct()
    {
        parent::__construct();
        $this->call->database();
        $this->call->model('StudentsModel');
    }

    public function index()
    {
        $students = $this->StudentsModel->all();
        $this->call->view('students/index', ['students' => $students]);
    }

    public function create()
    {
        $this->call->view('students/create');
    }

    public function store()
    {
        $data = array(
            'first_name' => isset($_POST['first_name']) ? $_POST['first_name'] : '',
            'last_name' => isset($_POST['last_name']) ? $_POST['last_name'] : '',
            'email' => isset($_POST['email']) ? $_POST['email'] : ''
        );
        $this->StudentsModel->insert($data);
        redirect('/students');
    }

    public function edit($id)
    {
        $student = $this->StudentsModel->find($id);
        if (! $student) {
            show_404();
            return;
        }
        $this->call->view('students/edit', ['student' => $student]);
    }

    public function update($id)
    {
        $data = array(
            'first_name' => isset($_POST['first_name']) ? $_POST['first_name'] : '',
            'last_name' => isset($_POST['last_name']) ? $_POST['last_name'] : '',
            'email' => isset($_POST['email']) ? $_POST['email'] : ''
        );
        $this->StudentsModel->update($id, $data);
        redirect('/students');
    }

    public function destroy($id)
    {
        $this->StudentsModel->delete($id);
        redirect('/students');
    }
}