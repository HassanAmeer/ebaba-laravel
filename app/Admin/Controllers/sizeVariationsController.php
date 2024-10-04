<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\sizeVariations;
use \App\Models\products;


class sizeVariationsController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'sizeVariations';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new sizeVariations());

        $grid->column('id', __('Id'));
        $grid->filter(function ($filter) {
            $filter->equal('products_id', 'products')->select(products::all()->pluck('title','id'));
        });
        $grid->column('products_id', __('Products id'));
        $grid->column('productSize', __('ProductSize'));
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
        $show = new Show(sizeVariations::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('products_id', __('Products id'));
        $show->field('productSize', __('ProductSize'));
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
        $form = new Form(new sizeVariations());

        // $form->number('products_id', __('Products id'));

        $form->select('products_id', 'productsId')->options(products::all()->pluck('title', 'id','image'));
        $form->text('productSize', __('ProductSize'))->default('small');
        $form->decimal('productPrice', __('ProductPrice'))->default(5000);

        return $form;
    }
}
