<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\contactUs;

class contactUsController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'contactUs';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new contactUs());

        $grid->column('id', __('Id'));
        $grid->column('isReadOut', __('IsReadOut'));
        $grid->column('name', __('Name'));
        $grid->column('phone', __('Phone'));
        $grid->column('image', __('Image'));
        $grid->column('description', __('Description'));
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
        $show = new Show(contactUs::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('isReadOut', __('IsReadOut'));
        $show->field('name', __('Name'));
        $show->field('phone', __('Phone'));
        $show->field('image', __('Image'));
        $show->field('description', __('Description'));
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
        $form = new Form(new contactUs());

        $form->switch('isReadOut', __('IsReadOut'));
        $form->text('name', __('Name'));
        $form->phonenumber('phone', __('Phone'))->default('+92');
        $form->image('image', __('Image'));
        $form->textarea('description', __('Description'));

        return $form;
    }
}
