<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Orders;

class OrdersController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Orders';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Orders());

        $grid->column('id', __('Id'));
        $grid->column('productId', __('productId'))->color('green');
        $grid->column('deliverd', __('Deliverd'))->switch();
        $grid->column('isRejected', __('IsRejected'))->switch();
        $grid->column('userName', __('UserName'));
        $grid->column('userPhone', __('UserPhone'));
        $grid->column('UserAddress', __('UserAddress'));
        $grid->column('productTitle', __('ProductTitle'));
        $grid->column('productImage', __('ProductImage'))->image(75,75);
        $grid->column('productQuantity', __('ProductQuantity'));
        $grid->column('productPrice', __('ProductPrice'));
        $grid->column('sizeVariations', __('SizeVariations'));
        $grid->column('colorVariations', __('ColorVariations'))
        ->display(function ($code) {
            return <<<HTML
             <span style="background-color: {$code}; width: 20px; height: 20px; display: inline-block; border: 1px solid #ccc; margin-right: 5px;"></span> {$code}
            HTML;
        })->style('min-width:20rem;');
        $grid->column('freeItem', __('FreeItem Design'))->display(function ($code) {
            return <<<HTML
             <div style="padding: 15px; border-radius: 5px;background-color: #f9f9f9; position: relative;"><div style="max-height: 150px; overflow-y: auto;">{$code}</div></div>
            HTML;
        })->style('min-width:20rem;');

        
        $grid->column('ipAddress', __('IpAddress'));
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
        $show = new Show(Orders::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('productId', __('productId'))->color('green');
        $show->field('deliverd', __('Deliverd'));
        $show->field('isRejected', __('IsRejected'));
        $show->field('userName', __('UserName'));
        $show->field('userPhone', __('UserPhone'));
        $show->field('UserAddress', __('UserAddress'));
        $show->field('productTitle', __('ProductTitle'));
        $show->field('productImage', __('ProductImage'));
        $show->field('productQuantity', __('ProductQuantity'));
        $show->field('productPrice', __('ProductPrice'));
        $show->field('sizeVariations', __('SizeVariations'));
        $show->field('colorVariations', __('ColorVariations'));
        $show->field('freeItem', __('FreeItem Design'))->display(function ($code) {
            return <<<HTML
             <div style="padding: 15px; border-radius: 5px;background-color: #f9f9f9; position: relative;"><div style="max-height: 150px; overflow-y: auto;">{$code}</div></div>
            HTML;
        })->style('min-width:20rem;');
        $show->field('ipAddress', __('IpAddress'));
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
        $form = new Form(new Orders());

        $form->number('productId', __('productId'));
        $form->switch('deliverd', __('Deliverd'));
        $form->switch('isRejected', __('IsRejected'));
        $form->text('userName', __('UserName'));
        $form->text('userPhone', __('UserPhone'));
        $form->text('UserAddress', __('UserAddress'));
        $form->text('productTitle', __('ProductTitle'));
        $form->text('productImage', __('ProductImage'));
        $form->number('productQuantity', __('ProductQuantity'));
        $form->decimal('productPrice', __('ProductPrice'));
        $form->text('sizeVariations', __('SizeVariations'));
        $form->text('colorVariations', __('ColorVariations'));
        $form->ckeditor('freeItem')->options(['lang' => 'en', 'height' => 100, 'allowedContent' => true, 'extraAllowedContent' => 'div[*];','contentsCss' => '/css/frontend-body-content.css']);
        $form->text('ipAddress', __('IpAddress'));

        return $form;
    }
}
