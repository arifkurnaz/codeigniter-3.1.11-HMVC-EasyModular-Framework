
<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
                        
class Auth_model extends CI_Model 
{
    private $table='users';
   
      
    public function save()
    {

    }   
    public function checkuser($formData)
    {
        $this->db->select('user_code,name,surname,user_type,user_token,photo,last_login,email,id');
        $this->db->from($this->table);
        
        $this->db->where('password', encrypt_pass($formData['password']));
        $this->db->where('email', $formData['username']);
        $this->db->or_where('username', $formData['username']); 
      $user=$this->db->get()->row(); 
      if($user){
      $user->lockscreen = simple_encode('UNLOCKED');
      $user->link='/home';
      $user->user_code=explode('&',$user->user_code)[1];
      session_add_object('user',$user);
        
    return  $this->db->update($this->table, ['last_login' => date("Y-m-d H:i:s")],['email' => $user->email])?true:false;
      }else
      {
        return false;
      }   
      
    }    
    public function unlockscreen($formData)
    {
          
       $this->db->where('user_token', session_get_object('user')->user_token);
       $this->db->where('password', encrypt_pass($formData['password']));
       
     return $this->db->get($this->table)->row()?true:false;
     
    }      
    public function listUsers()
    {
      return $this->db->get($this->table)->row();
    }        
                        
}


/* End of file Auth_model.php and path /application/models/Auth_model.php */

