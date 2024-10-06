<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\reviewsProducts;
use \App\Models\products;

class reviewsProductsController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'reviewsProducts';

    protected $baseUrl;

    public function __construct()
    {
        $requestScheme = isset($_SERVER['REQUEST_SCHEME']) ? $_SERVER['REQUEST_SCHEME'] : 'http';
        $host = $_SERVER['HTTP_HOST'];
        $this->baseUrl = $requestScheme . '://' . $host;
    }


    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new reviewsProducts());

        $grid->column('id', __('Id'));
        $grid->column('showThis', __('ShowThis'))->switch();
        $grid->column('products_id', __('Products ID'))->display(function () {
            // Check if the product exists
            if (!$this->products) {
                return '<span>No Product Selected.</span>';
            }
        
            // If it exists, display the product details
            return <<<HTML
                <div style="margin-bottom: 10px;">
                    <a class="icon-eye" href="{$this->baseUrl}/admin/products/{$this->products->id}" style="text-decoration:none; color:green;"></a>
                    <strong style="color:grey;">Title:</strong> <span>{$this->products->title}</span>,
                    <strong style="color:grey;">Image:</strong> <img src="{$this->baseUrl}/uploads/{$this->products->image}" onerror="{$this->products->image}" alt="Product Image" style="width: 30px; height: 30px;"/>
                </div>
            HTML;
        })->color('green');
        $grid->column('userRating', __('UserRating'));
        $grid->column('userName', __('UserName'));
        $grid->column('userPhoneOrEmail', __('UserPhoneOrEmail'));
        $grid->column('userComment', __('UserComment'));
        $grid->column('userUploadedImage', __('UserUploadedImage'))->image($this->baseUrl.'/uploads/',75,75);
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

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
        $show = new Show(reviewsProducts::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('showThis', __('ShowThis'))->switch();
        $show->field('products_id', __('products_id'));
        $show->field('userRating', __('UserRating'));
        $show->field('userName', __('UserName'));
        $show->field('userPhoneOrEmail', __('UserPhoneOrEmail'));
        $show->field('userComment', __('UserComment'));
        $show->field('userUploadedImage', __('UserUploadedImage'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new reviewsProducts());

        $form->switch('showThis', __('ShowThis'));
        $form->select('products_id', 'products_id')->options(products::all()->pluck('title', 'id','image'));
        $form->number('userRating', __('UserRating'))->default(4);
        $form->text('userName', __('UserName'))->default('noman');
        $form->text('userPhoneOrEmail', __('UserPhoneOrEmail'))->default('nomi7@gmail.com');
        $form->text('userComment', __('UserComment'))->default('i bought this product by chance its high quality product its amazing to give me more interest');
        $form->image('userUploadedImage', __('UserUploadedImage'));

        return $form;
    }
}
