<?php

namespace App;

//use http\Env\Request;
use App\Services\UploadPhotoService;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Lot extends Model
{
    protected $fillable = [
        'product_id',
        'delivery_id',
        'tons',
        'price',
        'port',
        'port_photo',
        'special',
    ];

    public static function getLotsByCategoryId($id)
    {
        $lotsByCategiryId = DB::table('lots')
            ->select('lots.id', 'product_id', 'category_id', 'prod.name', 'prod.photo', 'deliveries.name as delivery',
                'price', 'tons', 'categories.name as category')
            ->join('products as prod', 'product_id', '=', 'prod.id')
            ->join('categories', 'category_id', '=', 'categories.id')
            ->join('deliveries', 'delivery_id', '=', 'deliveries.id')
            ->where('category_id', '=', $id)
            ->get();
        return $lotsByCategiryId;
    }

    public static function getLots()
    {
        $lots = DB::table('lots')
            ->select('lots.id', 'product_id', 'category_id', 'prod.name', 'prod.photo', 'deliveries.name as delivery',
                'price', 'tons', 'special')
            ->join('products as prod', 'product_id', '=', 'prod.id')
            ->join('deliveries', 'delivery_id', '=', 'deliveries.id')
            ->orderBy('prod.name')
            ->get();
        return $lots;
    }

    public static function getAllLots()
    {
        $allLots = Lot::paginate(17);
        return $allLots;
    }

//    public static function getSpecialLots()
//    {
//        $lots = DB::table('lots')
//            ->select('lots.id', 'product_id', 'category_id', 'prod.name', 'prod.photo', 'deliveries.name as delivery',
//                'price', 'tons')
//            ->join('products as prod', 'product_id', '=', 'prod.id')
//            ->join('deliveries', 'delivery_id', '=', 'deliveries.id')
//            ->where('special', '=', 1)
//            ->get();
//        return $lots;
//    }

    public static function getLotById($id)
    {
        $lotById = DB::table('lots')->where('lots.id', '=', $id)
            ->select('lots.id', 'products.name as product', 'port_photo', 'tons', 'price', 'port', 'delivery_id',
                'deliveries.name as delivery', 'special', 'product_id')
            ->join('products', 'product_id', '=', 'products.id')
            ->join('deliveries', 'delivery_id', '=', 'deliveries.id')
            ->get()[0];
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

    public function product()
    {
        return $this->belongsTo('App\Product');
    }

    public static function createLot(Request $request)
    {
//        dd($request);
        DB::transaction(function () use ($request) {
            $newLot = new Lot($request->input());
            if ($request->productId === 'new') {
                $newProduct = new Product();
                $newProduct->name = $request->newProductName;
                $newProduct->category_id = $request->category;
                $productPhoto = new UploadPhotoService();
                $productPhoto->upload($request);
                $newProductPhotoName = $productPhoto->newFileName;
                $newProductPhotoPath = 'images/products/';
                $newProductPhoto = $newProductPhotoPath . $newProductPhotoName;
                $newProduct->photo = $newProductPhoto;
                $newProduct->save();

                foreach ($request->description_id as $key => $value) {
                    $newDescription = new Description();
                    $newDescription->language_id = $key;
                    $newDescription->product_id = $newProduct->id;
                    $newDescription->description = $value;
                    $newDescription->save();
                }

                $newLot->product_id = $newProduct->id;
            } else {
                $newLot->product_id = $request->productId;
            }
            $portPhoto = new UploadPhotoService();
            $portPhoto->upload($request);
            $newPortPhotoName = $portPhoto->newFileName;
            $newPortPhotoPath = 'images/ports/';
            $newPortPhoto = $newPortPhotoPath . $newPortPhotoName;
            $newLot->port_photo = $newPortPhoto;
            $newLot->save();
        });
    }

    public static function editLot()
    {

    }
}
