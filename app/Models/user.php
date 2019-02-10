<? php namespace application/models;
use CodeIgniter\Database\ConntectionInterface;
class user
	public $name;
    public $id;
	public $age;
	
	public $gender;
	
	public $birthday;

	
{
	protected $data= [
	
	'jack'     => ['name'=>'Jack Wong', 'id'=>'1', 'age'=>'27', 'gender'=>'Male','birthday'=>"07111992"],
    'doug'     => ['name'=>'Doug Sam', 'id'=>'2', 'age'=>'21', 'gender'=>'Male','birthday'=>"05121998"],
    'louis'     => ['name'=>'Louis Gazelt', 'id'=>'3', 'age'=>'28', 'gender'=>'Male','birthday'=>"02031991"],
    'mary'     => ['name'=>'Mary Sue', 'id'=>'4', 'age'=>'45', 'gender'=>'Female','birthday'=>"09091974"],
    'carly'     => ['name'=>'Carly Wong', 'id'=>'5', 'age'=>'18', 'gender'=>'Female','birthday'=>"07132001"],
    'james'     => ['name'=>'James Great', 'id'=>'6', 'age'=>'64', 'gender'=>'Male','birthday'=>"08231955"],
	
	];
	
	
	
	public function find($id) {
		foreach($data as $user){
			if ($user.$id == $id) return $user;
		}
	}
	
	public function findAll() {
		return $data;
	}
	
	
}