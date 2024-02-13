<?php

namespace App\Http\Controllers;

use App\Helpers\EntityValueFileHelper;
use App\Helpers\FileHelper;
use App\Http\Requests\FileRequest;
use App\Http\Resources\EntityValueResource;
use App\Models\Entity;
use App\Models\EntityValue;
use App\Repositories\EntityValueRepository;
use App\Services\EntityValueService;
use App\Services\FieldTypeService;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

class FileController
{
    public function list($dir) {
        return EntityValueFileHelper::fileList($dir);
    }

    public function index(Entity $entity, string $recordId, string $field): mixed {
        $entity_table = "table_" . $entity->hash;
        $service = new EntityValueService($entity_table);
        return array_values($service->getRecord($entity, $recordId))[0][$field];
    }

    public function show(FileRequest $request, Entity $entity, string $recordId, string $field): BinaryFileResponse {
        $file = $request->input('file');
        $path = Storage::disk('public')->path($file);
        return response()->download($path, basename(EntityValueFileHelper::getOriginalName($file)));
    }

    public function destroy(FileRequest $request, Entity $entity, string $recordId, string $field): EntityValue|bool {
        $oldFile = $request->input('file');

        $result = EntityValueFileHelper::removeFileFromStorage($oldFile);

        if($result) {
            return EntityValueFileHelper::fileRecordModification($entity, $recordId, $field, $oldFile, null);
        } else {
            return $result;
        }
    }

    public function update(FileRequest $request, Entity $entity, string $recordId, string $field): false|EntityValue {
        $oldFile = $request->input('oldFile');

        $file = EntityValueFileHelper::addFileToStorage($request[$field]);
        $result = EntityValueFileHelper::removeFileFromStorage($oldFile);

        if($file && $result) {
            return EntityValueFileHelper::fileRecordModification($entity, $recordId, $field, $oldFile, $file);
        } else {
            return false;
        }
    }

    public function store_(FileRequest $request, Entity $entity, string $recordId, string $field): false|EntityValue  {
        $file = EntityValueFileHelper::addFileToStorage($request[$field]);

        if($file) {
            return EntityValueFileHelper::fileRecordModification($entity, $recordId, $field, null, $file);
        } else {
            return false;
        }
    }

    public function store(FileRequest $request): false|string  {
        $file = FileHelper::addFileToStorage($request->id, $request->folder, $request['file']);

        if($file) {
            return FileHelper::fileRecordModification($request->id, $request->folder, null, $file);
        } else {
            return false;
        }
    }

    public function storeTest(Request $request)  {
        //$file = FileHelper::addFileToStorage(1, "New", $request['file']);
        $file = FileHelper::addFileToStorage(1, "New", $request['file']);
//        if(!empty($request['image'])) {
//
//
//            //move_uploaded_file($request['image']['tmp_name'], '/test/uploaded/tmp.jpg');//.$_FILES['image']['name']);
//            echo var_dump($request['image']);
//        }


        return $file;
    }
}
