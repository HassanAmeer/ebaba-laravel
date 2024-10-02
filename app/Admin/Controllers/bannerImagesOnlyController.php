<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\bannerImagesOnly;

class bannerImagesOnlyController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'bannerImagesOnly';

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

        $grid = new Grid(new bannerImagesOnly());

        $grid->column('id', __('Id'));
        $grid->column('title', __('Title'));
        $grid->column('image', __('Image'))->image($baseUrl.'/uploads/',75,75);
        $grid->column('link', __('Link'));
        $grid->column('showInSlide', __('showInSlide'))->switch();
        $grid->column('duration', __('duration'));
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

        $show = new Show(bannerImagesOnly::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('title', __('Title'));
        $show->field('image', __('Image'))->image($baseUrl.'/uploads/',75,75);
        $show->field('link', __('Link'));
        $show->field('showInSlide', __('showInSlide'));
        $show->field('duration', __('duration'));
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
        $form = new Form(new bannerImagesOnly());

        $form->text('title', __('Title'));
        $form->image('image', __('Image'));
        $form->url('link', __('Link'));
        $form->switch('showInSlide', __('showInSlide'));
        $form->text('duration', __('duration'));

        return $form;
    }
}
