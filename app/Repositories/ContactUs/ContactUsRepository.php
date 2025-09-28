<?php

namespace App\Repositories\ContactUs;

use App\Models\Backend\ContactUs;
use App\Traits\ReturnFormatTrait;

class ContactUsRepository implements ContactUsInterface
{
    use ReturnFormatTrait;

    private $model;

    public function __construct(ContactUs $model)
    {
        $this->model = $model;
    }

    public function all(int $paginate = null, string $orderBy = 'id', string $sortBy = 'desc')
    {
        $query = $this->model::query();

        $query->orderBy($orderBy, $sortBy);

        if ($paginate !== null) {
            return  $query->paginate($paginate);
        } else {
            return $query->get();
        }
    }

    public function storeMessage($request)
    {
       
        try {

            $contact            = new $this->model;
            $contact->name      = $request->name;
            $contact->email     = $request->email;
            $contact->phone     = $request->phone;
            $contact->message   = $request->message;
            $contact->save();

            return $this->responseWithSuccess(___('alert.successfully_added'), []);

        } catch (\Throwable $th) {
            return $this->responseWithError(___('alert.something_went_wrong'), []);
        }
    }
}
