<?php

namespace App\Http\Requests\Employee;

use App\Models\Employee;
use App\Models\Service;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Hash;

class AddPersonnelRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'phone' => 'required|string',
            'role' => 'required|string',
        ];
    }

    public function addPersonnel()
    {
//        dd($this->all());

        $service = Service::find($this->service);

        $personnel = New Employee();

        $personnel->first_name = $this->first_name;
        $personnel->last_name = $this->last_name;
        $personnel->phone = $this->phone;
        $personnel->email = $this->email;
        $personnel->password = Hash::make($this->password);

        $service->employees()->save($personnel);

        $personnel->attachRole($this->role);

        return $personnel;
    }


    public function updatePersonnel($personnel)
    {
//        dd($this->all());

        $service = Service::find($this->service);

        $personnel->first_name = $this->first_name;
        $personnel->last_name = $this->last_name;
        $personnel->phone = $this->phone;
        $personnel->email = $this->email;

        $service->employees()->save($personnel);

        $personnel->syncRoles([$this->role]);

        return $personnel;
    }
}
