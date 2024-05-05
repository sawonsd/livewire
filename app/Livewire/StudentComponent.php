<?php

namespace App\Livewire;
use Livewire\WithFileUploads;
use App\Models\Student;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class StudentComponent extends Component
{
    use WithFileUploads;

    public  $name, $phone, $password, $photo, $student_edit_id;

    public $students;

    protected $rules = [
        'name' => 'required|min:3',
        'phone' => 'required|min:3',
        'password' => 'required|min:3',
    ];

    public function updated($rules)
    {
        $this->validateOnly($rules);

    }
    public function mount()
    {
        $students = DB::table('students')->get();
        $this->students = $students;
    }

    public function studentDelete($id){

        $student = DB::table('students')->where('id',$id)->delete();
        $students = DB::table('students')->get();
        $this->students = $students;
 
    }
    public function delete(){

        $student = DB::table('students')->delete();
        $this->mount();
 
    }

   

    public function storeStudent()
    {
        //$validatedData = $this->validate();


        //Student::create($validatedData);

        // try...catch

            

            $image_name=hexdec(uniqid());
            $ext=strtolower($this->photo->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $image_url=$image_full_name;

            $img_url = $this->photo->storeAs('/uploads', $image_url,'public');

            $data = array();
            $data['name'] = $this->name;
            $data['phone'] = $this->phone;
            $data['password'] = $this->password;
            $data['photo'] = $img_url;
            $insert = DB::table('students')->insert($data);

            if($insert){
                session()->flash('message', 'New student has been added successfully');
            }else{
                session()->flash('error', 'Somthing is worng');
            }
            
    
          


    }

    public function render()
    {
        $students = DB::table('students')->get();
        return view('livewire.student-component')->layout('livewire.layouts.app');
    }
}
