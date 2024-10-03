<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\products;
use \App\Models\categoriesmodel;

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
    protected function grid()
    {
        $requestScheme = isset($_SERVER['REQUEST_SCHEME']) ? $_SERVER['REQUEST_SCHEME'] : 'http';
        $host = $_SERVER['HTTP_HOST'];
        $baseUrl = $requestScheme . '://' . $host;
        // echo $baseUrl;
        // dd("$baseUrl");
        
        $grid = new Grid(new products());

        $grid->column('id', __('Id'));
        $grid->column('category', __('Category'));
        $grid->column('title', __('Title'));
        $grid->column('shortDesc', __('ShortDesc'));
        $grid->column('description', __('Description'));
        $grid->column('image', __('Image'))->image($baseUrl.'/uploads/',75,75);
        $grid->column('images', __('Images'))->image($baseUrl.'/uploads/',75,75);
        $grid->column('price', __('Price'));
        $grid->column('showSale', __('ShowSale'));
        $grid->column('sale', __('Sale'));
        $grid->column('showStock', __('Show stock'));
        $grid->column('stock', __('Stock'));
        $grid->column('showVariations', __('ShowVariations'));
        $grid->column('addVartiaons', __('AddVartiaons'));
        $grid->column('isSoldOut', __('IsSoldOut'));
        $grid->column('isfreeAnyItemWithThis', __('IsfreeAnyItemWithThis'));
        $grid->column('freeItem', __('FreeItem'));
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
        $show->field('category', __('Category'));
        $show->field('title', __('Title'));
        $show->field('shortDesc', __('ShortDesc'));
        $show->field('description', __('Description'));
        $show->field('image', __('Image'))->image($baseUrl.'/uploads/',75,75);
        $show->field('images', __('Images'))->image($baseUrl.'/uploads/',75,75);
        $show->field('price', __('Price'));
        $show->field('showSale', __('ShowSale'));
        $show->field('sale', __('Sale'));
        $show->field('showStock', __('Show stock'));
        $show->field('stock', __('Stock'));
        $show->field('showVariations', __('ShowVariations'));
        $show->field('addVartiaons', __('AddVartiaons'));
        $show->field('isSoldOut', __('IsSoldOut'));
        $show->field('isfreeAnyItemWithThis', __('IsfreeAnyItemWithThis'));
        $show->field('freeItem', __('FreeItem'));
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

        // $form->text('category', __('Category'));
        $form->select('category', 'Select Category')->options(categoriesmodel::all()->pluck('name', 'name'))->rules('required')->default('none');

        $form->text('title', __('Title'));
        // $form->textarea('shortDesc', __('ShortDesc'));
        $form->ckeditor('shortDesc')->options(['lang' => 'en', 'height' => 100,'contentsCss' => '/css/frontend-body-content.css']);
        $form->ckeditor('description')->options(['lang' => 'en', 'height' => 100,'contentsCss' => '/css/frontend-body-content.css']);
        $form->image('image', __('Image'))->default('https://store-in.puma.com/VendorpageTheme/Enterprise/EThemeForPuma/images/product-not-found.jpg');
        $form->multipleImage('images', __('Images'));
        // $form->text('price', __('Price'));
        $form->ckeditor('price')->options(['lang' => 'en', 'height' => 100,'contentsCss' => '/css/frontend-body-content.css']);
        $form->switch('showSale', __('ShowSale'));
        // $form->text('sale', __('Sale'));
        $form->ckeditor('sale')->options(['lang' => 'en', 'height' => 100,'contentsCss' => '/css/frontend-body-content.css']);
        $form->switch('showStock', __('Show stock'));
        // $form->text('stock', __('Stock'));
        $form->ckeditor('stock')->options(['lang' => 'en', 'height' => 100,'contentsCss' => '/css/frontend-body-content.css']);
        $form->switch('showVariations', __('ShowVariations'));
        $form->text('addVartiaons', __('AddVartiaons'));
        $form->switch('isSoldOut', __('IsSoldOut'));
        $form->switch('isfreeAnyItemWithThis', __('IsfreeAnyItemWithThis'));
        // $form->textarea('freeItem', __('FreeItem'));
        $form->ckeditor('freeItem')->options(['lang' => 'en', 'height' => 100,'contentsCss' => '/css/frontend-body-content.css']);




   
        return $form;
    }
}
