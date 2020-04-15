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
        $data = [
            'username' => $this->request->getVar('name')
        ];
      
        if($this->userModel->update($this->user->id, $data)) {
            return $this->respond(new NuxValidation('OK', ['resultType' => 'VALIDATION_NAME_OK']));
        }
    }
  
    public function saveFigure() {
        $data = [
            'look'    => $this->request->getVar('look'),
            'gender'  => $this->request->getVar('gender')
        ];
        
        if($this->userModel->update($this->user->id, $data)) {
            return $this->respond(new NuxValidation('OK'));
        }
    }
  
    public function saveRoom() {
      
        if (!in_array($this->request->getVar('roomIndex'), [1, 2, 3])) {
            return $this->fail([], 400);
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
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 15542, 9, 9, '0.00000', 4, ''));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 15542, 9, 12, '0.00000', 0, ''));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 15542, 10, 9, '0.00000', 4, ''));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 15542, 10, 12, '0.00000', 0, ''));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 16412, 9, 5, '1.00000', 0, ''));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 16435, 7, 5, '1.00000', 0, ''));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 16486, 8, 5, '1.00000', 0, ''));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 17816, 6, 2, '1.00000', 0, '4'));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 17816, 9, 2, '1.00000', 0, '4'));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 17824, 7, 2, '1.00000', 0, '1'));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 17894, 9, 10, '0.00000', 0, ''));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 18074, 8, 4, '1.00000', 0, '1'));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 18817, 3, 10, '0.01000', 2, ''));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 18835, 3, 9, '0.00000', 0, ''));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 18835, 3, 11, '0.00000', 0, ''));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 18835, 5, 9, '0.00000', 0, ''));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 18835, 5, 11, '0.00000', 0, ''));

        // Wall Items
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 22988, 0, 0, '0', 0, '', ':w=4,2 l=0,35 l'));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 23163, 0, 0, '0', 0, '1', ':w=4,8 l=0,43 r'));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 23261, 0, 0, '0', 0, '', ':w=2,10 l=2,34 l'));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 23331, 0, 0, '0', 0, '', ':w=2,10 l=2,29 l'));

        return true;
    }
  
    protected function createPoolRoom() {
        
        $roomModel = model('RoomModel');
        $roomItemModel = model('ItemModel');
      
        $roomModel->insert((new Room())->store("{$this->user->username}'s room", "{$this->user->username} has entered the building", 'model_h', 25, 12, 307, 3104, 1.10, $this->user->id, $this->user->username));
        $this->userModel->update($this->user->id, ['home_room' => $room]);

        // Floor Items
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 16715, 5, 11, 1.30000, 0, ''));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 16732, 3, 10, 0.40000, 0, ''));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 17016, 3, 9, 0.00000, 2, '1'));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 17016, 3, 11, 0.00000, 0, ''));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 17016, 4, 9, 0.00000, 4, ''));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 17090, 3, 9, 0.00000, 2, '1'));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 17176, 3, 9, 0.00000, 0, ''));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 17176, 3, 9, 0.40000, 0, ''));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 17176, 3, 10, 0.00000, 0, ''));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 17190, 3, 11, 0.00000, 2, ''));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 17190, 4, 9, 0.00000, 4, ''));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 17191, 3, 10, 0.40000, 2, ''));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 17191, 3, 12, 0.00000, 2, ''));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 17484, 8, 3, 1.00000, 0, '0', 0));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 17499, 7, 3, 1.00000, 2, ''));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 17520, 7, 2, 1.00000, 0, ''));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 17520, 7, 4, 1.00000, 0, ''));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 17520, 7, 5, 1.00000, 0, ''));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 17520, 8, 2, 1.00000, 0, ''));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 17520, 8, 5, 1.00000, 0, ''));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 17520, 9, 2, 1.00000, 0, ''));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 17520, 9, 5, 1.00000, 0, ''));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 17520, 10, 2, 1.00000, 0, ''));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 17520, 10, 3, 1.00000, 0, ''));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 17520, 10, 4, 1.00000, 0, ''));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 17520, 10, 5, 1.00000, 0, ''));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 17987, 5, 11, 0.00000, 0, ''));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 18051, 5, 2, 1.00000, 0, ''));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 18051, 5, 4, 1.00000, 0, ''));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 18051, 8, 9, 0.00000, 0, ''));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 18051, 8, 11, 0.00000, 0, ''));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 18051, 9, 9, 0.00000, 0, ''));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 18051, 9, 11, 0.00000, 0, ''));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 18061, 8, 8, 0.00000, 2, ''));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 18061, 8, 9, 0.00000, 6, '1'));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 18061, 10, 8, 0.00000, 4, '1'));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 18070, 8, 2, 1.50000, 0, '1'));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 18079, 9, 8, 0.00000, 0, '1'));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 18363, 3, 9, 0.80000, 0, '2'));

        // Wall Items
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 22996, 0, 0, '0', 0, '', ':w=4,8 l=7,45 r'));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 22996, 0, 0, '0', 0, '', ':w=4,8 l=9,45 l'));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 23063, 0, 0, '0', 0, '', ':w=2,10 l=10,56 l'));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 23063, 0, 0, '0', 0, '', ':w=2,11 l=6,58 l'));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 23078, 0, 0, '0', 0, '1', ':w=6,1 l=0,26 r'));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 23078, 0, 0, '0', 0, '3', ':w=7,1 l=4,28 r'));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 23078, 0, 0, '0', 0, '1', ':w=8,1 l=13,33 r'));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 23078, 0, 0, '0', 0, '3', ':w=10,1 l=0,26 r'));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 23229, 0, 0, '0', 0, '1', ':w=4,3 l=6,49 l'));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 23229, 0, 0, '0', 0, '1', ':w=4,5 l=11,45 l'));

        return true;
    }
  
    protected function createClubRoom() {
        $roomModel = model('RoomModel');
        $roomItemModel = model('ItemModel');
      
        $roomModel->insert((new Room())->store("{$this->user->username}'s room", "{$this->user->username} has entered the building", 'model_h', 25, 12, 409, 1902, 0.0, $this->user->id, $this->user->username));
        $this->userModel->update($this->user->id, ['home_room' => $room]);
      
        // Floor Items
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 16904, 4, 11, '0.00000', 0, '1'));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 16905, 6, 9, '0.00000', 0, '1'));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 16905, 6, 10, '0.00000', 0, '1'));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 16905, 8, 9, '0.00000', 0, '1'));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 16905, 8, 10, '0.00000', 0, '1'));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 16907, 5, 9, '0.00000', 6, ''));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 16907, 5, 10, '0.00000', 6, ''));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 16909, 4, 9, '0.00000', 2, '1'));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 16909, 4, 10, '0.00000', 2, '1'));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 16913, 6, 7, '1.30000', 0, '3'));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 16913, 9, 7, '1.30000', 0, '3'));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 17189, 10, 2, '1.00000', 0, ''));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 17573, 6, 7, '0.00000', 0, '3'));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 17573, 7, 7, '0.00000', 0, '3'));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 17573, 8, 7, '0.00000', 0, '3'));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 17573, 9, 7, '0.00000', 0, '3'));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 18048, 7, 2, '1.00000', 4, ''));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 18082, 6, 3, '1.00000', 2, ''));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 18082, 9, 3, '1.00000', 6, ''));

        // Wall Items
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 23008, 0, 0, '0', 0, '2', ':w=4,8 l=0,27 r'));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 23013, 0, 0, '0', 0, '', ':w=2,10 l=2,44 l'));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 23014, 0, 0, '0', 0, '1', ':w=8,1 l=14,27 r'));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 23236, 0, 0, '0', 0, '1', ':w=6,1 l=5,31 r'));
        $roomItemModel->insert((new RoomItem())->store($this->user->id, $roomModel->insertID, 23239, 0, 0, '0', 0, '', ':w=4,7 l=4,29 l'));
    }
}