<?php
    class Task_model extends CI_Model {
        
        public function storeData() {
            
            $this->load->database();

            $data = array(
                'task'=> $_POST['task'],
                'due_date'=>$_POST['due_date'],
                'email'=>$_POST['email'],
                'status' =>$_POST['status'],
            );

            $this->db->insert("tasks",$data);
        }
        public function showData(){
            $this->load->database();

            $query=$this->db->get('tasks');
            $table=$query->result_array();
            return $table;
        }
        public function removeData($task){
            $this->load->database();
            // print_r($task);

             $this->db->where("ID",$task);
             $this->db->delete("tasks");
         }
         public function getTaskByID($task){
            $this->load->database();
            // print_r($task);
            $query=$this->db->get_where('tasks',array('ID'=>$task));
            $data=$query->row_array();
            // print_r($data);
            return $data;
         }

         public function editData($submiy_arr){
            $this->load->database();
            // print_r($submiy_arr['id']);die;
             $this->db->where("ID",$submiy_arr['id']);
            $this->db->update('tasks',$submiy_arr);
            // print_r($this->db->last_query()); die;
         }

        
    }
?>