<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\ColorsVariations;
use \App\Models\products;

class ColorsVariationsController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'ColorsVariations';
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
        $grid = new Grid(new ColorsVariations());

        $grid->filter(function ($filter) {
            $filter->equal('products_id', 'products')->select(products::all()->pluck('title','id'));
        });


        $grid->column('id', __('Id'));
        $grid->column('products_id', __('ProductId'));
        $grid->column('productColorCode', __('ProductColorCode'));
        $grid->column('productImage', __('ProductImage'))->image($this->baseUrl.'/uploads/',75,75);
        $grid->column('productPrice', __('ProductPrice'));
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
        $show = new Show(ColorsVariations::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('products_id', __('ProductId'));
        $show->field('productColorCode', __('ProductColorCode'));
        $show->field('productImage', __('ProductImage'))->image($this->baseUrl.'/uploads/',75,75);
        $show->field('productPrice', __('ProductPrice'));
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
        $form = new Form(new ColorsVariations());

        // $form->number('products_id', __('ProductId'));
        $form->select('products_id', 'productsId')->options(products::all()->pluck('title', 'id','image'));
        $form->text('productColorCode', __('ProductColorCode'))->default('green');
        $form->image('productImage', __('ProductImage'));
        $form->decimal('productPrice', __('ProductPrice'))->default(50000);

        return $form;
    }
}
