<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\products;
use \App\Models\categoriesmodel;
use \App\Models\VariationsModel;
use \App\Models\ColorsVariations;

class productsController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'products';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */

     protected $baseUrl;

     public function __construct()
     {
         $requestScheme = isset($_SERVER['REQUEST_SCHEME']) ? $_SERVER['REQUEST_SCHEME'] : 'http';
         $host = $_SERVER['HTTP_HOST'];
         $this->baseUrl = $requestScheme . '://' . $host;
     }
 

    protected function grid()
    {
        $requestScheme = isset($_SERVER['REQUEST_SCHEME']) ? $_SERVER['REQUEST_SCHEME'] : 'http';
        $host = $_SERVER['HTTP_HOST'];
        $baseUrl = $requestScheme . '://' . $host;
        // echo $baseUrl;
        // dd("$baseUrl");
        
        $grid = new Grid(new products());

        $grid->column('id', __('Id'));
        
        $grid->column('showProduct', __('showProduct'))->switch([
            'on' => ['value' => 1, 'text' => 'open', 'color' => 'primary'],
            'off' => ['value' => 2, 'text' => 'close', 'color' => 'danger'],
        ]);

        $grid->column('category', __('Category'))->color('indigo');
        $grid->column('title', __('Title'))->color('green');
        // $grid->column('shortDesc', __('ShortDesc'));
        $grid->column('shortDesc', __('ShortDesc Design'))->display(function ($code) {
            return <<<HTML
             <div style="padding: 15px; border-radius: 5px;background-color: #f9f9f9; position: relative;"><div style="max-height: 150px; overflow-y: auto;">{$code}</div></div>
            HTML;
        })->style('min-width:20rem;');
        // $grid->column('description', __('Description'));
        $grid->column('description', __('Description Design'))->display(function ($code) {
            return <<<HTML
             <div style="padding: 15px; border-radius: 5px;background-color: #f9f9f9; position: relative;"><div style="max-height: 150px; overflow-y: auto;">{$code}</div></div>
            HTML;
        })->style('min-width:20rem;');
        $grid->column('image', __('Image'))->image($baseUrl.'/uploads/',75,75);
        $grid->column('images', __('Images'))->image($baseUrl.'/uploads/',75,75);
        $grid->column('price', __('Price'))->color('green');
        // $grid->column('designPriceForDetail', __('designPriceForDetail'));
        $grid->column('designPriceForDetail', __('Price Design For Details'))->display(function ($code) {
            return <<<HTML
             <div style="padding: 15px; border-radius: 5px;background-color: #f9f9f9; position: relative;"><div style="max-height: 150px; overflow-y: auto;">{$code}</div></div>
            HTML;
        })->style('min-width:20rem;');
        $grid->column('designPriceForGridItems', __('Price Design For Grid Items'))->display(function ($code) {
            return <<<HTML
             <div style="padding: 15px; border-radius: 5px;background-color: #f9f9f9; position: relative;"><div style="max-height: 150px; overflow-y: auto;">{$code}</div></div>
            HTML;
        })->style('min-width:20rem;');
        $grid->column('showSale', __('ShowSale'))->switch();
        // $grid->column('sale', __('Sale'));
        $grid->column('sale', __('Sale Design'))->display(function ($code) {
            return <<<HTML
             <div style="padding: 15px; border-radius: 5px;background-color: #f9f9f9; position: relative;"><div style="max-height: 150px; overflow-y: auto;">{$code}</div></div>
            HTML;
        })->style('min-width:20rem;');
        $grid->column('showStock', __('Show stock'))->switch();
        // $grid->column('stock', __('Stock'));
        $grid->column('stock', __('Stock Design'))->display(function ($code) {
            return <<<HTML
             <div style="padding: 15px; border-radius: 5px;background-color: #f9f9f9; position: relative;"><div style="max-height: 150px; overflow-y: auto;">{$code}</div></div>
            HTML;
        })->style('min-width:20rem;');
        $grid->column('showVariations', __('ShowVariations'))->switch();
        $grid->column('addVartiaons', __('AddVartiaons'));
        $grid->column('isSoldOut', __('IsSoldOut'))->switch();
        $grid->column('isfreeAnyItemWithThis', __('IsfreeAnyItemWithThis'))->switch();
        // $grid->column('freeItem', __('FreeItem'));
        $grid->column('freeItem', __('FreeItem Design'))->display(function ($code) {
            return <<<HTML
             <div style="padding: 15px; border-radius: 5px;background-color: #f9f9f9; position: relative;"><div style="max-height: 150px; overflow-y: auto;">{$code}</div></div>
            HTML;
        })->style('min-width:20rem;');

        $grid->column('showtDaysLeft', __('Show Days Left'))->switch()->color('red');
        $grid->column('daysLeft', __('Days Left'))->color('red');

        $grid->column('showSizeVariations', __('showSizeVariations'))->switch()->color('grey');
        $grid->column('sizeVariationsF', 'Size Variations')->display(function () {
            if ($this->sizeVariationsF->isEmpty()) {
                return '<span>No Size variations available.</span>';
            }
            
            return $this->sizeVariationsF->map(function ($variation) {
                return <<<HTML
                       <div style="margin-bottom: 5px;">
                        <strong>Size:</strong> <span>{$variation->productSize}</span>,
                        <strong>Price:</strong> <span>{$variation->productPrice}</span>
                        <a class="icon-pen-alt text-warning" href="{$this->baseUrl}/admin/size-variations/{$variation->id}/edit" data-variationId="{$variation->id}" data-price="{$variation->productPrice}"></a>
                    </div>
                HTML;
            })->implode('');
        })->color('grey');
        $grid->column('showColorVariations', __('showColorVariations'))->switch()->color('green');
        $grid->column('colorsVariationsF', 'ColorsVariations')->display(function () {
                if ($this->colorsVariationsF->isEmpty()) {
                    return '<span>No  Color variations available.</span>';
                }
                
                return $this->colorsVariationsF->map(function ($variation) {
                    return <<<HTML
                        <div style="margin-bottom: 10px;">
                            <span style="background-color: {$variation->productColorCode}; width: 20px; height: 20px; display: inline-block; border: 1px solid #ccc; margin-right: 5px;"></span>
                            <strong>Price:</strong> <span class="variation-price" id="price-{$variation->id}">{$variation->productPrice}</span>,
                            <strong>Image:</strong> <img src="{$this->baseUrl}/uploads/{$variation->productImage}" alt="Color Image" style="width: 30px; height: 30px;"/>
                            <a class="icon-pen-alt text-warning" href="{$this->baseUrl}/admin/colors-variations/{$variation->id}/edit" data-variationId="{$variation->id}" data-price="{$variation->productPrice}"></a>
                            <!-- <a class="icon-trash-alt text-danger" href="{$this->baseUrl}/admin/colors-variations/{$variation->id}/delete" data-variationId="{$variation->id}" data-price="{$variation->productPrice}"></a> -->
                        </div>
                    HTML;
                })->implode('');
            })->color('green');


      
        $grid->column('allowReviews', __('allowReviews'))->switch();
        $grid->column('created_at', __('Created at'));

        $grid->column('updated_at', __('Updated at'));
        $grid->column('deleted_at', __('Deleted at'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $requestScheme = isset($_SERVER['REQUEST_SCHEME']) ? $_SERVER['REQUEST_SCHEME'] : 'http';
        $host = $_SERVER['HTTP_HOST'];
        $baseUrl = $requestScheme . '://' . $host;
        // echo $baseUrl;
        // dd("$baseUrl");

        $show = new Show(products::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('showProduct', __('showProduct'));
        $show->field('category', __('Category'));
        $show->field('title', __('Title'));
        $show->field('shortDesc', __('ShortDesc'));
        $show->field('description', __('Description'));
        $show->field('image', __('Image'))->image($baseUrl.'/uploads/',75,75);
        $show->field('images', __('Images'))->image($baseUrl.'/uploads/',75,75);
        $show->field('price', __('Price'));
        $show->field('designPriceForDetail', __('designPriceForDetail'));
        $show->field('designPriceForGridItems', __('designPriceForGridItems'));
        $show->field('showSale', __('ShowSale'))->switch();
        $show->field('sale', __('Sale'));
        $show->field('showStock', __('Show stock'))->switch();
        $show->field('stock', __('Stock'));
        $show->field('showVariations', __('ShowVariations'))->switch();
        $show->field('addVartiaons', __('AddVartiaons'));
        $show->field('isSoldOut', __('IsSoldOut'))->switch()->color('grey');;
        $show->field('isfreeAnyItemWithThis', __('IsfreeAnyItemWithThis'));
        $show->field('freeItem', __('FreeItem'));

        $show->field('showtDaysLeft', __('Show Days Left'))->switch()->color('red');
        $show->field('daysLeft', __('Days Left'))->color('red');

        $show->field('showSizeVariations', __('showSizeVariations'))->switch();
        $show->field('sizeVariationsF', 'Size Variations')->display(function () {
            if ($this->sizeVariationsF->isEmpty()) {
                return '<span>No Size variations available.</span>';
            }
            
            return $this->sizeVariationsF->map(function ($variation) {
                return <<<HTML
                       <div style="margin-bottom: 5px;">
                        <strong>Size:</strong> <span>{$variation->productSize}</span>,
                        <strong>Price:</strong> <span>{$variation->productPrice}</span>
                        <a class="icon-pen-alt text-warning" href="{$this->baseUrl}/admin/size-variations/{$variation->id}/edit" data-variationId="{$variation->id}" data-price="{$variation->productPrice}"></a>
                    </div>
                HTML;
            })->implode('');
        })->color('green');
        $show->field('showColorVariations', __('showColorVariations'))->switch()->color('green');
        $show->field('colorsVariationsF', 'ColorsVariations')->display(function () {
            if ($this->colorsVariationsF->isEmpty()) {
                return '<span>No Color variations available.</span>';
            }
            
            return $this->colorsVariationsF->map(function ($variation) {
                return <<<HTML
                    <div style="margin-bottom: 10px;">
                        <span style="background-color: {$variation->productColorCode}; width: 20px; height: 20px; display: inline-block; border: 1px solid #ccc; margin-right: 5px;"></span>
                        <strong>Price:</strong> <span class="variation-price" id="price-{$variation->id}">{$variation->productPrice}</span>,
                        <strong>Image:</strong> <img src="{$this->baseUrl}/uploads/{$variation->productImage}" alt="Color Image" style="width: 25px; height: 25px;"/>
                        <a class="btn btn-warning edit-price" href=".'$this->baseUrl'./admin/colors-variations/{$variation->id}/edit" data-variationId="{$variation->id}" data-price="{$variation->productPrice}">Edit Price</button>
                    </div>
                HTML;
            })->implode('');
        })->color('green');

        $show->field('allowReviews', __('allowReviews'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));
        $show->field('deleted_at', __('Deleted at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new products());

        $form->switch('showProduct', __('showProduct'));

        // $form->text('category', __('Category'));
        $form->select('category', 'Select Category')->options(categoriesmodel::all()->pluck('name', 'name'))->rules('required')->default('none');

        $form->text('title', __('Title'));
        // $form->textarea('shortDesc', __('ShortDesc'));
        $form->ckeditor('shortDesc')->options(['lang' => 'en', 'height' => 100, 'allowedContent' => true, 
        'extraAllowedContent' => 'div[*];','contentsCss' => '/css/frontend-body-content.css']);
        $form->ckeditor('description')->options(['lang' => 'en', 'height' => 100, 'allowedContent' => true, 'extraAllowedContent' => 'div[*];','contentsCss' => '/css/frontend-body-content.css']);
        $form->image('image', __('Image'))->default('https://store-in.puma.com/VendorpageTheme/Enterprise/EThemeForPuma/images/product-not-found.jpg');
        $form->multipleImage('images', __('Images'));
        $form->text('price', __('Price'));
        $form->ckeditor('designPriceForDetail')->options(['lang' => 'en', 'height' => 100, 'allowedContent' => true, 'extraAllowedContent' => 'div[*];','contentsCss' => '/css/frontend-body-content.css']);
        $form->ckeditor('designPriceForGridItems')->options(['lang' => 'en', 'height' => 100, 'allowedContent' => true, 'extraAllowedContent' => 'div[*];','contentsCss' => '/css/frontend-body-content.css']);
        $form->switch('showSale', __('ShowSale'));
        // $form->text('sale', __('Sale'));
        $form->ckeditor('sale')->options(['lang' => 'en', 'height' => 100, 'allowedContent' => true, 
        'extraAllowedContent' => 'div[*];','contentsCss' => '/css/frontend-body-content.css']);
        $form->switch('showStock', __('Show stock'));
        // $form->text('stock', __('Stock'));
        $form->ckeditor('stock')->options(['lang' => 'en', 'height' => 100, 'allowedContent' => true, 'extraAllowedContent' => 'div[*];','contentsCss' => '/css/frontend-body-content.css']);
        $form->switch('showVariations', __('ShowVariations'));
        $form->text('addVartiaons', __('AddVartiaons'));
        $form->switch('isSoldOut', __('IsSoldOut'));
        $form->switch('isfreeAnyItemWithThis', __('IsfreeAnyItemWithThis'));
        // $form->textarea('freeItem', __('FreeItem'));
        $form->ckeditor('freeItem')->options(['lang' => 'en', 'height' => 100, 'allowedContent' => true, 'extraAllowedContent' => 'div[*];','contentsCss' => '/css/frontend-body-content.css']);

        $form->switch('showtDaysLeft', __('Show Days Left'));
        $form->number('daysLeft', __('Days Left'));
        // dd($request->input('freeItem'));
        
        $form->switch('showSizeVariations', __('showSizeVariations'));
        $form->hasMany('sizeVariationsF', function (Form\NestedForm $form) {
            $form->text('productSize', 'Product Size')->rules('required');  
            $form->currency('productPrice', 'Product Price')->symbol('PKR')->rules('required|numeric');  
        });

        $form->switch('showColorVariations', __('showColorVariations'));
        $form->hasMany('colorsVariationsF', function (Form\NestedForm $form) {
            $form->color('productColorCode', 'Color Code')->rules('required');  
            $form->image('productImage', 'Image')->removable()->rules('required|image'); 
            $form->currency('productPrice', 'Price')->symbol('PKR')->rules('required|numeric');  
        });

        $form->switch('allowReviews', __('allowReviews'));

        // $form->select('variationsF', 'variationsF')->options(VariationsModel::all()->pluck('color_code', 'image'));
     
        return $form;
    }
}


 