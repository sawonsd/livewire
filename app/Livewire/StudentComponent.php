<?php

namespace App\Livewire;
use Livewire\WithFileUploads;
use App\Models\Student;
use Exception;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class StudentComponent extends Component
{
    use WithFileUploads;

    public  $name, $phone, $password, $photo, $student_edit_id;

    public $students;

    protected $rules = [
        'name' => 'required|min:3',
        //'phone' => 'required|min:3',
        'password' => 'required|min:3',
    ];

    public function updated($rules)
    {
        $this->validateOnly($rules);

    }
    public function clearData(){
        $this->name = '';
        $this->phone = '';
        $this->password = '';
        $this->photo = '';
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

            if($this->photo !== null){
                $image_name=hexdec(uniqid());
                $ext=strtolower($this->photo->getClientOriginalExtension());
                $image_full_name=$image_name.'.'.$ext;
                $image_url=$image_full_name;
                $img_url = $this->photo->storeAs('/uploads', $image_url,'public');
            }else{
                $img_url = null;
            }


            try{
                if(empty($this->password))
                throw new Exception("If you see this, the number is 1 or below");
              }

              //catch exception
              catch(Exception $e) {
                echo 'Message: ' .$e->getMessage();
              }



            $data = array();
            $data['name'] = $this->name;
            $data['phone'] = $this->phone;
            $data['password'] = $this->password;
            $data['photo'] = $img_url;
            $insert = DB::table('students')->insert($data);
            //session()->flash('message', 'New student has been added successfully');

        if($insert ){
            $this->dispatch('swal', [
                'title' => 'Feedback Saved',
                'timer'=>3000,
                'icon'=>'success',
                'toast'=>true,
                'position'=>'top-right'
            ]);

            $this->mount();
            $this->clearData();
        }else{
            $this->dispatch('swal', [
                'title' => 'Feedback Saved',
                'timer'=>3000,
                'icon'=>'error',
                'toast'=>true,
                'position'=>'top-right'
            ]);
        }




    }

    public function render()
    {
        $students = DB::table('students')->get();
        return view('livewire.student-component')->layout('livewire.layouts.app');
    }
}