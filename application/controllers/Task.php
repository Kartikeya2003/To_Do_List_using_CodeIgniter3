<?php
    class Task extends CI_Controller{
        public function index(){
            // echo "Hello World!";
            $this->load->view("To_do");
            
         }
                
       public function storeData(){
        // print_r($_POST);
        $this->Task_model->storeData($_POST);
        $this->load->view("To_do");
        redirect('/task');
        
       

        
    }
    public function showData(){
        ;
        
        $data['tasks']=$this->Task_model->showData();
        // print_r($data);
        $this->load->view('table',$data);
        $this->load->view("Server_Side_Script",$data);

    }
    public function deleteData(){
        $task=$this->uri->segment(3);

        // print_r($task)   ;die; 
        $this->Task_model->removeData($task);
        redirect("/task/showData"); 

        // $this->load->view("");
        
    }
    public function getData(){
        $task=$this->uri->segment(3);
        
        // print_r($task);

        $this->Task_model->getTaskByID($task);
        $data['task']=$this->Task_model->getTaskByID($task);
        $this->load->view('Edit',$data);
           
    }

    public function updateData(){
        if($this->input->post()) {
            $id = $_POST['id'];
            $task_title = $_POST['task'];
            $due_date = $_POST['due_date'];
            $email = $_POST['email'];
            $status = $_POST['status'];
        
            $submiy_arr = array(
                'id'=>$id,
                'Task' => $task_title,
                'Due_Date' =>$due_date,
                'Email' =>$email,
                'Status' =>$status,
            );

            // print_r($submiy_arr); 
            $this->Task_model->editData($submiy_arr);
            redirect('/task');
        }
    }
}

?>