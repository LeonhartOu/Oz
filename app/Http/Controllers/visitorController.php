<?php

namespace App\Http\Controllers;

use App\Models\visitorModel;
use Illuminate\Http\Request;
use Exception;

class visitorController extends Controller{
    public function viewList(){
        return view('index');
    }

    public function getData(Request $req){
        try {
            $query = visitorModel::query();
    
            // apply filters
            if ($req->idCard_filter) {
                $query->where('id_card', 'like', '%' . $req->idCard_filter . '%');
            }
            if ($req->name_filter) {
                $query->where('name', 'like', '%' . $req->name_filter . '%');
            }
            if ($req->phoneNumber_filter) {
                $query->where('phone_number', 'like', '%' . $req->phoneNumber_filter . '%');
            }
            if ($req->email_filter) {
                $query->where('email', 'like', '%' . $req->email_filter . '%');
            }

            if ($req->created_filter) {
                $query->whereDate('created_at', $req->created_filter);
            }
            if ($req->updated_filter) {
                $query->where('updated_at', 'like', '%' . $req->updated_filter . '%');
            }
            $que = $query->get();

            $data = [];
            $no = 1;
    
            foreach ($que as $rowData) {
                $row = [];
                $row[] = $no++;
                $row[] = $rowData->id_card;
                $row[] = $rowData->name;
                $row[] = $rowData->phone_number;
                $row[] = $rowData->email;
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
            visitorModel::create([
                'id_card'      => $req->input('idCard'),
                'name'         => $req->input('name'),
                'phone_number' => $req->input('phoneNumber'),
                'email'        => $req->input('email'),
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

    public function checkDuplicate(Request $request){
        $field = $request->field;
        $value = $request->value;
        $id    = $request->id ?? null;

        $query = visitorModel::where($field, $value);

        if ($id) {
            $query->where('id', '!=', $id);
        }

        $exists = $query->exists();

        return response()->json(['exists' => $exists]);
    }

    public function getDetailData($id){
        try {
            $data = visitorModel::find($id); 

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
            $idCard = $req->input('idCard_detail');
            $name = $req->input('name_detail');
            $phoneNumber = $req->input('phoneNumber_detail');
            $email = $req->input('email_detail');

            $data = visitorModel::findOrFail($id);
            $data->id_card = $idCard;
            $data->name = $name;
            $data->phone_number = $phoneNumber;
            $data->email = $email;
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
            $data = visitorModel::findOrFail($id);
            $data->delete();
        
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
