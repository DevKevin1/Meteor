<?php 
namespace App\Controllers\Auth;

use App\Entities\Room;
use App\Entities\RoomItem;
use App\Validation\Nux as NuxValidation;
use CodeIgniter\API\ResponseTrait;

class Nux extends \App\Controllers\Application
{
    use ResponseTrait;

    public function __construct()
    {
        parent::__construct();
        $this->userModel = model('UserModel');
        $this->userSettings = model('UserSettingsModel');
    }
  
    public function checkName() {
       
      
        if (!$this->validate(['name' => 'pattern[[a-zA-Z0-9-=?!@:.]+]'])) {
            return $this->respond(new NuxValidation('INVALID_NAME', ['resultType' => 'VALIDATION_ERROR_ILLEGAL_WORDS']));
        }
      
        if($this->userModel->where('username', $this->request->getVar('name'))->where('username !=', $this->user->username)->first()) {
            return $this->respond(new NuxValidation('NAME_IN_USE'));
        }
      
        return $this->respond(new NuxValidation());
    }
  
    public function selectName() {
      
        if($this->userSettings->find($this->user->id)->nux  == 1) {
            return $this->fail([], 400);
        }
      
        $data = [
            'username' => $this->request->getVar('name')
        ];
      
        if($this->userModel->update($this->user->id, $data)) {
            return $this->respond(new NuxValidation('OK', ['resultType' => 'VALIDATION_NAME_OK']));
        }
    }
  
    public function saveFigure() {
      
        if($this->userSettings->find($this->user->id)->nux  == 1) {
            return $this->fail([], 400);
        }
      
        $data = [
            'look'    => $this->request->getVar('look'),
            'gender'  => $this->request->getVar('gender')
        ];
        
        if($this->userModel->update($this->user->id, $data)) {
            return $this->respond(new NuxValidation('OK'));
        }
    }
  
    public function saveRoom() {
      
        if($this->userSettings->find($this->user->id)->nux  == 1) {
            return $this->fail([], 400);
        }
      
        if (!in_array($this->request->getVar('roomIndex'), [1, 2, 3])) {
            return response('', 400);
        }
      
        switch ($this->request->getVar('roomIndex')):
        case 1:
                return $this->createBedRoom();
        case 2:
                return $this->createPoolRoom();
        case 3:
                return $this->createClubRoom();
        default:
                return false;
        endswitch;
        
        return $this->respond('', 200);
    }
  
      protected function createBedRoom() {
        
        $roomModel = model('RoomModel');
        $roomItemModel = model('ItemModel');
      
        $roomModel->insert((new Room())->store("{$this->user->username}'s room", "{$this->user->username} has entered the building", 'model_h', 25, 12, 610, 2403, 0.0, $this->user->id, $this->user->username));
        $this->userModel->update($this->user->id, ['home_room' => $room]);

        // Floor Items
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 3069, 3, 9, '0.00000', 0, ''));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 3069, 3, 11, '0.00000', 0, ''));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 3233, 3, 12, '0.00001', 0, ''));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 3247, 3, 11, '0.00001', 2, ''));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 3247, 4, 9, '0.00001', 4, ''));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 4432, 3, 9, '0.00001', 0, '2'));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 4112, 9, 11, '0.0000', 0, ''));       
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 4112, 8, 11, '0.0000', 0, ''));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 4112, 9, 9, '0.0000', 0, ''));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 4112, 9, 8, '0.0000', 0, ''));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 4112, 8, 9, '0.0000', 0, ''));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 4140, 8, 8, '0.0000', 0, '2'));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 4140, 8, 9, '0.0001', 0, '1'));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 4140, 9, 8, '0.0001', 0, '1'));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 4140, 10, 8, '0.0001', 0, '1'));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 4112, 5, 2, '1.0000', 0, ''));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 4112, 5, 4, '1.0000', 0, ''));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 3541, 8, 3, '1.0000', 0, ''));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 3556, 7, 3, '1.0000', 2, '1'));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 3564, 8, 2, '1.0000', 0, ''));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 3564, 10, 3, '1.0000', 2, ''));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 3564, 8, 5, '1.0000', 0, ''));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 3577, 10, 5, '1.0000', 0, ''));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 3577, 7, 5, '1.0000', 0, ''));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 3577, 7, 2, '1.0000', 0, ''));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 3577, 10, 2, '1.0000', 0, ''));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 3577, 7, 4, '1.0000', 0, ''));
        
        // Wall Items
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 41210, 0, 0, '0', 0, '', ':w=2,11 l=5,58 l'));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 41210, 0, 0, '0', 0, '1', ':w=2,10 l=10,56 l'));


        return true;
    }
  
    protected function createPoolRoom() {
        
        $roomModel = model('RoomModel');
        $roomItemModel = model('ItemModel');
      
        $roomModel->insert((new Room())->store("{$this->user->username}'s room", "{$this->user->username} has entered the building", 'model_h', 25, 12, 307, 3104, 1.10, $this->user->id, $this->user->username));
        $this->userModel->update($this->user->id, ['home_room' => $room]);

        // Floor Items
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 15542, 9, 9, 0.00000, 4, ''));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 16732, 9, 12, 0.00000, 0, ''));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 15542, 10, 9, 0.00000, 4, ''));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 15542, 10, 12, 0.00000, 0, ''));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 16412, 9, 5, 1.00000, 0, ''));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 16435, 7, 5, 1.00000, 0, ''));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 16486, 8, 5, 1.00000, 0, ''));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 17816, 6, 2, 1.00000, 0, '4'));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 17816, 9, 2, 1.00000, 0, '4'));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 17824, 7, 2, 1.00000, 0, '1'));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 17894, 9, 10, 0.00000, 0, ''));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 18074, 8, 4, 1.00000, 0, '1'));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 18817, 3, 10, 0.01000, 2, ''));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 18835, 5, 9, 0.00000, 0, ''));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 18835, 3, 11, 0.00000, 0, ''));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 18835, 5, 9, 0.00000, 0, ''));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 18835, 5, 11, 0.00000, 0, ''));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 4886, 3, 10, 0.00001, 2, ''));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 4904, 5, 9, 0.00000, 0, ''));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 4904, 3, 11, 0.00000, 0, ''));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 4904, 3, 9, 0.00000, 0, ''));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 4904, 5, 11, 0.00000, 0, ''));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 3953, 0, 10, 0.00000, 0, ''));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 18, 9, 9, 0.00000, 4, ''));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 18, 10, 9, 0.00000, 4, ''));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 18, 9, 12, 0.00000, 0, ''));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 18, 5, 11, 0.00000, 0, ''));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 2488, 7, 6, 1.00000, 0, ''));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 2465, 9, 6, 1.00000, 0, ''));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 2539, 8, 6, 1.00000, 0, ''));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 3883, 7, 2, 1.00000, 0, '1'));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 3875, 9, 2, 1.00000, 0, '4'));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 3875, 6, 2, 1.00000, 0, '4'));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 195, 10, 2, 1.00000, 4, ''));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 3886, 7, 2, 2.00000, 0, '1'));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 4135, 8, 4, 1.00000, 0, '1'));

        // Wall Items
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 22988, 0, 0, '0', 0, '', ':w=4,2 l=0,35 l'));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 23163, 0, 0, '0', 0, '1', ':w=4,8 l=0,43 r'));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 23261, 0, 0, '0', 0, '', ':w=2,10 l=2,34 l'));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 23331, 0, 0, '0', 0, '', ':w=2,10 l=2,29 l'));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 44870, 0, 0, '0', 0, '0', ':w=2,11 l=15,25 l'));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 44130, 0, 0, '0', 0, '0', ':w=2,11 l=15,27 l'));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 44270, 0, 0, '0', 0, '0', ':w=3,8 l=14,49 r'));

        return true;
    }
  
    protected function createClubRoom() {
        $roomModel = model('RoomModel');
        $roomItemModel = model('ItemModel');
      
        $roomModel->insert((new Room())->store("{$this->user->username}'s room", "{$this->user->username} has entered the building", 'model_h', 25, 12, 409, 1902, 0.0, $this->user->id, $this->user->username));
        $this->userModel->update($this->user->id, ['home_room' => $room]);
      
        // Floor Items
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 16904, 4, 11, 0.00000, 0, '1'));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 16905, 6, 9, 0.00000, 0, '1'));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 16905, 6, 10, 0.00000, 0, '1'));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 16905, 8, 9, 0.00000, 0, '1'));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 16905, 8, 10, 0.00000, 0, '1'));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 16907, 5, 9, 0.00000, 6, ''));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 16907, 5, 10, 0.00000, 6, '1'));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 16909, 4, 9, 0.00000, 2, '1'));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 16909, 4, 10, 0.00000, 2, '1'));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 16913, 6, 7, 1.30000, 0, '3'));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 16913, 9, 7, 1.30000, 0, '3'));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 17189, 10, 2, 1.00000, 0, ''));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 17573, 6, 7, 0.00000, 2, '3'));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 17573, 7, 7, 0.00000, 0, '3'));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 17573, 8, 7, 0.00000, 0, '3'));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 17573, 9, 7, 0.00000, 0, '3'));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 18048, 7, 2, 1.00000, 0, ''));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 18082, 6, 3, 1.00001, 0, ''));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 18082, 9, 3, 1.00000, 0, ''));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 2957, 4, 11, 0.00000, 0, ''));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 2958, 8, 9, 0.00000, 0, '1'));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 2958, 6, 10, 0.00001, 0, '1'));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 2958, 8, 10, 0.00001, 0, '1'));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 2958, 6, 9, 0.00000, 0, '1'));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 3630, 9, 7, 0.00000, 0, '3'));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 3630, 8, 7, 0.00000, 0, '3'));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 3630, 7, 7, 0.00000, 0, '3'));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 2962, 4, 9, 0.00000, 2, '1'));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 2962, 4, 10, 0.00000, 2, '1'));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 2960, 5, 9, 0.00000, 6, ''));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 2960, 5, 10, 0.00000, 6, ''));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 3630, 6, 7, 0.00000, 0, '3'));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 3886, 7, 7, 1.30000, 0, '1'));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 2966, 6, 7, 1.30000, 0, '3'));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 2966, 9, 7, 1.30000, 0, '3'));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 4143, 9, 3, 1.00000, 6, ''));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 4143, 6, 3, 1.00000, 2, ''));      
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 4109, 7, 2, 1.00000, 4, ''));      

        // Wall Items
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 23008, 0, 0, '0', 0, '2', ':w=4,8 l=0,27 r'));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 23013, 0, 0, '0', 0, '', ':w=2,10 l=2,44 l'));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 23014, 0, 0, '0', 0, '1', ':w=8,1 l=14,27 r'));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 23236, 0, 0, '0', 0, '1', ':w=6,1 l=5,31 r'));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 23239, 0, 0, '0', 0, '0', ':w=4,7 l=4,29 l'));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 40710, 0, 0, '0', 0, '1', ':w=2,11 l=9,35 l'));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 40660, 0, 0, '0', 0, '1', ':w=3,8 l=14,31 r'));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 43870, 0, 0, '0', 0, '0', ':w=4,7 l=3,26 l'));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 43900, 0, 0, '0', 0, '0', ':w=6,1 l=12,30 r'));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 40720, 0, 0, '0', 0, '0', ':w=9,1 l=12,28 r'));
    }
}