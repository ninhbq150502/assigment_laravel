<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {   
        DB::table('users')->insert($this->userSeed());
        DB::table('brands')->insert($this->brandSeed());
        DB::table('products')->insert($this->productSeed());
        DB::table('promo_code')->insert($this->promoCodeSeed());
        DB::table('banners')->insert($this->bannerSeed());
        DB::table('roles')->insert($this->roleSeed());
        // for ($i=1; $i <= 10 ; $i++) { 
        //     array_push($userSeed, [
        //         'name'=>'BUI QUYNH NINH' .$i,
        //         'email'=>'ninhbqph13349'.$i.'@fpt.edu.vn',
        //         'password'=> Hash::make('123456'),
        //         'avatar'=>'',
        //         'phone_number'=>'0522419328',
        //         'address'=>'',
        //         'birth_date'=>'2002-06-15',
        //         'roles_id'=> 1,
        //         'created_at'=> date('Y-m-d H:i:s'),
        //         'updated_at'=> date('Y-m-d H:i:s')
        //     ],);
        //     array_push($brandSeed, [
        //         'brand_name'=>'brand ' . $i,
        //         'avatar'=>'',
                
        //         'created_at'=> date('Y-m-d H:i:s'),
        //         'updated_at'=> date('Y-m-d H:i:s')
        //     ],);
        //     array_push($productSeed, [
        //         'brand_id'=>rand(10),
        //         'name'=>'san pham ' .$i,
        //         'image'=> '',
        //         'price'=> rand(100000,1000000),

                
        //         'created_at'=> date('Y-m-d H:i:s'),
        //         'updated_at'=> date('Y-m-d H:i:s')
        //     ],);
        // }
        
    }

    public function userSeed(){
        $arrUser = [];
        for ($i=1; $i <= 10 ; $i++) { 
            $arrUser[] = [
                'name'=>'BUI QUYNH NINH' .$i,
                'email'=>'ninhbqph13349'.$i.'@fpt.edu.vn',
                'password'=> Hash::make('123456'),
                'avatar'=>'',
                'phone_number'=>'0522419328',
                'address'=>'',
                'birth_date'=>'2002-06-15',
                'roles_id'=> 1,
                'created_at'=> date('Y-m-d H:i:s'),
                'updated_at'=> date('Y-m-d H:i:s')
            ];
            
        }
        return $arrUser;
    }
    public function brandSeed(){
        $arrBrand = [];
        for ($i=1; $i <= 10 ; $i++) { 
            $arrBrand[] = [
                'brand_name'=>'brand ' . $i,
                'avatar'=>'',        
                'created_at'=> date('Y-m-d H:i:s'),
                'updated_at'=> date('Y-m-d H:i:s')
            ];
            
        }
        return $arrBrand;
    }
    public function productSeed(){
        $arrProduct = [];
        for ($i=1; $i <= 10 ; $i++) { 
            $arrProduct[] = [
                'brand_id'=>rand(1,10),
                'name'=>'san pham ' .$i,
                'image'=> '',
                'price'=> rand(100000,1000000),
                'size'=> 'size',
                'color'=> 'color',
                'discount'=> '',
                'details'=> '',
                'quantity'=> 1000,
                
                
                'created_at'=> date('Y-m-d H:i:s'),
                'updated_at'=> date('Y-m-d H:i:s')
            ];
            
        }
        return $arrProduct;
    }
    public function promoCodeSeed(){
        $promoCodeSeed = [];
        for ($i=1; $i <= 10 ; $i++) { 
            $promoCodeSeed[] = [
                'name'=>'discount '.$i,
                'code'=> 'DOWN'.$i,
                'number_use'=> rand(10,50),
                
                'created_at'=> date('Y-m-d H:i:s'),
                'updated_at'=> date('Y-m-d H:i:s')
            ];
            
        }
        return $promoCodeSeed;
    }
    public function bannerSeed(){
        $bannerSeed = [];
        for ($i=1; $i <= 10 ; $i++) { 
            $bannerSeed[] = [
                'title'=>'Day la tieu de '.$i,
                'image'=> 'Day la Banner '.$i,
                'date_add'=> '2022-07-23',
                
                'created_at'=> date('Y-m-d H:i:s'),
                'updated_at'=> date('Y-m-d H:i:s')
            ];
            
        }
        return $bannerSeed;
    }
    public function roleSeed(){
        $roleSeed = [];
        for ($i=1; $i <=2  ; $i++) { 
            $roleSeed[] = [
                'name'=>'role '.$i,
                
                'created_at'=> date('Y-m-d H:i:s'),
                'updated_at'=> date('Y-m-d H:i:s')
            ];
            
        }
        return $roleSeed;
    }
    public function orderSeed(){
        
    }
    public function orderDetailSeed(){
        
    }
}
