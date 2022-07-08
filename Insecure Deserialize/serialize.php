<?php
    class User{
        public $username;
        public $status;
    }
   $user = new User;
   $user->username = 'vickie';
   $user->status = 'not admin';
   echo serialize($user);
?>