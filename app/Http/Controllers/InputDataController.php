<?php

namespace App\Http\Controllers;

use App\Http\Requests\InptutData\StoreRequest;
use App\Http\Resources\InputData\StoreResource;
use App\Models\InputData;
use Illuminate\Support\Facades\DB;

class InputDataController extends Controller
{
    public function index()
    {
        $inputData = InputData::all();

        return StoreResource::collection($inputData);
    }

    public function show($id)
    {
        $inputData = InputData::findOrFail($id);

        return new StoreResource($inputData);
    }

    public function store(StoreRequest $request)
    {
        $data = $request->validated();

        try {
            DB::beginTransaction();

            $inputData = InputData::create($data);

            DB::commit();
        } catch (\Exception $exception) {
            DB::rollBack();
            return response()->json(['error' => $exception->getMessage()]);
        }

        //return 'success';
        return new StoreResource($inputData);
    }

    public function delete($id)
    {
        $inputData = InputData::find($id);
        if ($inputData) {
            $inputData->delete();
          }

        $inputData = InputData::all();
        return StoreResource::collection($inputData);
    }

    public function update(StoreRequest $request, $id)
    {
        $data = $request->validated();
        $inputData = InputData::findOrFail($id);

        try {
            DB::beginTransaction();

            $inputData->update($data);

            DB::commit();
        } catch (\Exception $exception) {
            DB::rollBack();
            return response()->json(['error' => $exception->getMessage()]);
        }

        //return 'success';
        return new StoreResource($inputData);
    }
}
