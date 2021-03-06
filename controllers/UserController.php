<?php
include_once ROOT . '/models/User.php';
/**
 * Контроллер UserController
 */
class UserController 
{

    public function actionRegister() {
        $name = false;
        $email = false;
        $result = false; 
       

        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            
            $errors = false;
            
            if (!User::checkName($name)) {
                $errors[] = 'Имя не должно быть короче 2-х символов';
            }
            if (!User::checkEmail($email)) {
                $errors[] = 'Неправильный email';
            }            
            
            if (User::checkEmailExists($email)) {
                $errors[] = 'Такой email уже используется';
            }

            if ($errors == false) {
                $result = User::register($name, $email);
                
            }
        }

        require_once(ROOT . '/views/user/register.php');
        return true;
    }
   
}
