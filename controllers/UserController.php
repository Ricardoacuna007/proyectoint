<?php
require_once __DIR__ . '/../utils/Auth.php';
require_once __DIR__ . '/../utils/View.php';

require_once __DIR__ . '/../entitys/LevelEntity.php';
require_once __DIR__ . '/../entitys/UserEntity.php';

require_once __DIR__ . '/../interfaces/UserInterface.php';

require_once __DIR__ . '/../models/LevelModel.php';
require_once __DIR__ . '/../models/PersonModel.php';
require_once __DIR__ . '/../models/UserModel.php';

//class UserController extends HelperController implements UserInterface
class UserController implements UserInterface
{
    public function auth()
    {
        View::render("users/authView", ["auth" => 0]);
    }

    public function villadark()
    {
        if(isset($_POST['infoLogin'])) 
        {
            $infoLogin = $_POST['infoLogin'];
            
            $phone    = $infoLogin[0];
            $password = $infoLogin[1];

            $levelModel  = new LevelModel(); 
            $personModel = new PersonModel();
            $userModel   = new UserModel();

            $levelEntity = new LevelEntity(0,"Gueste0");                           
            $userEntity  = new UserEntity($phone, "John", "Garcia", "Villa", "M", '1980-07-30', 3064, $phone, 0, $password, 0);
                                                                                            
            //$statusLevel  = $levelModel->save($levelEntity);
            //$statusPerson = $personModel->save($userEntity);
            //$statusUser   = $userModel->save($userEntity);

            $credentials = $userModel->login($userEntity);

            if($credentials >= 1)
            {
                $level = $userModel->level($userEntity);
                //$user  = $userModel->check($userEntity);
                //$user  = Auth::authentication($user);
                //var_dump($user); exit();
                //session_start();
                //$_SESSION['name'] = "Juan";
                $action = array
                (
                    'credentials' => $level
                );
            }
            else
            {
                $action = array
                (
                    'credentials' => -1
                );
            }
			
			echo $json = json_encode($action);
        }
    }

    public function forget()
    {
        
    }

}

?>