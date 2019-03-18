<?php

namespace App;

use App\Services\UploadPhotoService;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Lot extends Model
{
    protected $fillable = [
        'product_id',
        'delivery_id',
        'condition_id',
        'tons',
        'price',
        'port',
        'turkish',
        'port_photo',
        'special',
    ];

    public static function getLotsByCategoryId($id)
    {
        $productsIdByCategoryId = Product::getProductsByCategoryId($id)->pluck('id')->all();
        $lotsByCategoryId = Lot::all()
            ->where('isdeleted', '=', 0)
            ->whereIn('product_id', $productsIdByCategoryId);
//            ->sortBy('product_id');
        $lotsByCategoryId = $lotsByCategoryId->sortBy(function ($lotsByCategoryId) {
            return sprintf('%-12s%s', $lotsByCategoryId->product_id, $lotsByCategoryId->port);
        });
        return $lotsByCategoryId;
    }

    public static function getAllLots()
    {
        $allLots = Lot::where('isdeleted', '=', 0)->orderByDesc('created_at')->paginate(17);
        return $allLots;
    }

    public static function getHotOffersLots()
    {
        $hotOffersLots = Lot::all()
            ->where('special', '=', 1)
            ->where('isdeleted', '=', 0);
        return $hotOffersLots;
    }

    public static function getLotById($id)
    {
        $lotById = Lot::find($id);
        return $lotById;
    }

    public static function makeExclusiveLot($data)
    {
        $exclusiveLot = new ExclusiveLot($data);
        return $exclusiveLot;
    }

    public function delivery()
    {
        return $this->belongsTo('App\Delivery');
    }

    public function condition()
    {
        return $this->belongsTo('App\Condition');
    }

    public function product()
    {
        return $this->belongsTo('App\Product');
    }

    public static function createLot(Request $request)
    {
        DB::transaction(function () use ($request) {
            $newLot = new Lot($request->input());
            if ($request->productId === 'new') {
                $newProduct = new Product();
                $newProduct->name = $request->newProductName;
                $newProduct->category_id = $request->category;
                $productPhoto = new UploadPhotoService();
                $productPhoto->uploadProductPhoto($request);
                $newProductPhotoName = $productPhoto->newFileName;
                $newProductPhotoPath = 'images/products/';
                $newProductPhoto = $newProductPhotoPath . $newProductPhotoName;
                $newProduct->photo = $newProductPhoto;
                $newProduct->description = $request->description;
                $newProduct->save();

//                foreach ($request->description_id as $key => $value) {
//                    $newDescription = new Description();
//                    $newDescription->language_id = $key;
//                    $newDescription->product_id = $newProduct->id;
//                    $newDescription->description = $value;
//                    $newDescription->save();
//                }

                $newLot->product_id = $newProduct->id;
            } else {
                $newLot->product_id = $request->productId;
            }
            $portPhoto = new UploadPhotoService();
            $portPhoto->uploadPortPhoto($request);
            $newPortPhotoName = $portPhoto->newFileName;
            $newPortPhotoPath = 'images/ports/';
            $newPortPhoto = $newPortPhotoPath . $newPortPhotoName;
            $newLot->port_photo = $newPortPhoto;
            $newLot->save();
        });
    }

    public static function updateLot(Request $request)
    {
        DB::transaction(function () use ($request) {
            $lotToUpdate = Lot::find($request->lot_id);
            $lotToUpdate->delivery_id = $request->delivery_id;
            $lotToUpdate->condition_id = $request->condition_id;
            $lotToUpdate->tons = $request->tons;
            $lotToUpdate->price = $request->price;
            $lotToUpdate->port = $request->port;
            $lotToUpdate->turkish = $request->turkish;
            $lotToUpdate->special = $request->special;
            $productForCurrentLot = Product::find(Lot::find($request->lot_id)->product->id);
            $productForCurrentLot->name = $request->product_name;
            $productForCurrentLot->category_id = $request->category;
            $productForCurrentLot->description = $request->description;

            if (isset($request->new_product_photo)) {
                $newProductPhotoForCurrentLot = new UploadPhotoService();
                $newProductPhotoForCurrentLot->uploadProductPhoto($request);
                $photoName = $newProductPhotoForCurrentLot->newFileName;
                $photoPath = 'images/products/';
                $newPhoto = $photoPath . $photoName;
                $productForCurrentLot->photo = $newPhoto;
            }

            $productForCurrentLot->save();

//            foreach ($request->description_id as $key => $value) {
//                $descriptionForCurrentLot = Description::all()
//                    ->where('language_id', '=', $key)
//                    ->where('product_id', '=', Lot::find($request->lot_id)->product->id)->first();
//                $descriptionForCurrentLot->description = $value;
//                $descriptionForCurrentLot->save();
//            }

            if (isset($request->port_photo)) {
                $newPortPhotoForCurrentLot = new UploadPhotoService();
                $newPortPhotoForCurrentLot->uploadPortPhoto($request);
                $photoName = $newPortPhotoForCurrentLot->newFileName;
                $photoPath = 'images/ports/';
                $newPhoto = $photoPath . $photoName;
                $lotToUpdate->port_photo = $newPhoto;
            }

            $lotToUpdate->save();
        });
    }

    public static function deleteLot($id)
    {
        $lotForDelet = Lot::find($id);
        $lotForDelet->isdeleted = 1;
        $lotForDelet->save();
    }
}
