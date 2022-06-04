<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;


use App\Category;
use App\Product ;
use App\Maincat;
use App\Contact;
use App\Subscribe;
use App\Website;
use App\Faqs;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductController extends Seeder
{
    public function admin(){
        return view('admin');
        }

    public function index(){

        $prod = Product::orderBy('id', 'desc')->take(3)->get();
        $special = Product::all()->random(5);
        $specoff = Product::all()->random();
        return view('index',compact('prod','special','specoff'));
    }

    public function new_product(){

        return view('admin.new.product');
        }

    public function storeproduct(Request $request){
            $prod = new Product;
            $prod->name = $request->name;
            $prod->weight = $request->weight;
            $prod->price = $request->price;
            $prod->discountprice = $request->discountprice;
            $prod->category = $request->category;
            $prod->details = $request->details;
            $prod->save();
            return redirect()->back()->with('success', 'Sucessfully Added New Product !!');
        }
        public function edit_products(Product $product){
            return view('admin.new.edit_product',compact('product'));
        }
        public function update_products(Product $product,Request $request){
            $product->name = $request->name;
            $product->weight = $request->weight;
            $product->price = $request->price;
            $product->discountprice = $request->discountprice;
            $product->category = $request->category;
            $product->details = $request->details;
            $product->save();
            return redirect()->back()->with('success', 'Sucessfully Added New Product !!');
        }

        public function storecategory(Request $request){
            $cat = new Category;
            $cat->name = $request->name;
            $cat->maincat = $request->maincat;
            $cat->save();
            return redirect()->back()->with('success', 'Sucessfully Added New Category !!');
        }
        public function new_category(){
            $maincats=Maincat::all();
            return view('admin.new.category',compact('maincats'));
            }

            public function storemaincategory(Request $request){
                $maincat = new Maincat;
                $maincat->name = $request->name;
                $maincat->save();
                return redirect()->back()->with('success', 'Sucessfully Added New Main Category !!');
            }
            public function new_maincategory(){


                return view('admin.new.maincategory');
             }

             public function contact(){
                return view('page.contact');
            }

            public function storecontact(Request $request){
                $contact = new Contact;
                $contact->name = $request->name;
                $contact->subject = $request->subject;
                $contact->email = $request->email;
                $contact->message = $request->message;
                $contact->save();
                return redirect()->back()->with('success', 'Your Message Was Sent Sucessfullt !!');
            }

            public function storesubscribes(Request $request){
                $sub = new Subscribe;
                $sub->email = $request->email;
                $sub->save();
                return redirect()->back();
            }

            public function storeswebsite(Request $request){
                $web = new Website;
                $web->webname = $request->webname;
                $web->aboutus = $request->aboutus;
                $web->webinfo = $request->webinfo;
                $web->adress = $request->adress;
                $web->mobno = $request->mobno;
                $web->phoneno = $request->phoneno;
                $web->email = $request->email;
                $web->faxno = $request->faxno;
                $web->save();
                return redirect()->back()->with('success', 'Your Website Info Were Added !!');
            }
            public function website(){

                $website = Website::all();

                return view('admin.new.website',compact('website'));
            }
            public function faqs(Request $request){
                return view('admin.new.faqs');
                }

                public function showfaqs(){
                    return view('page.faqs');
                }
                public function about(){
                    return view('page.about');
                }


            public function newfaqs(Request $request){
                $faqs = new Faqs;
                $faqs->question = $request->question;
                $faqs->answer = $request->answer;
                $faqs->save();
                return redirect()->back()->with('success', 'New Faqs Were Added !!');
            }


//----------------- Admin / View ----------------/

            public function view_products(){
                $category = Category::orderBy('id', 'ASC')->get();
                $product = Product::orderBy('id', 'ASC')->get();
                return view('admin.view.products',compact('category','product'));

            }
            public function view_categories(){
                $category = Category::orderBy('id', 'ASC')->get();
                $maincat = Maincat::orderBy('id', 'ASC')->get();
                return view('admin.view.categories',compact('category','maincat'));

            }
            public function view_maincategories(){
                $maincat = Maincat::orderBy('id', 'ASC')->get();
                return view('admin.view.maincategories',compact('maincat'));

            }
            public function view_subscribes(){
                $subscribe = Subscribe::orderBy('id', 'ASC')->get();
                return view('admin.view.subscribes',compact('subscribe'));

            }
            public function view_contacts(){
                $contact = Contact::orderBy('id', 'ASC')->get();
                return view('admin.view.contacts',compact('contact'));

            }
            public function view_faqs(){
                $faqs = Faqs::orderBy('id', 'ASC')->get();
                return view('admin.view.faqs',compact('faqs'));

            }



//------------------------------    Destroy ---------------------------//

            public function destroy($id){
                DB::table('faqs')->where('id','=',$id)->delete();
                return redirect()->back()->with('success', 'New Faqs Were Added !!');
            }
            public function destroy_con($id){
                DB::table('contacts')->where('id','=',$id)->delete();
                return redirect()->back()->with('success', 'New Faqs Were Added !!');
            }
            public function destroy_cat($id){
                DB::table('categories')->where('id','=',$id)->delete();
                return redirect()->back()->with('success', 'New Faqs Were Added !!');
            }
            public function destroy_main($id){
                DB::table('maincats')->where('id','=',$id)->delete();
                return redirect()->back()->with('success', 'New Faqs Were Added !!');
            }
            public function destroy_sub($id){
                DB::table('subscribes')->where('id','=',$id)->delete();
                return redirect()->back()->with('success', 'New Faqs Were Added !!');
            }
            public function destroy_pro($id){
                DB::table('products')->where('id','=',$id)->delete();
                return redirect()->back()->with('success', 'New Faqs Were Added !!');
            }




            public function edit($id){
                $product =  Product::findOrFail($id);
                return view('admin.edit.product',compact('product'));
            }

            public function update(Request $request ,$id){

                $input = $request->all();
                Contact::findOrFail($id)->update($input);
                return redirect('/');

            }
}

