<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\studentModel;
use Exception;

class studentController extends Controller{
    public function viewList(){
        return view('student');
    }

    public function getData(Request $req){
        try {
            $query = studentModel::query();

            $query->where('deleted', 'n');

            if ($req->nim_filter) {
                $query->where('nim', 'like', '%' . $req->nim_filter . '%');
            }
            if ($req->nik_filter) {
                $query->where('nik', 'like', '%' . $req->nik_filter . '%');
            }
            if ($req->name_filter) {
                $query->where('name', 'like', '%' . $req->name_filter . '%');
            }
            if ($req->dob_filter) {
                $query->where('dob', 'like', '%' . $req->dob_filter . '%');
            }

            if ($req->gender_filter) {
                $query->where('gender', 'like', '%' . $req->gender_filter . '%');
            }
            if ($req->address_filter) {
                $query->where('address', 'like', '%' . $req->address_filter . '%');
            }
            if ($req->phoneNumber_filter) {
                $query->where('phone_number', 'like', '%' . $req->phoneNumber_filter . '%');
            }
            if ($req->email_filter) {
                $query->where('email', 'like', '%' . $req->email_filter . '%');
            }

            if ($req->status_filter) {
                $query->where('status', 'like', '%' . $req->status_filter . '%');
            }
            if ($req->createdAt_filter) {
                $query->where('created_at', $req->createdAt_filter);
            }
            if ($req->updatedAt_filter) {
                $query->where('updated_at', 'like', '%' . $req->updatedAt_filter . '%');
            }
            $que = $query->get();

            $data = [];
            $no = 1;

            foreach ($que as $rowData) {
                $row = [];
                $row[] = $no++;
                $row[] = $rowData->nim;
                $row[] = $rowData->nik;
                $row[] = $rowData->name;
                $row[] = $rowData->dob;
                $row[] = $rowData->gender;
                $row[] = $rowData->address;
                $row[] = $rowData->phone_number;
                $row[] = $rowData->email;
                $row[] = $rowData->status;
                $row[] = $rowData->created_at_formatted;
                $row[] = $rowData->updated_at_formatted;
                // $row[] = '<button type="button" class="btn btn-warning showData" data-id="' . $rowData->id  . '"> Edit </button>';
                // $row[] = '<button type="button" class="btn btn-danger deleteData" data-id="' . $rowData->id . '"> Delete </button>';
                $row[] = '
                            <button type="button" class="btn btn-warning btn-sm showData" data-id="' . $rowData->id  . '">Edit</button>
                            <button type="button" class="btn btn-danger btn-sm deleteData" data-id="' . $rowData->id . '">Delete</button>
                        ';
                $data[] = $row;
            }

            return response()->json([
                "draw" => 1,
                "recordsTotal" => count($data),
                "recordsFiltered" => count($data),
                "data" => $data
            ]);
        } catch (Exception $ex) {
            return response()->json([
                'code' => $ex->getCode(),
                'message' => $ex->getMessage()
            ]);
        }
    }

    public function insertData(Request $req){
        try {
            studentModel::create([
                'nim'          => $req->input('nim'),
                'nik'          => $req->input('nik'),
                'name'         => $req->input('name'),
                'dob'          => $req->input('dob'),
                'gender'       => $req->input('gender'),
                'address'      => $req->input('address'),
                'phone_number' => $req->input('phoneNumber'),
                'email'        => $req->input('email'),
                'status'       => $req->input('status'),
                'deleted'      => 'N'
            ]);

            return response()->json([
                'code' => 200,
                'message' => 'Insert Success!'
            ]);
            
        } catch (Exception $ex) {
            return response()->json([
                'code' => $ex->getCode(),
                'message' => $ex->getMessage()
            ]);
        }
    }

    public function createNim(){
        $year = date('y');

        // Hitung siswa pada tahun ini
        $count = studentModel::whereYear('created_at', date('Y'))->where('deleted', 'N')->count();
        $next = $count + 1;

        $nim = 'STD' . $year . str_pad($next, 5, '0', STR_PAD_LEFT);

        return response()->json(['nim' => $nim]);
    }

    public function checkDuplicate(Request $request){
        $field = $request->field;
        $value = $request->value;
        $id    = $request->id ?? null;

        $query = studentModel::where($field, $value)->where('deleted', 'N');

        if ($id) {
            $query->where('id', '!=', $id);
        }

        $exists = $query->exists();

        return response()->json(['exists' => $exists]);
    }

    public function getDetailData($id){
        try {
            $data = studentModel::find($id);

            return response()->json([
                'data' => $data
            ]);
        } catch (Exception $ex) {
            return response()->json([
                'code' => $ex->getCode(),
                'message' => $ex->getMessage()
            ]);
        }
    }

    public function saveChangesData(Request $req, $id){
        try {
            $nim = $req->input('nim_detail');
            $nik = $req->input('nik_detail');
            $name = $req->input('name_detail');
            $dob = $req->input('dob_detail');

            $gender = $req->input('gender_detail');
            $address = $req->input('address_detail');
            $phoneNumber = $req->input('phoneNumber_detail');
            $email = $req->input('email_detail');

            $status = $req->input('status_detail');

            $data = studentModel::findOrFail($id);
            $data->nim = $nim;
            $data->nik = $nik;
            $data->name = $name;
            $data->dob = $dob;
            $data->gender = $gender;
            $data->address = $address;
            $data->phone_number = $phoneNumber;
            $data->email = $email;
            $data->status = $status;
            $data->save();

            return response()->json([
                'code' => 200,
                'message' => 'Data updated successfully'
            ]);
        } catch (Exception $ex) {
            return response()->json([
                'code' => $ex->getCode(),
                'message' => $ex->getMessage()
            ]);
        }
    }

    public function deleteData($id){
        try {
            $data = studentModel::findOrFail($id);

            // HARD DELETE
            // $data->delete();

            // SOFT DELETE
            $data->update([
                'deleted' => 'Y'
            ]);

            return response()->json([
                'code' => 200,
                'message' => 'Data deleted successfully'
            ]);

        } catch (Exception $ex) {
            return response()->json([
                'code' => $ex->getCode(),
                'message' => $ex->getMessage()
            ]);
        }
    }

}
